(function($) {

	function getUrlVars() {
		var vars = {};
		var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
			vars[key] = value;
		});
		return vars;
	}

	$(document).ready(function($){

		$('.met-sensation-intro-btn').click(function(e){
			e.preventDefault();
			var panel = $(this).data('panel') + 1,
				id = "#met-sensation-intro-panel-" + panel;
				idNext = "#met-sensation-intro-panel-" + ( panel + 1 );
			if ( $(id).length > 0 ) {
				$('.met-sensation-intro-panel').hide();
				$(id).show();
				$(this).data( 'panel', panel );
			}
			if ( $(idNext).length == 0 ) {
				$('.met-sensation-intro-btn-container').hide();
				$('.met-sensation-intro-submit-container').show();
			}
			
		});

		if ( $('#plyr').length > 0 ) {
			var plyr = new Plyr('#plyr', { settings: [] });
		}

		var clicked = false;

		$('.met-sensation-select-panel-number').click(function(e){

			e.preventDefault();

			if ( $(this).hasClass('disabled') || clicked ) {
				return;
			}
			$(this).toggleClass('active');
			$('#met-sensation-select-form').slideToggle();

			clicked = true;
			
			// Set up song and hidden inputs.
			var song = $(this).data('src');
			var id = $(this).data('track');
			var title = $(this).data('title');
			plyr.source = {
				type: 'audio',
				title: title,
				sources: [
					{
						src: song,
						type: 'audio/mp3',
					},
				],
			};

			$('#_met_sensation_song_id').val(id);
			$('#_met_sensation_song_src').val(song);
			$('#met-sensation-select-form').attr('action', sensation.formAction + '?song=' + id);

		});

		if ( $('#totalResults').length > 0 ) {
			var song = getUrlVars()['song'];
			var backgroundColors = [];
			var borderColors = [];
			for ( var i = 1; i < 11; i++ ) {
				if ( song == i ) {
					backgroundColors.push( 'rgba(0, 0, 255, 0.5)' );
					borderColors.push( 'rgba(0, 0, 255, 1)' );
				} else {
					backgroundColors.push( 'rgba(0, 0, 0, 0.5)' );
					borderColors.push( 'rgba(0, 0, 0, 1)' );
				}
				
			}

			var ctx = document.getElementById('totalResults').getContext('2d');
			var totalResults = new Chart(ctx, {
				type: 'bar',
				data: {
					labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'],
					datasets: [{
						label: 'Rating',
						data: sensation.totalResults,
						backgroundColor: backgroundColors,
						borderColor: borderColors,
						borderWidth: 1
					}]
				},
				options: {
					legend: false,
					scales: {
						xAxes: [{
							scaleLabel: {
							  display: true,
							  labelString: 'Track',
							  fontSize: 18,
							  fontWeight: 700
							}
						}],
						yAxes: [{
							scaleLabel: {
							  display: true,
							  labelString: 'Rating',
							  fontSize: 18,
							  fontWeight: 700
							},
							ticks: {
								beginAtZero: true
							}
						}]
					}
				}
			});

			var ctx = document.getElementById('myResults').getContext('2d');
			var myResults = new Chart(ctx, {
				type: 'bar',
				data: {
					labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'],
					datasets: [{
						label: 'Rating',
						data: sensation.myResults,
						backgroundColor: backgroundColors,
						borderColor: borderColors,
						borderWidth: 1
					}]
				},
				options: {
					legend: false,
					scales: {
						xAxes: [{
							scaleLabel: {
							  display: true,
							  labelString: 'Track',
							  fontSize: 18,
							  fontWeight: 700
							}
						}],
						yAxes: [{
							scaleLabel: {
							  display: true,
							  labelString: 'Rating',
							  fontSize: 18,
							  fontWeight: 700
							},
							ticks: {
								beginAtZero: true
							}
						}]
					}
				}
			});
		}



	});

})( jQuery );