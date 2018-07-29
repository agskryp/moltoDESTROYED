<?php
/**
 * moltodestroyed functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package moltodestroyed
 */

if ( ! function_exists( 'moltodestroyed_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function moltodestroyed_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on moltodestroyed, use a find and replace
		 * to change 'moltodestroyed' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'moltodestroyed', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'moltodestroyed' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
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
endif;
add_action( 'after_setup_theme', 'moltodestroyed_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function moltodestroyed_content_width() {
  $GLOBALS[ 'content_width' ] = apply_filters( 'moltodestroyed_content_width', 750 );
}

if ( ! isset( $content_width ) ) $content_width = 750;

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
  wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Bangers|Open+Sans:400,600' );
  wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap/bootstrap.min.css', array(), '3.3.7' );
  wp_enqueue_style( 'moltodestroyed-style', get_stylesheet_uri(), array(), THEME_VERSION_NUMBER );
  
  wp_enqueue_script( 'analytics-scripts',  get_template_directory_uri() . '/js/analytics-scripts.js', array(), THEME_VERSION_NUMBER, false );
  wp_enqueue_script( 'bootstrap-collapse',  get_template_directory_uri() . '/js/bootstrap-collapse-min.js', array(), '3.3.7', true );
  wp_enqueue_script( 'bootstrap-transitions',  get_template_directory_uri() . '/js/bootstrap-transitions-min.js', array(), '3.3.7', true );
  wp_enqueue_script( 'moltodestroyed-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
  wp_enqueue_script( 'moltodestroyed-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
  wp_enqueue_script( 'moltodestroyed-toggle-animation', get_template_directory_uri() . '/js/toggle-animation.js', array(), THEME_VERSION_NUMBER, true );
  wp_enqueue_script( 'moltodestroyed-blocked-ads', get_template_directory_uri() . '/js/blocked-js.js', array(), THEME_VERSION_NUMBER, false );
  
  if ( is_page_template( 'page-templates/page-archive.php' ) ) {
    wp_enqueue_script( 'comic-rocket',  get_template_directory_uri() . '/js/comic-rocket.js', array(), THEME_VERSION_NUMBER, true );
  }

  if ( is_singular( 'comics' ) || is_page_template( 'page-templates/page-front.php' ) ) {
    wp_enqueue_script( 'moltodestroyed-pop-up-window', get_template_directory_uri() . '/js/pop-up-window.js', array(), THEME_VERSION_NUMBER, true );
  }

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'moltodestroyed_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
  require get_template_directory() . '/inc/jetpack.php';
}



////////////////////////////////////////////////////////////////////////////////////////
//                                                                                    //
//                              Custom functions below                                //
//                                                                                    //
////////////////////////////////////////////////////////////////////////////////////////

/**
 * Redirect the search page to the 404 page
 */
function wpb_filter_query( $query, $error = true ) {
  if ( is_search() ) {
    $query -> is_search = false;
    $query -> query_vars[s] = false;
    $query -> query[s] = false;
    
    if ( $error == true ) {
      $query -> is_404 = true;
    }
  }
}
add_action( 'parse_query', 'wpb_filter_query' );
add_filter( 'get_search_form', create_function( '$a', "return null;" ) );

/**
 * Disable the author and category pages
 */
function disable_unstyled_pages() {
  global $wp_query;
  
  if ( is_author() || is_category() ) {
    $wp_query -> set_404();
    status_header( 404 );
  }
}
add_action( 'template_redirect', 'disable_unstyled_pages' );

/**
 * Disable the search feature
 */
function remove_search_widget() {
  unregister_widget( 'WP_Widget_Search' );
}
add_action( 'widgets_init', 'remove_search_widget' );

/**
 * Replace the default link text for excerpts
 */
function new_excerpt_more($more) {
  global $post;
  return '... <br> <a class="read-more pull-right" href="'. get_permalink( $post -> ID ) . '"> Continue Reading &rarr;</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

/**
 * Choose a random character image
 */
require get_template_directory() . '/inc/character-image-randomizer.php';

/**
 * Import PHP constants
 */
require get_template_directory() . '/inc/constants.php';

/**
 * Remove WP Emoji settings
 */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

/**
 * Registers an editor stylesheet for the theme.
 */
function wpdocs_theme_add_editor_styles() {
  add_editor_style( get_stylesheet_uri() );
}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );

/**
 * Deregisters contact form 7 script unless on about page
 */
function deregister_javascript() {
  if ( ! is_page( 'about' ) ) {
    wp_deregister_script( 'contact-form-7' );
  }
}
add_action( 'wp_print_scripts', 'deregister_javascript', 100 );

/**
 * Deregisters contact form 7 stylesheet unless on about page
 */
function deregister_stylesheet() {
  if ( ! is_page( 'about' ) ) {
    wp_deregister_style( 'contact-form-7' );
  }
}
add_action( 'wp_enqueue_scripts', 'deregister_stylesheet', 20 );
