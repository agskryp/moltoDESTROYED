<?php
  /**
   * The template for displaying all single posts
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
   * @package moltodestroyed
   */

  get_header(); 
?>

<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-8">
      <div id="primary" class="content-area text-center">
        <main id="main" class="site-main">
          <?php
            while ( have_posts() ) :
              the_post();

              get_template_part( 'template-parts/content', get_post_type() );

              the_post_navigation();

              // If comments are open or we have at least one comment, load up the comment template.
              if ( comments_open() || get_comments_number() ) :
                  comments_template();
              endif;

            // End of the loop.
            endwhile; 
          ?>
        </main> <!-- #main -->
      </div> <!-- #primary -->    
    </div>
    
    <?php require get_template_directory() . '/partials/sidebar.php'; ?>        
  </div>
</div>

<?php
  get_footer();
