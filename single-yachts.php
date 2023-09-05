<? get_header(); ?>
<?
$images = get_field('yachts_main_images');
?>
<div class="stub"></div>


<div class="content">
  <div class="yachts-main-detail">
    <div class="main-full-abs main-full-abs-top">
      <div class="breadcrumbs">
        <?
		  bcn_display();
		?>
      </div>
    </div>
    <div class="main-full-abs main-full-abs-bottom">
      <h1>
        <? the_title(); ?>
      </h1>
    </div>
    <div class="yachts-detail-img img-cover">
      <img src="<? echo $images[0]['full_image_url'] ?>" alt="">
      <div class="topic-stub"></div>
    </div>
    <div class="yachts-detail-gallery">
      <?  foreach ($images as $key=>$item) {?>
      <? if($key != 0 && $key < 5){?>
      <div class="yachts-gallery-item img-cover"> <img src="<? echo $item['full_image_url'] ?>" alt=""></div>
      <?} ?>
      <?}?>
    </div>
  </div>

  <? get_template_part('template-parts/single-yachts/controls'); ?>
  <section class="detail-tabs">
    <div class="main-full">
      <div class="detail-tabs-nav tabs-choise">
        <ul class="ln">
          <li class="active">
            <? changeLang('Specification','Спецификация'); ?>
          </li>
          <li>
            <? changeLang('Description','Описание'); ?>
          </li>
          <li>
            <? changeLang('Additional services','Дополнительные услуги'); ?>
          </li>
          <li>
            <? changeLang('Gallery','Галерея'); ?>
          </li>
          <li>
            <? changeLang('Rental Rules','Правила аренды'); ?>
          </li>
        </ul>
        <div class="detail-tabs-carriage"></div>
      </div>
    </div>
    <div class="main-full">
      <? /*print_r(get_field('yachts_dopolnitelnye_uslugi')); */?>
      <div class="detail-tabs-container detail-tabs-choise">
        <div class="detail-tabs-item active">
          <? get_template_part('template-parts/single-yachts/yachts-detail-tab-1',null, array(
              'icoArr' => $icoArr,
              'nameArr' => $nameArr
            )); 
          ?>
        </div>
        <div class="detail-tabs-item">
          <? get_template_part('template-parts/single-yachts/yachts-detail-tab-2',null, array(
              'chast_1' => get_field('yachts_opisanie')['chast_1'],
              'chast_2' => get_field('yachts_opisanie')['chast_2'],
              'chto_vkljucheno' => get_field('yachts_opisanie')['chto_vkljucheno']
            )); 
          ?>
        </div>
        <div class="detail-tabs-item ">
          <? get_template_part('template-parts/single-yachts/yachts-detail-tab-3',null, array(
              'elements' => get_field('yachts_dopolnitelnye_uslugi'),
            )); 
          ?>
        </div>
        <div class="detail-tabs-item ">
          <? get_template_part('template-parts/single-yachts/yachts-detail-tab-4',null, array(
              'images' => get_field('yachts_galereya'),
            )); 
          ?>
        </div>
        <div class="detail-tabs-item ">
          <? get_template_part('template-parts/single-yachts/yachts-detail-tab-5',null, array(
              'yachts_pravila_arendy' => get_field('yachts_pravila_arendy'),
            )); 
          ?>
        </div>
      </div>
    </div>
  </section>
  <? get_template_part('template-parts/feedback/free',null, array(
    'title' =>  get_field('sekciya_9',changeLangId())['zagolovok']
  )); ?>

  <? get_template_part('template-parts/home/yachts'); ?>

  <? get_template_part('template-parts/home/reviews'); ?>

  <? get_template_part('template-parts/home/blog'); ?>
</div>



<div class="stub-footer"></div>

<? get_footer(); ?>