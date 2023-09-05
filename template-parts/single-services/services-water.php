<?
$servicesWater = new WP_Query(array(
	'posts_per_page'  =>  9, // вывести все
	'post_type' =>  'services ',
	'order' =>  'DESK', // порядок сортировки
  'lang' => returnLang('en','ru'),
  'tax_query' => array(
    array(
        'taxonomy' => 'services_cat',
        'operator' => 'EXISTS', // or 'EXISTS'
    ),
),
));

?>
<?
if(get_field('vkl_serv_water')[0] == 'on'){?>

<section class="services-water">
  <div class="main-full head-section">
    <h2 class="title-section">
      <? the_field('title_water_arc'); ?>
    </h2>
  </div>

  <div class="catalog-grid services-water-catalog">
    <?php
  $i = 0;
  $addClass;
  while($servicesWater->have_posts()) {
    $servicesWater->the_post();?>

    <?

    switch ($i) {
      case 0:
          $addClass = 'col-4 col-sm-6 col-xs-12';
          break;
      case 1:
          $addClass = 'col-4 col-sm-6 col-xs-12';
          break;
      case 2:
          $addClass = 'col-4 col-sm-12 col-xs-12';
          break;
    
  }
  $i++;
  ?>
    <? get_template_part('template-parts/module/items/services-item', null, array(
    'title' => get_the_title(),
    'link' => get_the_permalink(),
    'img' => get_the_post_thumbnail_url(),
    'addClass' =>  $addClass,
    'price' => get_field('price_serv', get_the_ID()),
    'excerpt' => get_the_excerpt(),
  )); ?>
    <?}
wp_reset_postdata();
?>
    <?
if(get_field('vkl_serv_water_video')[0] == 'on'){?>
    <div class="col-12">
      <div class="video-detail">
        <div class="main-grid">
          <div class="col-6 col-xs-12 vertical-align">
            <div class="video-info">
              <h2>
                <? the_field('title_water_arc'); ?>
              </h2>
              <div class="video-text">
                <? the_field('sub_zagolovok_wake_water'); ?>
              </div>
              <div class="btn-container"> <a class="btn btn--yellow" href="/services/wake-dubai/">
                  <? changeLang('more','подробнее'); ?>
                </a></div>
            </div>
          </div>
        </div>
        <div class="video-container">
          <video width="100%" height="100%">
            <source src="<? the_field('video_wake_water'); ?>" type='video/ogg; codecs="theora, vorbis"'>
          </video>
          <div class="video-btn"><span></span><i></i></div>
        </div>
      </div>
    </div>
    <?}?>
  </div>
</section>


<?}?>