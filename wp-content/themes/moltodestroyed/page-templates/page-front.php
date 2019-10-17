<?php
  /* Template Name: Front Page */

  get_header(); 
?>

<div id="primary" class="content-area">
  <?php require_once get_template_directory() . '/partials/ads/top-of-main-area.php'; ?>
  
  <main id="main" class="site-main narrow-container">
    <?php
      $wp_query = new WP_Query ( array( 
        'post_type'       => 'comics',
        'posts_per_page'  => 1 
      ) );

      while ( have_posts() ) :
        the_post();

        get_template_part( 'template-parts/content', get_post_type() );

        if ( comments_open() || get_comments_number() ) comments_template();
      endwhile;
    ?>
  </main>
</div>

<?php 
  get_footer();
