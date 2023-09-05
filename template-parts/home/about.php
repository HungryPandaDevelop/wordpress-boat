<? if(get_field('sekciya_10')['vkl'][0] == 'on'){?>
<section class="about-home">

  <div class="about-carousel owl-carousel">
    <? 
        for($i=1; $i<4; $i++){?>
    <div class="about-home-item <?if($i>1){?>about-home-item-extra<?}?>">
      <div class="about-home-img">
        <div class="img-cover"> <img src="<? echo get_field('sekciya_10')['element_'.$i]['kartinka']['url']; ?>" alt="">
        </div>
        <!-- <div class="about-home-logo"> </div> -->
      </div>
      <div class="about-home-description">
        <div class="about-home-container">
          <div class="about-home-text">
            <? echo get_field('sekciya_10')['element_'.$i]['tekst'] ?>
          </div>
          <div class="arrow-stub"></div>
        </div>
      </div>
    </div>
    <?} ?>
  </div>
</section>
<?}?>