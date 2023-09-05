<?

$services = new WP_Query(array(
	'posts_per_page'  =>  9, // вывести все
	'post_type' =>  'services ',
	'order' =>  'DESK', // порядок сортировки
  'post__not_in'  => array(get_the_ID()),
));
?>

<section class="owl-home serv-list-detail">
  <div class="main-full">
    <div class="head-section">
      <h2 class="title-section">
        <? changeLang('ADDITIONAL SERVICES','ДОПОЛНИТЕЛЬНЫЕ УСЛУГИ'); ?>

      </h2>
      <div class="btn-container"><a class="btn btn--blue"
          href="<? changeLang('/en/additional-services/','/dopolnitelnye-uslugi/'); ?>">
          <? changeLang('ADDITIONAL SERVICES','Смотреть все услуги'); ?>
        </a></div>
      <div class="stab-arrow"></div>
    </div>
  </div>
  <div class="main-full owl-second owl-carousel">
    <?php
			while($services->have_posts()) {
				$services->the_post();
        ?>
    <? get_template_part('template-parts/module/items/services-item', null, array(
        'title' => get_the_title(),
        'link' => get_the_permalink(),
        'img' => get_the_post_thumbnail_url(),
        'addClass' =>  $addClass,
        'price' => get_field('price_serv', get_the_ID()),
      )); ?>
    <?}
      wp_reset_postdata();
    ?>
  </div>
</section>