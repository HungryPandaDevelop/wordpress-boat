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
    <? 
    
    $items = carbon_get_post_meta(get_the_ID(), 'routes_places' );
    $itemsStep = 4;
    $lengthItems = count($items);
    $lengthLine = 1;
    $countDash = 0;
    ?>



    <?foreach($items as $singleItem){?>

    <div class="col-3 col-sm-6 col-xs-12 stage-adv-item">
      <? if($countDash === 0){?>
      <? $offsetLength = (($itemsStep * $lengthLine) - $lengthItems); ?>
      <div class="border-stage">
        <? include 'border-old.php' ?>
        <div class="border-stub border-stub-<?echo $offsetLength;?>">

        </div>
      </div>
      <?} ?>
      <div class="stage-adv-item">

        <div class="stage-adv-num">
          <span>
            <? echo $singleItem['num'];  ?>
          </span>
        </div>

        <h3>
          <? echo $singleItem['title'];  ?>
        </h3>
        <div class="stage-adv-text">
          <? echo $singleItem['desk'];  ?>
        </div>

      </div>
    </div>
    <? 
        $countDash++; 
        if($countDash === 4){
          $countDash = 0;
          $lengthLine++;
        };
      ?>
    <?}?>


  </div>
</section>