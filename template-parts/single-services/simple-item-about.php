<section class="simple-about">
  <? if(get_field('blok_teksta_s_kartinkoj_1' )['vkl'][0] == 'on'){?>
  <div class="simple-item-about main-grid">
    <div class="simple-item-about-bg"></div>
    <div class="col-7 col-sm-12 simple-item-text-container">
      <div class="simple-item-text">
        <? echo get_field('blok_teksta_s_kartinkoj_1')['tekst']; ?>
      </div>
    </div>
    <div class="col-5 simple-item-img img-cover col-sm-12"><img
        src="<? echo get_field('blok_teksta_s_kartinkoj_1')['kartinka']['url']; ?>" alt=""></div>
  </div>
  <?}?>
  <? if(get_field('blok_teksta_s_kartinkoj_2' )['vkl'][0] == 'on'){?>
  <div class="simple-item-about main-grid">
    <div class="simple-item-about-bg"></div>
    <div class="col-5 col-sm-12 simple-item-img img-cover"><img
        src="<? echo get_field('blok_teksta_s_kartinkoj_2')['kartinka']['url']; ?>" alt=""></div>
    <div class="col-7 col-sm-12 simple-item-text-container">
      <div class="simple-item-text">
        <? echo get_field('blok_teksta_s_kartinkoj_2')['tekst']; ?>
      </div>
    </div>
  </div>
  <?}?>
  <? if(get_field('blok_teksta_s_kartinkoj_3' )['vkl'][0] == 'on'){?>
  <div class="simple-item-about main-grid">
    <div class="simple-item-about-bg"></div>
    <div class="col-7 col-sm-12 simple-item-text-container">
      <div class="simple-item-text">
        <? echo get_field('blok_teksta_s_kartinkoj_3')['tekst']; ?>
      </div>
    </div>
    <div class="col-5 simple-item-img img-cover col-sm-12"><img
        src="<? echo get_field('blok_teksta_s_kartinkoj_3')['kartinka']['url']; ?>" alt=""></div>
  </div>
  <?}?>
</section>