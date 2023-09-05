<?
/* logo */
function logo_support() {
	add_theme_support(
		'custom-logo',
		array(
			'header-text'          => array( 'site-title', 'site-description' ),
		) 
	);
}

add_action( 'after_setup_theme', logo_support );

add_filter( 'get_custom_logo', 'change_logo_class' );

add_theme_support('title-tag');

function change_logo_class( $html ) {
	$html = str_replace( 'custom-logo-link', 'logo', $html );
	return $html;
}

function print_logo(){
	
		if( has_custom_logo() ){
			the_custom_logo();
		}else{ ?>
<a class="logo" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
<? } 
	
}


add_filter('bcn_breadcrumb_title', function($title, $type, $id) {
	if ($type[0] === 'home') {
		
			if (get_locale() == 'en_US') {
				$title = 'Yacht charter in Dubai';
			}else{
				
				$title = 'Аренда яхт в Дубае';
			}
	}
	return $title;
}, 42, 3);


/* logo */


function new_theme_settings() {
	// add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('widgets');
	// add_image_size('professorLandscape', 400, 260, true);
	// add_image_size('professorPortrait', 480, 650, true);
	// add_image_size('pageBanner', 1500, 350, true);
}

add_action('after_setup_theme', 'new_theme_settings');


// customizing breadcrumbs
// add_filter('bcn_breadcrumb_title', 'my_breadcrumb_title_swapper', 3, 10);
// function my_breadcrumb_title_swapper($title, $type, $id)
// {
//     if(in_array('home', $type))
//     {
//         $title = __('Home');
//     }
//     return $title;
// }

// customizing breadcrumbs




// Remove p acf
remove_filter('acf_the_content', 'wpautop');
// Remove p acf

// Remove post_type From Breadcrumb
// add_filter('bcn_add_post_type_arg', 'my_add_post_type_arg_filt', 10, 3);
// function my_add_post_type_arg_filt($add_query_arg, $type, $taxonomy)
// {
//     return false;
// }
// Remove post_type From Breadcrumb

/* menu  удалить классы */

function remove_css_id_filter($var) {
	return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
} 

add_filter( 'page_css_class', 'remove_css_id_filter', 100, 1);
// add_filter( 'nav_menu_item_id', 'remove_css_id_filter', 100, 1);
// add_filter( 'nav_menu_css_class', 'remove_css_id_filter', 100, 1);

/* menu + классы */
function add_menu_link_class( $atts, $item, $args ) {
  if (property_exists($args, 'link_class')) {
    $atts['class'] = $args->link_class;
  }
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );
/* +удалить классы */

// remove span wpcf7
add_filter('wpcf7_form_elements', function($content) {
	$content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

	return $content;
});
// remove span wpcf7

// удалить archive из title
//add_filter( 'get_the_archive_title_prefix', '__return_empty_string' );

// удалить archive из title


// перевод
function changeLang($eng,$ru){
	if (get_locale() == 'en_US') {
		echo $eng;
	}else{
		echo $ru;
	}
}
function returnLang($eng,$ru){
	if (get_locale() == 'en_US') {
		return $eng;
	}else{
		return $ru;
	}
}

function changeLangId(){
	$idPageMain = 6;
	if (get_locale() == 'en_US') {
		$idPageMain = 1332;
	}

	return $idPageMain;
}
// перевод

// поиск по заголовку
add_filter( 'posts_where', 'title_filter', 10, 2 );

function title_filter( $where, &$wp_query ){
	global $wpdb;
	if ( $search_term = $wp_query->get( 'search_prod_title' ) ) {
			$where .= ' AND ' . $wpdb->posts . '.post_title LIKE \'%' . esc_sql( $wpdb->esc_like( $search_term ) ) . '%\'';
	}
	return $where;
}
// поиск по заголовку

// google map
function my_acf_google_map_api( $api ){
	$api['key'] = 'AIzaSyBQZbRPUHCf8ZzHP6QOUOVJFgNSljNI15k';
	return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
// google map


// wp7 add data attr
add_filter( 'wpcf7_form_tag', function ( $tag ) {
	$datas = [];
	foreach ( (array)$tag['options'] as $option ) {
			if ( strpos( $option, 'data-' ) === 0 ) {
					$option = explode( ':', $option, 2 );
					$datas[$option[0]] = apply_filters('wpcf7_option_value', $option[1], $option[0]);
			}
	}
	if ( ! empty( $datas ) ) {
			$id = uniqid('tmp-wpcf');
			$tag['options'][] = "class:$id";
			add_filter( 'wpcf7_form_elements', function ($content) use ($id, $datas) {
					return str_replace($id, $name, str_replace($id.'"', '"'. wpcf7_format_atts($datas), $content));
			});
	}
	return $tag;
} );
// wp7 add data attr

// таксономия в админке
function true_taxonomy_filter() {
	global $typenow; // тип поста
	if( $typenow == 'yachts' ){ // для каких типов постов отображать
		$taxes = array('yachts_cat'); // таксономии через запятую
		foreach ($taxes as $tax) {
			$current_tax = isset( $_GET[$tax] ) ? $_GET[$tax] : '';
			$tax_obj = get_taxonomy($tax);
			$tax_name = mb_strtolower($tax_obj->labels->name);
			// функция mb_strtolower переводит в нижний регистр
			// она может не работать на некоторых хостингах, если что, убирайте её отсюда
			$terms = get_terms($tax);
			if(count($terms) > 0) {
				echo "<select name='$tax' id='$tax' class='postform'>";
				echo "<option value=''>Все $tax_name</option>";
				foreach ($terms as $term) {
					echo '<option value='. $term->slug, $current_tax == $term->slug ? ' selected="selected"' : '','>' . $term->name .' (' . $term->count .')</option>'; 
				}
				echo "</select>";
			}
		}
	}
}
 
add_action( 'restrict_manage_posts', 'true_taxonomy_filter' );
// таксономия в админке

// таксономия в админке
function true_taxonomy_filter_blog() {
	global $typenow; // тип поста
	if( $typenow == 'blog' ){ // для каких типов постов отображать
		$taxes = array('blog_cat'); // таксономии через запятую
		foreach ($taxes as $tax) {
			$current_tax = isset( $_GET[$tax] ) ? $_GET[$tax] : '';
			$tax_obj = get_taxonomy($tax);
			$tax_name = mb_strtolower($tax_obj->labels->name);
			// функция mb_strtolower переводит в нижний регистр
			// она может не работать на некоторых хостингах, если что, убирайте её отсюда
			$terms = get_terms($tax);
			if(count($terms) > 0) {
				echo "<select name='$tax' id='$tax' class='postform'>";
				echo "<option value=''>Все $tax_name</option>";
				foreach ($terms as $term) {
					echo '<option value='. $term->slug, $current_tax == $term->slug ? ' selected="selected"' : '','>' . $term->name .' (' . $term->count .')</option>'; 
				}
				echo "</select>";
			}
		}
	}
}
 
add_action( 'restrict_manage_posts', 'true_taxonomy_filter_blog' );
// таксономия в админке