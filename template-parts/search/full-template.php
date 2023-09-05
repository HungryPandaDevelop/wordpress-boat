<? 


get_header(); ?>

<?php
  $allCount = 0;

  $yachtsCount = 0;
  $servicesCount = 0;
  $routesCount = 0;
  while(have_posts()) {
    the_post();
    
    if(get_post_type()=='yachts'){
      $allCount++;
      $yachtsCount++;
    };
    if(get_post_type()=='services'){
      $allCount++;
      $servicesCount++;
    };
    if(get_post_type()=='routes'){
      $allCount++;
      $routesCount++;
    };
  };
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
      <? changeLang('Search','Поиск'); ?>
    </h1>
  </div>
  <form class="main-grid search-panel" action='/'>
    <div class="col-10 col-xs-12">
      <div class="search-main">
        <input class="input-search" type="text" name="s" placeholder="<? changeLang('Find','Найти'); ?>"
          value="<?echo get_search_query();?>">
        <div class="search-ico"></div>
      </div>

    </div>

    <div class="col-2 col-xs-12"><a class="btn btn-search btn--yellow" href="#">
        <? changeLang('Find','Найти'); ?>
      </a></div>
    <?
    if($allCount == 0){
      ?>

    <? if($_GET['s']){?>
    <div class="col-12">
      <h3>
        <? changeLang('Nothing found for your request','По вашему запросу ничего не найдено'); ?>
      </h3>
      <div class="hint">
        <? changeLang('Ask another request or look at the information on the pages of the site:','Задайте другой запрос или посмотрите информацию на страницах сайта:'); ?>
      </div>
    </div>
    <?}else{?>
    <div class="col-12">
      <h3>
        <? changeLang('Start your search','Начните поиск'); ?>
        <? echo($_GET['s']); ?>
      </h3>
      <div class="hint">
        <? changeLang('Ask another request or look at the information on the pages of the site:','Задайте другой запрос или посмотрите информацию на страницах сайта:'); ?>
      </div>
    </div>
    <?} ?>
    <div class="col-12 search-tags">
      <? search_menu();  ?>
    </div>


    <?
    }else{
      ?>
    <div class="col-12">
      <h3>
        <? changeLang('Matches on request','Совпадения по запросу'); ?>
        <? if(get_search_query()){ echo '«'.get_search_query().'»';};  ?>
      </h3>
    </div>
    <?
    }
  ?>

  </form>

  <?
    if($allCount == 0){?>
  <? get_template_part('template-parts/home/yachts'); ?>

  <?}?>
  <? if($yachtsCount>0){?>
  <div class="search-result-item">
    <div class="main-full">
      <div class="search-result-topic">
        <? changeLang('Yacht charter','Аренда ЯхТ'); ?>
      </div>
    </div>
    <div class="catalog-grid">
      <?php
			while(have_posts()) {
				the_post();
        if(get_post_type()=='yachts'){
        ?>
      <div class="col-4 col-sm-6 col-xs-12">
        <? get_template_part('template-parts/module/items/yachts-item', null, array(
      'title' => get_the_title(),
      'link' => get_the_permalink()
    )); ?>
      </div>
      <?}
    
    };?>
    </div>
  </div>
  <?} ?>
  <? if($servicesCount>0){?>
  <div class="search-result-item">
    <div class="main-full">
      <div class="search-result-topic">
        <? changeLang('Luxury Sea Boats Charter Services','Услуги Luxury Sea Boats Charter'); ?>
      </div>
    </div>
    <div class="catalog-grid">
      <?php
			while(have_posts()) {
				the_post();
        if(get_post_type()=='services'){
        ?>
      <? get_template_part('template-parts/module/items/services-item', null, array(
        'title' => get_the_title(),
        'link' => get_the_permalink(),
        'img' => get_the_post_thumbnail_url(),
        'addClass' =>  'col-4',
        'price' => get_field('price_serv', get_the_ID()),
      )); ?>
      <?}
    
    };?>
    </div>
  </div>
  <?} ?>
  <? if($routesCount>0){?>
  <div class="search-result-item">
    <div class="main-full">
      <div class="search-result-topic">
        <? changeLang('Сruises','Круизы'); ?>
      </div>
    </div>
    <div class="catalog-grid">
      <?php
			while(have_posts()) {
				the_post();
        if(get_post_type()=='routes'){
        ?>
      <div class="col-6">
        <? get_template_part('template-parts/module/items/routes-item-main', null, array(
      'title' => get_the_title(),
      'link' => get_the_permalink()
    )); ?>
      </div>
      <?}
    
    };?>
    </div>
  </div>

  <?}; ?>

  <div class="stub-footer"></div>

</div>

<? get_footer(); ?>