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
    <div class="col-xs-12">
      <div id="primary" class="content-area comic-archive text-center">
        <main id="main" class="site-main">    
          <?php if ( have_posts() ) : ?>
            <header>
              <h1>Comic Archive</h1>
            </header> <!-- .page-header -->

            <?php
              /* Start the Loop */
              while ( have_posts() ) : the_post(); // required to prevent looping
            ?>
              <ul>
                <li>
                  <?php
                    the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
                  ?>    
                </li>
              </ul>
            <?php endwhile; ?>
          <?php endif; ?> 
        </main> <!-- #main -->
      </div> <!-- #primary -->
    </div>

    <?php get_sidebar(); ?>
  </div>
</div>

<?php
get_footer();
