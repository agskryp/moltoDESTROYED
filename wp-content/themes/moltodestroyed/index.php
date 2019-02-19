<?php
  /**
   * The main template file
   *
   * This is the most generic template file in a WordPress theme
   * and one of the two required files for a theme (the other being style.css).
   * It is used to display a page when nothing more specific matches a query.
   * E.g., it puts together the home page when no home.php file exists.
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   * @package moltodestroyed
   */

  get_header();
?>

<div id="primary" class="content-area">
  <?php require_once get_template_directory() . '/partials/ads/top-of-main-area.php'; ?>

  <main id="main" class="site-main blog-posts-list narrow-container">
    <?php if( have_posts() ) { ?>
      <h1 class="page-title screen-reader-text">
        <?php single_post_title(); ?>
      </h1>

      <?php
        while ( have_posts() ) {
          the_post();

          get_template_part( 'template-parts/content', get_post_format() );
        }

        require_once get_template_directory() . '/partials/ads/bottom-of-main-area.php';

        molto_posts_navigation();
      }

      else {
        get_template_part( 'template-parts/content', 'none' );
      }
    ?>
  </main>
</div>

<?php
  get_footer();
