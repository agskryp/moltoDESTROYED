<?php
  /* Template Name: Archive */

  get_header(); 
?>

<div id="primary" class="content-area">
  <?php require_once get_template_directory() . '/partials/ads/top-of-main-area.php'; ?>

  <main id="main" class="site-main archive-page narrow-container">
    <div class="row">
      <h1 class="sr-only">
        Archive
      </h1>

      <section class="col-xs-12 col-sm-6">
        <h2>
          Comic Strips
        </h2>

        <ul>
          <?php
          $recent_posts = wp_get_recent_posts( array( 
            'post_type'      => 'comics',
            'posts_per_page' => -1 
          ) );

          foreach( $recent_posts as $recent ) {
            require get_template_directory() . '/partials/sidebar-loop-tmp.php'; 
          }
        ?>
        </ul>
      </section>

      <section class="col-xs-12 col-sm-6">
        <h2>
          Blog Posts
        </h2>

        <ul>
          <?php
          $recent_posts = wp_get_recent_posts( array( 
            'post_type'      => 'post',
            'post_status'    => 'publish',
            'posts_per_page' => -1 
          ) );

          foreach( $recent_posts as $recent ) {
            require get_template_directory() . '/partials/sidebar-loop-tmp.php'; 
          }
        ?>
        </ul>
      </section>
    </div> <?php // .row // ?>
  </main> <?php // #main // ?>
  
  <?php // require_once get_template_directory() . '/partials/ads/bottom-of-main-area.php'; ?>
</div> <?php // #primary // ?>

<?php 
  get_footer();
