<?php /*Template name: mi cuenta*/ ?>
<?php  get_header(); ?>



	<div id="single-page">

				<?php if(is_user_logged_in()){
						
						if ( have_posts() ) : while ( have_posts() ) : the_post();
				?>

						<div class="cover">

							<h1> <?php the_title(); ?></h1>

							<section>

								 <?php the_excerpt() ?>

							</section>

						</div>
						
						<div class="content-hold">

							<?php the_content() ?>

						</div>
					
						<?php endwhile; else : ?>

							<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

						<?php endif; ?>	

					<?php }else{ ?>
					
					  <div class="login" style="display: block;">
							<div class="log-box">

								<p>Si eres cliente nuevo y quieres alertar tus envíos
								debes Registrarte para que nos informes tu dirección de
								entrega y los detalles de los paquetes que enviarás a nuestra dirección</p>

								<?php echo do_shortcode('[wppb-login]'); ?>
								<figure class="reg-button">
									<a href="http://localhost/wordpress/crear-cuenta">
										<?php echo do_shortcode('[hotlink]registro.png[/hotlink]' ) ?>
									</a>
								</figure>
							</div>
						</div>
					<?php } ?>
					


	</div>



<?php get_footer(); ?>

