<?php
  /* Template Name: Contact Page */

  get_header();
?>

<main class="contact-page">
  <div id="contactForm" class="contact-form narrow-container">
    <h1 class="text-center">Contact</h1>

    <div class="left-character pull-left">
      <?php require get_template_directory() . '/partials/random-character-image.php'; ?>
    </div>
    
    <p>Hiya!</p>
    
    <p>If you wish to get in contact with me, fill out the form below.  If forms aren't your thing, you can e-mail me directly @ <a href="mailto:moltodestroyed@gmail.com">moltodestroyed at gmail dot com</a>.</p>
    
    <p>If you find this 1970s style of communcation too outdated, you can send me a message through <a href="https://www.facebook.com/moltoDESTROYED/" target="_blank" rel="noopener">Facebook</a> or <a href="https://twitter.com/moltodestroyed/" target="_blank" rel="noopener">Twitter</a>.</p>    

    <span class="contact-notice">NOTE: all fields are required</span>

    <?php echo do_shortcode( '[contact-form-7 id="1741" title="Contact form 1"]' ); ?>
  </div>
</main>

<?php
  get_footer();
