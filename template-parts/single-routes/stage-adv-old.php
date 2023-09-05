<section class="stage-adv">
  <div class="main-full head-section">
    <h2 class="title-section">
      <?echo get_field('route-stage-adv')['zagolovok'];?>
    </h2>
    <h3 class="subtitle-section">
      <?echo get_field('route-stage-adv')['podzagolovok'];?>
    </h3>
  </div>
  <div class="main-grid stage-adv-items">
    <? $items = carbon_get_post_meta(get_the_ID(), 'routes_places' );?>
    <? $countDash = 0; ?>
    <?foreach($items as $singleItem){?>
    <? $countDash++; ?>

    <div class="col-3 stage-adv-item">
      <? if($countDash === 1 || $countDash === 5 || $countDash === 9){?>
      <div class="border-stage">
        <? include 'border-old.php' ?>
      </div>

      <?} ?>
      <div class="stage-adv-item stage-offset <?if($singleItem['pos'][0] == 'up'){?>stage-up<?}?>">
        <?if($singleItem['pos'][0] == 'up'){?>
        <div class="stage-adv-num">
          <span>
            <? echo $singleItem['num'];  ?>
          </span>
        </div>
        <?}?>
        <h3>
          <? echo $singleItem['title'];  ?>
        </h3>
        <div class="stage-adv-text">
          <? echo $singleItem['desk'];  ?>
        </div>
        <?if($singleItem['pos'][0] !== 'up'){?>
        <div class="stage-adv-num">
          <span>
            <? echo $singleItem['num'];  ?>
          </span>
        </div>
        <?}?>
      </div>
    </div>
    <?}?>
  </div>
</section>