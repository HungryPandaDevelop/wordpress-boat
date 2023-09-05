<?
$images = get_field('sekciya_16_logo',6);
?>

<?
if(get_field('sekciya_16',6)['vkl'][0] == 'on'){
    
    ?>
<section class="partners-home">
  <div class="partners-container main-full owl-partners owl-carousel">
    <?  foreach ($images as $item) {?>
    <div class="partners-item"> <img src="<? echo $item['full_image_url'] ?>" alt=""></div>
    <?}?>
</section>
<?}?>