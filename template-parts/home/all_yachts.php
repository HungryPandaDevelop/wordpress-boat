<?
$yachts = new WP_Query(array(
	'posts_per_page'  =>  6, // вывести все
	'post_type' =>  'yachts ',
	'order' =>  'DESK', // порядок сортировки
));


// print_r(get_field('sekciya_5'));
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
        <a class="btn btn--blue" href="/yachts/">
          <? changeLang('See all yachts','Смотреть все яхты'); ?>
        </a>
      </div>
      <div class="stab-arrow"></div>
    </div>
  </div>
  <div class="main-full owl-second owl-carousel">
    <?php
			while($yachts->have_posts()) {
				$yachts->the_post();
        ?>
    <? get_template_part('template-parts/module/items/yachts-item', null, array(
      'title' => get_the_title(),
      'link' => get_the_permalink()
    )); ?>

    <?};
    
    wp_reset_postdata();
    ?>
  </div>
</section>
<?} ?>