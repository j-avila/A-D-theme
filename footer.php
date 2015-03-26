	<footer>
		<div id="f-wrap">
			<ul class="f-block">
				<?php dynamic_sidebar('footer-1' ); ?>
			</ul>
			<div class="f-block">
				<?php dynamic_sidebar('footer-2' ); ?>
			</div>
			<div class="f-block">
				<?php dynamic_sidebar('footer-3' ); ?>
			</div>
			<div class=" f-block social">
				<?php dynamic_sidebar('footer-4' ); ?>
			</div>
			
		</div>
		<div class="pie">
				<span>
					<img src="<?php print IMAGES ?>/logo.png" alt="">
					<p>A&amp;DExpress &copy; 2015 todos los derechos reservados <a href="">Aviso Legal</a></p>
				</span>
		</div>

		<div id="wpstuff">
			<?php wp_footer(); ?>
		</div>
	</footer>


</body>
</html>