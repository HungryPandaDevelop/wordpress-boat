<? 
$massClass = ['','','','extra'];
$massClassCell = ['','col-4 col-sm-12 warning-item-container-1','col-4 col-sm-6 col-xs-12','col-4 col-sm-6 col-xs-12'];
?>
<?
if(get_field('sekciya_6')['vkl'][0] == 'on'){?>
<section class="warning-home">
  <div class="main-full head-section">
    <h2>
      <? echo get_field('sekciya_6')['zagolovok']; ?>
    </h2>
  </div>
  <div class="main-grid">
    <? 
    for($i=1; $i<4; $i++){?>
    <div class="col-4 col-sm-12 warning-item-container-1">
      <? get_template_part('template-parts/module/items/warning-item', null, array(
        'zagolovok' => get_field('sekciya_6')['element_'.$i]['zagolovok'],
        'tekst' => get_field('sekciya_6')['element_'.$i]['tekst'],
        'tekst_2' => get_field('sekciya_6')['element_'.$i]['tekst_2'],
        'izobrazhenie' => get_field('sekciya_6')['element_'.$i]['izobrazhenie'],
        'izobrazhenie_active' => get_field('sekciya_6')['element_'.$i]['izobrazhenie_active'],

      )); ?>
    </div>
    <?}?>

  </div>
  <div class="btn-container-section"> <a class="btn btn--blue-border"
      href="<? changeLang('/en/yachts/','/yahty-v-dubae/'); ?>">
      <? changeLang('See all yachts','Смотреть все яхты'); ?>
    </a></div>
</section>

<?}?>