<?php get_header(); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <div>
        <div class="mpmodal__box">
          <div class="mpalbum">
           
            <div class="mpalbum__close">
              <a class="mpmodal__exit" href="<?php echo home_url('/gallery'); ?> " class="mpmodal__exit">&#x2715;</a>
            </div>
            <div class="mpalbum__body">
            
              <div class="mpalbum__image">
                <?php the_post_thumbnail('full'); ?>
                <div class="mpalbum__progress" v-if="post.cmb2.gallery_metabox_preview.audio_preview_file">
                  <div class="mpalbum__progress-bar"></div>
                </div>
              </div>
              <div class="mpalbum__description">
                <div class="mpalbum__title">
                  <?php the_title('<h3>','</h3>'); ?>
                </div>
                <div class="mpalbum__content" v-if="post.content.rendered">
                  <h4>Teaser</h4>
                  <div><?php the_content(); ?></div>
                  <small><?php echo get_post_meta( get_the_ID(), '_met_release', true ); ?></small>
                </div>
                <div class="mpalbum__songheader" v-if="post.cmb2.gallery_metabox_preview.audio_preview_file">
                  <h4>Preview</h4>
                </div>
                <div class="mpalbum__song" v-if="post.cmb2.gallery_metabox_preview.audio_preview_file">
                  <audio :src="post.cmb2.gallery_metabox_preview.audio_preview_file" controls="controls" class="mpalbum__player">

                </div>
              </div>
            </div>
          </div>

        </div>
      </div> 
    </template>
    
   <script>

		jQuery( document ).ready(function( $ ) {
			
          function initMPAlbum(){

            // Set image height
            var imgHeight = $('.mpalbum__image > img').height() + 15;
  //          console.log('height', imgHeight);
            $('.mpalbum__progress').height(imgHeight + 'px');
            $('.mpalbum__progress-bar').height(imgHeight + 'px');

            // Set image width
            var imgWidth = $('.mpalbum__image > img').width();
  //          console.log('width', imgWidth);
            $('.mpalbum__progress').width(imgWidth + 'px');


            // Track Audio Position
            $('.mpalbum__player').bind('play', function(){
              $('.mpalbum__progress-bar').width('0%');
            });

            $('.mpalbum__player').bind('timeupdate', function(){
  //            console.log (this.currentTime);
  //            console.log (this.duration);
  //            console.log ((this.currentTime / this.duration));

              $('.mpalbum__progress-bar').width(((this.currentTime / this.duration) * 100) + '%');
            });

          }
			
			
			
		  var checkExist = setInterval(function() {
             if ($('.mpalbum__image > img').width() > 0) {
                initMPAlbum();
                clearInterval(checkExist);
             }
          }, 100); // check every 100ms

		});
	</script>
        
	<?php endwhile; else : ?>

		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

	 <?php endif; ?>



<?php get_footer(); ?>