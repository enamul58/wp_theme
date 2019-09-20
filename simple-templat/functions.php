<?php
 // 
// Register style sheet.
add_action( 'wp_enqueue_scripts', 'register_plugin_styles' );

/**
 * Register style sheet.
 */
function register_plugin_styles() {
	wp_enqueue_style('custom-style', get_template_directory_uri(). '/css/custom.css',array(),'1.0.0','all');
	wp_enqueue_style('bootstrap', get_template_directory_uri(). '/vendor/bootstrap/css/bootstrap.min.css"',array(),'1.0.0','all');
}

 require_once get_template_directory() . '/lib/wp_nav_walker.php';

add_action('after_setup_theme','register_coustom_nav_menus');
function register_coustom_nav_menus(){
 register_nav_menus( array(
 	'primery' => 'Primery Menus',
 	'footer' => 'Footer Menus'
 ));
}

//widget

function custom_register_sidebar(){
register_sidebar( array(
	'name' =>'Main-sidebar',
	'id'   => 'main-sidebar',
	'description' =>'widgets in this area will be show on all posts pages',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget'  => '</aside>',
	'before_title'  =>'<h1 class="widgettitle">',
	'after_title'   =>'</h1>'
));
register_sidebar( array(
    'name' => 'Custom Footer',
    'id' => 'custom-footer',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );
}
add_action('widgets_init', 'custom_register_sidebar');




//background
// add_theme_support( 'custom-background');
add_theme_support('post-formats', array('aside','image','video'));


add_theme_support( 'post-thumbnails' );
// //set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)

// // additional image sizes
// // delete the next line if you do not need additional image sizes
// add_image_size( 'post-thumb', 300, 300 ); //300 pixels wide (and unlimited height)
// add_image_size( 'category-thumb', 500, 500 ); //300 pixels wide (and unlimited height)
// add_image_size( 'product-thumb', 700, 700 ); //300 pixels wide (and unlimited height)
// //custom wight




//excerpt length
function set_excerpt_lenght(){
	return 40;
}
add_filter('excerpt_length','set_excerpt_lenght');