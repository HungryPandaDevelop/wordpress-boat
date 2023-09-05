<?

$rewNormal = new WP_Query(array(
	'posts_per_page'  =>  9, // вывести все
	'post_type' =>  'rew ',
	'order' =>  'DESK', // порядок сортировки
  'meta_query'  => array(
      array(
        'key' =>  'tip_otzyvy',
        'compare' =>  '==',
        'value' =>  'normal',
      )
    )
  ));
?>

<? 

if(get_field('sekciya_14',changeLangId())['vkl'][0] == 'on' && $rewNormal->found_posts > 0){?>
<section class="reviews-home owl-home">
  <div class="main-full">
    <div class="head-section">
      <h2>
        <? echo get_field('sekciya_14',changeLangId())['zagolovok'];?>
      </h2>
      <div class="btn-container"><a class="btn btn--blue" href="<? changeLang('/en/reviews/','/otzyvy/'); ?>">
          <? changeLang('SEE ALL reviews','СМОТРЕТЬ ВСЕ отзывы'); ?>
        </a></div>
      <div class="stab-arrow"></div>
    </div>
  </div>
  <div class="main-full owl-second owl-carousel">
    <?php

      while($rewNormal->have_posts()) {
        $rewNormal->the_post();
      ?>

    <?
  
    get_template_part('template-parts/module/items/reviews-item', null, array(
        'author' => get_field('author_rew'),
        'comment' => get_field('text_rew'),
        'img' => get_field('rew_author_img'),
        'date' => get_field('rew_date'),
        'type'  =>  'normal'
      )); ?>
    <?
    }?>

    <?wp_reset_postdata();?>
  </div>
</section>

<?} ?>