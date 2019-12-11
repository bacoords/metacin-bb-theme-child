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

	if ( '_met_sensation_viewed_intro' == $_POST['met_action'] ) {

		if ( ! wp_verify_nonce( $_POST['_met_sensation_viewed_intro_nonce'], '_met_sensation_viewed_intro' ) ) {
			return;
		}

		update_user_meta( $_POST['user_id'], '_met_sensation_viewed_intro', $_POST['_met_sensation_viewed_intro'] );

	}

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

