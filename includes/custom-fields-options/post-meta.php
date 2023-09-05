<?
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;


// Container::make( 'post_meta', '10 секция (О нас)' )
// 	->show_on_page(6)
// 	->add_tab('Слайдер',[
// 		Field::make( 'complex', 'about_slider', 'Слайды' )
// 		->set_layout( 'tabbed-horizontal' )
// 		->add_fields( array(
// 			Field::make( 'text', 'topic', 'Заголовок' ),
// 			Field::make( 'text', 'description', 'Текст' ),
// 			Field::make( 'image', 'image', 'Image' ),
// 		) )
// 	]);	

Container::make( 'post_meta', '15 секция FAQ' )
	->where('post_id','=', 6)
	->or_where('post_id','=', 1332)
	->add_fields( array(
		Field::make( 'checkbox', 'faq_on', 'Вкл' )
			->set_option_value( 'vkl' ),
		Field::make( 'text', 'faq_main_topic', 'Заголовок' ),
		Field::make( 'text', 'faq_sub_topic', 'Подзаголовок' ),
		))
	->add_tab('Левая часть',[
		Field::make( 'complex', 'faq_items_left', 'Элементы' )
		->set_layout( 'tabbed-horizontal' )
		->add_fields( array(
			Field::make( 'text', 'topic', 'Заголовок' ),
			Field::make( 'rich_text', 'description', 'Текст' ),
		) )
	])
	->add_tab('Правая часть',[
		Field::make( 'complex', 'faq_items_right', 'Элементы' )
		->set_layout( 'tabbed-horizontal' )
		->add_fields( array(
			Field::make( 'text', 'topic', 'Заголовок' ),
			Field::make( 'rich_text', 'description', 'Текст' ),
		) )
	]);	

Container::make( 'post_meta', 'Команда слайдер' )
	->where('post_id','=', 165)
	->or_where('post_id','=', 1667)
	->add_tab('Слайдер',[
		Field::make( 'text', 'team_slider_title', 'Команда слайдер Заголовок' ),
		Field::make( 'textarea', 'team_slider_subtitle', 'Команда слайдер подзаголовок' ),
		Field::make( 'complex', 'team_slider_about', 'Слайды' )
		->set_layout( 'tabbed-horizontal' )
		->add_fields( array(
			Field::make( 'rich_text', 'description', 'Текст' ),
			Field::make( 'image', 'image_team', 'Image' ),
		) )
	]);	

	
Container::make( 'post_meta', 'О компании цифры' )
	->where('post_id','=', 165)
	->or_where('post_id','=', 1667)
	->add_tab('О компании цифры',[
		Field::make( 'text', 'num-adv-about_title', 'Команда слайдер Заголовок' ),
		Field::make( 'complex', 'num-adv-about', 'Слайды' )
		->set_layout( 'tabbed-horizontal' )
		->add_fields( array(
			Field::make( 'text', 'num', 'цифра' ),
			Field::make( 'text', 'text', 'Текст' ),
		) )
	]);	

Container::make( 'post_meta', 'Точки' )
	->where('post_id','=', 10)
	->or_where('post_id','=', 1673)
	->add_tab('Точки',[
		Field::make( 'complex', 'contacts_points', 'Точки' )
		->set_layout( 'tabbed-horizontal' )
		->add_fields( array(
			Field::make( 'image', 'image', 'Иконка' ),
			Field::make( 'text', 'text', 'Заголовок' ),
			Field::make( 'text', 'num', 'Телефон' ),
			Field::make( 'text', 'address', 'Адрес' ),
			Field::make( 'text', 'mail', 'Почта' ),
			Field::make( 'rich_text', 'adressweb', 'Адрес web' ),
			Field::make( 'text', 'coordsx', 'Координаты x' ),
			Field::make( 'text', 'coordsy', 'Координаты y' ),
		) )
	]);	