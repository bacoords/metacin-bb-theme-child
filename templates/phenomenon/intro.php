<form method="post" action="<?php home_url( 'laboratory/phenomenon' ); ?>" class="met-phenomenon-intro">
	<input type="hidden" name="met_action" value="_met_phenomenon_viewed_intro">
	<input type="hidden" name="user_id" value="<?php echo esc_attr( get_current_user_id() ); ?>">
	<?php wp_nonce_field( '_met_phenomenon_viewed_intro', '_met_phenomenon_viewed_intro_nonce' ); ?>
	<div id="met-phenomenon-intro-panel-1" class="met-phenomenon-intro-panel">
		<h2>Introduction:</h2>
		<p>Music is a universal human experience.  It is present in every culture on earth—tracing from primeval sounds of nature—to rhythms of early civilization—to melodies in modern language —to the highest forms of symphony.  Even today, music is shaping every tradition and generation.</p> 	
		<p>The fundamental elements of music include pitch, tone, volume and time.  Patterns of these acoustic elements create motifs—structure, anticipation and relativity—that govern musical imagery.  As in spoken languages, arrangement of elements and motifs in music provides syntax and conveys meaning.  Musical patterns have the potential to improve lives—to remember, learn, create, heal and move.  Music may enhance life and its meaning.  Yet, how music achieves these effects is just beginning to be understood.</p>
		<p>Can music attune sense and response networks of the mind in ways that promote health and wellness?  <strong>Music Imagery Research</strong> is an innovative educational project designed to explore human responses to music—and how these responses may improve quality of life.</p>
	</div>
	<div id="met-phenomenon-intro-panel-2" class="met-phenomenon-intro-panel" style="display:none;">
		<h2>Participation:</h2>
		<p>	There is a profound difference between the brain and the mind.  The human brain is a sensor—complex but concrete.  The human mind is an interpreter—elegant but elusive.  The brain and mind are the difference between data and wisdom.  Music can connect the two.</p> 	
		<p>	Specific regions of the brain are dedicated to perform certain functions.  Sight—speech—smell—touch.  Yet, there is no singular area of the human brain devoted to sense and response to music or its meaning.  Rather, music stimulates many diverse regions of the brain—from intuition and imagery—to emotion and memory.  Music weaves many senses into an enduring tapestry.</p>
		<p>	The <strong><em>Music Imagery Research (MIR)</em></strong> project invites you to participate in new research that aims to better understand how music is perceived and interpreted.  By volunteering as an <strong><em>MIR</em></strong> study member, you simply listen and provide a few responses to 10 original musical pieces.  </p>
	</div>
	<div id="met-phenomenon-intro-panel-3" class="met-phenomenon-intro-panel" style="display:none;">
		<h2>Appreciation:</h2>
		<p>The Music Imagery Research project is designed and conducted as a biomedical research project.  It has been reviewed and approved by an institutional review board (IRB) to ensure all data gathering, analysis and presentation follow best practices.</p> 	
		<p>One ideal way for the results of this research to make a difference to medical knowledge will be to publish it in an academic or medical journal or other media.  Your individual responses will not be publicized; only anonymous results from all the collective participant responses may be published.  Neither your name nor any identifying information about you will be made public.</p>
		<p class="met-phenomenon-blue"><strong>Thank you for being a valued member of the Metacin music research community.</strong></p>
		<div class="form-group">
			<input type="checkbox" id="_met_phenomenon_viewed_intro" name="_met_phenomenon_viewed_intro" class="form-check" value="1" required />
			<label for="_met_phenomenon_viewed_intro">
				I acknowledge and agree.
			</label>
		</div>
	</div>

	<div class="met-phenomenon-intro-btn-container text-center">
		<a href="#" class="btn btn-lg btn-phenomenon met-phenomenon-intro-btn" data-panel="1">Continue <i class="fas fa-play-circle"></i></a>
	</div>
	<div class="met-phenomenon-intro-submit-container text-center" style="display:none">
		<button type="submit" class="btn btn-lg btn-phenomenon met-phenomenon-submit-btn" data-panel="1">Continue <i class="fas fa-play-circle"></i></button>
	</div>

</form>
