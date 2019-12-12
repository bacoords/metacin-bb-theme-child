<?php 
/**
 * Template Name: Sensation Page
 */
get_header();
?>

<div class="fl-content-full container">
	<div class="row">
		<div class="fl-content col-md-12">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					get_template_part( 'content', 'page' );
				endwhile;
			endif;
			?>
		</div>
	</div>	

	<?php if ( rcp_user_can_access() ) : ?>

		<div class="met-sensation">

			<?php if ( ! get_user_meta( get_current_user_id(), '_met_sensation_viewed_intro', true ) ) : ?>

				<?php get_template_part( 'templates/sensation/intro' ); ?>

			<?php elseif ( ! get_user_meta( get_current_user_id(), '_met_sensation_submitted_survey', true ) ) : ?>

				<?php get_template_part( 'templates/sensation/survey' ); ?>

			<?php else : ?>

				<?php if ( isset( $_GET['song'] ) ) : ?>

					<?php get_template_part( 'templates/sensation/song', 'results' ); ?>

				<?php else : ?>

					<?php get_template_part( 'templates/sensation/song', 'select' ); ?>

					<?php get_template_part( 'templates/sensation/song', 'form' ); ?>

				<?php endif; ?>

			<?php endif; ?>

		</div>

	<?php endif; ?>

</div>

<?php get_footer(); ?>
