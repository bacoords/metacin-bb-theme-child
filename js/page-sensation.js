(function($) {

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
			var plyr = new Plyr('#plyr');
		}



		$('.met-sensation-select-panel-number').click(function(e){
			e.preventDefault()
			if ( $(this).hasClass('disabled') ) {
				return;
			}
			$(this).toggleClass('active');
			$('#met-sensation-select-form').slideToggle();

			// Set up song and hidden inputs.
			var song = $(this).data('src');
			var id = $(this).data('track');
			plyr.source = {
				type: 'audio',
				title: 'Unknown Track',
				sources: [
					{
						src: song,
						type: 'audio/mp3',
					},
				],
			};

			$('#_met_sensation_song_id').val(id);
			$('#_met_sensation_song_src').val(song);

			var action = $('#met-sensation-select-form').attr('action');
			$('#met-sensation-select-form').attr('action', action + '?song=' + id);

		});



	});

})( jQuery );