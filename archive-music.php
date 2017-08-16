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
                <h1 class="text-center">Soundstage</h1>
                <br><br>
                <p>The essential elements of music are pitch, tone, volume and time.  Patterns of these elements govern musical structure — melody and harmony of course — but more:  motif, symmetry, proportion, relativity.  As in any language, arrangement of musical elements provides syntax and conveys meaning. </p>
                <p> Explore the music of Michael Yeaman on the <a href="#mpgal">Soundstage</a> — and go inside the music to learn more <a href="/on-the-record">On the Record</a>. </p>
                <br><br>
                <br><br>
                <br><br>
              </div>
            </div>



        <!--      Sound Stage Catalog-->
        <div id="mpgal" class="mpgal">
<!--
          <div class="mpgal__header">
            <h1>Soundstage</h1>
            <p>The essential elements of music are pitch, tone, volume and time.  Patterns of these elements govern musical structure — melody and harmony of course — but more:  motif, symmetry, proportion, relativity.  As in any language, arrangement of musical elements provides syntax and conveys meaning. </p>
          </div>
-->
          
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