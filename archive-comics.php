<?php
  /**
   * The template for displaying archive pages
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   * @package moltodestroyed
   */

  get_header(); 
?>

<div class="narrow-container">
  <div id="primary" class="content-area comic-archive text-center">
    <main id="main" class="site-main">    
      <?php if ( have_posts() ) : ?>
        <header>
          <h1>Comic Archive</h1>
        </header>

        <ul>
          <?php
            /* Start the Loop */
            while ( have_posts() ) :
              the_post(); // required to prevent looping
          ?>
            <li>
              <?php the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' ); ?>    
            </li>
          <?php endwhile; ?>
        </ul>
      <?php endif; ?> 
    </main> <?php // #main // ?>
  </div> <?php // #primary // ?>
</div> <?php // .narrow-container // ?>

<?php
  get_footer();
