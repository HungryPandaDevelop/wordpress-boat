<?
use Carbon_Fields\Container;
use Carbon_Fields\Field;

	
Container::make( 'theme_options', 'Настройки сайта' )
	->add_tab( __( 'Контакты' ), array(
		Field::make( 'text', 'crb_address', __( 'Адрес' ) ),
		Field::make( 'text', 'contacts_ltd', 'Координата x' ),
		Field::make( 'text', 'contacts_lng', 'Координата y' ),
		Field::make( 'text', 'timework1', 'Время работы 1' ),
		Field::make( 'text', 'timework2', 'Время работы 2' ),
		Field::make( 'complex', 'crb_phones','Телефоны' )
		->set_layout( 'tabbed-horizontal' )
		->add_fields( array(
			Field::make( 'text', 'title' ),
			Field::make( 'text', 'link' ),
		)),
		Field::make( 'text', 'crb_mail', __( 'Почта' ) ),
		Field::make( 'text', 'crb_vk', __( 'Vk' ) ),
		Field::make( 'text', 'crb_instagam', __( 'Instagam' ) ),
		Field::make( 'text', 'crb_telegram', __( 'Telegram' ) ),
		Field::make( 'text', 'crb_facebook', __( 'Facebook' ) ),
		Field::make( 'text', 'crb_twitter', __( 'Twitter' ) ),
		Field::make( 'text', 'crb_youtube', __( 'YouTube' ) ),
		Field::make( 'text', 'crb_google', __( 'Google' ) ),
		Field::make( 'text', 'crb_whatsapp', __( 'Whatsapp' ) ),
		
		
	) )
	->add_tab( __( 'Общие настройки' ), array(
		Field::make( 'textarea', 'crb_footer_text_logo', 'текс logo' ),
		Field::make( 'textarea', 'crb_footer_text_logo_en', 'текс logo_en' ),
		Field::make( 'textarea', 'crb_footer_copyright', 'текс copyright' ),
		Field::make( 'textarea', 'crb_footer_copyright_en', 'текс copyright_en' )
	));


add_action('init','create_global_variable');
function create_global_variable(){
	global $crbAll;

	$crbAll = [
//		'phone'	=>	carbon_get_theme_option('site_phone'),
		'address'	=>	carbon_get_theme_option('crb_address'),
		'phones'	=>	carbon_get_theme_option('crb_phones'),
		'timework1'	=>	carbon_get_theme_option('timework1'),
		'timework2'	=>	carbon_get_theme_option('timework2'),
		'contacts_ltd'	=>	carbon_get_theme_option('contacts_ltd'),
		'contacts_lng'	=>	carbon_get_theme_option('contacts_lng'),
		'mail'	=>	carbon_get_theme_option('crb_mail'),
		'facebook'	=>	carbon_get_theme_option('crb_facebook'),
		'inst'	=>	carbon_get_theme_option('crb_instagam'),
		'telegram'	=>	carbon_get_theme_option('crb_telegram'),
		'vk'	=>	carbon_get_theme_option('crb_vk'),
		'tw'	=>	carbon_get_theme_option('crb_twitter'),
		'youtube'	=>	carbon_get_theme_option('crb_youtube'),
		'google'	=>	carbon_get_theme_option('crb_google'),
		'whatsapp'	=>	carbon_get_theme_option('crb_whatsapp'),
		'copyright'	=>	carbon_get_theme_option('crb_footer_copyright'),
		'text_logo'	=>	carbon_get_theme_option('crb_footer_text_logo'),
		'text_logo_en'	=>	carbon_get_theme_option('crb_footer_text_logo_en')
	];
}

add_filter( 'carbon_fields_map_field_api_key', 'crb_get_gmaps_api_key' );
function crb_get_gmaps_api_key( $current_key ) {
    return 'AIzaSyDcU8bDX4cfpfloBvOB2sFIDio7guSEOlI';
}