<?

$rewNormal = new WP_Query(array(
	'posts_per_page'  =>  9, // вывести все
	'post_type' =>  'rew ',
	'order' =>  'DESK', // порядок сортировки
  'meta_query'  => array(
      array(
        'key' =>  'tip_otzyvy',
        'compare' =>  '==',
        'value' =>  'report',
      )
    )
  ));
?>

<? 

if(get_field('sekciya_14',6)['vkl'][0] == 'on' && $rewNormal->found_posts > 0){?>
<section class="reviews-home owl-home">
  <div class="main-full head-section owl-home-head">
    <div>
      <h2 class="title-section"> Видеоотчеты наших довольных клиентов</h2>
      <h3 class="subtitle-section"> Наши постоянные клиенты – наша гордость. Мы всегда рады снова и снова встречать
        наших гостей и видеть, как совершенствуются их навыки катания на вейкборде и вейксерфинге.</h3>
    </div>
    <div class="stab-arrow"></div>
  </div>
  <div class="main-full owl-second owl-carousel">
    <?php

      while($rewNormal->have_posts()) {
        $rewNormal->the_post();
      ?>

    <?
  
    get_template_part('template-parts/module/items/reviews-item', null, array(
        'video' => get_field('video_rew'),
        'type'  =>  'report'
      )); ?>
    <?
    }?>

    <?wp_reset_postdata();?>
  </div>
</section>

<?} ?>