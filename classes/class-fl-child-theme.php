<?php

/**
 * Helper class for child theme functions.
 *
 * @class FLChildTheme
 */
final class FLChildTheme {

	/**
	 * Enqueues scripts and styles.
	 *
	 * @return void
	 */
	public static function enqueue_scripts() {

		$the_theme = wp_get_theme();

		wp_enqueue_style( 'fl-child-theme', FL_CHILD_THEME_URL . '/css/style.css', array(), $the_theme->get( 'Version' ) );

		wp_register_script( 'particles', FL_CHILD_THEME_URL . '/js/particles.js', array(), $the_theme->get( 'Version' ), true );

		wp_register_script( 'mpfade', FL_CHILD_THEME_URL . '/js/mpfade.js', array( 'jquery' ), $the_theme->get( 'Version' ), true );

		wp_register_script( 'plyr', 'https://cdn.plyr.io/3.5.6/plyr.js', array( 'jquery' ), '3.5.6', true );
		wp_register_style( 'plyr', 'https://cdn.plyr.io/3.5.6/plyr.css', array(), '3.5.6' );

		wp_register_script( 'page-sensation', FL_CHILD_THEME_URL . '/js/page-sensation.js', array( 'jquery', 'plyr' ), $the_theme->get( 'Version' ), true );

		wp_enqueue_script( 'particles' );
		wp_enqueue_script( 'mpfade' );

		// Localize REST API Stuff.
		$base_url  = esc_url_raw( home_url() );
		$base_path = rtrim( parse_url( $base_url, PHP_URL_PATH ), '/' );
		wp_localize_script(
			'theme-app-js',
			'wp',
			array(
				'root'      => esc_url_raw( rest_url() ),
				'base_url'  => $base_url,
				'base_path' => $base_path ? $base_path . '/' : '/',
				'nonce'     => wp_create_nonce( 'wp_rest' ),
				'site_name' => get_bloginfo( 'name' ),
				'routes'    => rest_theme_routes(),
			)
		);

		if ( is_page( 'sensation' ) ) {
			wp_enqueue_style( 'plyr' );
			wp_enqueue_script( 'plyr' );
			wp_enqueue_script( 'page-sensation' );
		}

	}
}
