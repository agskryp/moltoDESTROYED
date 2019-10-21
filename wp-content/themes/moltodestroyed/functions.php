<?php
/**
 * moltodestroyed functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package moltodestroyed
 */

if( !function_exists( 'moltodestroyed_setup' ) ) {
  
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   */
  function moltodestroyed_setup() {

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /**
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

    /**
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
      'menu-1' => esc_html__( 'Primary', 'moltodestroyed' ),
      'menu-2' => esc_html__( 'Footer', 'moltodestroyed' ),
    ) );

    /**
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
      'search-form',
      'comment-form',
      'comment-list',
      'caption',
    ) );

    // Set up the WordPress core custom background feature.
    add_theme_support( 'custom-background', apply_filters( 'moltodestroyed_custom_background_args', array(
      'default-color' => 'ffffff',
      'default-image' => '',
    ) ) );

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support( 'custom-logo', array(
      'height'      => 250,
      'width'       => 250,
      'flex-width'  => true,
      'flex-height' => true,
    ) );
  }
}
add_action( 'after_setup_theme', 'moltodestroyed_setup' );



/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function moltodestroyed_content_width() {
  $GLOBALS[ 'content_width' ] = apply_filters( 'moltodestroyed_content_width', 750 );
}

if( !isset( $content_width ) ) {
  $content_width = 750;
}
add_action( 'after_setup_theme', 'moltodestroyed_content_width', 0 );



/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function moltodestroyed_widgets_init() {
  register_sidebar( array(
    'name'          => esc_html__( 'Sidebar', 'moltodestroyed' ),
    'id'            => 'sidebar-1',
    'description'   => esc_html__( 'Add widgets here.', 'moltodestroyed' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'moltodestroyed_widgets_init' );



/**
 * Enqueue scripts and styles.
 */
function moltodestroyed_scripts() {
  
  // CSS
  wp_enqueue_style( 
    'bootstrap-style', get_template_directory_uri() . '/css/bootstrap/bootstrap.min.css', array(), '3.3.7' 
  );
  
  wp_enqueue_style( 
    'moltodestroyed-style', get_stylesheet_uri(), array(), THEME_VERSION_NUMBER 
  );
  
  if( is_page_template( 'page-templates/page-contact.php' ) ) {
    wp_enqueue_style( 
      'recaptcha-style', get_template_directory_uri() . '/css/recaptcha.css', array(), THEME_VERSION_NUMBER 
    );
  }
  
  // JS
//  wp_enqueue_script( 
//    'jquery-1-12-4',  'https://code.jquery.com/jquery-1.12.4.min.js', array(), '1.12.4', false
//  );
  
  wp_enqueue_script( 
    'jquery-3-4-1',  get_template_directory_uri() . '/js/jquery-3-4-1.js', array(), '3.4.1', false
  );
  
  wp_enqueue_script( 
    'analytics-scripts',  get_template_directory_uri() . '/js/analytics-scripts.js', array(), THEME_VERSION_NUMBER, false
  );
  
  wp_enqueue_script( 
    'bootstrap-collapse',  get_template_directory_uri() . '/js/bootstrap-collapse-min.js', array(), '3.4.1', true
  );
  
  wp_enqueue_script( 
    'bootstrap-transitions',  get_template_directory_uri() . '/js/bootstrap-transitions-min.js', array(), '3.4.1', true
  );
  
  wp_enqueue_script( 
    'moltodestroyed-global-scripts', get_template_directory_uri() . '/js/extra.js', array(), THEME_VERSION_NUMBER, false 
  );
  
  wp_enqueue_script( 
    'moltodestroyed-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true 
  );
  
  wp_enqueue_script( 
    'moltodestroyed-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true 
  );
  
  if( is_page_template( array( 'page-templates/page-archive.php' ) ) ) {
    wp_enqueue_script( 
      'comic-rocket',  get_template_directory_uri() . '/js/comic-rocket.js', array(), THEME_VERSION_NUMBER, true
    );
  }

  if( is_singular( 'comics' ) || is_page_template( 'page-templates/page-front.php' ) ) {
    wp_enqueue_script(
      'moltodestroyed-pop-up-window', get_template_directory_uri() . '/js/pop-up-window.js', array(), THEME_VERSION_NUMBER, true 
    );
  }

  if( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'moltodestroyed_scripts' );



require get_template_directory() . '/inc/template-tags.php';              // Custom template tags for this theme.
require get_template_directory() . '/inc/template-functions.php';         // Functions which enhance the theme.
require get_template_directory() . '/inc/customizer.php';                 // Customizer additions.
require get_template_directory() . '/inc/character-image-randomizer.php'; // Choose a random character image
require get_template_directory() . '/inc/constants.php';                  // Import PHP constants
require get_template_directory() . '/inc/post-types.php';                 // Import custom post types







// Best embedding of google fonts
function moltodestroyed_load_fonts() { 
  ?> 
    <!-- Code snippet to speed up Google Fonts rendering: googlefonts.3perf.com --> 
    <link rel="dns-prefetch" href="https://fonts.gstatic.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous"> 
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Bangers|Open+Sans:400,600" as="fetch" crossorigin="anonymous"> 
    <script type="text/javascript"> 
    !function(e,n,t){"use strict";var o="https://fonts.googleapis.com/css?family=Bangers|Open+Sans:400,600",r="__3perf_googleFontsStylesheet";function c(e){(n.head||n.body).appendChild(e)}function a(){var e=n.createElement("link");e.href=o,e.rel="stylesheet",c(e)}function f(e){if(!n.getElementById(r)){var t=n.createElement("style");t.id=r,c(t)}n.getElementById(r).innerHTML=e}e.FontFace&&e.FontFace.prototype.hasOwnProperty("display")?(t[r]&&f(t[r]),fetch(o).then(function(e){return e.text()}).then(function(e){return e.replace(/@font-face {/g,"@font-face{font-display:swap;")}).then(function(e){return t[r]=e}).then(f).catch(a)):a()}(window,document,localStorage); 
    </script>
    <!-- End of code snippet for Google Fonts -->
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
function new_excerpt_more($more) {
  global $post;
  
  return '... <br> <a class="read-more pull-right" href="' . get_permalink( $post -> ID ) . '"> Continue Reading &rarr;</a>';
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
