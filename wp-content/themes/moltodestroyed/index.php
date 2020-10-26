<?php
  /**
   * The blog page template
   */

  get_header();
?>

<div class="blog-page-container">
  <?php require_once get_template_directory() . '/partials/ads/top-of-main-area.php'; ?>

  <main class="blog-posts-list narrow-container">
    <header>
      <h1 class="text-center"><?php single_post_title() ?></h1>
    </header>

    <?php      
      while ( have_posts() ) {
        the_post();
    ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>           
        <?php 
          echo '<header>';
            the_title( '<h2><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
          echo '</header>';
            
          if( has_post_thumbnail() ) {
            echo '<div class="text-center feature-image-container">';
              echo '<a href="' . esc_url( get_permalink() ) . '" aria-hidden="true">';
                the_post_thumbnail( 'medium-large' );  
              echo '</a>';
            echo '</div>';
          }
          
          echo '<div class="entry-content">';
            the_excerpt(); 
          echo '</div>';
        ?>
      </article>
    <?php
      }
  
      molto_posts_navigation();
    ?>
  </main>

  <?php require_once get_template_directory() . '/partials/ads/bottom-of-main-area.php'; ?>
</div>

<?php
  get_footer();
