<?
/*
Template Name: Страница отзывы
Template Post Type:  page
*/

get_header(); ?>
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
$rewVideo = new WP_Query(array(
	'posts_per_page'  =>  9, // вывести все
	'post_type' =>  'rew ',
	'order' =>  'DESK', // порядок сортировки
  'meta_query'  => array(
      array(
        'key' =>  'tip_otzyvy',
        'compare' =>  '==',
        'value' =>  'video',
      )
    )
  ));
$rewSocial = new WP_Query(array(
	'posts_per_page'  =>  9, // вывести все
	'post_type' =>  'rew ',
	'order' =>  'DESK', // порядок сортировки
  'meta_query'  => array(
      array(
        'key' =>  'tip_otzyvy',
        'compare' =>  '==',
        'value' =>  'social',
      )
    )
  ));
?>

<div class="stub-second"></div>



<div class="main-full">
  <div class="breadcrumbs">
    <?
		  bcn_display();
		?>
  </div>
</div>
<div class="content">
  <div class="main-full">
    <div class="head-section">
      <h2 class="title-section">
        <? echo get_field('main_rew_title'); ?>
      </h2>
      <h3 class="subtitle-section">
        <? echo get_field('main_rew_subtitle'); ?>
      </h3>
    </div>
  </div>
  <section class="owl-home">
    <div class="main-full head-section owl-home-head">
      <div>
        <h2 class="title-section">
          <? echo get_field('zagolovok_sekcii_1'); ?>
        </h2>
      </div>
      <div class="btn-container"><a class="btn btn--blue form-go" href="#">
          <? changeLang('send a reviewм','Оставить отзыв'); ?>
        </a></div>
      <div class="stab-arrow"></div>
    </div>
    <div class="main-full owl-second owl-carousel">
      <?php

        while($rewSocial->have_posts()) {
          $rewSocial->the_post();
        ?>

      <?
    
      get_template_part('template-parts/module/items/reviews-item', null, array(
        'social_rew' => get_field('social_rew'),
          'type'  =>  'social'
        )); ?>
      <?
      }?>

      <?wp_reset_postdata();?>
    </div>

  </section>

  <?
  $sizeItems = $rewVideo->found_posts;
  ?>
  <?
  if($sizeItems != 0){?>
  <section class="owl-home">
    <div class="main-full head-section owl-home-head">
      <div>
        <h2 class="title-section">
          <? echo get_field('zagolovok_sekcii_2'); ?>
        </h2>
      </div>
      <div class="stab-arrow"></div>
    </div>
    <div class="main-full owl-second owl-carousel">
      <?php

        while($rewVideo->have_posts()) {
          $rewVideo->the_post();
        ?>

      <?
    
      get_template_part('template-parts/module/items/reviews-item', null, array(
          'author' => get_field('author_rew'),
          'video' => get_field('video_rew'),
          'img' => get_field('rew_author_img'),
          'date' => get_field('rew_date'),
          'type'  =>  'video'
        )); ?>
      <?
      }?>

      <?wp_reset_postdata();?>
    </div>
  </section>
  <?}  ?>
  <section class="owl-home">
    <div class="main-full">
      <div class="head-section">
        <h2 class="title-section">
          <? echo get_field('zagolovok_sekcii_3'); ?>
        </h2>
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
  <div class="stub-rew-page"></div>
  <? get_template_part('template-parts/feedback/reviews'); ?>
</div>

<? get_footer(); ?>