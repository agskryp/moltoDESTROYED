<?php
  /**
   * The template for displaying 404 pages (not found)
   *
   * @link https://codex.wordpress.org/Creating_an_Error_404_Page
   * @package moltodestroyed
   */

  get_header();
?>

<div class="narrow-container">
  <div id="primary" class="content-area">
    <main id="main" class="site-main">
      <section class="error-404 not-found text-center">
        <header>
          <h1 class="page-title">
            4OH4!!
          </h1>
        </header>

        <div class="page-content">
          <p>
            <?php esc_html_e( 'We\'re sorry, but this page doesn\'t exist.', 'moltodestroyed' ); ?>
          </p>
          
          <p>
            It's possible that it did exist once upon a time, and we've decided to change
            something to inconvience you for a moment. <br>
            Or maybe it never ever existed! <br>
            Perhaps it may exist one day, but today isn't that day.
            You could always try again tomorrow if you want, we won't stop you.
          </p>
          
          <p>
            In the mean time, you can always <a href="#">return to the homepage</a>,
            or see if there's an answer in one of the <a href="#">recent postings</a>.
          </p>
        </div>    
      </section> <?php // .error-404 // ?>
    </main> <?php // #main // ?>      
  </div> <?php // #primary // ?>
  
  <?php get_sidebar(); ?>
</div> <?php // .narrow-container // ?>

<?php
get_footer();
