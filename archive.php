<?php
  /**
   * The template for displaying archive pages
   *
   * NOTE:
   * Using page-archive.php as template for archive lists,
   * currently NOT using archive.php for anything on the site
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   * @package moltodestroyed
   */

  get_header();
?>

<div class="narrow-container">
  <div id="primary" class="content-area">
    <main id="main" class="site-main">
      <?php if ( have_posts() ) : ?>
        <header class="page-header text-center">
          <?php
            the_archive_title( '<h1 class="page-title">', '</h1>' );
              
            the_archive_description( '<div class="archive-description">', '</div>' );
          ?>
        </header>

        <?php
          /* Start the Loop */
          while ( have_posts() ) :
            the_post();

            /*
             * Include the Post-Format-specific template for the content.
             * If you want to override this in a child theme, then include a file
             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
             */
            get_template_part( 'template-parts/content', get_post_format() );
          endwhile;

        the_posts_navigation();

        else :
          get_template_part( 'template-parts/content', 'none' );
      
        endif;
      ?>
    </main>
  </div>

  <?php get_sidebar(); ?>      
</div>

<?php
  get_footer();
