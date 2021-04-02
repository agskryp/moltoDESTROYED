<?php
  /** 
   *  Template Name: Default Ads template
   */

  get_header();

  require_once get_template_directory() . '/partials/ads/top-of-main-area.php';
?>

<main class="default-page-container molto-container">
  <?php
    while ( have_posts() ) {
      the_post();

      echo '<article class="' . esc_attr( implode( ' ', get_post_class( 'content-container' ) ) ) . '">';
        echo '<header>';
          the_title( '<h1 class="molto-title">', '</h1>' );
        echo '</header>';

        if( has_post_thumbnail() ) { 
          echo '<div class="feature-image-container">';
            echo get_the_post_thumbnail(); 
          echo '</div>';
        }
        
        the_content(); 
      echo '</article>';
    }
  ?>
</main>


<?php
  require_once get_template_directory() . '/partials/ads/bottom-of-main-area.php';

  get_footer();
