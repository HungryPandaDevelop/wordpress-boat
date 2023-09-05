<? get_header(); ?>

<?

$services = new WP_Query(array(
	'posts_per_page'  =>  -1, // вывести все
	'post_type' =>  'services ',
	'order' =>  'DESK', // порядок сортировки
));
?>

<div class="stub-second"></div>
<div class="main-full">
  <div class="breadcrumbs">
    <?
 if( function_exists('kama_breadcrumbs') ) {


	$myl10n = array(
		'home'       => 'Front page',
		'paged'      => 'Page %d',
		'_404'       => 'Error 404',
		'search'     => 'Search results by query - <b>%s</b>',
		'author'     => 'Author archve: <b>%s</b>',
		'year'       => 'Archive by <b>%d</b> год',
		'month'      => 'Archive by: <b>%s</b>',
		'day'        => '',
		'attachment' => 'Media: %s',
		'tag'        => 'Posts by tag: <b>%s</b>',
		'tax_tag'    => '%1$s from "%2$s" by tag: <b>%3$s</b>',
		// tax_tag выведет: 'тип_записи из "название_таксы" по тегу: имя_термина'.
		// Если нужны отдельные холдеры, например только имя термина, пишем так: 'записи по тегу: %3$s'
	);

	kama_breadcrumbs( ' » ', $myl10n );

 }
      bcn_display();
		?>
  </div>
</div>


<div class="content">
  <div class="main-full">
    <h1>
      <?
          changeLang('Additional services', 'Дополнительные услуги');
			?>
    </h1>
  </div>
  <div class="catalog-grid main-grid">
    <?php
    
			while($services->have_posts()) {
				$services->the_post();?>

    <? get_template_part('template-parts/module/items/services-item', null, array(
        'title' => get_the_title(),
        'link' => get_the_permalink(),
        'img' => get_the_post_thumbnail_url(),
        'addClass' =>  'col-4 col-xs-12',
        'price' => get_field('price_serv'),
        'excerpt' => get_the_excerpt(),
      )); ?>

    <?}?>

  </div>
  <div class="stub-section"></div>
  <? get_template_part('template-parts/feedback/free',null, array(
    'title' =>  get_field('sekciya_9',changeLangId())['zagolovok']
  )); ?>
  <? get_template_part('template-parts/home/reviews'); ?>
  <div class="stub-footer"></div>
</div>
<? get_footer(); ?>