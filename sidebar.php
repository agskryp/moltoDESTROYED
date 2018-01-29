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
  
  <h2>Recent Comics</h2>
   
  <ul>
<?php
    $recent_posts = wp_get_recent_posts(array('post_type'=>'comics', 'posts_per_page' => 5 ));
    

    
    foreach( $recent_posts as $recent ){
        echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
    }
?>
</ul>
  

  
  
  <h2>Follow Us</h2>
</aside><!-- #secondary -->
