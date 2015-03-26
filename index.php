<?php /*// template name: Inicio //*/ ?>

<?php  get_header(); ?>



	<div id="content">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div id="content">

				<div id="block" class="slider">

					<?php echo do_shortcode('[layerslider id="2"]'); ?>

				</div>

				<div class="content-area">

					<?php the_content(); ?>

				</div>

			</div>

	<?php endwhile; else : ?>

		<p><?php _e( 'Disculpa, no hemos encontrado nada.' ); ?></p>

	<?php endif; ?>

	</div>



<?php  get_footer(); ?>