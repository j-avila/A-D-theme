 <html>

	<head>

	  <meta charset="utf-8" />

		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<meta name="HandheldFriendly" content="true">

		<title><?php wp_title( '&laquo;', true, 'right' ); ?><?php bloginfo('name'); ?></title>

		<link rel="shortcut icon" href="<?php print IMAGES; ?>/favico-ad.png">

		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">

		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

		<!--WP generated header -->

		<?php wp_head(); ?>

	</head>



	<body>

		<div class="login">

			<div class="log-box">

				<button class="close">
					X
				</button>
			
				<p>

					Si eres cliente nuevo y quieres alertar tus envíos debes Registrarte para que nos
					informes tu dirección de entrega y los detalles de los paquetes que enviarás a nuestra dirección

				</p>

					<?php echo do_shortcode('[wppb-login]'); ?>

					<a class="reg-button"><img src="<?php print IMAGES; ?>/registro.png" alt=""></a>
			</div>

		</div>

		<header>

			

			<nav>

				<figure><a href=" <?php echo get_option('home'); ?>"><img src="<?php print IMAGES ?>/logo.png" alt="A$amp;DExpress"></a></figure>

				 <?php wp_nav_menu( array( 'theme_location' => 'main-nav' ) ); ?>



				<ul class="social">

					<li><a class="" href="">&#xf09a;</a></li>

					<li><a class="" href="">&#xf16d;</a></li>

					<li><a class="" href="">&#xf099;</a></li>

					<li><a class="" href="<?php echo get_site_url(); ?>/cart">&#xf07a;</a></li>

					<li><a class="user-log" href="#">&#xf007;</a></li>

				</ul>

			</nav>

			

		</header>



	

