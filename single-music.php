<?php get_header(); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <div>
        <div class="mpmodal__box">
          <div class="mpalbum">
            <div class="mpalbum__close">
              <a class="mpmodal__exit" href="<?php echo home_url('music'); ?>">&#x2715;</a>
            </div>
            <div class="mpalbum__body">
              <div class="mpalbum__image">
                <?php the_post_thumbnail('full'); ?>
              </div>
              <div class="mpalbum__description">
                <div class="mpalbum__title">
                  <?php the_title('<h3>','</h3>'); ?>
                </div>
                <div class="mpalbum__content">
                  <?php $content = get_the_content(); if( !empty($content) ): ?>
					  <h4>Teaser</h4>
					  <div><?php the_content(); ?></div>
                  <?php endif; ?>
                  <small><?php echo get_post_meta( get_the_ID(), '_met_release', true ); ?></small>
                </div>
                <div class="mpalbum__footer">

                  <div class="mpalbum__tracks">
                    <div>
                      <h4>Track Listing</h4>
                      
                      <ul id="track-listing">
                      </ul>
                      
                    </div>
                  </div>
                  
                  <?php 
					  $itunes = get_post_meta( get_the_ID(), '_met_itunes', true );
					  $google_play = get_post_meta( get_the_ID(), '_met_google_play', true );
					  $amazon = get_post_meta( get_the_ID(), '_met_amazon', true );
					  $spotify = get_post_meta( get_the_ID(), '_met_spotify', true );
					
					  ?>
                  
                  <div class="mpalbum__downloadheader">
                    <h4>Listen Now</h4>
                  </div>
                  
                  
                  <div class="mpalbum__download">
                  		
                   		<?php if( $itunes ) : ?>
                    			<a href="<?php echo $itunes; ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-itunes.png" alt="Available on iTunes"></a>
                    	<?php endif; ?>
                    	
                   		<?php if( $google_play ) : ?>
                    		<a href="<?php echo $google_play; ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/google-play.png" alt="Listen on Spotify"></a>
                    	<?php endif; ?>
                    	
                   		<?php if( $amazon ) : ?>
                    		<a href="<?php echo $amazon; ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-amazon.png" alt="Available on Amazon Music"></a>
                    	<?php endif; ?>
                    	
                   		<?php if( $spotify ) : ?>
                    			<a href="<?php echo $spotify; ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-spotify.png" alt="Available on Spotify"></a>
                    	<?php endif; ?>
                    
                    
                    			<a href="https://www.pandora.com/artist/michael-yeaman/ARXJpjtfb9hjXcX" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-pandora.jpg" alt="Available on Pandora"></a>
                  </div>
                  
                </div>
              
              </div>
              
            </div>
            
            </div>
            
          </div>

        </div>


		<script>

			jQuery( document ).ready(function( $ ) {

				 function msToTime(duration) {
					  var milliseconds = parseInt((duration%1000)/100)
						  , seconds = parseInt((duration/1000)%60)
						  , minutes = parseInt((duration/(1000*60))%60)
						  , hours = parseInt((duration/(1000*60*60))%24);

					  hours = (hours < 10) ? "0" + hours : hours;
					  seconds = (seconds < 10) ? "0" + seconds : seconds;

					  return minutes + ":" + seconds;
				  }

				$.getJSON('https://itunes.apple.com/lookup?id=<?php echo get_post_meta( get_the_ID(), '_met_itunes_id', true ); ?>&entity=song', function( response ){

					var tracks = '';
					
					response.results.splice(0,1);

					$.each(response.results, function(key, value){
						var num = key + 1;
						tracks += '<li>' + 
						  '<span>' + num + '. ' + value.trackName + '</span>' +
                          '<span>' + msToTime(value.trackTimeMillis) + '</span>' +
						  '</li>';	

					});
					
					$('#track-listing').html( tracks );
					

				});


			});

		</script>


        
	<?php endwhile; else : ?>

		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

	 <?php endif; ?>



<?php get_footer(); ?>