<?
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


/**
 * add style scripts
 */
function add_all_styles() {
	wp_enqueue_style( 'panda-store-owl', get_template_directory_uri().'/frontend/css/owl.carousel.css' );
	wp_enqueue_style( 'panda-store-dat', get_template_directory_uri().'/frontend/css/air-datepicker.css' );
	wp_enqueue_style( 'panda-store-phone', get_template_directory_uri().'/frontend/css/intlTelInput.css' );
	wp_enqueue_style( 'panda-range', get_template_directory_uri().'/frontend/css/ion.rangeSlider.css' );
	wp_enqueue_style( 'colorbox', get_template_directory_uri().'/frontend/css/colorbox.css' );
	
	// wp_enqueue_style( 'panda-store-scroll', get_template_directory_uri().'/frontend/css/lightbox.css' );
	wp_enqueue_style( 'panda-store-main', get_template_directory_uri().'/frontend/css/style.css?ver='.time() );
//	wp_enqueue_style( 'panda-store-lightbox', get_template_directory_uri().'/frontend/css/lightbox.css' );

}
add_action( 'wp_enqueue_scripts', 'add_all_styles' );



// function add_all_scripts() {
// 	wp_enqueue_script( 'default-jq', get_template_directory_uri() . '/frontend/js/sourse/other-js/jquery-3.6.0.min.js' );
	
// wp_enqueue_script( 'panda-store_woo-wow', get_template_directory_uri() . '/frontend/js/wow.js'  );
// 	wp_enqueue_script( 'panda-store_woo-light-box', get_template_directory_uri() . '/frontend/js/lightbox.js'  );
	
// 	wp_enqueue_script( 'default-owl', get_template_directory_uri() . '/frontend/js/sourse/other-js/owl.carousel.js',array('jquery') );
// 	wp_enqueue_script( 'default-mask', get_template_directory_uri() . '/frontend/js/sourse/other-js/jquery.mask.js' ,array('jquery') );
	
// 	wp_enqueue_script( 'default-common', get_template_directory_uri() . '/frontend/js/common-dist.js',array('jquery'));
// 	function add_async_attribute($tag, $handle) {
// 		// add script handles to the array below
// 		$scripts_to_async = array('default-common');  
// 		foreach($scripts_to_async as $async_script) {
// 			if ($async_script === $handle) {
// 				return str_replace(' src', ' async="async" src', $tag);
// 			}
// 		}
// 		return $tag;
// 	}
// 	add_filter('script_loader_tag', 'add_async_attribute', 10, 2);
// }
// add_action( 'wp_enqueue_scripts', 'add_all_scripts' );



add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
	load_template( get_template_directory() . '/includes/carbon-fields/vendor/autoload.php' );
	\Carbon_Fields\Carbon_Fields::boot();
}

add_action( 'carbon_fields_register_fields', 'estore_register_custom_fields' );
function estore_register_custom_fields() {
	require get_template_directory() . '/includes/custom-fields-options/theme-options.php';
	require get_template_directory() . '/includes/custom-fields-options/post-meta.php';
	require get_template_directory() . '/includes/custom-fields-options/term-meta.php';
}