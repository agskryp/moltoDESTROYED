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
        </div>
      </article>

      <?php
        require_once get_template_directory() . '/partials/ads/bottom-of-main-area.php';

        molto_blog_navigation();

        // if( comments_open() || get_comments_number() ) comments_template();
      }
    ?>
  </main>
</div>

<?php
  get_footer();
