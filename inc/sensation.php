<?php 

/**
 * Handles forms for the sensation project.
 *
 * @return void
 */
function met_sensation_form_handler() {

	if ( ! isset( $_POST['met_action'] ) ) {
		return;
	}

	// Handle the sensation intro form.
	if ( '_met_sensation_viewed_intro' == $_POST['met_action'] ) {

		if ( ! wp_verify_nonce( $_POST['_met_sensation_viewed_intro_nonce'], '_met_sensation_viewed_intro' ) ) {
			return;
		}

		update_user_meta( $_POST['user_id'], '_met_sensation_viewed_intro', $_POST['_met_sensation_viewed_intro'] );

	}

	// Handle the sensation survey.
	if ( '_met_sensation_submitted_survey' == $_POST['met_action'] ) {

		if ( ! wp_verify_nonce( $_POST['_met_sensation_submitted_survey_nonce'], '_met_sensation_submitted_survey' ) ) {
			return;
		}

		// Update user meta.
		update_user_meta( $_POST['user_id'], '_met_sensation_submitted_survey', $_POST['_met_sensation_submitted_survey'] );
		update_user_meta( $_POST['user_id'], '_met_sensation_birth_year', $_POST['_met_sensation_birth_year'] );
		update_user_meta( $_POST['user_id'], '_met_sensation_gender', $_POST['_met_sensation_gender'] );
		update_user_meta( $_POST['user_id'], '_met_sensation_profession', $_POST['_met_sensation_profession'] );
		update_user_meta( $_POST['user_id'], '_met_sensation_zip_code', $_POST['_met_sensation_zip_code'] );
		update_user_meta( $_POST['user_id'], '_met_sensation_education', $_POST['_met_sensation_education'] );
		update_user_meta( $_POST['user_id'], '_met_sensation_instrument', $_POST['_met_sensation_instrument'] );
		update_user_meta( $_POST['user_id'], '_met_sensation_musical_training', $_POST['_met_sensation_musical_training'] );
		update_user_meta( $_POST['user_id'], '_met_sensation_musical_genre', $_POST['_met_sensation_musical_genre'] );

	}


	// Handle the sensation song form.
	if ( '_met_sensation_song' == $_POST['met_action'] ) {

		if ( ! wp_verify_nonce( $_POST['_met_sensation_song_nonce'], '_met_sensation_song' ) ) {
			return;
		}

		$userdata = get_userdata( $_POST['user_id'] );

		$post_arr = array(
			'post_type'  => 'form_entry',
			'post_title' => 'Sensation - ' . basename( sanitize_text_field( $_POST['_met_sensation_song_src'] ) ),
			'post_status' => 'publish',
			'meta_input' => array(
				'_met_form_type'             => 'Sensation',
				'_met_user_name'             => $userdata->user_nicename,
				'_met_email'                 => $userdata->user_email,
				'_met_sensation_song_id'     => sanitize_text_field( $_POST['_met_sensation_song_id'] ),
				'_met_sensation_song_src'    => sanitize_text_field( $_POST['_met_sensation_song_src'] ),
				'_met_sensation_emotion'     => sanitize_text_field( $_POST['_met_sensation_emotion'] ),
				'_met_sensation_action'      => sanitize_text_field( $_POST['_met_sensation_action'] ),
				'_met_sensation_color'       => sanitize_text_field( $_POST['_met_sensation_color'] ),
				'_met_sensation_imagery'     => sanitize_text_field( $_POST['_met_sensation_imagery'] ),
				'_met_sensation_song_name_1' => sanitize_text_field( $_POST['_met_sensation_song_name_1'] ),
				'_met_sensation_song_name_2' => sanitize_text_field( $_POST['_met_sensation_song_name_2'] ),
				'_met_sensation_song_rating' => sanitize_text_field( $_POST['_met_sensation_song_rating'] ),
			),
		);

		wp_insert_post( $post_arr );

	}
}
add_action( 'init', 'met_sensation_form_handler' );



/**
 * Show a small table of linkedin data on the
 * @param  [type] $profileuser [description]
 * @return [type]              [description]
 */
function met_sensation_display_user_meta( $profileuser ){
	?>
	<h2>Sensation User Meta</h2>
	<table class="form-table">
	  <tbody>
		<tr><th><strong>Viewed Sensation Intro:</strong></th><td><?php echo get_user_meta( $profileuser->ID, '_met_sensation_viewed_intro', true ); ?></td></tr>
		<tr><th><strong>Viewed Sensation Survey:</strong></th><td><?php echo get_user_meta( $profileuser->ID, '_met_sensation_submitted_survey', true ); ?></td></tr>
		<tr><th><strong>Birth Year:</strong></th><td><?php echo get_user_meta( $profileuser->ID, '_met_sensation_birth_year', true ); ?></td></tr>
		<tr><th><strong>Gender:</strong></th><td><?php echo get_user_meta( $profileuser->ID, '_met_sensation_gender', true ); ?></td></tr>
		<tr><th><strong>Profession:</strong></th><td><?php echo get_user_meta( $profileuser->ID, '_met_sensation_profession', true ); ?></td></tr>
		<tr><th><strong>Zip:</strong></th><td><?php echo get_user_meta( $profileuser->ID, '_met_sensation_zip_code', true ); ?></td></tr>
		<tr><th><strong>Education:</strong></th><td><?php echo get_user_meta( $profileuser->ID, '_met_sensation_education', true ); ?></td></tr>
		<tr><th><strong>Instrument:</strong></th><td><?php echo get_user_meta( $profileuser->ID, '_met_sensation_instrument', true ); ?></td></tr>
		<tr><th><strong>Musical Training:</strong></th><td><?php echo get_user_meta( $profileuser->ID, '_met_sensation_musical_training', true ); ?></td></tr>
		<tr><th><strong>Genre:</strong></th><td><?php echo get_user_meta( $profileuser->ID, '_met_sensation_musical_genre', true ); ?></td></tr>
	  </tbody>
	</table>
	<?php
}
add_action( 'edit_user_profile', 'met_sensation_display_user_meta', 1 );
add_action('show_user_profile', 'met_sensation_display_user_meta', 1);

