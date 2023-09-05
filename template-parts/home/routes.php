<?
$routes = new WP_Query(array(
	'posts_per_page'  =>  4, // вывести все
	'post_type' =>  'routes ',
	'order' =>  'DESK', // порядок сортировки
));
?>
<?
if(get_field('sekciya_7', changeLangId())['vkl'][0] == 'on'){?>

<section class="routes-home">
  <div class="head-section main-full">
    <h2>
      <? echo get_field('sekciya_7', changeLangId())['zagolovok']; ?>
    </h2>
  </div>
  <div class="main-grid hide-home-desktop">
    <?php
			while($routes->have_posts()) {
				$routes->the_post();
        ?>
    <div class="col-6">
      <? get_template_part('template-parts/module/items/routes-item-main', null, array(
      'title' => get_the_title(),
      'link' => get_the_permalink()
    )); ?>
    </div>
    <?}?>
  </div>
  <div class="main-full slider-home-mobile">
    <div class="owl-mobile owl-carousel">
      <?php
			while($routes->have_posts()) {
				$routes->the_post();
        ?>
      <? get_template_part('template-parts/module/items/routes-item-main', null, array(
      'title' => get_the_title(),
      'link' => get_the_permalink()
    )); ?>
      <?}
      wp_reset_postdata();
      ?>
    </div>
  </div>
  <div class="btn-container-section"><a class="btn btn--yellow" href="<? changeLang('/en/cruises/','/marshruty/'); ?>">
      <? changeLang('All routes','Все маршруты'); ?>
    </a></div>
</section>

<?}?>