<?php
  /**
   * The 404 template
   */

  get_header();
?>

<div class="four04-page-container">
  <main class="narrow-container">
    <header class="molto-text-center">
      <h1>4OH4!!</h1>

      <h2>Sorry, but this page doesn't exist.</h2>
    </header>
   
    <?php 
      require get_template_directory() . '/partials/random-character-image.php'; 

      echo '<p>It\'s possible that it did exist once upon a time, and we\'ve decided to change something so that we could inconvience you for a moment.</p>';

      require get_template_directory() . '/partials/random-character-image.php';
    
      echo '<p>Or maybe this page has never existed before.</p>';

      echo '<p>Perhaps it may appear one day, but not today. ' . 
            'You could always try again tomorrow if you want thought, we won\'t stop you.</p>';

      echo '<p>In the mean time, you can <a href="' . get_site_url() . '">return to the homepage</a>, ' .
            'or see if there\'s a reason you\'re seeing this page in one of our ' .
            '<a href="' . get_permalink( get_option( 'page_for_posts' ) ) . '">blog postings</a>.</p>'; 
    ?>
  </main>
</div>

<?php
  get_footer();
