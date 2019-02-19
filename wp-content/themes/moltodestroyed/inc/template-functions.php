<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package moltodestroyed
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function moltodestroyed_body_classes( $classes ) {
  if( !is_singular() ) {
    $classes[] = '';
  }

  return $classes;
}
add_filter( 'body_class', 'moltodestroyed_body_classes' );



/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function moltodestroyed_pingback_header() {
  if( is_singular() && pings_open() ) {
    echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
  }
}
add_action( 'wp_head', 'moltodestroyed_pingback_header' );
