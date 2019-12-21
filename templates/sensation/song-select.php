<?php 
$songs  = get_user_meta( get_current_user_id(), '_met_sensation_form_entries', true );
$select = 'Another';
if ( ! $songs ) {
	$songs  = array();
	$select = 'a';
}
?>

<div class="met-sensation-select-panel text-center">
	<h2><em>Select <?php echo $select; ?> Music Track</em></h2>
	<div class="row">
		<div class="col-sm-offset-1 col-xs-4 col-sm-2">
			<a href="#" class="met-sensation-select-panel-number <?php if ( isset( $songs[1] ) ) echo 'disabled'; ?>" data-track="1" data-src="<?php echo esc_attr( get_stylesheet_directory_uri() . '/templates/sensation/odyssey.mp3' ); ?>" data-title=""><span>1</span></a>
		</div>
		<div class="col-xs-4 col-sm-2">
			<a href="#" class="met-sensation-select-panel-number <?php if ( isset( $songs[2] ) ) echo 'disabled'; ?>" data-track="2" data-src="" data-title=""><span>2</span></a>
		</div>
		<div class="col-xs-4 col-sm-2">
			<a href="#" class="met-sensation-select-panel-number <?php if ( isset( $songs[3] ) ) echo 'disabled'; ?>" data-track="3" data-src="" data-title=""><span>3</span></a>
		</div>
		<div class="col-xs-4 col-sm-2">
			<a href="#" class="met-sensation-select-panel-number <?php if ( isset( $songs[4] ) ) echo 'disabled'; ?>" data-track="4" data-src="" data-title=""><span>4</span></a>
		</div>
		<div class="col-xs-4 col-sm-2">
			<a href="#" class="met-sensation-select-panel-number <?php if ( isset( $songs[5] ) ) echo 'disabled'; ?>" data-track="5" data-src="" data-title=""><span>5</span></a>
		</div>
		<div class="col-sm-offset-1 col-xs-4 col-sm-2">
			<a href="#" class="met-sensation-select-panel-number <?php if ( isset( $songs[6] ) ) echo 'disabled'; ?>" data-track="6" data-src="" data-title=""><span>6</span></a>
		</div>
		<div class="col-xs-4 col-sm-2">
			<a href="#" class="met-sensation-select-panel-number <?php if ( isset( $songs[7] ) ) echo 'disabled'; ?>" data-track="7" data-src="" data-title=""><span>7</span></a>
		</div>
		<div class="col-xs-4 col-sm-2">
			<a href="#" class="met-sensation-select-panel-number <?php if ( isset( $songs[8] ) ) echo 'disabled'; ?>" data-track="8" data-src="" data-title=""><span>8</span></a>
		</div>
		<div class="col-xs-4 col-sm-2">
			<a href="#" class="met-sensation-select-panel-number <?php if ( isset( $songs[9] ) ) echo 'disabled'; ?>" data-track="9" data-src="" data-title=""><span>9</span></a>
		</div>
		<div class="col-xs-4 col-sm-2">
			<a href="#" class="met-sensation-select-panel-number <?php if ( isset( $songs[10] ) ) echo 'disabled'; ?>" data-track="10" data-src="" data-title=""><span>10</span></a>
		</div>
	</div>
</div>