<?php
  /**
   * The template for displaying all single posts
   */

  $navigation = '';
  $previous   = '<div></div>';    // For first post

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
      '<span class="nav-text">View Next post</span>' . 
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
        <header>
          <?php 
            the_title( '<h1>', '</h1>' );

            echo '<span>Posted on ' . get_the_date( 'F jS, Y' ) . '</span>';
          ?>
        </header>

        <div class="blog-content">
          <?php if( has_post_thumbnail() ) { ?>
            <div class="image-container">
              <?php
                the_post_thumbnail();

                require_once get_template_directory() . '/partials/textified-comic.php'; 
              ?>
            </div>
          <?php } ?>

          <div class="content-container">
            <?php the_content( ); ?>
          </div>

          <?php
            if( $previous || $next ) {
              echo _navigation_markup( $previous . $next, 'blog-navigation-container', 'Post Navigation' );
            }
          ?>
        </div>
      </article>
    <?php
      require_once get_template_directory() . '/partials/ads/bottom-of-main-area.php';
      
      }
    ?>
  </main>
</div>

<?php
  get_footer();
