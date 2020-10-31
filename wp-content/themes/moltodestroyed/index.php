<?php
  /**
   * The blog page template
   */

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

              if( str_word_count( $post -> post_content ) <= 55 ) {
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
  
?>


<?php 




      $navigation = '';

      // Don't print empty markup if there's only one page.
      if ( $GLOBALS[ 'wp_query' ] -> max_num_pages > 1 ) {
        $args = wp_parse_args( $args, array(
          'prev_text'          => '&larr; View older posts',
          'next_text'          => 'View newer posts &rarr;',
          'screen_reader_text' => 'Posts navigation',
        ) );

        $next_link = get_previous_posts_link( $args[ 'next_text' ] );
        $prev_link = get_next_posts_link( $args[ 'prev_text' ] );

        if ( $prev_link ) {
          $navigation .= '<div class="nav-previous">' . $prev_link . '</div>';
        }

        if ( $next_link ) {
          $navigation .= '<div class="nav-next">' . $next_link . '</div>';
        }

        $navigation = _navigation_markup( $navigation, 'posts-navigation', $args[ 'screen_reader_text' ] );
      }

      echo $navigation;
    ?>
    
  </main>

  <?php require_once get_template_directory() . '/partials/ads/bottom-of-main-area.php'; ?>
</div>

<?php
  get_footer();
