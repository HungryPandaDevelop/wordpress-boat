<? 
$massClass = ['','','','extra'];
$massClassCell = ['','col-6','col-6','col-12'];
if(get_field('sekciya_5')['vkl'][0] == 'on'){?>

<section class="suitable-home">
  <div class="main-full head-section">
    <h2>
      <? echo get_field('sekciya_5')['zagolovok']; ?>
    </h2>
  </div>
  <div class="main-grid hide-home-desktop">
    <? 
        for($i=1; $i<4; $i++){?>
    <div class="<? echo $massClassCell[$i]; ?>">
      <? get_template_part('template-parts/module/items/suitable-item', null, array(
        'zagolovok' => get_field('sekciya_5')['element_'.$i]['zagolovok'],
        'ssylka' => get_field('sekciya_5')['element_'.$i]['ssylka'],
        'cena' => get_field('sekciya_5')['element_'.$i]['cena'],
        'tekst' => get_field('sekciya_5')['element_'.$i]['tekst'],
        'izobrazhenie' => get_field('sekciya_5')['element_'.$i]['izobrazhenie'],
        'addClass' =>  $massClass[$i]
      )); ?>
    </div>
    <?} ?>
  </div>


  <div class="main-full slider-home-mobile">
    <div class="owl-mobile owl-carousel">
      <? 
        for($i=1; $i<4; $i++){?>
      <? get_template_part('template-parts/module/items/suitable-item', null, array(
        'zagolovok' => get_field('sekciya_5')['element_'.$i]['zagolovok'],
        'ssylka' => get_field('sekciya_5')['element_'.$i]['ssylka'],
        'cena' => get_field('sekciya_5')['element_'.$i]['cena'],
        'tekst' => get_field('sekciya_5')['element_'.$i]['tekst'],
        'izobrazhenie' => get_field('sekciya_5')['element_'.$i]['izobrazhenie'],
        'addClass' =>  $massClass[$i]
      )); ?>
      <?} ?>

    </div>
  </div>
</section>
<?} ?>