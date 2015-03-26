<?php /*//Template Name: 3-col-hexagons//*/ ?>

<?php get_header(); ?>
	<div class="nosotros">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div id="block" class="cover">
				<h1><?php the_title(); ?></h1>
				<p><?php the_excerpt(); ?></p>
				<span>
					<h3>&#xf103;</h3>
				</span>
			</div>
			<div id="block2">
				<div class="hexa-hold">
					<article class="hexa1">
						<section>
							<?php the_field('hexa1'); ?>
						</section>
						<div class="face1"></div>
						<div class="face2"></div>
					</article>
					<div class="hexa2 ">
					  <h2><?php the_field('hexa-title-1'); ?></h2>
					  <div class="face1"></div>
					  <div class="face2"></div>
					</div>
				</div>
				<div class="hexa-hold">
					<article class="hexa1">
						<section>
							<?php the_field('hexa2'); ?>
						</section>
						<div class="face1"></div>
						<div class="face2"></div>
					</article>
					<div class="hexa2 ">
					  <h2><?php the_field('hexa-title-2'); ?></h2>
					  <div class="face1"></div>
					  <div class="face2"></div>
					</div>
				</div>
				<div class="hexa-hold">
					<article class="hexa1">
						<section>
							<?php the_field('hexa3'); ?>
						</section>
						<div class="face1"></div>
						<div class="face2"></div>
					</article>
					<div class="hexa2 ">
					  <h2><?php the_field('hexa-title-3'); ?></h2>
					  <div class="face1"></div>
					  <div class="face2"></div>
					</div>
				</div>
			</div>
		<?php endwhile; else : ?>
	<p><?php _e( 'Disculpa, no hemos encontrado nada.' ); ?></p>
<?php endif; ?>
	</div>
<?php get_footer(); ?>
