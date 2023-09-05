<?

// ------------------------------- yachts
require get_template_directory() . '/includes/reg-post-type/yachts.php';
require get_template_directory() . '/includes/reg-post-type/blog.php';
require get_template_directory() . '/includes/reg-post-type/services.php';
// require get_template_directory() . '/includes/reg-post-type/template.php';
// ------------------------------ yachts

$langName;
if (get_locale() == 'en_US') {
	$langName = 'Cruises';
}else{
	$langName = 'Маршруты';
};
register_post_type('routes', array(
	// 'capability_type'	=>	'yachts',
	'map_meta_cap'	=>	true,
	'supports'	=>	array('title','editor','thumbnail','excerpt'),
	'has_archive'	=>	true,
	'public'	=>	true,
	'labels'	=>	array(
		'name'	=>	$langName,
		'add_new_item'	=>	'Добавить Маршрут',
		'edit_item'	=>	'Редактировать Маршрут',
		'all_items'	=>	'Все Маршруты',
		'singular_name'	=>	'Маршрут'
	),
	// 'rewrite'	=>	array('slug'	=>	'marshruty'),
	'rewrite'           => array('slug' => ( (ICL_LANGUAGE_CODE=='ru')? 'marshruty':'cruises' ) ),
	'menu_icon'	=>	'dashicons-admin-site',
));

register_post_type('rew', array(
	// 'capability_type'	=>	'yachts',
	'map_meta_cap'	=>	true,
	'supports'	=>	array('title'),
	'has_archive'	=>	true,
	'public'	=>	true,
	'labels'	=>	array(
		'name'	=>	'Отзывы',
		'add_new_item'	=>	'Добавить Отзыв',
		'edit_item'	=>	'Редактировать Отзыв',
		'all_items'	=>	'Все Отзыв',
		'singular_name'	=>	'Отзывы'
	),
	'menu_icon'	=>	'dashicons-format-status',
));


// ----------------------ПРИМЕР