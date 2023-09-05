<?
$allYachts = get_field('yachts_wake');
?>

<section class="yachts-second-section">
  <div class="main-full head-section">
    <h2 class="title-section">
      <? echo get_field('serv_wake_title');?>
    </h2>
    <div class="subtitle-section">
      <? echo get_field('serv_wake_subtitle');?>
    </div>
  </div>
  <div class="main-full">
    <?
foreach($allYachts  as $yacht){
  $images = get_field('yachts_main_images', $yacht);
  ?>
    <div class="yachts-item-second">
      <div class="main-grid">
        <div class="col-6 col-sm-12 col-xs-12">
          <div class="yachts-item-img">
            <div class="yachts-item-img-owl owl-carousel">
              <?  foreach ($images as $key=>$item) {
                ?>
              <div class="yachts-img img-cover"> <img src=" <? echo $item['full_image_url'];?>" alt="">
              </div>
              <?}?>
            </div>
          </div>
        </div>
        <div class="col-6 col-sm-12 col-xs-12">
          <div class="yachts-item-second-info">

            <?/*<div class="price-tag">
              <? echo get_field('yachts_price', $yacht);?> AED/час
          </div>*/?>
          <?/*<h3><a href="<? the_permalink( $yacht); ?>">
          <? echo get_the_title($yacht); ?>
          </a></h3>*/?>
          <h3>
            <? echo get_the_title($yacht); ?>
          </h3>
          <div class="yachts-item-second-description">
            <? 
          echo get_the_excerpt($yacht);
        
          ?>

          </div>
          <h4>
            <? changeLang("What's included","Что включено"); ?>
          </h4>
          <div class="ln yachts-item-second-list">
            <? echo get_field('yachts_opisanie', $yacht)['chto_vkljucheno']; ?>
          </div>
          <div class="yachts-item-second-adv">
            <div class="yachts-adv-icons"> <img
                src="<?php echo get_bloginfo('template_url');?>/frontend/images/popular/1.svg" alt=""><span>
                <? echo get_field('yachts_harakteristiki', $yacht)['yachts_char_element_32'];?> м.(
                <? echo get_field('yachts_harakteristiki', $yacht)['yachts_char_element_3'];?> ft.)
              </span></div>
            <div class="yachts-adv-icons"> <img
                src="<?php echo get_bloginfo('template_url');?>/frontend/images/popular/2.svg" alt=""><span>
                <? echo get_field('yachts_harakteristiki', $yacht)['yachts_char_element_5'];?>
                <? changeLang('Guests','Гостей'); ?>
              </span></div>
            <div class="yachts-adv-icons"> <img
                src="<?php echo get_bloginfo('template_url');?>/frontend/images/popular/3.svg" alt=""><span>
                <? echo get_field('yachts_harakteristiki', $yacht)['yachts_char_element_8'];?>
                <? changeLang('Human','Человека'); ?>
              </span></div>
            <?/*<div class="yachts-adv-icons"> <img
                  src="<?php echo get_bloginfo('template_url');?>/frontend/images/popular/4.svg" alt=""><span>
              <? echo get_field('yachts_harakteristiki', $yacht)['yachts_char_element_6'];?>
              <? changeLang('Cabins','Каюты'); ?>
            </span>
          </div>*/?>
        </div>
        <div class="btn-yachts-container"><a class="btn btn--blue element-btn element-btn-yachts-second"
            data-element="3" href="#">
            <? changeLang('Book','Забронировать'); ?>
          </a><a class="btn btn--blue-border  element-btn" data-element="1" href="#">
            <? changeLang('Ask a Question','Задать вопрос'); ?>
          </a></div>
      </div>
    </div>
  </div>
  </div>
  <?}
?>
  </div>
</section>