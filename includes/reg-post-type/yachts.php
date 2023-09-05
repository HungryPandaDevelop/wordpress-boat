<?php
$langName;
if (get_locale() == 'en_US') {
	$langName = 'Yachts';
}else{
	$langName = 'Яхты';
};


register_post_type('yachts', array(
	'map_meta_cap'	=>	true,
	'supports'	=>	array('title','editor','thumbnail','excerpt'),
	'public'	=>	true,
	'labels'	=>	array(
		'name'	=>	$langName,
		'add_new_item'	=>	'Добавить Яхта',
		'edit_item'	=>	'Редактировать Яхта',
		'all_items'	=>	'Все Яхта',
		'singular_name'	=>	$langName
	),
	'hierarchical'        => true,
	'rewrite'	=>	array('slug' => ( (ICL_LANGUAGE_CODE=='ru')? 'yahty-v-dubae':'yachts' ) ), 
	'menu_icon'	=>	'dashicons-tag',
	'has_archive'         => true,
	'query_var'           => true,
));

register_taxonomy(
	'yachts_cat', 
	array('yachts'),
	array(
		'label' => 'Рубрики яхт',
		'labels' => array(
			'name'              => 'Рубрики яхт',
			'singular_name'     => 'Рубрики яхт',
			'search_items'      => 'Искать яхту',
			'all_items'         => 'Все яхты',
			'parent_item'       => 'Родит. рубрика',
			'parent_item_colon' => 'Родит. рубрика:',
			'edit_item'         => 'Редактировать рубрику',
			'update_item'       => 'Обновить рубрику',
			'add_new_item'      => 'Добавить рубрику',
			'new_item_name'     => 'Заголовок',
			'menu_name'         => 'Рубрики яхт',
		),
		'description'           => 'Рубрики для раздела вопросов', // описание таксономии
		'public'                => true,
		'show_in_nav_menus'     => false, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_tagcloud'         => false, // равен аргументу show_ui
		'hierarchical'          => true,
		// 'rewrite'               => array('slug'=>'yachts', 'hierarchical'=>true, 'with_front'=>true, 'feed'=>true ),
		'show_admin_column'     => true, 
	)
	// Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
);

// function faq_permalink( $permalink, $post ){

// 	// выходим если это не наш тип записи: без холдера %faqcat%
// 	if( strpos( $permalink, '%yachts_cat%' ) === false ){
// 		return $permalink;
// 	}

// 	// Получаем элементы таксы
// 	$terms = get_the_terms( $post, 'yachts_cat' );
// 	// если есть элемент заменим холдер
// 	if( ! is_wp_error( $terms ) && !empty( $terms ) && is_object( $terms[0] ) ){
// 		$term_slug = array_pop( $terms )->slug;
// 	}
// 	// элемента нет, а должен быть...
// 	else {
// 		$term_slug = 'no-faqcat';
// 	}

// 	return str_replace( '%yachts_cat%', $term_slug, $permalink );
// }
// add_filter( 'post_type_link', 'faq_permalink', 1, 2 );