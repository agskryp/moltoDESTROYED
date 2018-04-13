<?php
  /* Template Name: Front Page */

  get_header(); 
?>

<div class="narrow-container">
  <div id="primary" class="content-area">
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
        endwhile; // End of the loop.
      ?>
    </main> <?php // #main // ?>
  </div> <?php // #primary // ?>
</div> <?php // .narrow-container // ?>

<?php 
  get_footer(); 
