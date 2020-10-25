<?php
  /**
   * The default page template
   */

  get_header();
?>

<main class="default-page-container">
  <div class="narrow-container">
    <?php
      while ( have_posts() ) {
        the_post();
    ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
</main>

<?php
  get_footer();
