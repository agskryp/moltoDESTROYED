<?php
  /**
   * The main template file
   *
   * This is the most generic template file in a WordPress theme
   * and one of the two required files for a theme (the other being style.css).
   * It is used to display a page when nothing more specific matches a query.
   * E.g., it puts together the home page when no home.php file exists.
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   * @package moltodestroyed
   */

  get_header();
?>

<div id="primary" class="content-area">
  <?php require_once get_template_directory() . '/partials/ads/top-of-main-area.php'; ?>

  <main id="main" class="site-main blog-posts-list narrow-container">
    <?php if( have_posts() ) { ?>
      <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>

      <?php
        while ( have_posts() ) {
          the_post();

          ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>  
  <header class="entry-header">
    <?php if( get_post_type() === 'post' ) : ?>
      <div class="entry-meta pull-right">
        <?php molto_post_date(); ?>
      </div>
    <?php
      endif;

      if( is_singular() ) the_title( '<h1 class="entry-title blog-title">', '</h1>' );

      else {
        the_title(
          '<h2 class="entry-title blog-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>'
        );
      }
    ?>
  </header>

  <div class="text-center">
    <?php
      moltodestroyed_post_thumbnail(); 

      // require_once get_template_directory() . '/partials/textified-comic.php';
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


          <?php
        }

        require_once get_template_directory() . '/partials/ads/bottom-of-main-area.php';

        molto_posts_navigation();
      }

      else get_template_part( 'template-parts/content', 'none' );
    ?>
  </main>
</div>

<?php
  get_footer();
