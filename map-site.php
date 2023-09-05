<?
/*
Template Name: Страница карта сайта
Template Post Type:  page
*/

get_header(); ?>


<div class="stub-second"></div>
<div class="main-full">
  <div class="breadcrumbs">
    <?
		  bcn_display();
		?>
  </div>
</div>

<div class="content mapsite">
  <div class="main-full ">
    <h1>
      <? the_title(); ?>
    </h1>


  </div>
  <div class="main-grid">
    <div class="col-3">
      <div class="mapsite-large">
        <ul>
          <li>
            <a href="<? changeLang('/en/','/'); ?>">
              <? changeLang('Main','Главная'); ?>
            </a>
          </li>
        </ul>
      </div>
      <div class="mapsite-default">
        <? footer_menu(); ?>
      </div>
      <div class="mapsite-default">
        <? footer_menu_three(); ?>
      </div>
    </div>
    <div class="col-4">
      <div class="mapsite-default">
        <? footer_menu_second(); ?>
      </div>
      <div class="mapsite-large">
        <? footer_menu_four(); ?>
      </div>
    </div>
    <div class="col-5">
      <div class="mapsite-img">
        <img src="<? the_field('map_site_img'); ?>" alt="">
      </div>
    </div>
  </div>
</div>

<? get_footer(); ?>