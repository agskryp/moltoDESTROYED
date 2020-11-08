<?php
  /** 
   *  Template Name: Archive Page
   */

  $comic_posts = get_posts( array( 
    'post_type'      => 'comics',
    'posts_per_page' => -1 
  ) );

  $blog_posts = get_posts( array( 
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => -1 
  ) );

  get_header(); 
?>

<main class="archive-page-container">
  <?php require get_template_directory() . '/partials/ads/comic-rocket-promo.php'; ?>

  <div class="narrow-container content-container">
    <h1 class="molto-sr-text">Archive</h1>

    <div class="post-columns">
      <h2>Comic Strips</h2>

      <ul>
        <?php
          foreach( $comic_posts as $comic_post ) {
            echo '<li>';
              echo '<a href="' . get_permalink( $comic_post -> ID ) . '">' . 
                    $comic_post -> post_title . '</a>';
            echo '</li>';
          }
        ?>
      </ul>
    </div>

    <div class="post-columns">
      <h2>Blog Posts</h2>

      <ul>
        <?php
          foreach( $blog_posts as $blog_post ) {
            echo '<li>';
              echo '<a href="' . get_permalink( $blog -> ID )  . '">' . $blog_post -> post_title . '</a>';
            echo '</li>';
          }
        ?>
      </ul>
    </div>
  </div>
</main>

<?php 
  get_footer();
