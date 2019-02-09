<?php
  /* Template Name: No Sidebar */

  get_header(); 
?>

<div class="container">
  <div id="primary" class="content-area">
    <main id="main" class="site-main">
      <?php      
        require_once get_template_directory() . '/partials/ads/top-of-main-area.php';

        while ( have_posts() ) : 
          the_post();

          get_template_part( 'template-parts/content', 'page' );

          // If comments are open or we have at least one comment, load up the comment template.
          if ( comments_open() || get_comments_number() ) :
            comments_template();
          endif;
        endwhile;

        require_once get_template_directory() . '/partials/ads/bottom-of-main-area.php';
      ?>
    </main> 
  </div> 
</div>

<?php
  get_footer();
