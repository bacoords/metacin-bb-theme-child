<?php
$track = isset( $_GET['song'] ) ? $_GET['song'] : 1; ?>
<div class="row">
	<div class="col-xs-12">
		<div class="met-phenomenon-results">
			<div class="row">
				<div class="col-xs-2">
					<span class="met-phenomenon-results-number"><?php echo $track; ?></span>
				</div>
				<div class="col-xs-10">
					<h2><em><?php echo met_phenomenon_get_song_title( $track ); ?></em></h2>
				</div>
			</div>
			
		</div>
	</div>
	<div class="col-md-6">
		<div class="met-phenomenon-chart">
			<canvas id="myResults" width="200" height="200"></canvas>
		</div>
		<div class="met-phenomenon-chart-legend text-center">Your Track Ratings</div>
	</div>
	<div class="col-md-6">
		<div class="met-phenomenon-chart">
			<canvas id="totalResults" width="200" height="200"></canvas>
		</div>
		<div class="met-phenomenon-chart-legend text-center">Entire Study Ratings</div>
	</div>
</div>



<div class="met-phenomenon-select-submit text-center">
	<a class="btn btn-lg btn-phenomenon met-phenomenon-submit-btn" href="<?php echo esc_attr( home_url( 'laboratory/phenomenon/?intro=false' ) ); ?>">Continue <i class="fas fa-play-circle"></i></a>
</div>