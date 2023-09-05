<? 
$images = get_field('yachts_main_images', $args['id']);
?>

<div class="yachts-item">
  <a href="<? echo $args['link']; ?>" class="yachts-item-img">

    <div class="yachts-img img-cover"> <img src="<? echo $images[0]['full_image_url'] ?>" alt=""></div>
    <div class="yachts-logo"> <span>
        <? echo get_field('refit_text', $args['id']); ?>
      </span></div>
    <div class="yachts-item-liked" data-id="<? echo $args['id']; ?>"> </div>
  </a>
  <div class="yachts-item-info">
    <h3>
      <a href="<? echo $args['link']; ?>">
        <? echo $args['title']; ?>
      </a>
    </h3>
    <!-- ?? -->
    <!-- <ul class="ln yachts-item-description">
      <li><b>Назначение:</b>
        <div>Круизы по Дубаю, вечеринки, рекреационная деятельность</div>
      </li>
      <li><b>Вервь:</b>
        <div>Azimut, Италия</div>
      </li>
    </ul> -->
    <!-- ?? -->
    <div class="yachts-item-price">
      <? the_field('yachts_price', $args['id']); ?>
      <? changeLang('AED/hour','AED/час'); ?>
    </div>
    <div class="yachts-item-adv">
      <div class="yachts-adv-icons">
        <img src="<?echo get_bloginfo('template_url');?>/frontend/images/popular/1.svg" alt="" />
        <span>
          <?
            if (get_locale() == 'en_US') {?>
          <? echo get_field('yachts_harakteristiki',$args['id'])['yachts_char_element_32']; ?> ft.
          <br>
          (
          <? echo get_field('yachts_harakteristiki',$args['id'])['yachts_char_element_3']; ?> m. )
          <?}else{?>
          <? echo get_field('yachts_harakteristiki',$args['id'])['yachts_char_element_3']; ?> м.
          <br>
          (
          <? echo get_field('yachts_harakteristiki',$args['id'])['yachts_char_element_32']; ?> ft. )
          <?}
          
          ?>

        </span>
      </div>
      <div class="yachts-adv-icons"> <img src="<?echo get_bloginfo('template_url');?>/frontend/images/popular/2.svg"
          alt=""><span>
          <? echo get_field('yachts_harakteristiki',$args['id'])['yachts_char_element_5']; ?>
          <br>
          <?if (get_locale() == 'en_US') {?>guests
          <?}else{?>гостей
          <?}?>
        </span></div>
      <div class="yachts-adv-icons"> <img src="<?echo get_bloginfo('template_url');?>/frontend/images/popular/3.svg"
          alt=""><span>
          <? echo get_field('yachts_harakteristiki',$args['id'])['yachts_char_element_8']; ?>
          <br>
          <?if (get_locale() == 'en_US') {?>crew members
          <?}else{?>человека
          <?}?>

        </span></div>
      <div class="yachts-adv-icons"> <img src="<?echo get_bloginfo('template_url');?>/frontend/images/popular/4.svg"
          alt=""><span>
          <? echo get_field('yachts_harakteristiki',$args['id'])['yachts_char_element_7']; ?>
          <br>
          <?if (get_locale() == 'en_US') {?>cabins
          <?}else{?>каюты
          <?}?>

        </span></div>
    </div>
    <div class="btn-yachts-container"><a class="btn btn--blue element-btn element-btn-yachts" data-element="3" href="#">
        <? changeLang('Book','Забронировать'); ?>
      </a><a class="btn btn--blue-border" href="<? echo $args['link']; ?>">
        <? changeLang('More','Подробнее'); ?>
      </a></div>
  </div>
</div>