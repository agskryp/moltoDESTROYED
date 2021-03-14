<?php
  /**
   * The blog page template
   */

  $older = '<div></div>';  // For first page

  if( !empty( get_next_posts_link() ) ) {
    $older = get_next_posts_link( 
      '<span class="blog-nav-arrow">&larr;</span>' . 
      '<span class="title">View older posts</span>'
    );
  }

  $newer = get_previous_posts_link(
    '<span class="title">View newer posts</span>' . 
    '<span class="blog-nav-arrow">&rarr;</span>'
  );

  get_header();

  require_once get_template_directory() . '/partials/ads/top-of-main-area.php'; 
?>

<main class="blog-page-container molto-container">
  <?php
    echo '<header>';
      single_post_title( '<h1 class="page-title">', '</h1>');
    echo '</header>';

    while( have_posts() ) {
      the_post();

      echo '<article class="' . esc_attr( implode( ' ', get_post_class() ) ) . '">';
        echo '<header>';
          the_title( '<h2><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
        echo '</header>';
          
        echo '<div class="article-content-container">';
          if( has_post_thumbnail() ) {
            echo '<a class="feature-image-container" href="' . esc_url( get_permalink() ) . '">';
              the_post_thumbnail( 'medium-large' );  
            echo '</a>';
          }

          echo '<div class="excerpt-container">';
            the_excerpt();

            if( str_word_count( $post -> post_content ) < 55 ) {
              echo '<a class="read-more" href="' . esc_url( get_permalink() ) . '">View Post &rarr;</a>';
            }
          echo '</div>';
        echo '</div>';
      echo '</article>';

      echo '<hr class="blog-page-divider" />';
    }

    if( $GLOBALS[ 'wp_query' ] -> max_num_pages > 1 ) {      
      if( $older || $newer ) echo '<nav class="blog-navigation-container">' . $older . $newer . '</nav>';
    }
  ?>
</main>

<?php
  require_once get_template_directory() . '/partials/ads/bottom-of-main-area.php';
  
  get_footer();
