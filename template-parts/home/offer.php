<?

if($_GET['gall']){
  $another_news = new WP_Query(array(
    'posts_per_page'  =>  8, // вывести все
    'post_type' =>  'production',
    'order' =>  'ASC', // порядок сортировки
    'tax_query' => array(
      array(
      'taxonomy' => 'objectcat',
      'terms' =>  $_GET['gall']
      )
    ))
  );
}else if($_GET['autotr']){
  $another_news = new WP_Query(array(
    'posts_per_page'  =>  8, // вывести все
    'post_type' =>  'auto',
    'order' =>  'ASC', // порядок сортировки
  ));
}else{
  $another_news = new WP_Query(array(
    'posts_per_page'  =>  8, // вывести все
    'post_type' =>  'production',
    'order' =>  'ASC', // порядок сортировки
  ));
}


$terms = get_terms([
  'taxonomy' => 'objectcat',
  'hide_empty'  =>  false,
  'parent'         => 0, // здесь указываем 0, чтобы получить элементы только одного уровня без вложенностей
]);

?>
<pre>
  <?/*print_r($terms ); */?>
</pre>
<section class="offer" id="point-1">
  <div class="main-full head-section">
    <h3 class="subtitle-section">Продукты КВМЕД
      <? echo $_GET['gall']; ?>
    </h3>
    <h2 class="title-section">Лучшие предложения<br> на рынке медицинского оборудования</h2>
  </div>
  <div class="main-full ">
    <div class="offer-tabs-container">
      <ul class="offer-tabs ln">
        <li <?if(!$_GET['gall'] && $_GET['autotr']!=1){?>class="active"
          <?}?>>
          <a href="/#point-1">Все<br> категории</a>
        </li>
        <li <?if($_GET['autotr']==1){?>class="active"
          <?}?>>
          <a href="?autotr=1#point-1">Транспорт

          </a>
        </li>
        <?
          foreach($terms as $term){?>

        <li <?if($term->term_id == $_GET['gall']){?> class="active"
          <?}?>><a href="?gall=<?echo $term->term_id;?>#point-1">
            <?echo $term->name;?>
          </a>
        </li>

        <?}?>
        </li>
      </ul>
    </div>
  </div>
  <div class="main-grid market-owl owl-carousel">
    <?php
			while($another_news->have_posts()) {
				$another_news->the_post();

        $imgs = acf_photo_gallery('images', get_the_ID());
        $imgs=array_reverse($imgs);
        $i=0;
			?>
    <div class="offer-item col-3 col-lg-4 col-md-6 col-sm-1">
      <div class="offer-item-info">
        <div class="offer-item-code"><b>Код товара: </b><span>
            <?the_field('artikul');?>
          </span></div>
        <a class="offer-item-img" href="<? the_permalink(); ?>">


          <?
foreach ($imgs as $image) { $i++;
  if($i==1){?>
          <img class="img-back" src="<?php echo $image["full_image_url"];?>" alt="">
          <?}else if($i==2){?>
          <img class="img-front" src="<?php echo $image["full_image_url"];?>" alt="">
          <?}
?>

          <?php  }?>
        </a>
        <h3><a href="<? the_permalink(); ?>">
            <? the_title(); ?>
          </a></h3>

        <h5>Цена по запросу</h5>
      </div>
      <div class="btn-container"><a class="btn btn--green-white element-btn" data-element="6" href="#"><span>Получить
            КП</span></a><a class="btn btn--yellow-white" href="<? the_permalink(); ?>"><span>к товару</span></a></div>
    </div>

    <? }
			wp_reset_postdata();
			?>


  </div>
</section>