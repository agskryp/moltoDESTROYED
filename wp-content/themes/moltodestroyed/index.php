<?php
  /**
   * The blog page template
   */

  $older = '<div></div>';  // For first page

  if( !empty( get_next_posts_link() ) ) {
    $older = get_next_posts_link( 
      '<span class="blog-nav-arrow">&larr;</span>' . 
  
      '<div class="blog-text-container">' .
        '<span class="title">View older posts</span>' .
      '</div>'
    );
  }

  $newer = get_previous_posts_link(
    '<div class="blog-text-container text-right">' .
      '<span class="title">View newer posts</span>' . 
    '</div>' .

    '<span class="blog-nav-arrow">&rarr;</span>'
  );

  get_header();
?>

<div class="blog-page-container">
  <?php require_once get_template_directory() . '/partials/ads/top-of-main-area.php'; ?>

  <main class="blog-posts-list narrow-container">
    <header class="blog-page-header">
      <h1 class="text-center"><?php single_post_title() ?></h1>
    </header>

    <?php      
      while ( have_posts() ) {
        the_post();
    ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>           
        <?php 
          echo '<header>';
            the_title( '<h2><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
          echo '</header>';
            
          echo '<div class="content-container">';
            if( has_post_thumbnail() ) {
              echo '<a class="feature-image-container" href="' . esc_url( get_permalink() ) . '">';
                the_post_thumbnail( 'medium-large' );  
              echo '</a>';
            }
            
            echo '<div class="excerpt-container">';
              the_excerpt();

              if( str_word_count( $post -> post_content ) < 55 ) {
                echo '<div><a class="read-more pull-right" href="' . esc_url( get_permalink() ) . '">';
                  echo 'View Post &rarr;'; 
                echo '</a></div>';
              }
            echo '</div>';
          echo '</div>';
        ?>
      </article>
    <?php
      }

      if( $GLOBALS[ 'wp_query' ] -> max_num_pages > 1 ) {      
        if( $older || $newer ) {
          echo _navigation_markup( 
            '<div>' . $older . '</div><div>' . $newer . '</div>',
            'blog-page-navigation-container',
            'Post Navigation'
          );
        }
      }
    ?>
  </main>

  <?php require_once get_template_directory() . '/partials/ads/bottom-of-main-area.php'; ?>
</div>

<?php
  get_footer();
