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
    <?php if( get_post_type() === 'post' ) : ?>
      <div class="entry-meta pull-right">
        <?php molto_post_date(); ?>
      </div>
    <?php
      endif;

      if( is_singular() ) {
        the_title( '<h1 class="entry-title blog-title">', '</h1>' );
      }

      else {
        the_title(
          '<h2 class="entry-title blog-title">
            <a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>
          </h2>'
        );
      }
    ?>
  </header>

  <div class="text-center">
    <?php
      moltodestroyed_post_thumbnail(); 

      require_once get_template_directory() . '/partials/textified-comic.php';
    ?>
  </div>

  <div class="entry-content">
    <?php
      if( is_singular() ) {
        the_content( );

        require_once get_template_directory() . '/partials/ads/bottom-of-main-area.php';
      }
    
      else {
        the_excerpt( sprintf( wp_kses(
          /* translators: %s: Name of current post. Only visible to screen readers */
          __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'moltodestroyed' ), array(
            'span' => array(
              'class' => array(),
            ),
          )
        ), get_the_title() ) );
      }

      wp_link_pages( array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'moltodestroyed' ),
        'after'  => '</div>',
      ) );
    ?>
  </div>
</article>
