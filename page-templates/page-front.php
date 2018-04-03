<?php
  /* Template Name: Front Page */

  get_header(); 
?>

<div class="narrow-container">
  <div class="row">
    <div class="col-xs-12">
      <div id="primary" class="content-area text-center">
        <main id="main" class="site-main">
          <?php
            $wp_query = new WP_Query ( array( 
              'post_type'       => 'comics',
              'posts_per_page'  => 1 
            ) );

            while ( have_posts() ) :
              the_post();

              get_template_part( 'template-parts/content', get_post_type() );

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
    
      <?php get_sidebar(); ?>     
  </div>
</div>

<?php 
  get_footer(); 
