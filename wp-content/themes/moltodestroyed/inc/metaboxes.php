<?php
  function shortcode_cheat_sheet() {
    $cmb2 = new_cmb2_box( array(
      'id'           => 'shortcode_cheat_sheet',
      'title'        => 'Shortcode Cheat Sheet',
      'object_types' => array( 'page', 'post', 'comic' ),
      'context'      => 'normal',
      'priority'     => 'low',
      'show_names'   => true,
      'cmb_styles'   => true,
    ) );

    $cmb2 -> add_field( array(
      'name'        => 'Randomly Generator Character',
      'type'        => 'title',
      'id'          => 'randomly_generated_character',
      'after_field' => '<p class="uk-margin-remove">[molto-character float="(value, optional)"]</p><p class="uk-margin-remove">NOTE: Image defaults to left side of container.  Give float any value to set character on the right side.</p>',
    ) );
  }
  add_action( 'cmb2_admin_init', 'shortcode_cheat_sheet' );



  function comic_template_metaboxes() {
    $cmb2 = new_cmb2_box( array(
      'id'           => 'test_metabox',
      'title'        => 'Test Metabox',
      'object_types' => array( 'comics' ),
      'context'      => 'normal',
      'priority'     => 'high',
      'show_names'   => true,
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
      'preview_size' => 'medium',
    ) );

  $cmb2 ->  add_field( array (
    'name'    => 'Textify Comic',
    'desc'    => 'Use &lt;h3&gt; for heading, &lt;p&gt; for content, &lt;hr /&gt; for panel break.',
    'id'      => 'textify_comic',
    'type'    => 'wysiwyg',
    'options' => array(
      'media_buttons' => false, 
    ),
  ) );  
}
add_action( 'cmb2_admin_init', 'comic_template_metaboxes' );
