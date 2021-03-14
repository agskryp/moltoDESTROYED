<?php
  /**
   * The blog post template
   */

  $previous = '<div></div>';  // For first post

  if( !empty( get_previous_post_link() ) ) {
    $previous = get_previous_post_link(
      '%link',

      '<span class="blog-nav-arrow">&larr;</span>' . 
      
      '<div class="blog-post-text-container">' .
        '<span class="nav-text">View previous post</span>' . 
        '<span class="title">%title</span>' . 
      '</div>'
    );
  }

  $next = get_next_post_link(
    '%link',     
    
    '<div class="blog-post-text-container text-right">' .
      '<span class="nav-text">View next post</span>' . 
      '<span class="title">%title</span>' . 
    '</div>' .

    '<span class="blog-nav-arrow">&rarr;</span>'
  );

  get_header();

  require_once get_template_directory() . '/partials/ads/top-of-main-area.php'; 
?>

<main class="blog-post-container molto-container">
  <?php     
    while( have_posts() ) {
      the_post();
  
      echo '<article class="' . esc_attr( implode( ' ', get_post_class( 'content-container' ) ) ) . '">';
        echo '<header>';
          the_title( '<h1 class="page-title">', '</h1>' );

          echo '<span>Posted on ' . get_the_date( 'F jS, Y' ) . '</span>';
        echo '</header>';
      
        echo '<div class="blog-content">';
          if( has_post_thumbnail() ) {
            echo '<div class="image-container">';
              the_post_thumbnail();

              require_once get_template_directory() . '/partials/textified-comic.php'; 
            echo '</div>';
          }
        
          the_content();
        echo '</div>';
      echo '</article>';
    }

    echo '<hr class="blog-page-divider" />';
  
    if( $previous || $next ) echo '<nav class="blog-navigation-container">' . $previous . $next . '</nav>';
  ?>
</main>

<?php
  require_once get_template_directory() . '/partials/ads/bottom-of-main-area.php'; 

  get_footer();
