<?php
  /**
   * The comic post template
   */

  $image = get_post_meta( get_the_ID(), 'comic_strip', true );

  if( !is_numeric( $image ) ) $image = get_post_meta( get_the_ID(), 'comic_strip_id', true );
  
  get_header();

  require_once get_template_directory() . '/partials/ads/top-of-main-area.php'; 
?>

<main class="comic-post-container molto-container text-center">
  <?php
    while( have_posts() ) {
      the_post();

      echo '<article class="' . esc_attr( implode( ' ', get_post_class() ) ) . '">';
        echo '<header>';
          the_title( '<h1 class="comic-header">', '</h1>' ); 
        echo '</header>';
        
        require get_template_directory() . '/partials/comic-navigation.php'; 
      
        echo '<div class="comic-strip-container">';
          if( !empty( $image ) ) { 
            echo '<span class="posted-on">Published on ' . get_the_date( 'F jS, Y' ) . '</span>';

            echo '<div class="placeholder-image">Loading...</div>';
          
            echo wp_get_attachment_image( $image, 'full' );              
          }
        
          require_once get_template_directory() . '/partials/textified-comic.php';
        echo '</div>';
      
        require get_template_directory() . '/partials/comic-navigation.php';

        require_once get_template_directory() . '/partials/share-buttons.php';    
      echo '</article>';
    }
  ?>
</main>

<?php
  require_once get_template_directory() . '/partials/ads/bottom-of-main-area.php'; 

  get_footer();
