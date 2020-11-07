<?php
  /**
   * The 404 template
   */

  get_header();
?>


<main id="main" class="site-main narrow-container">  
  <section class="error-404 not-found">
    <h1 class="page-title text-center">4OH4!!</h1>

    <div class="page-content">
      <p class="text-center h3 bottom-cushion">We're Sorry, but this page doesn't exist.</p>

      <div class="left-character pull-left">
        <?php require get_template_directory() . '/partials/random-character-image.php'; ?>
      </div>

      <p>It's possible that it did exist once upon a time, and we've decided to change something to inconvience you for a moment.</p>

      <div class="right-character pull-right">
        <?php require get_template_directory() . '/partials/random-character-image.php'; ?>
      </div>

      <p>Or maybe it never <em>ever</em> existed!</p>

      <p>Perhaps it may exist one day, but not today. You could always try again tomorrow if you want, we won't stop you.</p>

      <p>In the mean time, you can <a href="<?php echo get_site_url(); ?>">return to the homepage</a>, or see if there's a reason you're seeing this page in one of the <a href="<?php echo get_site_url() . MOLTO_BLOG; ?>">blog postings</a>.</p>
    </div> 
  </section>
</main>

<?php
  get_footer();
