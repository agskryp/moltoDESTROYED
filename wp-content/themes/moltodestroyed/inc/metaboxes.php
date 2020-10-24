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
    
    $cmb2 -> add_field( array(
      'name' => 'Comic',
      'id'   => 'comic_strip',
      'type' => 'file',
      'text' => array(
        'add_upload_file_text' => 'Add Comic'
      ),
      'query_args' => array(
        'type' => array(
          'image/gif',
          'image/jpeg',
          'image/png',
        ),
      ),
      'preview_size' => 'medium', // Image size to use when previewing in the admin.
    ) );

  $cmb2 ->  add_field( array (
    'name'    => 'Textify Comic',
    'desc'    => 'Use &lt;h3&gt; for heading, &lt;p&gt; for content, &lt;hr /&gt; for panel break.',
    'id'      => 'textify_comic',
    'type'    => 'wysiwyg',
    'options' => array(
      // 'wpautop'       => true,
      'media_buttons' => false, 
    ),
  ) );

  
}
add_action( 'cmb2_admin_init', 'comic_template_metaboxes' );