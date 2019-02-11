<?php
  /**
   * The template for displaying all single posts
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
   * @package moltodestroyed
   */

  get_header(); 
?>

<div id="primary" class="content-area">
  <?php require_once get_template_directory() . '/partials/ads/top-of-main-area.php'; ?>
  
  <main id="main" class="site-main narrow-container">
    <?php
      while( have_posts() ) {
        the_post();

        get_template_part( 'template-parts/content', get_post_type() );

        if( comments_open() || get_comments_number() ) {
          comments_template();
        }
      }
    ?>
  </main>
</div>

<?php
  get_footer();
