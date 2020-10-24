<?php
  /**
   * The template for displaying all single comics
   */

  $image = get_post_meta( get_the_ID(), 'comic_strip', true );

  if( !is_numeric( $image ) ) {
    $image = get_post_meta( get_the_ID(), 'comic_strip_id', true );
  }
  
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

        <div class="comic-strip text-center">
          <?php if( !empty( $image ) ) { ?>
            <div class="placeholder-image">
              <span>Loading...</span>
            </div>
            
            <?php echo wp_get_attachment_image( $image, 'full' ); ?>

            <div id="comicfin" class="entry-meta">
              <span class="posted-on">Posted on <?php molto_post_date(); ?></span>
            </div>
          <?php 
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
