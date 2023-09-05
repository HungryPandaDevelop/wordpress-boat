<?
$rewAll = get_field('rew_sesrv');
?>

<? 

if(get_field('vkl_serv_rew')[0] == 'on' && count($rewAll) > 0){?>
<section class="reviews-home owl-home">
  <div class="main-full">
    <div class="head-section">
      <h2>
        <? changeLang('Service reviews','Отзывы об услуге'); ?>

      </h2>
      <div class="btn-container"><a class="btn btn--blue" href="<? changeLang('/en/reviews/','/otzyvy/'); ?>">
          <? changeLang('SEE ALL reviews','СМОТРЕТЬ ВСЕ отзывы'); ?>
        </a></div>
      <div class="stab-arrow"></div>
    </div>
  </div>
  <div class="main-full owl-second owl-carousel">
    <?  foreach ($rewAll as $key=>$item) {?>
    <?
    get_template_part('template-parts/module/items/reviews-item', null, array(
        'author' => get_field('author_rew', $item),
        'comment' => get_field('text_rew', $item),
        'img' => get_field('rew_author_img', $item),
        'date' => get_field('rew_date', $item),
        'type'  =>  'normal'
      )); ?>
    <?
    }?>

    <?wp_reset_postdata();?>
  </div>
</section>

<?} ?>