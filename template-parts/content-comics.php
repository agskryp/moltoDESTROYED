<?php
  /**
   * Template part for displaying posts
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   * @package moltodestroyed
   */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php the_title( '<h1 class="entry-title text-center">', '</h1>' ); ?>
  </header>
  
  <?php require get_template_directory() . '/partials/comic-navigation.php'; ?>

  <div class="entry-content comic-strip text-center">
    <?php
      $image = get_field( 'comic_strip' );

      if( !empty( $image ) ): 
    ?>
      <img src="<?php echo $image[ 'url' ]; ?>" alt="<?php echo the_title(); ?>" />
    
      <div class="entry-meta">
        <?php moltodestroyed_comic_posted_on(); ?>
      </div> 
    <?php endif; ?>
  </div> <?php // .entry-content // ?>
  
  <?php //  place social sharing buttons here // ?>
  
  <?php require get_template_directory() . '/partials/comic-navigation.php'; ?>
</article>
