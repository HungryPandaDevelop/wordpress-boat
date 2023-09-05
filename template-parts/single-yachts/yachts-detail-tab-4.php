<div class="gallery-thumb">
  <div class="gallery-thumb-main">
    <div class="owl-carousel big">
      <?  foreach ($args['images'] as $key=>$item) {?>

      <img src="<? echo $item['full_image_url'] ?>" alt="">

      <?}?>
    </div>
  </div>
  <div class="gallery-thumb-thumbnails">
    <div class="owl-carousel thumbs">
      <?  foreach ($args['images'] as $key=>$item) {?>

      <img src="<? echo $item['full_image_url'] ?>" alt="">

      <?}?>
    </div>
  </div>
</div>