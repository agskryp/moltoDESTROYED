<?php
  /**
   * The template for displaying all pages
   */

  get_header();
?>

<main>
  <div class="narrow-container">
    <?php
      while ( have_posts() ) {
        the_post();
    ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header text-center">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  </header>

  <?php moltodestroyed_post_thumbnail(); ?>

  <div class="entry-content">
    <?php
      the_content();

      wp_link_pages( array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'moltodestroyed' ),
        'after'  => '</div>',
      ) );
    ?>
  </div>

  <?php if( get_edit_post_link() ) : ?>
    <footer class="entry-footer">
      <?php
        edit_post_link(	sprintf( wp_kses(
          /* translators: %s: Name of current post. Only visible to screen readers */
          __( 'Edit <span class="screen-reader-text">%s</span>', 'moltodestroyed' ), array(
            'span' => array(
              'class' => array(),
            ),
          )
        ), get_the_title() ), '<span class="edit-link pull-right bottom-cushion">', '</span>' );
      ?>
    </footer>
  <?php endif; ?>
</article>



          <?php

          // if ( comments_open() || get_comments_number() ) comments_template();
      }
      ?>
      </div>
    </main><!-- #main -->

<?php
  get_footer();
