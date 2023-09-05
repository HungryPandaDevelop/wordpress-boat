<div class="routes-item">
  <div class="main-grid">
    <div class="col-6 col-xs-12">
      <div class="routes-item-img">
        <div class="yachts-item-img-owl owl-carousel">
          <? $images = get_field('galereya_route'); ?>
          <div class="routes-img img-cover"> <img src="<?echo get_field('main_kartinka_route')['url'];?>" alt=""></div>
          <?  foreach ($images as $key=>$item) {?>
          <div class="routes-img img-cover"><img src="<? echo $item['full_image_url'] ?>" alt=""></div>
          <?}?>
        </div>
      </div>
    </div>
    <div class="col-6 col-xs-12">
      <div class="routes-item-info">
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
        <h3><a href=" <? echo $args['link']; ?>">
            <? echo $args['title']; ?>
          </a></h3>
        <div class="routes-item-description">
          <? the_excerpt(); ?>
        </div>
        <div class="routes-item-adv">
          <? for ($i = 0; $i <= 4; $i++) { ?>
          <? if(get_field('detali_kruiza')['detal_'.$i]){?>
          <div class="routes-adv-icons"> <img
              src="<?echo get_bloginfo('template_url');?>/frontend/images/routes/<?echo $i;?>.svg" alt=""><span>
              <?echo get_field('detali_kruiza')['detal_'.$i];?>
            </span></div>
          <?} ?>
          <?}?>

        </div>
        <div class="btn-routes-container">
          <a class="btn btn--blue element-btn" data-element="1" href="#">
            <? changeLang('get consultation','Получить консультацию'); ?>
          </a>
          <a class="btn btn--blue-border" href=" <? echo $args['link']; ?>">
            <? changeLang('More','Подробнее'); ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>