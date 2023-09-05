<? get_header(); ?>
<div class="stub-second"></div>
<div class="main-full">
  <div class="breadcrumbs">
    <?
      bcn_display();
		?>
  </div>
</div>

<div class="content">
  <div class="main-full">
    <h1>
      <? the_title(); ?>
    </h1>
  </div>
  <div class="routes-main-detail">
    <div class="main-grid">
      <div class="col-8 col-md-7 col-sm-6 col-xs-12 routes-main-detail-cell">
        <div class="routes-detail-img img-cover">
          <img src="<?echo get_field('main_kartinka_route')['url'];?>" alt="">
        </div>
      </div>
      <div class="col-4 col-md-5 col-sm-6 col-xs-12 routes-main-detail-cell">
        <div class="routes-detail-info">
          <div class="routes-detail-info-container">
            <h3>
              <? changeLang('cruise details','детали круиза'); ?>
            </h3>
            <div class="routes-detail-tags">
              <? if(get_field('price_route')){?>
              <div class="price-tag">
                <?echo get_field('price_route');?>
              </div>
              <?} ?>
              <? if(get_field('time_route')){?>
              <div class="time-tag"><i> </i><span>
                  <?echo get_field('time_route');?>
                </span></div>
              <?} ?>
            </div>
            <div class="routes-detail-adv">
              <div class="routes-detail-adv-item"> <img
                  src="<?echo get_bloginfo('template_url');?>/frontend/images/routes/1.svg" alt=""><span>
                  <?echo get_field('detali_kruiza')['detal_1'];?>
                </span></div>
              <div class="routes-detail-adv-item"> <img
                  src="<?echo get_bloginfo('template_url');?>/frontend/images/routes/2.svg" alt=""><span>
                  <?echo get_field('detali_kruiza')['detal_2'];?>
                </span>
              </div>
              <div class="routes-detail-adv-item"> <img
                  src="<?echo get_bloginfo('template_url');?>/frontend/images/routes/3.svg" alt=""><span>
                  <?echo get_field('detali_kruiza')['detal_3'];?>
                </span></div>
              <div class="routes-detail-adv-item"> <img
                  src="<?echo get_bloginfo('template_url');?>/frontend/images/routes/4.svg" alt=""><span>
                  <?echo get_field('detali_kruiza')['detal_4'];?>
                </span></div>
            </div>
            <div class="btn-container">
              <a href="#" class="btn btn--yellow go-tour-form">
                <? changeLang('book','забронировать'); ?>
              </a>
              <a href="#" class="btn btn--blue-border element-btn" data-element="1">
                <? changeLang('Ask a Question','задать вопрос'); ?>
              </a>
            </div>
          </div>
        </div>
      </div>
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
            <? changeLang('Gallery','Галерея'); ?>
          </li>
          <li data-point="4">
            <? changeLang('Other tours','Другие туры'); ?>
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
  <? get_template_part('template-parts/single-routes/stage-adv'); ?>
  <div class="point-1"></div>
  <? get_template_part('template-parts/single-routes/detail-content'); ?>
  <div class="point-2"></div>
  <? get_template_part('template-parts/single-services/pricelist'); ?>

  <? get_template_part('template-parts/single-routes/order-routes'); ?>
  <div class="point-3"></div>
  <? get_template_part('template-parts/single-routes/gallery'); ?>
  <div class="stub-section"></div>
  <? get_template_part('template-parts/home/banner'); ?>
  <?
$routes = new WP_Query(array(
	'posts_per_page'  =>  4, // вывести все
	'post_type' =>  'routes ',
	'order' =>  'DESK', // порядок сортировки
));
?>
  <div class="point-4"></div>
  <? get_template_part('template-parts/detail/routes-detail'); ?>
  <?
      $title;
      if (get_locale() == 'en_US') {
        $title = "Book a well-organized boat tour of Dubai's highlights";
      }else{
        $title = 'Забронируйте хорошо организованный морской тур по достопримечательностям Дубая';
        }?>
  <? get_template_part('template-parts/feedback/reserve-yachts',null, array(
    'title' =>   $title
  )); ?>
  <div class="point-5"></div>
  <? get_template_part('template-parts/home/reviews'); ?>
  <div class="point-6"></div>
  <? get_template_part('template-parts/detail/serv-list-detail'); ?>
</div>
<div class="stub-footer"></div>
<? get_footer(); ?>