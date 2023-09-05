<?

register_nav_menus(array(
	'header-menu-primary' => 'Меню в шапке',
	'footer-menu-primary' => 'Меню в подвале',
	'footer-menu-second' => 'Меню в подвале 2',
	'footer-menu-three' => 'Меню в подвале 3',
	'footer-menu-four' => 'Меню в подвале 4',
	'footer-menu-five' => 'Меню в подвале 5',
	'modal-menu-primary' => 'Меню в окне',
	'search-page-menu' => 'Меню в поиске',
	'menu-lang' => 'Языковое меню',
	
));


function header_menu(){
	wp_nav_menu(array(
		'theme_location'	=>	'header-menu-primary',
		'menu_id'	=>	'',
		'menu_class' => '',
		'container' => '',
	));
};

function footer_menu(){
	wp_nav_menu(array(
		'theme_location'	=>	'footer-menu-primary',
		'menu_id'	=>	'',
		'menu_class' => '',
		'container' => ''
	));
};
function footer_menu_second(){
	wp_nav_menu(array(
		'theme_location'	=>	'footer-menu-second',
		'menu_id'	=>	'',
		'menu_class' => '',
		'container' => ''
	));
};
function footer_menu_three(){
	wp_nav_menu(array(
		'theme_location'	=>	'footer-menu-three',
		'menu_id'	=>	'',
		'menu_class' => '',
		'container' => ''
	));
};
function footer_menu_four(){
	wp_nav_menu(array(
		'theme_location'	=>	'footer-menu-four',
		'menu_id'	=>	'',
		'menu_class' => '',
		'container' => ''
	));
};
function footer_menu_five(){
	wp_nav_menu(array(
		'theme_location'	=>	'footer-menu-five',
		'menu_id'	=>	'',
		'menu_class' => '',
		'container' => ''
	));
};

function modal_menu(){
	wp_nav_menu(array(
		'theme_location'	=>	'modal-menu-primary',
		'menu_id'	=>	'',
		'menu_class' => '',
		'container' => ''
	));
};
function search_menu(){
	wp_nav_menu(array(
		'theme_location'	=>	'search-page-menu',
		'menu_id'	=>	'',
		'menu_class' => 'ln',
		'container' => '',
		'link_class'  => 'btn btn--blue-border',
	));
};

function lang_menu(){
	wp_nav_menu(array(
		'theme_location'	=>	'menu-lang',
		'menu_id'	=>	'',
		'menu_class' => '',
		'container' => ''
	));
};


register_sidebar(array(
	'name' => 'TempZone', // Отображаемое название области в панели управления
	'id' => 'sidebar_new', // Уникальный ID области
	'description' => __( 'Описание виджета (подсказка).'),
	'before_widget' => '<div id="widget" class="widget">', // Начало обертки блока
	'after_widget' => '</div>', // Конец обертки блока
	'before_title' => '<h3 class="widget-title">', // Начало обертки заголовка
	'after_title' => '</h3>' // Конец обертки заголовка
));