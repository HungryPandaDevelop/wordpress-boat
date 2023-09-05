<? get_header(); 
/*
Template Name: Страница о компании
Template Post Type:  page
*/

?>
<!-- modal-form start-->
<? get_template_part('template-parts/popup/video'); ?>

<!-- modal-form end-->
<div class="stub"></div>
<div class="content">
  <div class="about-main">
    <div class="about-main-wather"></div>
    <div class="about-main-img img-cover"> <img src="<? the_field('img_main_about'); ?>" alt=""></div>
    <div class="main-grid">
      <div class="col-7 col-md-6 col-sm-12 col-xs-12 about-main-img-stub">
        <div class="breadcrumbs">

          <?php bcn_display(); ?>
        </div>
      </div>
      <div class="col-5 col-md-6 col-sm-12 col-xs-12 about-main-info">
        <div class="about-main-info-container">
          <h1>
            <? changeLang('About company','О комании'); ?>

          </h1>
          <h2>
            <? the_field('tekst_1_about'); ?>
          </h2>
          <div class="about-main-text">
            <? the_field('tekst_2_about'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <? get_template_part('template-parts/home/advantages'); ?>

  <div class="stub-section"></div>

  <section class="video-detail">
    <div class="main-grid">
      <div class="col-6 col-xs-12 vertical-align">
        <div class="video-wather"></div>
        <div class="video-info">
          <? the_field('video_tekst_about_page'); ?>
        </div>
      </div>
    </div>

    <div class="video-container">


      <? if(get_field('video_fajl_about_img') || get_field('video_fajl_about')){?>
      <div class="img-cover">
        <img src="<? the_field('video_fajl_about_img'); ?>" alt="">
      </div>
      <div class="video-btn element-btn" data-element="10">
        <span></span>
        <i></i>
      </div>
      <?}else if(get_field('video_fajl_about_link')){?>
      <? the_field('video_fajl_about_link'); ?>
      <?} ?>
    </div>
  </section>

  <? $team_slider = carbon_get_post_meta(returnLang(1667,165), 'team_slider_about' ); ?>
  <section class="team-slider-container">
    <div class="main-full head-section">
      <h2>
        <? echo carbon_get_post_meta(returnLang(1667,165), 'team_slider_title' ); ?>
      </h2>
      <div>
        <? echo carbon_get_post_meta(returnLang(1667,165), 'team_slider_subtitle' ); ?>
      </div>
    </div>
    <div class="main-full">
      <div class="team-slider owl-team owl-carousel">

        <?
        foreach($team_slider  as $item){
          ?>

        <div class="team-slider-item">
          <div class="team-slider-img img-cover"><img
              src="<? echo wp_get_attachment_image_url($item['image_team'], 'full'); ?>" alt="">
          </div>
          <div class="team-slider-text-container">
            <div class="team-slider-text">
              <? echo $item['description']; ?>
            </div>
          </div>
        </div>
        <? } ?>
      </div>
    </div>
  </section>
  <div class="stub-section hidden-sm"></div>
  <? $num_slider = carbon_get_post_meta(returnLang(1667,165), 'num-adv-about' ); ?>
  <div class="num-adv-section">
    <div class="main-full">
      <h2>
        <? echo carbon_get_post_meta(returnLang(1667,165), 'num-adv-about_title' ); ?>
      </h2>
    </div>
    <div class="main-grid">

      <?
        foreach($num_slider  as $item){
          ?>
      <div class="col-3 col-sm-6 col-xs-6">
        <div class="num-adv-item"> <i>
            <? echo $item['num']; ?>
          </i><span>
            <? echo $item['text']; ?>
          </span></div>
      </div>
      <? } ?>
    </div>
  </div>
  <? get_template_part('template-parts/home/reviews'); ?>


  <? 
  $imagesTeam = get_field('galereya_kartinok_about_page');
  ?>
  <div class="main-full">
    <section class="default-slider">
      <div class="main-full head-section">
        <h2 class="title-section">
          <? changeLang('gallery','галерея'); ?>
        </h2>
      </div>
      <div class="owl-default owl-carousel">
        <?  foreach ($imagesTeam as $key=>$item) {?>
        <div class="owl-default-item img-cover"><img src="<? echo $item['full_image_url'] ?>" alt=""></div>
        <?}?>

      </div>
    </section>
  </div>
  <? get_template_part('template-parts/home/partners'); ?>

  <div class="stub-footer"></div>
</div>

<? get_footer(); ?>