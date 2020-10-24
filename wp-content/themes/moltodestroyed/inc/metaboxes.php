<?php

function comic_template_metaboxes() {

	$cmb2 = new_cmb2_box( array(
		'id'            => 'test_metabox',
		'title'         => 'Test Metabox',
    'object_types'  => array( 'comics' ),
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true,
  ) );
  
  $cmb2->add_field( array(
    'name'    => 'Test File',
    'desc'    => 'Upload an image or enter an URL.',
    'id'      => 'comic_strip',
    'type'    => 'file',
    // Optional:
    'options' => array(
      'url' => false, // Hide the text input for the url
    ),
    'text'    => array(
      'add_upload_file_text' => 'Add File' // Change upload button text. Default: "Add or Upload File"
    ),
    // query_args are passed to wp.media's library query.
    'query_args' => array(
      'type' => 'application/pdf', // Make library only display PDFs.
      // Or only allow gif, jpg, or png images
      // 'type' => array(
      // 	'image/gif',
      // 	'image/jpeg',
      // 	'image/png',
      // ),
    ),
    'preview_size' => 'large', // Image size to use when previewing in the admin.
  ) );
}
add_action( 'cmb2_admin_init', 'comic_template_metaboxes' );