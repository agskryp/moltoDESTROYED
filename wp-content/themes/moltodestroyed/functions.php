<?php

if( !function_exists( 'moltodestroyed_setup' ) ) {
  function moltodestroyed_setup() {
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    register_nav_menus( array(
      'main-menu' => 'Primary Menu',
      'footer'    => 'Footer Menu',
      'privacy'   => 'Privacy Menu'
    ) );
  }
}
add_action( 'after_setup_theme', 'moltodestroyed_setup' );












/**
 * Enqueue scripts and styles.
 */
function moltodestroyed_scripts() {
  $theme_version = '1.5.3.1';
  
  // CSS  
  wp_enqueue_style( 'moltodestroyed-style', get_stylesheet_uri(), array(), $theme_version );
  

  // JS  
  wp_enqueue_script( 
    'analytics-scripts',  get_template_directory_uri() . '/assets/scripts/analytics-scripts.js',
    array(), $theme_version, false
  );
  
  wp_enqueue_script( 
    'moltodestroyed-global-scripts', get_template_directory_uri() . '/assets/scripts/extra.js',
    array(), $theme_version, false 
  );
  
  if( is_page_template( array( 'page-templates/page-archive.php' ) ) ) {
    wp_enqueue_script( 
      'comic-rocket',  get_template_directory_uri() . '/assets/scripts/comic-rocket.js',
      array(), $theme_version, true
    );
  }

  if( is_singular( 'comics' ) ) {
    wp_enqueue_script(
      'moltodestroyed-pop-up-window', get_template_directory_uri() . '/assets/scripts/pop-up-window.js',
      array(), $theme_version, true 
    );
  }
}
add_action( 'wp_enqueue_scripts', 'moltodestroyed_scripts' );



// Register the script
wp_register_script( 'js_config', get_template_directory_uri() . '/js/extra.js', [ 'jQuery' ] );
 
// Localize the script with new data
$config = array( 'themeDirectory' => get_template_directory_uri() );

wp_localize_script( 'js_config', 'moltoConfig', $config );
 
// Enqueued script with localized data.
wp_enqueue_script( 'js_config' );




require get_template_directory() . '/inc/character-image-randomizer.php'; // Choose a random character image
require get_template_directory() . '/inc/post-types.php';                 // Import custom post types


require get_template_directory() . '/inc/metaboxes.php';                  // Metaboxes
require get_template_directory() . '/inc/shortcodes.php';                  // Metaboxes
require get_template_directory() . '/inc/site-options.php';                  // Metaboxes







// Best embedding of google fonts
function moltodestroyed_load_fonts() { 
?> 
  <link rel="dns-prefetch" href="https://fonts.gstatic.com"> 
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous"> 
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Bangers|Open+Sans:300,400,600,800" as="fetch" crossorigin="anonymous"> 
  <script type="text/javascript"> 
  !function(e,n,t){"use strict";var o="https://fonts.googleapis.com/css?family=Bangers|Open+Sans:300,400,600,800",r="__3perf_googleFontsStylesheet";function c(e){(n.head||n.body).appendChild(e)}function a(){var e=n.createElement("link");e.href=o,e.rel="stylesheet",c(e)}function f(e){if(!n.getElementById(r)){var t=n.createElement("style");t.id=r,c(t)}n.getElementById(r).innerHTML=e}e.FontFace&&e.FontFace.prototype.hasOwnProperty("display")?(t[r]&&f(t[r]),fetch(o).then(function(e){return e.text()}).then(function(e){return e.replace(/@font-face {/g,"@font-face{font-display:swap;")}).then(function(e){return t[r]=e}).then(f).catch(a)):a()}(window,document,localStorage); 
  </script>
<?php
}
add_action( 'wp_head', 'moltodestroyed_load_fonts' ); 




// Redirect the search page to the 404 page
function wpb_filter_query( $query, $error = true ) {
  if( is_search() ) {
    $query -> is_search = false;
    $query -> query_vars[s] = false;
    $query -> query[s] = false;
    
    if( $error == true ) {
      $query -> is_404 = true;
    }
  }
}
add_action( 'parse_query', 'wpb_filter_query' );
add_filter( 'get_search_form', create_function( '$a', "return null;" ) );



// Disable the author and category pages
function disable_unstyled_pages() {
  global $wp_query;
  
  if( is_author() || is_category() ) {
    $wp_query -> set_404();
    status_header( 404 );
  }
}
add_action( 'template_redirect', 'disable_unstyled_pages' );



// Disable the search feature
function remove_search_widget() {
  unregister_widget( 'WP_Widget_Search' );
}
add_action( 'widgets_init', 'remove_search_widget' );



// Replace the default link text for excerpts
function new_excerpt_more() {
  $continue = '... <div>';
  $continue .= '<a class="read-more pull-right" href="' . esc_url( get_permalink() ) . '">';
  $continue .= 'Continue Reading &rarr;';
  $continue .= '</a>';
  $continue .= '</div>';

  return $continue;
}
add_filter( 'excerpt_more', 'new_excerpt_more' );




// Remove WP Emoji settings
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );



// Registers an editor stylesheet for the theme.
function wpdocs_theme_add_editor_styles() {
  add_editor_style( get_stylesheet_uri() );
}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );



// Deregisters contact form 7 script unless on about page
function deregister_javascript() {
  if( !is_page( 'contact' ) ) {
    wp_deregister_script( 'contact-form-7' );
  }
}
add_action( 'wp_print_scripts', 'deregister_javascript', 100 );



// Deregisters contact form 7 stylesheet unless on about page
function deregister_stylesheet() {
  if( !is_page( 'contact' ) ) {
    wp_deregister_style( 'contact-form-7' );
  }
}
add_action( 'wp_enqueue_scripts', 'deregister_stylesheet', 20 );



// Redirect to first comic post on front page
function front_page_redirect() {
  if( is_front_page() ) {
    $latest = get_posts( array(
      'numberposts' => 1,
      'order'       => 'desc',
      'post_type'   => 'comics'
    ) );

    $latest_url = get_permalink( $latest[0] -> ID );

    wp_redirect( $latest_url );
    exit;
  }
}
add_action( 'template_redirect', 'front_page_redirect' );




// Return a class for previous/next functions
function posts_link_next_class( $format ) {
  $format = str_replace( 'href=', 'data-label="Next Comic Link" class="comic-nav-button" href=', $format );

  return $format;
}
add_filter( 'next_post_link', 'posts_link_next_class' );

function posts_link_prev_class( $format ) {
  $format = str_replace( 
    'href=', 'data-label="Previous Comic Link" class="comic-nav-button" href=', $format
  );

  return $format;
}
add_filter( 'previous_post_link', 'posts_link_prev_class' );
