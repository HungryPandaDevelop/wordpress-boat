<?

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Container::make( 'post_meta', 'Прайс-лист' )
// 	->where('post_type', '=', 'routes')
// 	->add_fields([
// 		Field::make( 'complex', 'price_routes_list', 'Цены список' )
// 		->set_layout( 'tabbed-horizontal' )
// 		->add_fields( array(
// 			Field::make( 'text', 'name', 'Название' ),
// 			Field::make( 'text', 'price', 'Цена' ),
// 		))
// 	]);

Container::make( 'post_meta', 'Маршруты описание' )
	// ->where('post_type', '=', 'services')
	->show_on_post_type(array('routes'))
	->add_fields([
		Field::make( 'complex', 'routes_desk_list', 'Маршруты описание список' )
		->set_layout( 'tabbed-horizontal' )
		->add_fields( array(
			Field::make( 'set', 'on', 'Вкл' )
			->add_options( array(
					'vkl' => 'Вкл',
			) ),
			Field::make( 'radio', 'side', 'Вкл' )
			->add_options( array(
					'left_img' => 'картинка слева',
					'right_img' => 'картинка справа',
			) ),
			Field::make( 'rich_text', 'desk', 'Описание' ),
			Field::make( 'image', 'image_desk_routes', 'Image' ),
		))
	]);
	
Container::make( 'post_meta', 'Маршруты места' )
	// ->where('post_type', '=', 'services')
	->show_on_post_type(array('routes'))
	->add_fields([
		Field::make( 'complex', 'routes_places', 'Маршруты места' )
		->set_layout( 'tabbed-horizontal' )
		->add_fields( array(
			Field::make( 'set', 'pos', 'Позиция' )
			->add_options( array(
					'up' => 'Верх',
			) ),
			Field::make( 'text', 'num', 'Цифра' ),
			Field::make( 'text', 'title', 'Заголовок' ),
			Field::make( 'rich_text', 'desk', 'Описание' ),
		))
	]);

Container::make( 'post_meta', 'Прайс-лист' )
	// ->where('post_type', '=', 'services')
	->show_on_post_type(array('services','routes'))
	->add_fields([
		Field::make( 'complex', 'price_services_list', 'Цены список' )
		->set_layout( 'tabbed-horizontal' )
		->add_fields( array(
			Field::make( 'set', 'on', 'Вкл' )
			->add_options( array(
					'vkl' => 'Вкл',
			) ),
			Field::make( 'text', 'name', 'Название' ),
			Field::make( 'text', 'price', 'Цена' ),
			Field::make( 'textarea', 'qwest', 'Подсказка' ),
		))
	]);

Container::make( 'post_meta', 'FAQ' )
	->show_on_post_type(array('services'))
	->add_fields( array(
		Field::make( 'checkbox', 'faq_serv_on', 'Вкл' )
			->set_option_value( 'vkl' ),
		Field::make( 'text', 'faq_serv_topic', 'Заголовок' ),
		Field::make( 'text', 'faq_serv_sub_topic', 'Подзаголовок' ),
		))
	->add_tab('Левая часть',[
		Field::make( 'complex', 'faq_serv_items_left', 'Элементы' )
		->set_layout( 'tabbed-horizontal' )
		->add_fields( array(
			Field::make( 'text', 'topic', 'Заголовок' ),
			Field::make( 'rich_text', 'description', 'Текст' ),
		) )
	])
	->add_tab('Правая часть',[
		Field::make( 'complex', 'faq_serv_items_right', 'Элементы' )
		->set_layout( 'tabbed-horizontal' )
		->add_fields( array(
			Field::make( 'text', 'topic', 'Заголовок' ),
			Field::make( 'rich_text', 'description', 'Текст' ),
		) )
	]);	

	
Container::make( 'post_meta', 'Подсказки пункты' )
	->where('post_type', '=', 'blog')
	->add_fields([
		Field::make( 'text', 'blog_title', 'Заголовок' ),
		Field::make( 'complex', 'blog_hint_list', 'Подсказки список' )
		->set_layout( 'tabbed-horizontal' )
		->add_fields( array(
			Field::make( 'checkbox', 'on', 'Вкл' )
			->set_option_value( 'vkl' ),
			Field::make( 'text', 'num', 'Номер' ),
			Field::make( 'text', 'name', 'Название' ),
			Field::make( 'rich_text', 'text', 'Текст' ),
			Field::make( 'media_gallery', 'images','Картинки' )
    		->set_type( array( 'image' ) )
		))
	]);






// Container::make( 'post_meta', 'Даты' )
// 	->where('post_type', '=', 'discount')
// 	->add_fields([
// 		Field::make( 'date', 'date_start', 'Дата' )
// 		->set_storage_format( 'Y-m-d' )
// 	])
// 	->add_fields([
// 		Field::make( 'date', 'date_end', 'Дата окончания' )
// 		->set_storage_format( 'Y-m-d' )
// 	]);

// Container::make( 'post_meta', 'Слайдер поста' )
// 	->where('post_type', '=', 'news')
// 	->add_fields([
// 		Field::make( 'complex', 'crb_detail_slider', 'Slides' )
// 		->set_layout( 'tabbed-horizontal' )
// 		->add_fields( array(
// 			Field::make( 'image', 'image', 'Image' ),
// 		))
// 	]);

// Container::make( 'post_meta', 'О товаре' )
// 	->where('post_type', '=', 'production')
// 	->add_tab('Елементы характеристик',[
// 		Field::make( 'complex', 'char_item', 'Елемент' )
// 		->set_layout( 'tabbed-horizontal' )
// 		->add_fields( array(
// 			Field::make( 'text', 'name_char', 'Имя' ),
// 			Field::make( 'text', 'value_char', 'Значение' ),
// 			Field::make( 'image', 'image_char', 'Иконка' ),
// 		))
// 	]);	