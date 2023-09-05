<div class="main-home">
  <div class="main-home-video">
    <video width="480" loop autoplay muted playsinline>
      <source src="<?echo get_bloginfo('template_url');?>/frontend/images/video-main.mp4" type="video/mp4">
    </video>
  </div>
  <div class="main-home-content main-full">
    <div class="main-home-info">
      <h2>
        <? echo get_field('sekciya_1')['tekst_1']; ?>
      </h2>
      <h1>
        <? echo get_field('sekciya_1')['tekst_2']; ?>
      </h1>
    </div>
    <div class="home-banner element-btn" data-element="1"> <i></i><span>
        <? changeLang('Get consultation','Получить консультацию'); ?>
      </span></div>
    <div class="scroll-home-container">
      <div class="scroll-home"></div>
    </div>
  </div>
</div>