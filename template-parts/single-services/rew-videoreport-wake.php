<?
$rewAll = get_field('videootchety')['nabor_otzyvov'];
?>

<? 

if(get_field('videootchety')['vkl'][0] == 'on' && count($rewAll) > 0){?>
<section class="reviews-home owl-home">
  <div class="main-full head-section owl-home-head">
    <div>
      <h2 class="title-section">
        <? echo get_field('videootchety')['zagolovok']; ?>
      </h2>
      <h3 class="subtitle-section">
        <? echo get_field('videootchety')['subzagolovok']; ?>
      </h3>
    </div>
    <div class="stab-arrow"></div>
  </div>
  <div class="main-full owl-second owl-carousel">
    <?  foreach ($rewAll as $key=>$item) {
      
      ?>

    <?get_template_part('template-parts/module/items/reviews-item', null, array(
        'video' => get_field('video_rew', $item),
        'type'  =>  'report'
      )); ?>

    <?}?>

    <?wp_reset_postdata();?>
  </div>
</section>

<?} ?>