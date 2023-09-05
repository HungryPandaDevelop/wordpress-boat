<section class="detail-content">
  <div class="main-grid">
    <div class="col-6 col-sm-12 col-xs-12">
      <?echo get_field('bolshoe_opisanie_route')['levaya_chast'];?>
    </div>
    <div class="col-6 col-sm-12 col-xs-12">
      <?echo get_field('bolshoe_opisanie_route')['pravaya_chast'];?>
    </div>
    <!-- new text -->
    <? $items = carbon_get_post_meta(get_the_ID(), 'routes_desk_list' );?>

    <?foreach($items as $singleItem){?>

    <?if($singleItem['on'][0] == 'vkl'){?>

    <div class="col-xs-12 img-desk-routes-mobile">
      <img src="<? echo wp_get_attachment_image_src($singleItem['image_desk_routes'], 'full')[0];  ?>" alt="">
    </div>
    <?if($singleItem['side'] == 'left_img'){?>
    <?if($singleItem['image_desk_routes']){?>
    <div class="col-6 col-sm-12 col-xs-12 img-desk-routes-desk">
      <img src="<? echo wp_get_attachment_image_src($singleItem['image_desk_routes'], 'full')[0];  ?>" alt="">
    </div>
    <?}?>
    <?}?>

    <div class="<?if($singleItem['image_desk_routes']){?>col-6<?}else{?>col-12<?}?> col-sm-12 col-xs-12">
      <? echo $singleItem['desk'];  ?>
    </div>

    <?if($singleItem['side'] == 'right_img'){?>
    <?if($singleItem['image_desk_routes']){?>
    <div class="col-6 col-sm-12 col-xs-12 img-desk-routes-desk">
      <img src="<? echo wp_get_attachment_image_src($singleItem['image_desk_routes'], 'full')[0];  ?>" alt="">
    </div>
    <?}?>
    <?}?>

    <?} ?>
    <?} ?>
  </div>
</section>