<?php
  /** 
   *  Template Name: Default ads template
   */

  get_header();

  require_once get_template_directory() . '/partials/ads/top-of-main-area.php';
?>

<main class="default-page-container molto-container">
  <div class="">
  
      <div class=" ">
      <?php

      while( have_posts() ) {
        the_post();
    ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class( ); ?>>
        <?php
          the_title( '<header><h1 class="page-title text-center">', '</h1></header>' ); 
          
          if( has_post_thumbnail() ) { 
            echo '<div class="feature-image-container">';
              the_post_thumbnail(); 
            echo '</div>';
          }
          
          the_content(); 
        ?>        
      </article>
    <?php } ?>
    </div>
  </div>

  <?php require_once get_template_directory() . '/partials/ads/bottom-of-main-area.php'; ?>
</main>

<?php
  get_footer();
