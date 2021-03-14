<?php
  /** 
   *  Template Name: Archive template
   */

  $comic_posts = get_posts( array( 
    'post_type'      => 'comics',
    'post_status'    => 'publish',
    'posts_per_page' => -1 
  ) );

  $blog_posts = get_posts( array( 
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => -1 
  ) );

  get_header();

  require get_template_directory() . '/partials/ads/comic-rocket-promo.php'; 
?>

<main class="archive-page-container molto-container">
  <div class="content-container">
    <h1 class="molto-sr-text">Archive</h1>

    <div class="archive-column">
      <h2>Comic Strips</h2>

      <ul>
        <?php
          foreach( $comic_posts as $comic_post ) {
            $id    = $comic_post -> ID;
            $title = $comic_post -> post_title;

            echo '<li><a href="' . esc_url( get_permalink( $id ) ) . '">' . $title . '</a></li>';
          }
        ?>
      </ul>
    </div>

    <div class="archive-column">
      <h2>Blog Posts</h2>

      <ul>
        <?php
          foreach( $blog_posts as $blog_post ) {
            $id    = $blog_post -> ID;
            $title = $blog_post -> post_title;

            echo '<li><a href="' . esc_url( get_permalink( $id ) ) . '">' . $title . '</a></li>';
          }
        ?>
      </ul>
    </div>
  </div>
</main>

<?php 
  require_once get_template_directory() . '/partials/ads/bottom-of-main-area.php'; 

  get_footer();
