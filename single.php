<?php
  /**
   * The template for displaying all single posts
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
   * @package moltodestroyed
   */

  get_header(); 
?>

<div class="narrow-container">
  <div id="primary" class="content-area">
    <main id="main" class="site-main blog-post">
      <?php
        while ( have_posts() ) :
          the_post();

          get_template_part( 'template-parts/content', get_post_type() );

          molto_blog_navigation();

          // If comments are open or we have at least one comment, load up the comment template.
          if ( comments_open() || get_comments_number() ) :
            comments_template();
          endif;

        // End of the loop.
        endwhile; 
      ?>
    </main> <?php // #main // ?>
  </div> <?php // #primary // ?>
</div> <?php // .narrow-container // ?>

<?php
  get_footer();
