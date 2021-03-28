<?php

function moltodestroyed_theme_options_metabox() {
  $cmb_options = new_cmb2_box( array(
    'id'           => 'moltodestroyed_theme_options_metabox',
    'title'        => 'Site Options',
    'object_types' => array( 'options-page' ),
    'option_key'   => 'moltodestroyed_theme_options',
  ) );
  


  /************************************ 
   * Site Header
   ************************************/ 
  $cmb_options -> add_field( array(
    'name' => 'Site Header',
    'id'   => 'site_header',
    'type' => 'title',
  ) );

  $cmb_options -> add_field( array(
    'name'       => 'Site Banner',
    'id'         => 'header_banner_image',
    'type'       => 'file',
    'options'    => array( 'url' => false ),
    'query_args' => array(
      'type' => array( 'image/gif', 'image/jpeg', 'image/png' ),
    ),
    'preview_size' => 'small', // Image size to use when previewing in the admin.
  ) );



  /************************************ 
   * Site Footer
   ************************************/ 
  $cmb_options -> add_field( array(
    'name' => 'Site Footer',
    'id'   => 'site_footer',
    'type' => 'title',
  ) );

  $cmb_options -> add_field( array(
    'name'       => 'Footer Banner',
    'id'         => 'footer_banner_image',
    'type'       => 'file',
    'options'    => array( 'url' => false ),
    'query_args' => array(
      'type' => array( 'image/gif', 'image/jpeg', 'image/png' ),
    ),
    'preview_size' => 'small', // Image size to use when previewing in the admin.
  ) );
}
add_action( 'cmb2_admin_init', 'moltodestroyed_theme_options_metabox' );



/**
 * Wrapper function around cmb2_get_option
 *
 * @since  0.1.0
 * @param  string $key     Options array key
 * @param  mixed  $default Optional default value
 * @return mixed           Option value
 */
function moltodestroyed_theme_site_option( $key = '', $default = false ) {
  if( function_exists( 'cmb2_get_option' ) ) {
    
    // Use cmb2_get_option as it passes through some key filters.
    return cmb2_get_option( 'moltodestroyed_theme_options', $key, $default );
  }
  
  // Fallback to get_option if CMB2 is not loaded yet.
  $opts = get_option( 'moltodestroyed_theme_options', $default );
  $val  = $default;
  
  if( 'all' == $key ) $val = $opts;
  
  else if( is_array( $opts ) && array_key_exists( $key, $opts ) && false !== $opts[ $key ] ) {
    $val = $opts[ $key ];
  }
  
  return $val;
}
