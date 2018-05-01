<?php
  /**
   * Template part for displaying posts
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   * @package moltodestroyed
   */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header" style="display: flex;">
    <?php
      if ( is_singular() ) :
        the_title( '<h1 class="entry-title" style="display: inline-block; word-break: break-word; flex-grow: 2;">', '</h1>' );
      else :
        the_title( '<h2 class="entry-title" style="display: inline-block; flex-grow: 2; word-break: break-word;"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
      endif;
    ?>

    <?php  if ( get_post_type() === 'post' ) : ?>
      <div class="entry-meta pull-right" style="font-size: .75em; padding-left: 2em;">
        <?php molto_post_date(); ?>
      </div>
    <?php endif; ?>
  </header>

  <?php moltodestroyed_post_thumbnail(); ?>

  <div class="entry-content">
    <?php
      if ( is_singular() ) :
        the_content( );

      else :
        the_excerpt( sprintf( wp_kses(
            /* translators: %s: Name of current post. Only visible to screen readers */
            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'moltodestroyed' ), array(
              'span' => array(
                'class' => array(),
              ),
            )
          ), 
        get_the_title() ) );

      endif;

      wp_link_pages( array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'moltodestroyed' ),
        'after'  => '</div>',
      ) );
    ?>
  </div>
</article>
