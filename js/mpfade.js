
jQuery( document ).ready(function( $ ) {
	
  // Adds class to appear on animation
  function mpFadeIn() {

    var $window = $(window);
    var $animation_elements = $('.mpfadein');

    var window_height = $window.height();
    var window_top_position = ($window.scrollTop() + 200);
    var window_bottom_position = (window_top_position + window_height - 150);

    $.each($animation_elements, function() {
      var $element = $(this);
      var element_height = $element.outerHeight();
      var element_top_position = $element.offset().top;
      var element_bottom_position = (element_top_position + element_height);

      //check to see if this current container is within viewport
      if ((element_bottom_position >= window_top_position) &&
        (element_top_position <= window_bottom_position)) {
        $element.addClass('mpfadein--active');
      } else {
        $element.removeClass('mpfadein--active');
      }
    });
  }
	
	
	mpFadeIn();
	var $window = $(window);
	$window.on('scroll resize', mpFadeIn);
	$window.trigger('scroll');

	
	
	//Play AUdio
	var playing = false;
	
      function playAudio(){ // Triggers audio
        $('.mpcard--music').addClass('hover');
        if(!playing){
          $('.mpaudio__player').get(0).play();  
          $('.mpcard__back__inner > i').removeClass('fa-play-circle').addClass('fa-pause');
        } else {
          $('.mpaudio__player').get(0).pause();
          $('.mpcard__back__inner > i').removeClass('fa-pause').addClass('fa-play-circle');
        }
        playing = !playing;
        return;
      }
	
	$('#mp-audio-player').click(playAudio);
	
});