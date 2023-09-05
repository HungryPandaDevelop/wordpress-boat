<?
$routes = new WP_Query(array(
	'posts_per_page'  =>  4, // вывести все
	'post_type' =>  'routes ',
	'order' =>  'DESK', // порядок сортировки
));
?>
<section class="routes-section owl-home">
  <div class="main-full">
    <div class="head-section">
      <h2 class="title-section">
        <? changeLang('Other tours','Другие туры'); ?>
      </h2>
      <div class="btn-container"><a class="btn btn--blue" href="<? changeLang('/en/cruises/','/marshruty/'); ?>">
          <? changeLang('VIEW ALL tours','СМОТРЕТЬ ВСЕ туры'); ?>
        </a></div>
      <div class="stab-arrow"></div>
    </div>
  </div>
  <div class="main-full owl-four owl-carousel">
    <?php
			while($routes->have_posts()) {
				$routes->the_post();
        ?>
    <? get_template_part('template-parts/module/items/routes-item-main', null, array(
      'title' => get_the_title(),
      'link' => get_the_permalink()
    )); ?>
    <?}?>

  </div>
</section>