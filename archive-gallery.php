<?php 

get_header(); ?>
    <!--    Music Hall-->
      <div id="musicAnchor">
        <div>

        <!--  Scroll Down Indicator       -->




        <!--     Musicology Intro-->
        
             <div class="mpintro">
              <div class="mpintro__text">
               <br><br>
                <h1 class="text-center">Sound of Light</h1>
                <br><br>
                <p>Music touches every sense — from rhythm and movement to emotion and memory.  Listening to music is one way to experience its benefits — and visualizing music is another way to appreciate its patterns and meaning. </p>
                <p> Explore the art of Michael Yeaman in the <a href="#mpgal">Eye Gallery</a> to see music in a beautiful new way that is more than meets the ear. </p>
                <br><br>
                <br><br>
                <br><br>
              </div>
            </div>  



        <!--      Sound Stage Catalog-->
        <div id="mpgal" class="mpgal mpgal--gallery">
          
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          
          <div class="mpgal__item mpfadein">
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('large'); ?>
            </a>
          </div>
        
		<?php endwhile; else : ?>

			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

		 <?php endif; ?>


      </div>
     </div>
    
   
  <?php get_footer(); ?>