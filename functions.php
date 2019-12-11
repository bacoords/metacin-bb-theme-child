<?php

// Defines
define( 'FL_CHILD_THEME_DIR', get_stylesheet_directory() );
define( 'FL_CHILD_THEME_URL', get_stylesheet_directory_uri() );

// Classes
require_once 'classes/class-fl-child-theme.php';

// Actions
add_action( 'wp_enqueue_scripts', 'FLChildTheme::enqueue_scripts', 1000 );


/**
 * CMB2
 */
if ( file_exists( __DIR__ . '/cmb2/init.php' ) ) {
  require_once __DIR__ . '/cmb2/init.php';
} elseif ( file_exists(  __DIR__ . '/CMB2/init.php' ) ) {
  require_once __DIR__ . '/CMB2/init.php';
}


// Include Custom Post Type Declarations
require_once( 'inc/custom-post-types.php' );
require_once( 'inc/meta-boxes.php' );
require_once( 'inc/sensation.php' );




// Theme Support Options
add_theme_support( 'post-thumbnails' );


//
//
//// Increase REST API per page maximum
//add_filter( 'rest_post_collection_params', 'my_prefix_change_post_per_page', 10, 1 );
//
//function my_prefix_change_post_per_page( $params ) {
//    if ( isset( $params['per_page'] ) ) {
//        $params['per_page']['maximum'] = 200;
//    }
//
//    return $params;
//}


//
//// Styles and Scripts
//function met_enqueue_css()
//{
//	
//  $the_theme = wp_get_theme();
//
//	wp_enqueue_style('montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:400,700', false );
//	wp_enqueue_style('font-awesom', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css', false );
//  
//	wp_enqueue_style('open-sans', 'https://fonts.googleapis.com/css?family=Open+Sans', false );
//	wp_enqueue_style('mailchimp', '//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css', false );
//	 
//  wp_enqueue_style('theme-core', get_template_directory_uri() . '/dist/css/main.css?v=' . $the_theme->get( 'Version' ), false  );
//
//}
//
//function met_enqueue_scripts()
//{	
//  
//  $the_theme = wp_get_theme();
//
//  wp_register_script('theme-vendor-js', get_template_directory_uri() . '/dist/js/vendor.js?v=' . $the_theme->get( 'Version' ), array('jquery'), null, true);
//
//
//  wp_register_script('theme-app-js', get_template_directory_uri() . '/dist/js/vue-app.js?v=' . $the_theme->get( 'Version' ), array('jquery'), null, true);
//
//
//  wp_enqueue_script( 'theme-vendor-js' );
//  wp_enqueue_script( 'theme-app-js' );
//  
//  $base_url  = esc_url_raw( home_url() );
//  $base_path = rtrim( parse_url( $base_url, PHP_URL_PATH ), '/' );
//  
//  wp_localize_script( 'theme-app-js', 'wp', array(
//      'root'      => esc_url_raw( rest_url() ),
//      'base_url'  => $base_url,
//      'base_path' => $base_path ? $base_path . '/' : '/',
//      'nonce'     => wp_create_nonce( 'wp_rest' ),
//      'site_name' => get_bloginfo( 'name' ),
//      'routes'    => rest_theme_routes(),
//  ) );
//
//}


//add_action('wp_enqueue_scripts', 'met_enqueue_css', 10);
//
//add_action('wp_enqueue_scripts', 'met_enqueue_scripts', 20);
//
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