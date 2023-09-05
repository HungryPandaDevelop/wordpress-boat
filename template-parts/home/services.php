<?

// $services = new WP_Query(array(
// 	'posts_per_page'  =>  9, // вывести все
// 	'post_type' =>  'services ',
// 	'order' =>  'DESK', // порядок сортировки
//   // 'tax_query' => array(
//   //   array(
//   //       'taxonomy' => 'services_cat',
//   //       'operator' => 'NOT EXISTS', // or 'EXISTS'
//   //   ),
// // ),
// ));
$services = get_field('sekciya_4',changeLangId())['nabor_uslug'];
?>

<? 


if(get_field('sekciya_4',changeLangId())['vkl'][0] == 'on'){?>
<section class="services-home">
  <div class="main-full head-section">
    <h2>
      <? echo get_field('sekciya_4',changeLangId())['zagolovok'];?>
    </h2>
  </div>



  <div class="main-grid hide-home-desktop">

    <?php
      $i = 0;
      $addClass;
			// while($services->have_posts()) {
			// 	$services->the_post();
      foreach ($services as $key=>$item) {
        ?>

    <?

        switch ($i) {
          case 0:
              $addClass = 'col-3 col-md-6';
              break;
          case 1:
              $addClass = 'col-3 col-md-6';
              break;
          case 2:
              $addClass = 'col-6 col-md-12';
              break;
          case 3:
              $addClass = 'col-6 col-md-12';
              break;
          case 4:
              $addClass = 'col-3 col-md-6';
              break;
          case 5:
              $addClass = 'col-3 col-md-6';
              break;
          case 6:
              $addClass = 'col-3 col-md-6';
              break;
          case 7:
              $addClass = 'col-3 col-md-6';
              break;
          case 8:
              $addClass = 'col-6 col-md-12';
              break;
        
      }
      $i++;
      ?>
    <? get_template_part('template-parts/module/items/services-item', null, array(
        'title' => get_the_title($item),
        'link' => get_the_permalink($item),
        'img' => get_the_post_thumbnail_url($item),
        'addClass' =>  $addClass,
        'price' => get_field('price_serv', $item),
        'excerpt' => get_the_excerpt($item),
        
      )); ?>
    <?}
    // wp_reset_postdata();
    ?>
  </div>
  <div class="main-full slider-home-mobile">
    <div class="owl-mobile owl-carousel">
      <?php

			// while($services->have_posts()) {
			// 	$services->the_post();
      foreach ($services as $key=>$item) {
      ?>

      <?/*print_r(get_the_excerpt($item));*/?>
      <? 
     
      get_template_part('template-parts/module/items/services-item', null, array(
        'title' => get_the_title($item),
        'link' => get_the_permalink($item),
        'img' => get_the_post_thumbnail_url($item),
        'price' => get_field('price_serv', $item),
        'excerpt' => get_the_excerpt($item),
      )); ?>
      <?}
      
      // wp_reset_postdata();
      ?>
    </div>
  </div>
</section>

<?} ?>