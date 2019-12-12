<?php


/**
 * Register a custom post type called "book".
 *
 * @see get_post_type_labels() for label keys.
 */
function met_custom_post_types_init() {

	// Music POst Type.
	$music_labels = array(
		'name'                  => _x( 'Albums', 'Post type general name', 'metacin-bb-theme-child' ),
		'singular_name'         => _x( 'Album', 'Post type singular name', 'metacin-bb-theme-child' ),
		'menu_name'             => _x( 'Albums', 'Admin Menu text', 'metacin-bb-theme-child' ),
		'name_admin_bar'        => _x( 'Album', 'Add New on Toolbar', 'metacin-bb-theme-child' ),
		'add_new'               => __( 'Add New', 'metacin-bb-theme-child' ),
		'add_new_item'          => __( 'Add New Album', 'metacin-bb-theme-child' ),
		'new_item'              => __( 'New Album', 'metacin-bb-theme-child' ),
		'edit_item'             => __( 'Edit Album', 'metacin-bb-theme-child' ),
		'view_item'             => __( 'View Album', 'metacin-bb-theme-child' ),
		'all_items'             => __( 'All Albums', 'metacin-bb-theme-child' ),
		'search_items'          => __( 'Search Albums', 'metacin-bb-theme-child' ),
		'parent_item_colon'     => __( 'Parent Albums:', 'metacin-bb-theme-child' ),
		'not_found'             => __( 'No Albums found.', 'metacin-bb-theme-child' ),
		'not_found_in_trash'    => __( 'No Albums found in Trash.', 'metacin-bb-theme-child' ),
		'featured_image'        => _x( 'Album Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'metacin-bb-theme-child' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'metacin-bb-theme-child' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'metacin-bb-theme-child' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'metacin-bb-theme-child' ),
		'archives'              => _x( 'Album archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'metacin-bb-theme-child' ),
		'insert_into_item'      => _x( 'Insert into Album', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'metacin-bb-theme-child' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Album', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'metacin-bb-theme-child' ),
		'filter_items_list'     => _x( 'Filter Albums list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'metacin-bb-theme-child' ),
		'items_list_navigation' => _x( 'Albums list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'metacin-bb-theme-child' ),
		'items_list'            => _x( 'Albums list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'metacin-bb-theme-child' ),
	);

	$music_args = array(
		'labels'             => $music_labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'music' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'          => 'dashicons-admin-media',
		'show_in_rest'       => true,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
	);

	register_post_type( 'music', $music_args );

	// Art Post Type
	  $gallery_labels = array(
		  'name'                  => _x( 'Art Pieces', 'Post type general name', 'metacin-bb-theme-child' ),
		  'singular_name'         => _x( 'Art Piece', 'Post type singular name', 'metacin-bb-theme-child' ),
		  'menu_name'             => _x( 'Art Pieces', 'Admin Menu text', 'metacin-bb-theme-child' ),
		  'name_admin_bar'        => _x( 'Art Piece', 'Add New on Toolbar', 'metacin-bb-theme-child' ),
		  'add_new'               => __( 'Add New', 'metacin-bb-theme-child' ),
		  'add_new_item'          => __( 'Add New Art Piece', 'metacin-bb-theme-child' ),
		  'new_item'              => __( 'New Art Piece', 'metacin-bb-theme-child' ),
		  'edit_item'             => __( 'Edit Art Piece', 'metacin-bb-theme-child' ),
		  'view_item'             => __( 'View Art Piece', 'metacin-bb-theme-child' ),
		  'all_items'             => __( 'All Art Pieces', 'metacin-bb-theme-child' ),
		  'search_items'          => __( 'Search Art Pieces', 'metacin-bb-theme-child' ),
		  'parent_item_colon'     => __( 'Parent Art Pieces:', 'metacin-bb-theme-child' ),
		  'not_found'             => __( 'No Art Pieces found.', 'metacin-bb-theme-child' ),
		  'not_found_in_trash'    => __( 'No Art Pieces found in Trash.', 'metacin-bb-theme-child' ),
		  'featured_image'        => _x( 'Art Piece Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'metacin-bb-theme-child' ),
		  'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'metacin-bb-theme-child' ),
		  'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'metacin-bb-theme-child' ),
		  'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'metacin-bb-theme-child' ),
		  'archives'              => _x( 'Art Piece archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'metacin-bb-theme-child' ),
		  'insert_into_item'      => _x( 'Insert into Art Piece', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'metacin-bb-theme-child' ),
		  'uploaded_to_this_item' => _x( 'Uploaded to this Art Piece', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'metacin-bb-theme-child' ),
		  'filter_items_list'     => _x( 'Filter Art Pieces list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'metacin-bb-theme-child' ),
		  'items_list_navigation' => _x( 'Art Pieces list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'metacin-bb-theme-child' ),
		  'items_list'            => _x( 'Art Pieces list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'metacin-bb-theme-child' ),
	  );

	  $gallery_args = array(
		  'labels'             => $gallery_labels,
		  'public'             => true,
		  'publicly_queryable' => true,
		  'show_ui'            => true,
		  'show_in_menu'       => true,
		  'query_var'          => true,
		  'rewrite'            => array( 'slug' => 'gallery' ),
		  'capability_type'    => 'post',
		  'has_archive'        => true,
		  'hierarchical'       => false,
		  'menu_position'      => null,
		  'menu_icon'          => 'dashicons-admin-media',
		  'show_in_rest'       => true,
		  'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
	  );

	  register_post_type( 'gallery', $gallery_args );

	  // Art Post Type
	  $labels = array(
		  'name'                  => _x( 'Form Entries', 'Post type general name', 'metacin-bb-theme-child' ),
		  'singular_name'         => _x( 'Form Entry', 'Post type singular name', 'metacin-bb-theme-child' ),
		  'menu_name'             => _x( 'Form Entries', 'Admin Menu text', 'metacin-bb-theme-child' ),
		  'name_admin_bar'        => _x( 'Form Entry', 'Add New on Toolbar', 'metacin-bb-theme-child' ),
		  'add_new'               => __( 'Add New', 'metacin-bb-theme-child' ),
		  'add_new_item'          => __( 'Add New Form Entry', 'metacin-bb-theme-child' ),
		  'new_item'              => __( 'New Form Entry', 'metacin-bb-theme-child' ),
		  'edit_item'             => __( 'Edit Form Entry', 'metacin-bb-theme-child' ),
		  'view_item'             => __( 'View Form Entry', 'metacin-bb-theme-child' ),
		  'all_items'             => __( 'All Form Entries', 'metacin-bb-theme-child' ),
		  'search_items'          => __( 'Search Form Entries', 'metacin-bb-theme-child' ),
		  'parent_item_colon'     => __( 'Parent Form Entries:', 'metacin-bb-theme-child' ),
		  'not_found'             => __( 'No Form Entries found.', 'metacin-bb-theme-child' ),
		  'not_found_in_trash'    => __( 'No Form Entries found in Trash.', 'metacin-bb-theme-child' ),
		  'featured_image'        => _x( 'Form Entry Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'metacin-bb-theme-child' ),
		  'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'metacin-bb-theme-child' ),
		  'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'metacin-bb-theme-child' ),
		  'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'metacin-bb-theme-child' ),
		  'archives'              => _x( 'Form Entry archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'metacin-bb-theme-child' ),
		  'insert_into_item'      => _x( 'Insert into Form Entry', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'metacin-bb-theme-child' ),
		  'uploaded_to_this_item' => _x( 'Uploaded to this Form Entry', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'metacin-bb-theme-child' ),
		  'filter_items_list'     => _x( 'Filter Form Entries list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'metacin-bb-theme-child' ),
		  'items_list_navigation' => _x( 'Form Entries list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'metacin-bb-theme-child' ),
		  'items_list'            => _x( 'Form Entries list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'metacin-bb-theme-child' ),
	  );

	$args = array(
		  'labels'             => $labels,
		  'public'             => false,
		  'publicly_queryable' => false,
		  'show_ui'            => true,
		  'show_in_menu'       => true,
		  'query_var'          => true,
		  'rewrite'            => false,
		  'capability_type'    => 'post',
		  'has_archive'        => false,
		  'hierarchical'       => false,
		  'menu_position'      => null,
		  'menu_icon'          => 'dashicons-forms',
		  'show_in_rest'       => true,
		  'supports'           => array( 'title', 'author', 'thumbnail' ),
	);

	register_post_type( 'form_entry', $args );

}

add_action( 'init', 'met_custom_post_types_init' );
