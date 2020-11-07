<?php
  /**
   * The archive template
   *
   * Not currently being utilized
   */

  get_header();
?>

<main>
  <?php if( have_posts() ) { ?>
    <header>
      <?php
        the_archive_title( '<h1>', '</h1>' );
        the_archive_description( '<div>', '</div>' );
      ?>
    </header>

    <?php
      while ( have_posts() ) {
        the_post();
        the_content();
      }  
    }
  ?>
</main>

<?php
  get_footer();
