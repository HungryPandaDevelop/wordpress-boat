<?
/*
Template Name: Страница услуги Water archive
Template Post Type:  services
*/
get_header(); ?>

<div class="stub"></div>

<div class="content">
  <div class="services-main services-main-blue">
    <div class="main-full">
      <div class="breadcrumbs">
        <?
		  bcn_display();
		?>
      </div>
    </div>
    <div class="main-grid services-main-front services-main-info-out">
      <div class="col-7 col-md-12 col-sm-12 services-main-info">
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
          <div class="btn-container btn-couple">
            <a class="btn btn--yellow element-btn" data-element="2" href="#">
              <? changeLang('Book a service','Забронировать услугу'); ?>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="services-main-img-full img-cover">
      <img src="<? echo get_field('glavnaya_kartinka_serv');?>" alt="">
    </div>
  </div>
  <? get_template_part('template-parts/single-services/services-water'); ?>
  <? get_template_part('template-parts/single-services/pricelist'); ?>
  <!-- <div class="stub-section"></div> -->
  <? get_template_part('template-parts/single-services/detail-content'); ?>
  <div class="stub-section"></div>

  <?
    $title;
    if (get_locale() == 'en_US') {
      $title = 'Book a water activity';
    }else{
      $title = 'Забронировать водное развлечение';
      }?>

  <? get_template_part('template-parts/feedback/reserve-services',null, array(
    'title' =>  $title
  )); ?>
  <? get_template_part('template-parts/single-services/simple-item-about'); ?>
  <? get_template_part('template-parts/detail/faq'); ?>
  <? get_template_part('template-parts/detail/rew-choises'); ?>
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