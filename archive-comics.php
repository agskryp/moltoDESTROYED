<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package moltodestroyed
 */

get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-8 text-center">
      <div id="primary" class="content-area comic-archive">
        <main id="main" class="site-main">    
          <?php if ( have_posts() ) : ?>
            <header>
              <h1>Comic Archive</h1>
            </header> <!-- .page-header -->

            <?php
              /* Start the Loop */
              while ( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/content-comic-archive' );

              endwhile;

              the_posts_navigation();
          
            endif;
          ?> 
        </main> <!-- #main -->
      </div> <!-- #primary -->
    </div>

    <?php require get_template_directory() . '/partials/sidebar.php'; ?>
  </div>
</div>

<?php
get_footer();
