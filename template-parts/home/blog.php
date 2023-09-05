<?
$blog = new WP_Query(array(
	'posts_per_page'  =>  6, // вывести все
	'post_type' =>  'blog ',
	'order' =>  'DESK', // порядок сортировки
));
?>
<?
if(get_field('sekciya_15',changeLangId())['vkl'][0] == 'on'){?>
<section class="blog-home owl-home">
  <div class="main-full">
    <div class="head-section">
      <h2>
        <? echo get_field('sekciya_15',changeLangId())['zagolovok']; ?>
      </h2>
      <div class="btn-container"><a class="btn btn--blue" href="<? changeLang('/en/blog/','/blog/'); ?>">
          <? changeLang('See all articles','СМОТРЕТЬ ВСЕ статьи'); ?>
        </a></div>
      <div class="stab-arrow"></div>
    </div>
  </div>
  <div class="main-full owl-second owl-carousel">
    <?php
			while($blog->have_posts()) {
				$blog->the_post();
        ?>
    <? get_template_part('template-parts/module/items/blog-item', null, array(
      'img' =>  get_the_post_thumbnail_url(),
      'title' => get_the_title(),
      'link' => get_the_permalink(),
      'text'  =>  get_the_excerpt(),
      'date'  =>  get_the_date()
    )); ?>
    <?}
      wp_reset_postdata();
    ?>
  </div>
</section>

<?}?>