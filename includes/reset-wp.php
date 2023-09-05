<?

/*
 * Отключаем Emojii
 */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
add_filter( 'tiny_mce_plugins', 'disable_wp_emojis_in_tinymce' );
function disable_wp_emojis_in_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}


/*
* Удаляем лишнее из шапки
*/
// Удаляет ссылки RSS-лент записи и комментариев
remove_action( 'wp_head', 'feed_links', 2 ); 
// Удаляет ссылки RSS-лент категорий и архивов
remove_action( 'wp_head', 'feed_links_extra', 3 ); 
// Удаляет RSD ссылку для удаленной публикации
remove_action( 'wp_head', 'rsd_link' ); 
// Удаляет ссылку Windows для Live Writer
remove_action( 'wp_head', 'wlwmanifest_link' ); 
// Удаляет короткую ссылку
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0); 
// Удаляет информацию о версии WordPress
remove_action( 'wp_head', 'wp_generator' ); 
// Удаляет ссылки на предыдущую и следующую статьи
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

remove_action('wp_head', 'wp_resource_hints', 2 ); //remove dns-prefetch

remove_action('wp_head', 'rest_output_link_wp_head');// remove 'https://api.w.org/
remove_action('wp_head', 'rel_canonical'); //remove canonical