<?php
  /**
   * The blog post template
   */

  $previous = '<div></div>';  // For first post

  if( !empty( get_previous_post_link() ) ) {
    $previous = get_previous_post_link(
      '%link',

      '<span class="blog-nav-arrow">&larr;</span>' . 
      
      '<div class="blog-text-container">' .
        '<span class="nav-text">View previous post</span>' . 
        '<span class="title">%title</span>' . 
      '</div>'
    );
  }

  $next = get_next_post_link(
    '%link',     
    
    '<div class="blog-text-container text-right">' .
      '<span class="nav-text">View next post</span>' . 
      '<span class="title">%title</span>' . 
    '</div>' .

    '<span class="blog-nav-arrow">&rarr;</span>'
  );

  get_header();
?>

<div class="blog-post-container">
  <?php require_once get_template_directory() . '/partials/ads/top-of-main-area.php'; ?>

  <main class="narrow-container">
    <?php
      while( have_posts() ) {
        the_post();
    ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php 
          the_title( '<header><h1>', '</h1>' );

          echo '<span>Posted on ' . get_the_date( 'F jS, Y' ) . '</span></header>';
        ?>        

        <div class="blog-content">
          <?php 
            if( has_post_thumbnail() ) {
              echo '<div class="image-container">';
                the_post_thumbnail();

                require_once get_template_directory() . '/partials/textified-comic.php'; 
              echo '</div>';
            }
          
            echo '<div class="content-container">';
              the_content();
            echo '</div>';

            if( $previous || $next ) {
              echo _navigation_markup(
                $previous . $next,
                'blog-post-navigation-container',
                'Post Navigation'
              );
            }
          ?>
        </div>
      </article>
    <?php } ?>
  </main>

  <?php require_once get_template_directory() . '/partials/ads/bottom-of-main-area.php'; ?>
</div>

<?php
  get_footer();
