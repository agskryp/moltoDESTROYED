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
      while ( have_posts() ) :
        the_post();

        get_template_part( 'template-parts/content', get_post_type() );

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;

      endwhile; // End of the loop.
    ?>
  </main>
</div>

<?php
  get_footer();
