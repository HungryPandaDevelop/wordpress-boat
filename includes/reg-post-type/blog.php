<?php
$langName;
if (get_locale() == 'en_US') {
	$langName = 'Blog';
}else{
	$langName = 'Блог';
};

// блог
register_post_type('blog', array(
	// 'capability_type'	=>	'yachts',
	'labels'	=>	array(
		'name'	=>	$langName,
		'add_new_item'	=>	'Добавить Блог',
		'edit_item'	=>	'Редактировать Блог',
		'all_items'	=>	'Все Блог',
		'singular_name'	=>	'Блог'
	),
	'supports'	=>	array('title','editor','thumbnail','excerpt'),
	'menu_icon'	=>	'dashicons-list-view',
	'public'              => true,
	'hierarchical'        => true,
	// 'rewrite'             => array( 
		// 'slug'=>'blog/%blog_cat%', 
		// 'with_front'=>false, 
		// 'pages'=>false, 
		// 'feeds'=>false, 
		// 'feed'=>false 
	// ),
	'has_archive'         => true,
	'query_var'           => true,
	// 'taxonomies'          => array( 'blog_cat' ),
));
register_taxonomy(
	'blog_cat', 
	array('blog'),
	array(
		'label'                 => 'Рубрики блога',
		'labels'                => array(
			'name'              => 'Рубрики блога',
			'singular_name'     => 'Рубрики блога',
			'search_items'      => 'Искать блог',
			'all_items'         => 'Все блоги',
			'parent_item'       => 'Родит. блоги',
			'parent_item_colon' => 'Родит. блоги:',
			'edit_item'         => 'Редактировать блог',
			'update_item'       => 'Обновить блог',
			'add_new_item'      => 'Добавить блог',
			'new_item_name'     => 'Заголовок блога',
			'menu_name'         => 'Рубрики блога',
		),
		'description'           => 'Рубрики для раздела блога', // описание таксономии
		'public'                => true,
		'show_in_nav_menus'     => false, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_tagcloud'         => false, // равен аргументу show_ui
		'hierarchical'          => true,
		// 'rewrite'               => array('slug'=>'blog', 'hierarchical'=>true, 'with_front'=>true, 'feed'=>true ),
		'show_admin_column'     => true, 
	// Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
	) 
); 
// function blog_permalink( $permalink, $post ){

// 	// выходим если это не наш тип записи: без холдера %faqcat%
// 	if( strpos( $permalink, '%blog_cat%' ) === false ){
// 		return $permalink;
// 	}

// 	// Получаем элементы таксы
// 	$terms = get_the_terms( $post, 'blog_cat' );
// 	// если есть элемент заменим холдер
// 	if( !is_wp_error( $terms ) && !empty( $terms ) && is_object( $terms[0] ) ){
// 		$term_slug = array_pop( $terms )->slug;
// 	}
// 	// элемента нет, а должен быть...
// 	else {
// 		$term_slug = 'no-blog_cat';
// 	}

// 	return str_replace( '%blog_cat%', $term_slug, $permalink );
// }
// add_filter( 'post_type_link', 'blog_permalink', 1, 2 );