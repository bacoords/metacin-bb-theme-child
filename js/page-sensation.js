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

		$('.met-sensation-select-panel-number').click(function(e){
			e.preventDefault()
			$(this).toggleClass('active');
			$('#met-sensation-select-form').slideToggle();

			// Set up song and hidden inputs.
		});


		if ( $('#plyr').length > 0 ) {
			var plyr = new Plyr('#plyr');
		}

	});

})( jQuery );