<div class="routes-item-main">
  <a class="routes-item-main-img" href="<? echo $args['link']; ?>">
    <div class="img-cover">
      <img src="<?echo get_field('main_kartinka_route')['url'];?>" alt="">
    </div>
  </a>
  <div class="routes-item-main-info">
    <div class="routes-item-main-about">
      <?if(get_field('price_route')){?>
      <div class="price-tag">
        <?echo get_field('price_route');?>
      </div>
      <?}?>
      <?if(get_field('time_route')){?>
      <div class="time-tag"><i></i><span>
          <?echo get_field('time_route');?>
        </span></div>
      <?}?>
    </div>
    <h3><a href="<? echo $args['link']; ?>">
        <? echo $args['title']; ?>
      </a></h3>
    <div class="routes-item-main-text">
      <? the_excerpt(); ?>
    </div>
    <div class="btn-container"> <a class="btn btn--blue-border" href="<? echo $args['link']; ?>">Подробнее </a></div>
  </div>
</div>