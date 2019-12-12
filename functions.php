<?php

// Defines.
define( 'FL_CHILD_THEME_DIR', get_stylesheet_directory() );
define( 'FL_CHILD_THEME_URL', get_stylesheet_directory_uri() );

// Classes.
require_once 'classes/class-fl-child-theme.php';

// Actions.
add_action( 'wp_enqueue_scripts', 'FLChildTheme::enqueue_scripts', 1000 );

// Include Custom Post Type Declarations.
require_once 'inc/custom-post-types.php';
require_once 'inc/sensation.php';
require_once 'inc/tools-page.php';

// Theme Support Options.
add_theme_support( 'post-thumbnails' );


function rest_theme_routes() {
	$routes = array();
	$query = new WP_Query( array(
		'post_type'      => 'any',
		'post_status'    => 'publish',
		'posts_per_page' => -1,
	) );
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post();
			$routes[] = array(
				'id'   => get_the_ID(),
				'type' => get_post_type(),
				'slug' => basename( get_permalink() ),
			);
		}
	}
	wp_reset_postdata();
	return $routes;
}





/**
 * Custom modules
 */
function cb_custom_social_loader() {
	if ( class_exists( 'FLBuilder' ) ) {

		// register the new setting for the new social media icon
		// replace the word houzz below with the name of the social media icon you want to use
		add_action( 'customize_register', 'cb_custom_social_customize_register' );
		function cb_custom_social_customize_register( $customizer )
		{
			$customizer->add_setting( 'fl-social-apple', array( 
				'default' => '' 
			) );

			$customizer->add_control(
				new WP_Customize_Control( $customizer, 'fl-social-apple', array(
					'label' 	=> 'Apple Music',
					'section' 	=> 'fl-social-links'
				) )
			);
		}  

		// add our new social media icon into the list of icons output by the Beaver Builder Theme
		// in our example we are using Houzz as the social media icon to be added so we add the word houzz below
		add_filter( 'fl_social_icons', 'cb_custom_social_social_icons' );
		function cb_custom_social_social_icons( $icons ) {
			$icons = array(
				'facebook',
				'twitter',
				'google',
				'linkedin',
				'yelp',
				'pinterest',
				'tumblr',
				'vimeo',
				'apple',
				'youtube',
				'flickr',
				'instagram',
				'dribbble',
				'500px',
				'blogger',
				'github',
				'rss',
				'email'
			);
			return $icons;
		}
	}
}
add_action( 'init', 'cb_custom_social_loader' );
