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

<div class="col-xs-12">
  <aside id="secondary" class="widget-area"> 
    <section class="col-xs-12 col-sm-6 col-md-offset-1 col-md-5">
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
            <a href="<?php echo get_permalink( $recent[ 'ID' ] ) ?>">
              <?php echo $recent[ "post_title" ] ?>
            </a>      
          </li>
        <?php } ?>
      </ul>
    </section>

    <section class="col-xs-12 col-sm-6 col-md-5">
      <h2>Recent Posts</h2>

      <ul>
        <?php
          $recent_posts = wp_get_recent_posts( array( 
            'post_type'      => 'post',
            'post_status'    => 'publish',
            'posts_per_page' => 5 
          ) );

          foreach( $recent_posts as $recent ) {
        ?>      
          <li>
            <a href="<?php echo get_permalink( $recent[ 'ID' ] ) ?>">
              <?php echo $recent[ "post_title" ] ?>
            </a>      
          </li>
        <?php } ?>
      </ul>
    </section>
  
    <?php
      /**
       * Avoid using customize sidebar options and just hardcode what's needed
       *
       * // dynamic_sidebar( 'sidebar-1' );
       */
    ?>
    
  </aside> <!-- #secondary -->
</div>
