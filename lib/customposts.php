<?php

// Register Custom Post Type
function elysian_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Services', 'Post Type General Name', 'elysian' ),
		'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'elysian' ),
		'menu_name'             => __( 'Services', 'elysian' ),
		'name_admin_bar'        => __( 'Service', 'elysian' ),
		'archives'              => __( 'Item Archives', 'elysian' ),
		'attributes'            => __( 'Item Attributes', 'elysian' ),
		'parent_item_colon'     => __( 'Parent Item:', 'elysian' ),
		'all_items'             => __( 'All Services', 'elysian' ),
		'add_new_item'          => __( 'Add New Item', 'elysian' ),
		'add_new'               => __( 'Add New', 'elysian' ),
		'new_item'              => __( 'New Item', 'elysian' ),
		'edit_item'             => __( 'Edit Item', 'elysian' ),
		'update_item'           => __( 'Update Item', 'elysian' ),
		'view_item'             => __( 'View Service', 'elysian' ),
		'view_items'            => __( 'View Services', 'elysian' ),
		'search_items'          => __( 'Search Service', 'elysian' ),
		'not_found'             => __( 'Not found', 'elysian' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'elysian' ),
		'featured_image'        => __( 'Featured Image', 'elysian' ),
		'set_featured_image'    => __( 'Set featured image', 'elysian' ),
		'remove_featured_image' => __( 'Remove featured image', 'elysian' ),
		'use_featured_image'    => __( 'Use as featured image', 'elysian' ),
		'insert_into_item'      => __( 'Insert into item', 'elysian' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'elysian' ),
		'items_list'            => __( 'Items list', 'elysian' ),
		'items_list_navigation' => __( 'Items list navigation', 'elysian' ),
		'filter_items_list'     => __( 'Filter items list', 'elysian' ),
	);
	$args = array(
		'label'                 => __( 'Service', 'elysian' ),
		'description'           => __( 'Custom Post Type\'s Description for Services', 'elysian' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'custom-fields', 'excerpt' ),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 21,
        'menu_icon'             => 'dashicons-images-alt2',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'service', $args );

}
add_action( 'init', 'elysian_custom_post_type', 0 );


?>
