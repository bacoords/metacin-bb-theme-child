<?php 
/**
 * Template Name: Phenomenon Page
 */
get_header();
?>

<div class="fl-content-full container">
	<div class="row">
		<div class="fl-content col-md-12">
			<div class="text-center h3 mb-3">Welcome to the <strong><em>Metacin Laboratory ®</em></strong></div>
			<div class="h1 phenomenon-h1"><span class="text-primary"><em>Phenomenon:</em></span> Music Imagery Research</div>
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					if ( rcp_user_can_access() ) :
						get_template_part( 'content', 'page' );
					else :
						the_content();
					endif;
				endwhile;
			endif;
			?>
		</div>
	</div>	

	<?php if ( rcp_user_can_access() ) : ?>

		<div class="met-phenomenon">

			<?php if ( ! get_user_meta( get_current_user_id(), '_met_phenomenon_viewed_intro', true ) ) : ?>

				<?php get_template_part( 'templates/phenomenon/intro' ); ?>

			<?php elseif ( ! get_user_meta( get_current_user_id(), '_met_phenomenon_submitted_survey', true ) ) : ?>

				<?php get_template_part( 'templates/phenomenon/survey' ); ?>

			<?php else : ?>

				<?php if ( isset( $_GET['song'] ) ) : ?>

					<?php get_template_part( 'templates/phenomenon/song', 'results' ); ?>

				<?php else : ?>

					<?php get_template_part( 'templates/phenomenon/song', 'select' ); ?>

					<?php get_template_part( 'templates/phenomenon/song', 'form' ); ?>

				<?php endif; ?>

			<?php endif; ?>

		</div>

	<?php endif; ?>

</div>

<?php get_footer(); ?>
