<?php 







/**
 * Adds our custom ACF Options page.
 *
 * @return void
 */
function met_phenomenon_add_options_page() {

	// Check function exists.
	if ( function_exists( 'acf_add_options_page' ) ) {

		// Register options page.
		acf_add_options_page(
			array(
				'page_title' => __( 'Phenomenon Settings' ),
				'menu_title' => __( 'Phenomenon Settings' ),
				'menu_slug'  => 'met-phenomenon-settings',
				'capability' => 'manage_options',
			)
		);
	}
}

add_action( 'acf/init', 'met_phenomenon_add_options_page' );


/**
 * Handles forms for the phenomenon project.
 *
 * @return void
 */
function met_phenomenon_form_handler() {

	if ( ! isset( $_POST['met_action'] ) ) {
		return;
	}

	// Handle the phenomenon intro form.
	if ( '_met_phenomenon_viewed_intro' == $_POST['met_action'] ) {

		if ( ! wp_verify_nonce( $_POST['_met_phenomenon_viewed_intro_nonce'], '_met_phenomenon_viewed_intro' ) ) {
			return;
		}

		update_user_meta( $_POST['user_id'], '_met_phenomenon_viewed_intro', $_POST['_met_phenomenon_viewed_intro'] );

	}

	// Handle the phenomenon survey.
	if ( '_met_phenomenon_submitted_survey' == $_POST['met_action'] ) {

		if ( ! wp_verify_nonce( $_POST['_met_phenomenon_submitted_survey_nonce'], '_met_phenomenon_submitted_survey' ) ) {
			return;
		}

		// Update user meta.
		update_user_meta( $_POST['user_id'], '_met_phenomenon_submitted_survey', $_POST['_met_phenomenon_submitted_survey'] );
		update_user_meta( $_POST['user_id'], '_met_phenomenon_birth_year', $_POST['_met_phenomenon_birth_year'] );
		update_user_meta( $_POST['user_id'], '_met_phenomenon_gender', $_POST['_met_phenomenon_gender'] );
		update_user_meta( $_POST['user_id'], '_met_phenomenon_profession', $_POST['_met_phenomenon_profession'] );
		update_user_meta( $_POST['user_id'], '_met_phenomenon_zip_code', $_POST['_met_phenomenon_zip_code'] );
		update_user_meta( $_POST['user_id'], '_met_phenomenon_education', $_POST['_met_phenomenon_education'] );
		update_user_meta( $_POST['user_id'], '_met_phenomenon_instrument', $_POST['_met_phenomenon_instrument'] );
		update_user_meta( $_POST['user_id'], '_met_phenomenon_musical_training', $_POST['_met_phenomenon_musical_training'] );
		update_user_meta( $_POST['user_id'], '_met_phenomenon_musical_genre', $_POST['_met_phenomenon_musical_genre'] );

	}


	// Handle the phenomenon song form.
	if ( '_met_phenomenon_song' == $_POST['met_action'] ) {

		if ( ! wp_verify_nonce( $_POST['_met_phenomenon_song_nonce'], '_met_phenomenon_song' ) ) {
			return;
		}

		// Get userdata.
		$user_id  = (int) sanitize_text_field( $_POST['user_id'] );
		$userdata = get_userdata( $user_id );
		$song_id = (int) sanitize_text_field( $_POST['_met_phenomenon_song_id'] );

		// Handle the form entry.
		$post_arr = array(
			'post_type'  => 'form_entry',
			'post_title' => 'Phenomenon - ' . basename( sanitize_text_field( $_POST['_met_phenomenon_song_src'] ) ),
			'post_status' => 'publish',
			'meta_input' => array(
				'_met_form_type'             => 'Phenomenon',
				'_met_user_name'             => $userdata->user_nicename,
				'_met_email'                 => $userdata->user_email,
				'_met_phenomenon_song_id'     => $song_id,
				'_met_phenomenon_song_src'    => sanitize_text_field( $_POST['_met_phenomenon_song_src'] ),
				'_met_phenomenon_emotion'     => sanitize_text_field( $_POST['_met_phenomenon_emotion'] ),
				'_met_phenomenon_action'      => sanitize_text_field( $_POST['_met_phenomenon_action'] ),
				'_met_phenomenon_color'       => sanitize_text_field( $_POST['_met_phenomenon_color'] ),
				'_met_phenomenon_imagery'     => sanitize_text_field( $_POST['_met_phenomenon_imagery'] ),
				'_met_phenomenon_song_name_1' => sanitize_text_field( $_POST['_met_phenomenon_song_name_1'] ),
				'_met_phenomenon_song_name_2' => sanitize_text_field( $_POST['_met_phenomenon_song_name_2'] ),
				'_met_phenomenon_song_rating' => sanitize_text_field( $_POST['_met_phenomenon_song_rating'] ),
			),
		);

		$post_id = wp_insert_post( $post_arr );
		
		// Update user meta.
		$songs = get_user_meta( $user_id, '_met_phenomenon_form_entries', true );
		if ( ! $songs ) {
			$songs = array();
		}
		$songs[ $song_id ] = $post_id;
		update_user_meta( $user_id, '_met_phenomenon_form_entries', $songs );

		// Recalc song average
		met_phenomenon_update_track_average_score( $song_id );

	}
}
add_action( 'init', 'met_phenomenon_form_handler' );



/**
 * Show a small table of linkedin data on the
 * @param  [type] $profileuser [description]
 * @return [type]              [description]
 */
function met_phenomenon_display_user_meta( $profileuser ){
	?>
	<h2>Phenomenon User Meta</h2>
	<table class="form-table">
		<tbody>
			<tr><th><strong>Viewed Phenomenon Intro:</strong></th><td><?php echo get_user_meta( $profileuser->ID, '_met_phenomenon_viewed_intro', true ); ?></td></tr>
			<tr><th><strong>Viewed Phenomenon Survey:</strong></th><td><?php echo get_user_meta( $profileuser->ID, '_met_phenomenon_submitted_survey', true ); ?></td></tr>
			<tr><th><strong>Birth Year:</strong></th><td><?php echo get_user_meta( $profileuser->ID, '_met_phenomenon_birth_year', true ); ?></td></tr>
			<tr><th><strong>Gender:</strong></th><td><?php echo get_user_meta( $profileuser->ID, '_met_phenomenon_gender', true ); ?></td></tr>
			<tr><th><strong>Profession:</strong></th><td><?php echo get_user_meta( $profileuser->ID, '_met_phenomenon_profession', true ); ?></td></tr>
			<tr><th><strong>Zip:</strong></th><td><?php echo get_user_meta( $profileuser->ID, '_met_phenomenon_zip_code', true ); ?></td></tr>
			<tr><th><strong>Education:</strong></th><td><?php echo get_user_meta( $profileuser->ID, '_met_phenomenon_education', true ); ?></td></tr>
			<tr><th><strong>Instrument:</strong></th><td><?php echo get_user_meta( $profileuser->ID, '_met_phenomenon_instrument', true ); ?></td></tr>
			<tr><th><strong>Musical Training:</strong></th><td><?php echo get_user_meta( $profileuser->ID, '_met_phenomenon_musical_training', true ); ?></td></tr>
			<tr><th><strong>Genre:</strong></th><td><?php echo get_user_meta( $profileuser->ID, '_met_phenomenon_musical_genre', true ); ?></td></tr>

			<?php
			$form_entries = get_user_meta( $profileuser->ID, '_met_phenomenon_form_entries', true );
			if ( $form_entries ) {
				?>
				<tr><th><strong>Phenomenon Form Entries:</strong></th><td>
					<?php
					foreach ( $form_entries as $key => $value ) {
						echo "<a href='" . admin_url( 'post.php?post=' . $value . '&action=edit' ) . "'>Song {$key}</a><br>";
					}
					?>
				</td></tr>
				<?php
			}
			?>
		</tbody>
	</table>

	<?php
}
add_action( 'edit_user_profile', 'met_phenomenon_display_user_meta', 1 );
add_action( 'show_user_profile', 'met_phenomenon_display_user_meta', 1 );


/**
 * Helper to get the real track titles.
 *
 * @param integer $track
 * @return string
 */
function met_phenomenon_get_song_title( $track = 1 ) {
	$song_info = get_field( 'phenomenon_song_' . $track, 'options' );
	return ( isset( $song_info['song_title'] ) ) ? $song_info['song_title'] : 'Untitled';
}


/**
 * Recalcs the average for a track.
 *
 * @param integer $track
 * @return void
 */
function met_phenomenon_update_track_average_score( $track = 0 ) {

	if ( ! $track ) {
		return;
	}

	$args = array(
		'fields'     => 'ids',
		'post_type'  => 'form_entry',
		'meta_query' => array(
			array(
				'key'   => '_met_phenomenon_song_id',
				'value' => $track,
			),
		),
	);
	$survey_ids = get_posts( $args );
	if ( $survey_ids ) {
		$scores_total = 0;
		foreach ( $survey_ids as $id ) {
			$score = get_post_meta( $id, '_met_phenomenon_song_rating', true );
			if ( $score ) {
				$scores_total += (int) $score;
			}
		}
		$average = ( $scores_total / count( $survey_ids ) );
		update_field( 'phenomenon_song_' . $track . '_total_rating', $average, 'options' );
	}
}


/**
 * Helper to build array of all the track results.
 *
 * @param boolean $user_id
 * @return void
 */
function met_phenomenon_get_track_results( $get_total = false ) {

	$result     = array();
	$user_id    = get_current_user_id();
	$song_forms = get_user_meta( $user_id, '_met_phenomenon_form_entries', true );

	for ( $i = 1; $i < 11; $i++ ) {

		// Reset values.
		$scores_total = 0;
		$survey_ids   = array();

		// Confirm user has set this song already.
		if ( isset( $song_forms[ $i ] ) ) {
			if ( $get_total ) {
				$result[] = (int) get_field( 'phenomenon_song_' . $i . '_total_rating', 'options' );
			} else {
				$result[] = (int) get_post_meta( $song_forms[ $i ], '_met_phenomenon_song_rating', true );
			}
		} else {
			$result[] = 0;
		}
	}

	return $result;
}



/**
 * Determine if a user as completed all songs.
 *
 * @param integer $user_id
 * @return void
 */
function met_phenomonon_user_completed_all_songs( $user_id = 0 ) {
	if ( ! $user_id ) {
		$user_id = get_current_user_id();
	}

	$songs = get_user_meta( $user_id, '_met_phenomenon_form_entries', true );

	for ( $i = 1; $i < 11; $i++ ) {
		if ( ! isset( $songs[ $i ] ) ) {
			return false;
		}
	}

	return true;
}

