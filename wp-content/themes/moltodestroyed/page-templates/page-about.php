<?php
  /* Template Name: About Page */

  get_header();
?>

<main class="about-page">  
  <div class="narrow-container">
    <h1 class="text-center">About</h1>

    <div class="right-character pull-right">
      <?php require get_template_directory() . '/partials/random-character-image.php'; ?>
    </div>

    <p>moltoDESTROYED is a growing collection of silly and monochromatic comic strips featuring a cast of fifteen eclectic characters, all of whom are entirely fictional and do not represent any fruit, vegetable, snack, animal, party supply or person living or dead.</p>

    <div class="left-character pull-left">
      <?php require get_template_directory() . '/partials/random-character-image.php'; ?>
    </div>

    <p>All site content is created, written, illustrated, and produced by cartoonist molto D. stroyed.  Also available on <a href="<?php echo esc_url( __( 'https://www.facebook.com/molto-DESTROYED-621021044638414/', 'moltodestroyed' ) ); ?>" target="_blank" rel="noopener">Facebook</a> and <a href="<?php echo esc_url( __( 'https://twitter.com/moltodestroyed', 'moltodestroyed' ) ); ?>" target="_blank" rel="noopener">Twitter</a> for social messaging and public discourse.</p>
  </div>
</main>

<?php
  get_footer();
