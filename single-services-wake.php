<?
/*
Template Name: Страница услуги Wake
Template Post Type:  services
*/
get_header(); ?>

<div class="stub"></div>

<div class="content">
  <div class="services-main">
    <div class="main-grid breadcrumbs-grid">
      <div class="col-5 col-md-6 col-sm-12 services-main-info">
        <div class="breadcrumbs">
          <?
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
          <div class="btn-container btn-couple"><a class="btn btn--blue element-btn" data-element="2" href="#">
              <? changeLang('Book a service','Забронировать услугу'); ?>
            </a><a class="btn btn--white element-btn" data-element="1" href="#">
              <? changeLang('Ask a Question','Задать вопрос'); ?>
            </a></div>
        </div>
      </div>
    </div>
    <div class="services-main-img img-cover">
      <img src="<? echo get_field('glavnaya_kartinka_serv');?>" alt="">
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
            <? changeLang('Prices and booking','Цены и бронирование'); ?>
          </li>
          <li data-point="3">
            <? changeLang('Our boats','Наши катера'); ?>
          </li>
          <li data-point="4">
            <? changeLang('Client video reports','Видеоотчеты клиентов'); ?>
          </li>
          <li data-point="5">
            <? changeLang('Questions','Вопросы'); ?>
          </li>
          <li data-point="6">
            <? changeLang('Other services','Другие услуги'); ?>
          </li>
        </ul>
        <div class="detail-tabs-carriage"></div>
      </div>
    </div>
  </div>
  <? if(get_field('wake_gallereya')['vkl'][0] == 'on'){?>
  <section class="detail-slider">
    <div class="main-full head-section">
      <h2 class="title-section">
        <? echo get_field('wake_gallereya')['zagolovok']; ?>
      </h2>
      <div class="subtitle-section">
        <? echo get_field('wake_gallereya')['zagolovok_sub']; ?>
      </div>
    </div>
    <? 
    $images = get_field('wake_gallereya_origin');
    ?>

    <div class="detail-owl owl-carousel">
      <?  foreach ($images as $key=>$item) {?>
      <div class="detail-owl-item img-cover"><img src="<? echo $item['full_image_url'] ?>" alt=""></div>
      <?}?>
    </div>
  </section>
  <?}?>
  <div class="point-1"></div>
  <? get_template_part('template-parts/single-services/simple-item-about'); ?>

  <?/* get_template_part('template-parts/single-services/advantages',null, array(
    'title' =>  get_field('zagolovok_preimushhestva')
  )); */?>

  <? get_template_part('template-parts/home/advantages'); ?>
  <div class="point-2"></div>

  <? get_template_part('template-parts/single-services/pricelist',null, array(
    'extra_phone' =>  'https://wa.me/971561084599?text=Hi!%20I%20want%20to%20book a boat.'
  )); ?>
  <div class="point-3"></div>
  <? get_template_part('template-parts/single-services/yachts-wake'); ?>
  <div class="stub-section"></div>
  <?
      $title;
      if (get_locale() == 'en_US') {
        $title = 'Book a wakesurf ride';
      }else{
        $title = 'Забронировать катание на вейксёрфе';
      }?>
  <? get_template_part('template-parts/feedback/reserve-services',null, array(
    'title' =>  $title
  )); ?>

  <div class="point-4"></div>
  <? get_template_part('template-parts/single-services/rew-videoreport-wake'); ?>
  <div class="point-5"></div>
  <? get_template_part('template-parts/detail/faq'); ?>
  <div class="point-6"></div>
  <? get_template_part('template-parts/detail/serv-list-detail'); ?>
</div>
<div class="stub-footer"></div>
<? get_footer(); ?>