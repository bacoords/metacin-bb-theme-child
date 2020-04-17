<?php 
$songs  = get_user_meta( get_current_user_id(), '_met_phenomenon_form_entries', true );
$select = 'Another';
if ( ! $songs ) {
	$songs  = array();
	$select = 'a';
}

$songs_array = array();
for ( $i = 1; $i < 11; $i++ ) {
	$songs_array[] = get_field( 'phenomenon_song_' . $i, 'options' );
}

$is_first_time = ( isset( $_GET['intro'] ) && 'false' == $_GET['intro'] ); 
$style = false;

if ( ! $is_first_time ) :
	$style = 'display:none';
	?>

	<div class="met-phenomenon-select-intro-btn">
		<div id="met-phenomenon-select-intro-panel-1" class="met-phenomenon-select-intro-panel met-phenomenon-intro-panel">
			<h2>Welcome Back:</h2>
			<h3><strong><em>A quick reminder –</em></strong></h3>
			<ul>
				<li>Simply choose a music track, listen and provide a few responses as you go forward. </li>
				<li>Each piece will take about 10 minutes.  Finish all in one session – or take your time.</li>
				<li>It is best to listen to the music on airpods or headphones in the same quiet setting.</li>
				<li>You will see your results in real time as compared to overall results after each track.</li>
			</ul>
			<h3><strong><em>Let’s Do Research ! </em> Click Continue. </strong></h3>
		</div>
		<div class="met-phenomenon-select-intro-btn-container text-center">
			<a href="#" class="btn btn-lg btn-phenomenon met-phenomenon-select-intro-btn" data-panel="1">Continue <i class="fas fa-play-circle"></i></a>
		</div>
	</div>

<?php endif; ?>

<div class="met-phenomenon-select-panel text-center" style="<?php echo esc_attr( $style ); ?>">
	<h2><em>Select <?php echo $select; ?> Music Track</em></h2>
	<div class="row">
		<div class="col-sm-offset-1 col-xs-4 col-sm-2">
			<a href="#" class="met-phenomenon-select-panel-number <?php if ( isset( $songs[1] ) ) echo 'disabled'; ?>" data-track="1" data-src="<?php echo esc_attr( $songs_array[0]['mp3_url'] ); ?>" data-title="<?php echo esc_attr( $songs_array[0]['song_title'] ); ?>"><span>1</span></a>
		</div>
		<div class="col-xs-4 col-sm-2">
			<a href="#" class="met-phenomenon-select-panel-number <?php if ( isset( $songs[2] ) ) echo 'disabled'; ?>" data-track="2" data-src="<?php echo esc_attr( $songs_array[1]['mp3_url'] ); ?>" data-title="<?php echo esc_attr( $songs_array[1]['song_title'] ); ?>"><span>2</span></a>
		</div>
		<div class="col-xs-4 col-sm-2">
			<a href="#" class="met-phenomenon-select-panel-number <?php if ( isset( $songs[3] ) ) echo 'disabled'; ?>" data-track="3" data-src="<?php echo esc_attr( $songs_array[2]['mp3_url'] ); ?>" data-title="<?php echo esc_attr( $songs_array[2]['song_title'] ); ?>"><span>3</span></a>
		</div>
		<div class="col-xs-4 col-sm-2">
			<a href="#" class="met-phenomenon-select-panel-number <?php if ( isset( $songs[4] ) ) echo 'disabled'; ?>" data-track="4" data-src="<?php echo esc_attr( $songs_array[3]['mp3_url'] ); ?>" data-title="<?php echo esc_attr( $songs_array[3]['song_title'] ); ?>"><span>4</span></a>
		</div>
		<div class="col-xs-4 col-sm-2">
			<a href="#" class="met-phenomenon-select-panel-number <?php if ( isset( $songs[5] ) ) echo 'disabled'; ?>" data-track="5" data-src="<?php echo esc_attr( $songs_array[4]['mp3_url'] ); ?>" data-title="<?php echo esc_attr( $songs_array[4]['song_title'] ); ?>"><span>5</span></a>
		</div>
		<div class="col-sm-offset-1 col-xs-4 col-sm-2">
			<a href="#" class="met-phenomenon-select-panel-number <?php if ( isset( $songs[6] ) ) echo 'disabled'; ?>" data-track="6" data-src="<?php echo esc_attr( $songs_array[5]['mp3_url'] ); ?>" data-title="<?php echo esc_attr( $songs_array[5]['song_title'] ); ?>"><span>6</span></a>
		</div>
		<div class="col-xs-4 col-sm-2">
			<a href="#" class="met-phenomenon-select-panel-number <?php if ( isset( $songs[7] ) ) echo 'disabled'; ?>" data-track="7" data-src="<?php echo esc_attr( $songs_array[6]['mp3_url'] ); ?>" data-title="<?php echo esc_attr( $songs_array[6]['song_title'] ); ?>"><span>7</span></a>
		</div>
		<div class="col-xs-4 col-sm-2">
			<a href="#" class="met-phenomenon-select-panel-number <?php if ( isset( $songs[8] ) ) echo 'disabled'; ?>" data-track="8" data-src="<?php echo esc_attr( $songs_array[7]['mp3_url'] ); ?>" data-title="<?php echo esc_attr( $songs_array[7]['song_title'] ); ?>"><span>8</span></a>
		</div>
		<div class="col-xs-4 col-sm-2">
			<a href="#" class="met-phenomenon-select-panel-number <?php if ( isset( $songs[9] ) ) echo 'disabled'; ?>" data-track="9" data-src="<?php echo esc_attr( $songs_array[8]['mp3_url'] ); ?>" data-title="<?php echo esc_attr( $songs_array[8]['song_title'] ); ?>"><span>9</span></a>
		</div>
		<div class="col-xs-4 col-sm-2">
			<a href="#" class="met-phenomenon-select-panel-number <?php if ( isset( $songs[10] ) ) echo 'disabled'; ?>" data-track="10" data-src="<?php echo esc_attr( $songs_array[9]['mp3_url'] ); ?>" data-title="<?php echo esc_attr( $songs_array[9]['song_title'] ); ?>"><span>10</span></a>
		</div>
	</div>
</div>