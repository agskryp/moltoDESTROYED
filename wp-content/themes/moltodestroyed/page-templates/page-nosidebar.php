<?php
  /* Template Name: No Sidebar */

  get_header(); 
?>

<div class="container">
  <div id="primary" class="content-area">
    <main id="main" class="site-main">
      <?php      
        require_once get_template_directory() . '/partials/ads/top-of-main-area.php';

        while( have_posts() ) : 
          the_post();

          the_content();

          if( comments_open() || get_comments_number() ) comments_template();
        endwhile;

        require_once get_template_directory() . '/partials/ads/bottom-of-main-area.php';
      ?>
    </main> 
  </div> 
</div>

<?php
  get_footer();
