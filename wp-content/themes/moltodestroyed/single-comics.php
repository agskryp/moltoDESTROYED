<?php
  /**
   * The template for displaying all single comics
   */

  $image = get_post_meta( get_the_ID(), 'comic_strip', true );

  if( !is_numeric( $image ) ) $image = get_post_meta( get_the_ID(), 'comic_strip_id', true );
  
  get_header(); 
?>

<div class="comic-post-container">
  <?php require_once get_template_directory() . '/partials/ads/top-of-main-area.php'; ?>
  
  <main class="narrow-container">
    <?php
      while( have_posts() ) {
        the_post();
    ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header>
          <?php the_title( '<h1 class="text-center comic-header">', '</h1>' ); ?>
        </header>

        <?php require get_template_directory() . '/partials/comic-navigation.php'; ?>

        <div class="comic-strip-container text-center">
          <?php 
            if( !empty( $image ) ) { 
              echo '<div class="placeholder-image">Loading...</div>';
            
              echo wp_get_attachment_image( $image, 'full' ); 

              echo '<span class="posted-on">Posted on ' . get_the_date( 'F jS, Y' ) . '</span>';
            }
          
            require_once get_template_directory() . '/partials/textified-comic.php';
          ?>
        </div>

        <?php
          require_once get_template_directory() . '/partials/social-share-buttons.php';
          require get_template_directory() . '/partials/comic-navigation.php';    
        ?>
      </article>
    <?php
      }

      require_once get_template_directory() . '/partials/ads/bottom-of-main-area.php';
    ?>
  </main>
</div>

<?php
  get_footer();
