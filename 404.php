<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
  */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<div id="wrapp">
			<div class="cuatrocerocuatro">
				<header class="page-header">
					<h1 class="page-title"><?php _e( '¡Aqui  no hay  nada!', 'twentythirteen' ); ?></h1>
				</header>
					<h2><?php _e( 'Es algo  embarazoso, no crees?', 'twentythirteen' ); ?></h2>
					<p><?php _e( 'Aquí al parecer no se encuentra lo que estas buscando. Que tal si buscas de nuevo?', 'twentythirteen' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>