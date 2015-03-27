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





	if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);



	function my_jquery_enqueue() {



	   wp_deregister_script('jquery');



	   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js", false, null);



	   wp_enqueue_script('jquery');



	}







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







?>