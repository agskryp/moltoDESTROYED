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
        <header class="entry-header">
          <?php the_title( '<h1>', '</h1>' ); ?>

          <div class="entry-meta">
            <?php          
            
              echo '<span class="entry-date published">Posted ' . get_the_date( 'M d, Y' ) . '</span>';
            
            ?>
          </div>
        </header>

        <div class="text-center">
          <?php
            moltodestroyed_post_thumbnail(); 

            require_once get_template_directory() . '/partials/textified-comic.php';
          ?>
        </div>

        <div class="entry-content">
          <?php     
            the_content( );

            require_once get_template_directory() . '/partials/ads/bottom-of-main-area.php';
          ?>
        </div>
      </article>

      <?php
        molto_blog_navigation();

        // if( comments_open() || get_comments_number() ) comments_template();
      }
    ?>
  </main>
</div>

<?php
  get_footer();
