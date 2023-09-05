<?
/*
Template Name: Страница услуги Wake single
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
        $title = 'Book a service ';
      }else{
        $title = 'Забронировать услугу ';
        }?>
  <? get_template_part('template-parts/feedback/reserve-services',null, array(
    'title' =>  $title.get_the_title()
  )); ?>
  <? get_template_part('template-parts/single-services/simple-item-about'); ?>
  <div class="point-4"></div>
  <? get_template_part('template-parts/detail/faq'); ?>
  <div class="point-5"></div>
  <? get_template_part('template-parts/detail/rew-choises'); ?>
  <div class="point-5"></div>
  <? get_template_part('template-parts/detail/serv-list-detail'); ?>

</div>
<div class="stub-footer"></div>
<? get_footer(); ?>