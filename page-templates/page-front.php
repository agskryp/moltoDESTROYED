<?php
  /* Template Name: Front Page */

  get_header(); 
?>

<main class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-8 text-center">
    
        <?php
      $wp_query = new WP_Query ( array( 'post_type' => 'comics', 'posts_per_page' => 1 ) );
      
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
</main>

<?php 

  get_footer(); 
