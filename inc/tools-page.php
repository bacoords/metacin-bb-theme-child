<?php



function met_add_users_tools_page() {
	add_submenu_page( 'tools.php', 'Metacin Tools', 'Metacin Tools', 'manage_options', 'met-users-tools', 'met_users_tools_page' );
}
add_action( 'admin_menu', 'met_add_users_tools_page' );

function met_users_tools_page(){ ?>
	<div class="wrap">
		<h1 class="wp-heading-inline">Metacin Tools</h1>

		<div class="poststuff">

			<form class=""
				  action="<?php echo admin_url( 'tools.php?page=met-users-tools' ); ?>"
				  method="post">
				<input type="hidden" name="met_clear_survey_information" value="1"/>
				<div class="postbox">
					<h2 class="hndle">
						<span>Clear Sensation User Information</span>
					</h2>
					<div class="inside">
						<p>
							<label for="user_id">User Id</label>
							<input type="text" name="user_id" />
						</p>
						<br /><br />
						<input type="submit" class="button-primary" name="submit" value="Submit">
					</div>
					<?php
					if( isset( $_POST['met_clear_survey_information'] ) && '1' == $_POST['met_clear_survey_information'] ) {
						$user_id = (int) sanitize_text_field( $_POST['user_id'] );
						delete_user_meta( $user_id, '_met_sensation_viewed_intro' );
						delete_user_meta( $user_id, '_met_sensation_submitted_survey' );
						delete_user_meta( $user_id, '_met_sensation_birth_year' );
						delete_user_meta( $user_id, '_met_sensation_gender' );
						delete_user_meta( $user_id, '_met_sensation_profession' );
						delete_user_meta( $user_id, '_met_sensation_zip_code' );
						delete_user_meta( $user_id, '_met_sensation_education' );
						delete_user_meta( $user_id, '_met_sensation_instrument' );
						delete_user_meta( $user_id, '_met_sensation_musical_training' );
						delete_user_meta( $user_id, '_met_sensation_musical_genre' );
						// @todo Should also loop through and delete the actual entries?
						delete_user_meta( $user_id, '_met_sensation_form_entries' );
					}
					?>
				</div>
			</form>
		</div>
	</div>
	<?php
}
