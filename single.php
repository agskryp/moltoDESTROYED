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
  <main id="main" class="site-main">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-8">
          <?php
            while ( have_posts() ) : the_post();

            get_template_part( 'template-parts/content', get_post_type() );

            the_post_navigation();

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

            // End of the loop.
            endwhile; 
          ?>
        </div>
      
        <?php require get_template_directory() . '/partials/sidebar.php'; ?>        
      </div>
    </div>
  </main><!-- #main -->
</div><!-- #primary -->

<?php
  get_footer();
