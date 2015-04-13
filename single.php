<?php  get_header(); ?>



	<div id="single-page">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div class="cover">

				<h1> <?php the_title(); ?>	</h1>

				<section>

					 <?php the_excerpt(); ?>

				</section>

			</div>
			
			<div class="content-hold">

				<?php the_content(); ?>	

			</div>

			

		<?php endwhile; else : ?>

			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

		<?php endif; ?>	

	</div>



<?php get_footer(); ?>

