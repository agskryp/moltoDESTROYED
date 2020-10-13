<?php
  /**
   * The template for displaying all single posts
   */

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

            echo '<span>Posted ' . get_the_date( 'M d, Y' ) . '</span>';
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
$args = wp_parse_args( $args, array(
  'prev_text'          => 
      '<span class="blog-nav-text">&larr; View previous post</span><span class="blog-title">%title</span>',
  'next_text'          => 
      '<span class="blog-nav-text">View next post &rarr;</span><span class="blog-title">%title</span>',
  'in_same_term'       => false,
  'screen_reader_text' => 'Post navigation',
  ) );

  $navigation = '';

  $previous = get_previous_post_link(
  '<div class="nav-previous">%link</div>',
  $args[ 'prev_text' ],
  $args[ 'in_same_term' ]
  );

  $next = get_next_post_link(
    '<div class="nav-next">%link</div>',
    $args[ 'next_text' ],
    $args[ 'in_same_term' ]
  );

  // Only add markup if there's somewhere to navigate to.
  if( $previous || $next ) {
    $navigation = _navigation_markup( $previous . $next, 'blog-navigation-container', $args[ 'screen_reader_text' ] );
  }

  echo $navigation;
          ?>
        </div>
      </article>

      <?php
          

        require_once get_template_directory() . '/partials/ads/bottom-of-main-area.php';

        

        // if( comments_open() || get_comments_number() ) comments_template();
      }
    ?>
  </main>
</div>

<?php
  get_footer();
