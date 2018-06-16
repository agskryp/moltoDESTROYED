<?php
  /**
   * Template part for displaying posts
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   * @package moltodestroyed
   */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php require_once get_template_directory() . '/partials/ads/top-of-main-area.php'; ?>
  
  <header>
    <?php the_title( '<h1 class="entry-title text-center comic-header">', '</h1>' ); ?>
  </header>

  <?php require get_template_directory() . '/partials/comic-navigation.php'; ?>

  <div class="entry-content comic-strip text-center">
    <?php
      $image = get_field( 'comic_strip' );

      if( !empty( $image ) ): 
    ?>
      <img src="<?php echo $image[ 'url' ]; ?>" alt="<?php echo the_title(); ?>" />

      <div id="comicfin" class="entry-meta">
        <span class="posted-on">
          Posted on <?php molto_post_date(); ?>
        </span>
      </div>
    <?php 
      endif;
    
      $textified = get_field( 'textify_comic' );
    
      if( !empty( $textified ) ):    
    ?>
      <div class="textified text-left">
        <button id="textified-toggle" class="flex-center">
          <span>View text version</span>
          
          <svg width="24" height="24" viewBox="0 0 24 24">
            <path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/>
          </svg>
        </button>
        
        <div id="textified-text" class="sr-only">
          <?php echo $textified; ?>
        </div>
      </div>
    <?php endif; ?>
  </div>

  <?php
    require_once get_template_directory() . '/partials/social-share-buttons.php';
  
    require_once get_template_directory() . '/partials/ads/bottom-of-main-area.php';

    require get_template_directory() . '/partials/comic-navigation.php';
  ?>
</article>
