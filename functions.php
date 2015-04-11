<?php





define( 'TEMPPATH',  get_bloginfo('stylesheet_directory'));

define( 'IMAGES', TEMPPATH. "/images");





add_action( 'init', 'register_my_menus' );



function register_my_menus() {

	register_nav_menus(

		array(

			'main-nav' => __( 'Primary Menu' ),

			'cat-menu' => __( 'Secondary Menu' )

			

		)

	);

}









/*//////sidebar lateral////////*///



	if ( function_exists( 'register_sidebar' ) ) {

		register_sidebar( array (

		'name' => __( 'Primary Sidebar', 'primary-sidebar' ),

		'id' => 'primary-widget-area',

		'description' => __( 'The primary widget area', 'dir' ),

		'before_widget' => '<div class="widget">',

		'after_widget' => "</div>",

		'before_title' => '<h3 class="widget-title">',

		'after_title' => '</h3>',

		) );



		register_sidebar(array(

		'name'=> 'top widget',

		'id' => 'widget-counter'

		// 'before_widget' => '<li id="%1$s" class="widget %2$s">',

		// 'after_widget' => '</li>',

		// 'before_title' => '<h3>',

		// 'after_title' => '</h3>',

	));



	}





	add_theme_support( 'post-thumbnails' );





/*///////register scripts/////*/




	function my_scripts_method() {

		wp_enqueue_script(

			'custom-script',

			get_stylesheet_directory_uri() . '/scripts/min/effects.min.js',

			array( 'jquery' )

		);

	}



	add_action( 'wp_enqueue_scripts', 'my_scripts_method' );






	function swipe_menu_method() {

		wp_enqueue_script(

			'custom-script',

			get_stylesheet_directory_uri() . '/scripts/min/jquery.touchSwipe.min.js',

			array( 'jquery' )

		);

	}



	add_action( 'wp_enqueue_scripts', 'my_scripts_method' );







/*///////foot widgets////////*/

	function footwidgets() {

	 

	        register_sidebar( array(

	                'name'                  =>      __( 'Footer One', 'the-bootstrap' ),

	                'id'                    =>      'footer-1',

	                'before_widget' =>      '<aside id="%1$s" class="widget well %2$s">',

	                'after_widget'  =>      '</aside>',

	                'before_title'  =>      '<h3 class="widget-title">',

	                'after_title'   =>      '</h3>',

	        ) );

	       

	        register_sidebar( array(

	                'name'                  =>      __( 'Footer Two', 'the-bootstrap' ),

	                'id'                    =>      'footer-2',

	                'before_widget' =>      '<aside id="%1$s" class="widget well %2$s">',

	                'after_widget'  =>      '</aside>',

	                'before_title'  =>      '<h3 class="widget-title">',

	                'after_title'   =>      '</h3>',

	        ) );

	       

	        register_sidebar( array(

	                'name'                  =>      __( 'Footer Three', 'the-bootstrap' ),

	                'id'                    =>      'footer-3',

	                'before_widget' =>      '<aside id="%1$s" class="widget %2$s">',

	                'after_widget'  =>      '</aside>',

	                'before_title'  =>      '<h3 class="widget-title">',

	                'after_title'   =>      '</h3>',

	        ) );



	        register_sidebar( array(

	                'name'                  =>      __( 'Footer Four', 'the-bootstrap' ),

	                'id'                    =>      'footer-4',

	                'before_widget' =>      '<aside id="%1$s" class="widget %2$s">',

	                'after_widget'  =>      '</aside>',

	                'before_title'  =>      '<h3 class="widget-title">',

	                'after_title'   =>      '</h3>',

	        ) );                   

	}

	add_action( 'widgets_init', 'footwidgets' );

	



	add_action( 'after_setup_theme', 'woocommerce_support' );

	function woocommerce_support() {

	    add_theme_support( 'woocommerce' );

	}



/*///////shortcodes//////////*/

//hotlink al sitio

function url_shortcut($params = array()) {
	
	extract(shortcode_atts(array(
		"sub" => ""
	), $params));
	
	return get_bloginfo('url') . '/' . $params['sub'];
}


add_shortcode('site-url','url_shortcut');



//hotlink a las imagenes

function url_shortcode($atts, $content = null ) {

return '<img src="' . get_stylesheet_directory_uri() . '/images/' . $content . '"/>';

}

add_shortcode('hotlink','url_shortcode');





//hotlink a las imagenes con enlace

function imgurl_shortcode($atts, $content = null) {

return '<a href="'. get_site_url() . '/crear-cuenta"><img src="' . get_stylesheet_directory_uri() . '/images/' . $content . '"/></a>';

}

add_shortcode('a-hotlink','imgurl_shortcode');







//woocomemrce slices of code



	function address_box(){
		echo wc_get_template( 'myaccount/my-address.php' );
	}

	add_shortcode('wc_a_box', 'address_box');




//user

function user_logged(){
	if ( is_user_logged_in() ) :
 
    $current_user = wp_get_current_user();

    echo '<h3> Bienvenido ' . $current_user->display_name . '</h3>';

else :
        echo 'no hay nigun usuario logeado';

    endif;
}


add_shortcode( 'logged-user', 'user_logged' );


//logout

function iweb_logout_url_shortcode() {
	return '<a class="logut-but" href="' . wp_logout_url() . '"><span>&#xf084;</span>Cerrar session</a>';
}
add_shortcode( 'logout-but', 'iweb_logout_url_shortcode' );




//editar perfil

function edit_profile(){
	return '<a class="logut-but" href="' . get_bloginfo('url') . '/mi-cuenta/editar-perfil"><span>&#xf044;</span>Editar perfil</a>';
}

add_shortcode( 'edit-but', 'edit_profile' ); 


?>