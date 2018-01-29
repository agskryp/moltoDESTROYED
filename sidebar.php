<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package moltodestroyed
 */

  if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
  }
?>

<aside id="secondary" class="widget-area">
  <?php dynamic_sidebar( 'sidebar-1' ); ?>

  <section class="widget">
    <h2>Recent Comics</h2>

    <ul>
      <?php
        $recent_posts = wp_get_recent_posts( array( 
          'post_type'      => 'comics',
          'posts_per_page' => 5 
        ) );

        foreach( $recent_posts as $recent ) {
      ?>      
        <li>
          <a href="<?php echo get_permalink( $recent['ID'] ) ?>">
            <?php echo $recent["post_title"] ?>
          </a>      
        </li>
      <?php } ?>
    </ul>
  </section>

  <section class="widget">
    <h2>Follow Us</h2>
  </section>
</aside> <!-- #secondary -->
