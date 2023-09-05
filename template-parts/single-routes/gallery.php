<? 
$images = get_field('galereya_route'); 
$itemsCount = count($images );
?>

<? if($itemsCount != 0){?>
<div class="main-full">
  <section class="default-slider">
    <div class="main-full head-section">
      <h2 class="title-section">
        <? changeLang('gallery','галерея'); ?>
      </h2>
    </div>

    <div class="owl-default owl-carousel">
      <?  foreach ($images as $key=>$item) {?>
      <div class="owl-default-item img-cover"><img src="<? echo $item['full_image_url'] ?>" alt=""></div>
      <?}?>
    </div>
  </section>
</div>
<?} ?>