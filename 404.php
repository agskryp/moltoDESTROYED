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
      <section class="error-404 not-found">
        <h1 class="page-title text-center">
          4OH4!!
        </h1>

        <div class="page-content">
          <p class="text-center h3 bottom-cushion">
            <?php esc_html_e( 'We\'re sorry, but this page doesn\'t exist.', 'moltodestroyed' ); ?>
          </p>
          
          <div class="left-character pull-left">
            <?php require get_template_directory() . '/partials/random-character-image.php'; ?>
          </div>
          
          <p>
            It's possible that it did exist once upon a time, and we've decided to change
            something to inconvience you for a moment.
          </p>
          
          <div class="right-character pull-right">
            <?php require get_template_directory() . '/partials/random-character-image.php'; ?>
          </div>
          
          <p>
            Or maybe it never <em>ever</em> existed!
          </p>
          
          <p>
            Perhaps it may exist one day, but today isn't that day.
            You could always try again tomorrow if you want, we won't stop you.
          </p>
          
          <div class="left-character pull-left">
            <?php require get_template_directory() . '/partials/random-character-image.php'; ?>
          </div>
          
          <p>
            In the mean time, you can <a href="<?php echo get_site_url(); ?>">return to the homepage</a>,
            or see if there's a reason you're seeing this page in one of the
            <a href="<?php echo get_site_url() . MOLTO_BLOG; ?>">blog postings</a>.
          </p>
        </div> <?php // .page-content // ?>
      </section> <?php // .error-404 // ?>
    </main> <?php // #main // ?>      
  </div> <?php // #primary // ?>
</div> <?php // .narrow-container // ?>

<?php
  get_footer();
