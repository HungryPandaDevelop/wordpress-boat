<? get_header(); ?>

<?
$items = new WP_Query(array(
	'posts_per_page'  =>  -1, // вывести все
	'post_type' =>  'routes ',
	'order' =>  'DESK', // порядок сортировки
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
    <h1>
      <? changeLang('Routes','Маршруты'); ?>
    </h1>
  </div>
  <div class="main-full">
    <?
      while($items->have_posts()){
        $items->the_post();?>
    <? get_template_part('template-parts/module/items/routes-item', null, array(
      'title' => get_the_title(),
      'link' => get_the_permalink()
    )); ?>
    <?}?>
  </div>
  <!-- <div class="main-full btn-container-section"><a class="btn btn--yellow" href="#">Показать еще</a></div> -->
  <div class="main-full pagination-container">
    <!-- pagination-component start-->
    <?php /*the_posts_pagination();*/ ?>
    <!-- pagination-component start-->
  </div>
  <div class="stub-section"></div>
  <? get_template_part('template-parts/feedback/free',null, array(
    'title' =>  get_field('sekciya_9',changeLangId())['zagolovok']
  )); ?>

  <? get_template_part('template-parts/home/reviews'); ?>
  <div class="stub-footer"></div>
</div>
<? get_footer(); ?>