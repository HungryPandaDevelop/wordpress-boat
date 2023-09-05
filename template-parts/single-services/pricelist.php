<? 
$phone = $args['extra_phone'];
$items = carbon_get_post_meta(get_the_ID(), 'price_services_list' );
$countItems = 0;
foreach($items as $singleItem){
      if($singleItem['on'][0] == 'vkl'){
        $countItems++;
      }
    }
?>
<?if($countItems!=0){?>
<section class="pricelist-section">
  <div class="main-full head-section">
    <h2 class="title-section">
      <? changeLang('our price list','наш прайс-лист'); ?>
    </h2>
  </div>
  <ul class="ln pricelist-list">

    <?foreach($items as $singleItem){?>
    <?
        if($singleItem['on'][0] == 'vkl'){
        ?>
    <li>
      <h3> <span>
          <? echo $singleItem['name'];  ?>
        </span>
        <div class="question-ico">
          <div class="question-popup">
            <? echo $singleItem['qwest'];  ?>
          </div>
        </div>
      </h3>
      <div class="pricelist-price">
        <? echo $singleItem['price'];  ?>
      </div>
    </li>
    <?} ?>
    <?} ?>
  </ul>
  <div class="btn-container"> <a class="btn btn--blue-border whatsapp-btn whatsapp-btn--large" target="_blank"
      href="<?  if($phone){echo $phone;}else{ echo $GLOBALS['crbAll']['whatsapp'];}; ?>"><i></i><span>
        <? changeLang('Book now on whatsapp','Забронируйте сейчас в WhatsApp'); ?>
      </span></a>
    <?
      if (get_locale() == 'en_US') {?>
    <div class="btn-hint ">Or use <a href="#" class="form-go">the form</a> below</div>
    <?}else{?>
    <div class="btn-hint ">Или воспользуйтесь <a href="#" class="form-go">формой</a> ниже</div>
    <?}?>

  </div>
</section>
<?}?>