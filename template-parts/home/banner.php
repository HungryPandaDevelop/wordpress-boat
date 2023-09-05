<? 
if(get_field('sekciya_12',changeLangId())['vkl'][0] == 'on'){?>
<section class="banner-home">
  <div class="main-grid">
    <div class="col-3 col-xs-12">
      <div class="img-container"><img src="<? echo get_field('sekciya_12',changeLangId())['logo']['url'];?>" alt="">
      </div>
    </div>
    <div class="col-9 col-xs-12">
      <h3>
        <? echo get_field('sekciya_12',changeLangId())['zagolovok'];?>
      </h3>
      <div class="banner-home-text">
        <? echo get_field('sekciya_12',changeLangId())['tekst'];?>
      </div><a class="btn btn--yellow element-btn" data-element="1" href="#">
        <? changeLang('get consultation','получить
        консультацию'); ?>
      </a>
    </div>
  </div>
</section>

<?} ?>