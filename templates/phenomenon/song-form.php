<form id="met-phenomenon-select-form" action="<?php echo esc_attr( home_url( 'laboratory/phenomenon') ); ?>" method="post" style="display: none;">
	<input type="hidden" name="user_id" value="<?php echo esc_attr( get_current_user_id() ); ?>" />
	<input type="hidden" id="_met_phenomenon_song_id" name="_met_phenomenon_song_id" value="" />
	<input type="hidden" id="_met_phenomenon_song_src" name="_met_phenomenon_song_src" value="" />
	<input type="hidden" name="met_action" value="_met_phenomenon_song" />
	<?php wp_nonce_field( '_met_phenomenon_song', '_met_phenomenon_song_nonce' ); ?>

	<audio id="plyr" class="met-phenomenon-plyr" controls src="">

	</audio>

	<div class="row">
		<div class="col-md-6">
			<label class="met-phenomenon-select-label-left">What words best describe this tune ?  </label>
		</div>
		<div class="col-md-2 text-center">
			<input type="text" class="form-control" placeholder="e.g. happy" name="_met_phenomenon_emotion">
			<label for="_met_phenomenon_emotion">Emotion</label>
		</div>
		<div class="col-md-2 text-center">
			<input type="text" class="form-control" placeholder="e.g. walking" name="_met_phenomenon_action">
			<label for="_met_phenomenon_action">Action</label>
		</div>
		<div class="col-md-2 text-center">
			<input type="text" class="form-control" placeholder="e.g. golden" name="_met_phenomenon_color">
			<label for="_met_phenomenon_color">Color</label>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<label class="met-phenomenon-select-label-left" for="_met_phenomenon_imagery">What imagery does it bring to mind ?</label>
		</div>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="e.g. enjoying the sun on a Sunday afternoon" name="_met_phenomenon_imagery">
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<label class="met-phenomenon-select-label-left" for="_met_phenomenon_song_name_1">What 1-word names would you give it ?</label>
		</div>
		<div class="col-md-3">
			<input type="text" class="form-control" placeholder="song name 1" name="_met_phenomenon_song_name_1">
		</div>
		<div class="col-md-3">
			<input type="text" class="form-control" placeholder="song name 2" name="_met_phenomenon_song_name_2">
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<label class="met-phenomenon-select-label-left" for="_met_phenomenon_song_rating">How would you rate this music track ?</label>
		</div>
		<div class="col-md-6">
			<div class="met-phenomenon-select-radios">
				<input type="radio" class="form-control-check" name="_met_phenomenon_song_rating" id="_met_phenomenon_song_rating_1" value="1">	
				<label for="_met_phenomenon_song_rating_1"><span>1</span></label>
				
				<input type="radio" class="form-control-check" name="_met_phenomenon_song_rating" id="_met_phenomenon_song_rating_2" value="2">
				<label for="_met_phenomenon_song_rating_2"><span>2</span></label>
				
				<input type="radio" class="form-control-check" name="_met_phenomenon_song_rating" id="_met_phenomenon_song_rating_3" value="3">
				<label for="_met_phenomenon_song_rating_3"><span>3</span></label>
				
				<input type="radio" class="form-control-check" name="_met_phenomenon_song_rating" id="_met_phenomenon_song_rating_4" value="4">
				<label for="_met_phenomenon_song_rating_4"><span>4</span></label>
				
				<input type="radio" class="form-control-check" name="_met_phenomenon_song_rating" id="_met_phenomenon_song_rating_5" value="5">
				<label for="_met_phenomenon_song_rating_5"><span>5</span></label>
				
				<input type="radio" class="form-control-check" name="_met_phenomenon_song_rating" id="_met_phenomenon_song_rating_6" value="6">
				<label for="_met_phenomenon_song_rating_6"><span>6</span></label>
				
				<input type="radio" class="form-control-check" name="_met_phenomenon_song_rating" id="_met_phenomenon_song_rating_7" value="7">
				<label for="_met_phenomenon_song_rating_7"><span>7</span></label>
				
				<input type="radio" class="form-control-check" name="_met_phenomenon_song_rating" id="_met_phenomenon_song_rating_8" value="8">
				<label for="_met_phenomenon_song_rating_8"><span>8</span></label>
				
				<input type="radio" class="form-control-check" name="_met_phenomenon_song_rating" id="_met_phenomenon_song_rating_9" value="9">
				<label for="_met_phenomenon_song_rating_9"><span>9</span></label>
				
				<input type="radio" class="form-control-check" name="_met_phenomenon_song_rating" id="_met_phenomenon_song_rating_10" value="10">
				<label for="_met_phenomenon_song_rating_10"><span>10</span></label>
				
			</div>
			<div class="met-phenomenon-select-radios">
				<span>Hate It</span>
				<span>Indifferent</span>
				<span>Love It</span>
			</div>
		</div>
	</div>


	<div class="met-phenomenon-select-submit text-center">
		<button type="submit" class="btn btn-lg btn-phenomenon met-phenomenon-submit-btn">Continue <i class="fas fa-play-circle"></i></button>
	</div>
</form>