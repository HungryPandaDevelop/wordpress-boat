<?
$icoArr = ['eng','rudder','boad-1','boad-2','family','handle','bad','cap','rudder','screw','toilet','blob'];
if (get_locale() == 'en_US') {
  $nameArr = ['Shipyard','Full Refit','Length','Width (in main section)','Guests','Cabins','Sleeping places','Team','Cruise speed','Maximum
  speed','Number of bathrooms','Water supply'];
}else{
  $nameArr = ['Верфь','Full Refit','Длина','Ширина (в главной секции)','Гости','Каюты','Спальные места','Команда','Круизная скорость','Максимальная 
  скорость','Количество санузлов','Запас воды'];
}
?>

<h3>
  <? changeLang('Characteristics','Характеристики'); ?>
</h3>
<div class="characteristic-grid">
  <?  foreach ($icoArr  as $key=>$item) {?>
  <?if(get_field('yachts_harakteristiki')['yachts_char_element_'.($key+1)]){?>
  <div class="col-3 col-lg-4 col-md-4 col-sm-6 col-xs-12">
    <div class="characteristic-item">
      <div>
        <div class="characteristic-item-img"><img
            src="<?echo get_bloginfo('template_url');?>/frontend/images/characteristic/<?echo $item;?>.svg" alt="">
        </div>
      </div>
      <div class="characteristic-item-info">
        <div class="characteristic-item-container">
          <h3>
            <?
                    echo get_field('yachts_harakteristiki')['yachts_char_element_'.($key+1)]; ?>
          </h3>
          <div class="characteristic-item-text">
            <?echo $nameArr[$key];?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?}?>
  <?}?>
</div>