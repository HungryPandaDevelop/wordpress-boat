<?
$linkImg =  get_bloginfo('template_url').'/frontend/images';
?>
<div class="yachts-detail-adv">
  <div class="yachts-adv-icons">
    <div>
      <img src="<?echo $linkImg;?>/popular/1.svg" alt="">
      <span>
        <?
            if (get_locale() == 'en_US') {?>
        <? echo get_field('yachts_harakteristiki',$args['id'])['yachts_char_element_32']; ?> ft.
        (
        <? echo get_field('yachts_harakteristiki',$args['id'])['yachts_char_element_3']; ?> m. )
        <?}else{?>
        <? echo get_field('yachts_harakteristiki',$args['id'])['yachts_char_element_3']; ?> м.
        (
        <? echo get_field('yachts_harakteristiki',$args['id'])['yachts_char_element_32']; ?> ft. )
        <?}
          
          ?>
      </span>
    </div>
  </div>
  <div class="yachts-adv-icons">
    <div><img src="<?echo $linkImg;?>/popular/2.svg" alt=""><span>
        <? echo get_field('yachts_harakteristiki')['yachts_char_element_5']; ?>
      </span></div>
  </div>
  <div class="yachts-adv-icons">
    <div><img src="<?echo $linkImg;?>/popular/3.svg" alt=""><span>
        <? echo get_field('yachts_harakteristiki')['yachts_char_element_8']; ?>
      </span></div>
  </div>
  <div class="yachts-adv-icons">
    <div><img src="<?echo $linkImg;?>/popular/4.svg" alt=""><span>
        <? echo get_field('yachts_harakteristiki')['yachts_char_element_7']; ?>
      </span></div>
  </div>
</div>