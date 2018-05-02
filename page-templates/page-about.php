<?php
  /* Template Name: About Page */

  get_header();
?>

<main class="narrow-container about-page">
  <h1 class="text-center">
    About
  </h1>

  <p>
    moltoDESTROYED is a growing collection of silly and monochromatic comic strips featuring a cast of fifteen eclectic characters, all of whom are entirely fictional and do not represent any fruit, vegetable, snack, animal, party supply or person living or dead.
  </p>

  <div class="left-character pull-left">
    <?php require get_template_directory() . '/partials/random-character-image.php'; ?>
  </div>

  <p>
    All site content is written, illustrated, created, and produced by molto D. stroyed. You can get in contact with me using the form below. I'm also available on <a href="<?php echo esc_url( __( 'https://www.facebook.com/molto-DESTROYED-621021044638414/', 'moltodestroyed' ) ); ?>" target="_blank">Facebook</a> and <a href="<?php echo esc_url( __( 'https://twitter.com/moltodestroyed', 'moltodestroyed' ) ); ?>" target="_blank">Twitter</a>.
  </p>

  <div class="contact-form">
    <span class="contact-notice">NOTE: all fields are required</span>

    <?php echo do_shortcode( '[contact-form-7 id="1741" title="Contact form 1"]' ); ?>
  </div>
</main>

<?php
  get_footer();
