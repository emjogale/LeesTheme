<?php
//load stylesheets
function load_css(){

	wp_register_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css', array(),false,'all');
	wp_enqueue_style('bootstrap');

	wp_register_style('main',get_template_directory_uri().'/css/main.css', array(),false,'all');
	wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'load_css');

//load js
function load_js(){

	wp_enqueue_script('jquery');
	wp_register_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', 'jquery', false, true);
	wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'load_js');

//load fonts
function wpb_add_google_fonts() {
 
	wp_enqueue_style( 'wpb-google-fonts', '<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;600&display=swap" rel="stylesheet">', false ); 
	}
	 
	add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

//Theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

//Menus
register_nav_menus(
	array(
		'top-menu' => 'Top Menu Location',
		'mobile-menu' => 'Mobile Menu Location',
		'footer-menu' => 'Footer Menu Location',
		'side-page-menu' => 'Side of page Location'
	)
);

//Register sidebars
function my_sidebars(){
	register_sidebar(
		array('name' => 'Page Sidebar',
			  'id' => 'page-sidebar',
			  'before_title' => '<h4 class="Widget-title">',
			  'after_title' => '</h4>'
	 )

	);

	register_sidebar(
		array('name' => 'Blog Sidebar',
			  'id' => 'blog-sidebar',
			  'before_title' => '<h4 class="Widget-title">',
			  'after_title' => '</h4>'
	 )

	);
}
add_action('widgets_init','my_sidebars');

//Custom image sizes
add_image_size('blog-large', 900, 700, false);
add_image_size('blog-small', 280, 280, false);

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}

// change the read more ellipsis
function change_link_excerpt( $more ) {
	if ( is_admin() ) {
		return $more;
	}

	// Change text to ..., and return change
	return '... ';
 }
 add_filter( 'excerpt_more', 'change_link_excerpt', 999 );

// customise the excerpt
// function my_excerpts( $length ) {
// 	// Don't change anything inside /wp-admin/
// 	if ( is_admin() ) {
// 		return $length;
// 	}
// 	// Set excerpt length to 30 words
// 	return 30;
// }
// // "999" priority makes this run last of all the functions hooked to this filter, meaning it overrides them
// add_filter( 'excerpt_length', 'my_excerpts', 999 );