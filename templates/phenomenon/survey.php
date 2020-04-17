
<div id="met-phenomenon-intro-panel-1" class="met-phenomenon-intro-panel">
	<h2>Instruction:</h2>
	<p class="text-indent-none">This music research project is simple and easy to perform:</p>

	<p class="">1)  First provide some easy information about your music preferences & experiences.</p>

	<p class="">2)  Then simply choose 10 music tracks, listen and provide a few responses as you go. </p>

	<p class="">3)  The entire process will take about an hour.  Finish in one session or take your time.</p>

	<p class="">4)  It is best to listen to the music on airpods or headphones in the same quiet setting.</p>

	<p class="">5)  You will see your results in comparison to the entire study results after each track.</p>

	<p class=""><strong><em>Let’s get started !</em> Click Begin.</strong></p>
</div>
<div class="met-phenomenon-intro-btn-container text-center">
	<a href="#" class="btn btn-lg btn-phenomenon met-phenomenon-intro-btn" data-panel="1">Continue <i class="fas fa-play-circle"></i></a>
</div>



<form id="met-phenomenon-intro-panel-2"  method="post" action="<?php echo home_url( 'laboratory/phenomenon/?intro=false' ); ?>" class="met-phenomenon-survey" style="display:none">

	<input type="hidden" name="_met_phenomenon_submitted_survey" value="1">
	<input type="hidden" name="met_action" value="_met_phenomenon_submitted_survey">
	<input type="hidden" name="user_id" value="<?php echo esc_attr( get_current_user_id() ); ?>">
	<?php wp_nonce_field( '_met_phenomenon_submitted_survey', '_met_phenomenon_submitted_survey_nonce' ); ?>

	<div class="row">
		<div class="col-md-4">
			<label class="met-phenomenon-survey-label-left">Please tell us a little about yourself: </label>
		</div>
		<div class="col-md-2">
			<input type="text" class="form-control" placeholder="YYYY" name="_met_phenomenon_birth_year">
			<label for="_met_phenomenon_birth_year">Birth Year</label>
		</div>
		<div class="col-md-2">
			<input type="text" class="form-control" placeholder="M/F/Other" name="_met_phenomenon_gender">
			<label for="_met_phenomenon_gender">Gender</label>
		</div>
		<div class="col-md-2">
			<input type="text" class="form-control" placeholder="e.g. Student" name="_met_phenomenon_profession">
			<label for="_met_phenomenon_profession">Profession</label>
		</div>
		<div class="col-md-2">
			<input type="text" class="form-control" placeholder="e.g. 12345" name="_met_phenomenon_zip_code">
			<label for="_met_phenomenon_zip_code">Zip Code</label>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4">
			<label for="_met_phenomenon_education" class="met-phenomenon-survey-label-left">What is your education experience?</label>
		</div>
		<div class="col-md-8">
			<div class="met-phenomenon-survey-radios">
				<label for="_met_phenomenon_education_1" class="text-center">
					<input type="radio" id="_met_phenomenon_education_1" name="_met_phenomenon_education" value="Middle School" class="form-check-input" /><br>
					Middle School
				</label>
				<label for="_met_phenomenon_education_2" class="text-center">
					<input type="radio" id="_met_phenomenon_education_2" name="_met_phenomenon_education" value="High School" class="form-check-input" /><br>
					High School
				</label>
				<label for="_met_phenomenon_education_3" class="text-center">
					<input type="radio" id="_met_phenomenon_education_3" name="_met_phenomenon_education" value="Trade School" class="form-check-input" /><br>
					Trade School
				</label>
				<label for="_met_phenomenon_education_4" class="text-center">
					<input type="radio" id="_met_phenomenon_education_4" name="_met_phenomenon_education" value="Bachelor Degree" class="form-check-input" /><br>
					Bachelor Degree
				</label>
				<label for="_met_phenomenon_education_5" class="text-center">
					<input type="radio" id="_met_phenomenon_education_5" name="_met_phenomenon_education" value="Master Degree" class="form-check-input" /><br>
					Master Degree
				</label>
				<label for="_met_phenomenon_education_6" class="text-center">
					<input type="radio" id="_met_phenomenon_education_6" name="_met_phenomenon_education" value="Doctoral Degree" class="form-check-input" /><br>
					Doctoral Degree
				</label>
				<label for="_met_phenomenon_education_7" class="text-center">
					<input type="radio" id="_met_phenomenon_education_7" name="_met_phenomenon_education" value="Other" class="form-check-input" /><br>
					Other
				</label>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4">
			<label for="_met_phenomenon_instrument" class="met-phenomenon-survey-label-left">Do you play a musical instrument?</label>
		</div>
		<div class="col-md-8">
			<div class="met-phenomenon-survey-radios">
				<label for="_met_phenomenon_instrument_1" class="text-center">
					<input type="radio" id="_met_phenomenon_instrument_1" name="_met_phenomenon_instrument" value="No" class="form-check-input" /><br>
					No
				</label>
				<label for="_met_phenomenon_instrument_2" class="text-center">
					<input type="radio" id="_met_phenomenon_instrument_2" name="_met_phenomenon_instrument" value="Drums" class="form-check-input" /><br>
					Drums
				</label>
				<label for="_met_phenomenon_instrument_3" class="text-center">
					<input type="radio" id="_met_phenomenon_instrument_3" name="_met_phenomenon_instrument" value="Strings" class="form-check-input" /><br>
					Strings
				</label>
				<label for="_met_phenomenon_instrument_4" class="text-center">
					<input type="radio" id="_met_phenomenon_instrument_4" name="_met_phenomenon_instrument" value="Woodwind" class="form-check-input" /><br>
					Woodwind
				</label>
				<label for="_met_phenomenon_instrument_5" class="text-center">
					<input type="radio" id="_met_phenomenon_instrument_5" name="_met_phenomenon_instrument" value="Piano" class="form-check-input" /><br>
					Piano
				</label>
				<label for="_met_phenomenon_instrument_6" class="text-center">
					<input type="radio" id="_met_phenomenon_instrument_6" name="_met_phenomenon_instrument" value="Guitar" class="form-check-input" /><br>
					Guitar
				</label>
				<label for="_met_phenomenon_instrument_7" class="text-center">
					<input type="radio" id="_met_phenomenon_instrument_7" name="_met_phenomenon_instrument" value="Other" class="form-check-input" /><br>
					Other
				</label>
			</div>
		</div>
	</div>


	<div class="row">
		<div class="col-md-4">
			<label for="_met_phenomenon_musical_training" class="met-phenomenon-survey-label-left">What is your musical training level?</label>
		</div>
		<div class="col-md-8">
			<div class="met-phenomenon-survey-radios">
				<label for="_met_phenomenon_musical_training_1" class="text-center">
					<input type="radio" id="_met_phenomenon_musical_training_1" name="_met_phenomenon_musical_training" value="None" class="form-check-input" /><br>
					None
				</label>
				<label for="_met_phenomenon_musical_training_2" class="text-center">
					<input type="radio" id="_met_phenomenon_musical_training_2" name="_met_phenomenon_musical_training" value="Novice" class="form-check-input" /><br>
					Novice
				</label>
				<label for="_met_phenomenon_musical_training_3" class="text-center">
					<input type="radio" id="_met_phenomenon_musical_training_3" name="_met_phenomenon_musical_training" value="Hobby" class="form-check-input" /><br>
					Hobby
				</label>
				<label for="_met_phenomenon_musical_training_4" class="text-center">
					<input type="radio" id="_met_phenomenon_musical_training_4" name="_met_phenomenon_musical_training" value="Amateur" class="form-check-input" /><br>
					Amateur
				</label>
				<label for="_met_phenomenon_musical_training_5" class="text-center">
					<input type="radio" id="_met_phenomenon_musical_training_5" name="_met_phenomenon_musical_training" value="Musician" class="form-check-input" /><br>
					Musician
				</label>
				<label for="_met_phenomenon_musical_training_6" class="text-center">
					<input type="radio" id="_met_phenomenon_musical_training_6" name="_met_phenomenon_musical_training" value="Studio" class="form-check-input" /><br>
					Studio
				</label>
				<label for="_met_phenomenon_musical_training_7" class="text-center">
					<input type="radio" id="_met_phenomenon_musical_training_7" name="_met_phenomenon_musical_training" value="Other" class="form-check-input" /><br>
					Other
				</label>
			</div>
		</div>
	</div>


	<div class="row">
		<div class="col-md-4">
			<label for="_met_phenomenon_musical_genre" class="met-phenomenon-survey-label-left">What is your favorite music genre?</label>
		</div>
		<div class="col-md-8">
			<div class="met-phenomenon-survey-radios">
				<label for="_met_phenomenon_musical_genre_1" class="text-center">
					<input type="radio" id="_met_phenomenon_musical_genre_1" name="_met_phenomenon_musical_genre" value="Classical" class="form-check-input" /><br>
					Classical
				</label>
				<label for="_met_phenomenon_musical_genre_2" class="text-center">
					<input type="radio" id="_met_phenomenon_musical_genre_2" name="_met_phenomenon_musical_genre" value="Rock" class="form-check-input" /><br>
					Rock
				</label>
				<label for="_met_phenomenon_musical_genre_3" class="text-center">
					<input type="radio" id="_met_phenomenon_musical_genre_3" name="_met_phenomenon_musical_genre" value="Metal" class="form-check-input" /><br>
					Metal
				</label>
				<label for="_met_phenomenon_musical_genre_4" class="text-center">
					<input type="radio" id="_met_phenomenon_musical_genre_4" name="_met_phenomenon_musical_genre" value="New Age" class="form-check-input" /><br>
					New Age
				</label>
				<label for="_met_phenomenon_musical_genre_5" class="text-center">
					<input type="radio" id="_met_phenomenon_musical_genre_5" name="_met_phenomenon_musical_genre" value="Hip Hop" class="form-check-input" /><br>
					Hip Hop
				</label>
				<label for="_met_phenomenon_musical_genre_6" class="text-center">
					<input type="radio" id="_met_phenomenon_musical_genre_6" name="_met_phenomenon_musical_genre" value="Jazz" class="form-check-input" /><br>
					Jazz
				</label>
				<label for="_met_phenomenon_musical_genre_7" class="text-center">
					<input type="radio" id="_met_phenomenon_musical_genre_7" name="_met_phenomenon_musical_genre" value="Other" class="form-check-input" /><br>
					Other
				</label>
			</div>
		</div>
	</div>



	<div class="met-phenomenon-survey-submit text-center">
		<button type="submit" class="btn btn-lg btn-phenomenon met-phenomenon-submit-btn" data-panel="1">Continue <i class="fas fa-play-circle"></i></button>
	</div>

</form>
