<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package moltodestroyed
 */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-8 text-center">
          <?php if ( have_posts() ) : ?>
            <header class="page-header">
              <h1>Comic Archive</h1>
            </header> <!-- .page-header -->

            <?php
              /* Start the Loop */
              while ( have_posts() ) : the_post();

                /*
                 * Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
                get_template_part( 'template-parts/content-comic-archive' );

              endwhile;

            the_posts_navigation();

            else :

              get_template_part( 'template-parts/content', 'none' );

            endif;
          ?>
        </div>

        <?php require get_template_directory() . '/partials/sidebar.php'; ?>
      </div>
    </div>
  </main> <!-- #main -->
</div> <!-- #primary -->

<?php
get_footer();
