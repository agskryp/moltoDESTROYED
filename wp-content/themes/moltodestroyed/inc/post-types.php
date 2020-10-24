<?php

function comics_post_type() {
  $labels = array(
    'name'                  => 'Comics', 'Post Type General Name',
    'singular_name'         => 'Comic', 'Post Type Singular Name',
    'menu_name'             => 'Comics',
    'name_admin_bar'        => 'Comics',
    'archives'              => 'Comic Archives',
    'attributes'            => 'Comic Attributes',
    'parent_item_colon'     => 'Parent Comic:',
    'all_items'             => 'All Comics',
    'add_new_item'          => 'Add New Comic',
    'add_new'               => 'Add Comic',
    'new_item'              => 'New Comic',
    'edit_item'             => 'Edit Comic',
    'update_item'           => 'Update Comic',
    'view_item'             => 'View Comic',
    'view_items'            => 'View Comics',
    'search_items'          => 'Search Comic',
    'not_found'             => 'Not found',
    'not_found_in_trash'    => 'Not found in Trash',
    'featured_image'        => 'Featured Image',
    'set_featured_image'    => 'Set featured image',
    'remove_featured_image' => 'Remove featured image',
    'use_featured_image'    => 'Use as featured image',
    'insert_into_item'      => 'Insert into comic',
    'uploaded_to_this_item' => 'Uploaded to this item',
    'items_list'            => 'Items list',
    'items_list_navigation' => 'Items list navigation',
    'filter_items_list'     => 'Filter items list',
  );

  $args = array(
    'label'                 => 'Comics',
    'description'           => 'This post type is specific for moltoDESTROYED comics',
    'labels'                => $labels,
    'supports'              => array( 'title', 'thumbnail', 'revisions', 'post-formats' ),
    'taxonomies'            => array( ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 20,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'post',
    'menu_icon'             => 'dashicons-smiley',
  );

  register_post_type( 'comics', $args );
}

add_action( 'init', 'comics_post_type', 0 );
