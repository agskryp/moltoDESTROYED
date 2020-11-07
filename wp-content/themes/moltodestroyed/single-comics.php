<?php
  /**
   * The comic post template
   */

  $image = get_post_meta( get_the_ID(), 'comic_strip', true );

  if( !is_numeric( $image ) ) $image = get_post_meta( get_the_ID(), 'comic_strip_id', true );
  
  get_header(); 
?>

<div class="comic-post-container">
  <?php require_once get_template_directory() . '/partials/ads/top-of-main-area.php'; ?>
  
  <main class="narrow-container">
    <?php
      while( have_posts() ) {
        the_post();
    ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php
          the_title( '<header><h1 class="text-center comic-header">', '</h1></header>' ); 
          
          require get_template_directory() . '/partials/comic-navigation.php'; 
        ?>

        <div class="comic-strip-container text-center">
          <?php 
            if( !empty( $image ) ) { 
              echo '<span class="posted-on">Published on ' . get_the_date( 'F jS, Y' ) . '</span>';

              echo '<div class="placeholder-image">Loading...</div>';
            
              echo wp_get_attachment_image( $image, 'full' );              
            }
          
            require_once get_template_directory() . '/partials/textified-comic.php';
          ?>
        </div>

        <?php
          require get_template_directory() . '/partials/comic-navigation.php';

          require_once get_template_directory() . '/partials/social-share-buttons.php';
        ?>
      </article>
    <?php } ?>
  </main>
  
  <?php require_once get_template_directory() . '/partials/ads/bottom-of-main-area.php'; ?>
</div>

<?php
  get_footer();
