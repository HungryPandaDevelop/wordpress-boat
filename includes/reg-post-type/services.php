<?

$langName;
if (get_locale() == 'en_US') {
	$langName = 'Services';
}else{
	$langName = 'Услуги';
};

// $post_slug =  __('dopolnitelnye-uslugi', 'serv');


register_post_type('services', array(
	'map_meta_cap'	=>	true,
	'supports'	=>	array('title','editor','thumbnail','excerpt'),
	'public'	=>	true,
	'labels'	=>	array(
		'name'	=>	$langName ,
		'add_new_item'	=>	'Добавить Услугу',
		'edit_item'	=>	'Редактировать Услугу',
		'all_items'	=>	'Все Услуги',
		'singular_name'	=>	$langName 
	),
	'hierarchical'        => true,
	'rewrite' => array('slug' => ( (ICL_LANGUAGE_CODE=='ru')? 'dopolnitelnye-uslugi':'additional-services' ) ),
	'menu_icon'	=>	'dashicons-tag',
	'has_archive'         => true,
	'query_var'           => true,
));

register_taxonomy(
	'services_cat', 
	array('services'),
	array(
		'label' => 'Рубрики услуг',
		'labels' => array(
			'name'              => 'Рубрики услуг',
			'singular_name'     => 'Рубрики услуг',
			'search_items'      => 'Искать услуг',
			'all_items'         => 'Все услуг',
			'parent_item'       => 'Родит. рубрика',
			'parent_item_colon' => 'Родит. рубрика:',
			'edit_item'         => 'Редактировать рубрику',
			'update_item'       => 'Обновить рубрику',
			'add_new_item'      => 'Добавить рубрику',
			'new_item_name'     => 'Заголовок',
			'menu_name'         => 'Рубрики услуг',
		),
		'description'           => 'Рубрики для раздела вопросов', // описание таксономии
		'public'                => true,
		'show_in_nav_menus'     => false, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_tagcloud'         => false, // равен аргументу show_ui
		'hierarchical'          => true,
		'show_admin_column'     => true, 
	)
	// Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
);