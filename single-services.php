<? get_header(); ?>

<div class="stub"></div>

<div class="content">
  <div class="services-main">
    <div class="main-grid breadcrumbs-grid">
      <div class="col-5 col-md-6 col-sm-12 services-main-info">
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
    </div>
    <div class="services-main-wather"></div>

    <div class="main-grid services-main-info-out">
      <div class="col-5 col-md-6 col-sm-12 services-main-info">
        <div class="services-main-info-container">
          <div class="services-main-price">
            <? echo get_field('price_serv');?>
          </div>
          <h1>
            <? the_title(); ?>
          </h1>
          <div class="services-main-text">
            <? the_content(); ?>
          </div>
          <div class="btn-container"> <a class="btn btn--blue element-btn" data-element="2" href="#">
              <? changeLang('Book a service','Забронировать услугу'); ?>
            </a></div>
        </div>
      </div>
    </div>
    <div class="services-main-img img-cover">
      <img src="  <? echo get_field('glavnaya_kartinka_serv');?>" alt="">
    </div>
  </div>
  <div class="detail-tabs tabs-routes">
    <div class="main-full">
      <div class="detail-tabs-nav">
        <ul class="ln">
          <li data-point="1">
            <? changeLang('Description','Описание'); ?>
          </li>
          <li data-point="2">
            <? changeLang('Prices','Цены'); ?>
          </li>
          <li data-point="3">
            <? changeLang('Booking Form','Форма бронирования'); ?>
          </li>
          <li data-point="4">
            <? changeLang('FAQ','Часто задаваемые вопросы'); ?>
          </li>
          <li data-point="5">
            <? changeLang('Reviews','Отзывы'); ?>
          </li>
          <li data-point="6">
            <? changeLang('Additional services','Дополнительные услуги'); ?>
          </li>
        </ul>
        <div class="detail-tabs-carriage"></div>
      </div>
    </div>
  </div>
  <div class="point-1"></div>
  <? get_template_part('template-parts/single-services/detail-content'); ?>
  <div class="point-2"></div>
  <? get_template_part('template-parts/single-services/pricelist'); ?>
  <div class="stub-section"></div>
  <div class="point-3"></div>
  <?
      $title;
      if (get_locale() == 'en_US') {
        $title = 'Get a well-organized event on a yacht';
      }else{
        $title = 'Получите хорошо организованное мероприятие на яхте';
        }?>
  <? get_template_part('template-parts/feedback/reserve-yachts',null, array(
    'title' =>  $title
  )); ?>


  <?/* get_template_part('template-parts/single-services/advantages',null, array(
    'title' =>  get_field('zagolovok_preimushhestva')
  )); */?>

  <? get_template_part('template-parts/home/advantages'); ?>

  <? get_template_part('template-parts/single-services/simple-item-about'); ?>

  <div class="point-4"></div>
  <? get_template_part('template-parts/detail/faq'); ?>

  <div class="point-5"></div>
  <? get_template_part('template-parts/detail/rew-choises'); ?>

  <? get_template_part('template-parts/module/services-detail'); ?>
  <div class="point-6"></div>
  <? get_template_part('template-parts/detail/serv-list-detail'); ?>
  <div class="stub-section"></div>
  <?
      $titleSec;
      if (get_locale() == 'en_US') {
        $titleSec = 'Get a free consultation on additional services!';
      }else{
        $titleSec = 'Получите бесплатную консультацию по дополни-тельным услугам!';
        }?>

  <? get_template_part('template-parts/feedback/free',null, array(
    'title' =>  $titleSec
  )); ?>

</div>

<? get_footer(); ?>