<?php
/**
 * Template part for displaying comic list
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package moltodestroyed
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php
      the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
    ?>      
  </header> <!-- .entry-header -->
</article> <!-- #post-<?php the_ID(); ?> -->
