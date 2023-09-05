<?
$items = get_field('sekciya_3', changeLangId())['nabor_yaht'];
?>

<? if(get_field('sekciya_3', changeLangId() )['vkl'][0] == 'on'){?>

<section class="yachts-home owl-home">
  <div class="main-full">
    <div class="head-section">
      <h2>
        <span>
          <? echo get_field('sekciya_3', changeLangId() )['zagolovok'];?>
        </span>
      </h2>
      <div class="btn-container">
        <a class="btn btn--blue" href="<? changeLang('/en/yachts/','/yahty-v-dubae/'); ?>">
          <? changeLang('See all yachts','Смотреть все яхты'); ?>
        </a>
      </div>
      <div class="stab-arrow"></div>
    </div>
  </div>

  <div class="main-full owl-second owl-carousel">
    <?  foreach ($items as $key=>$item) {?>
    <? if($item !=  get_the_ID()) {?>
    <? get_template_part('template-parts/module/items/yachts-item', null, array(
      'title' => get_the_title($item),
      'link' => get_the_permalink($item),
      'id'  => $item
    )); ?>

    <?}?>
    <?}?>

    <?wp_reset_postdata();?>
  </div>
</section>

<?} ?>