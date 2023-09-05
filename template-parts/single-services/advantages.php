<?
$massClassCell = ['','col-4 col-sm-6','col-4 col-sm-6 advantages-item-extra-3','col-4 advantages-item-extra-1 col-sm-6','col-2 hidden-sm hidden-xs','col-4 col-sm-6 advantages-item-extra-4','col-4 advantages-item-extra-2 col-sm-12'];

if(get_field('nashi_preimushhestva_serv',get_the_ID())['vkl'][0] == 'on'){?>
<section class="advantages-detail">
  <div class="main-full head-section">
    <h2 class="title-section">

      <? 
        echo get_field('nashi_preimushhestva_serv',get_the_ID())['zagolovok'];?>
    </h2>
  </div>
  <div class="main-grid">
    <? 
        for($i=1; $i<7; $i++){?>
    <div class="<? echo $massClassCell[$i]; ?>">
      <? if($i!=4){?>
      <? get_template_part('template-parts/module/items/advantages-item', null, array(
        'zagolovok' => get_field('nashi_preimushhestva_serv',get_the_ID())['element_'.$i]['zagolovok'],
        'tekst' => get_field('nashi_preimushhestva_serv',get_the_ID())['element_'.$i]['tekst'],
        'izobrazhenie' => get_field('nashi_preimushhestva_serv',get_the_ID())['element_'.$i]['izobrazhenie'],
      )); ?>
      <?}?>
    </div>

    <?}?>


  </div>
</section>

<?}?>