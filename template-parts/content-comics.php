<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package moltodestroyed
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
  <?php 
  
//  Conditional statement stating
//    if home page header be h2
//      else header be h1
  
  ?>
  
  
  <header class="entry-header">
    <?php the_title( '<h1 class="entry-title text-center">', '</h1>' ); ?>
  </header> <!-- .entry-header -->
  
  <div class="entry-content comic-strip text-center">
    <?php
      $image = get_field( 'comic_strip' );

      if( !empty( $image ) ): 
    ?>
      <img src="<?php echo $image['url']; ?>" alt="<?php echo the_title(); ?>" />
    
      <div class="entry-meta">
        <?php moltodestroyed_comic_posted_on(); ?>
      </div> <!-- .entry-meta -->
    <?php endif; ?>
  </div> <!-- .entry-content -->
  
    <?php 
  
//  place social sharing buttons here
  
  ?>
  
  
  <div class="comic-strip-navigation">
    <?php 
      wp_link_pages( array(
          'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'moltodestroyed' ),
          'after'  => '</div>',
      ) );
	?>
  </div> <!-- .comic-strip-navigation -->
</article> <!-- #post-<?php the_ID(); ?> -->
