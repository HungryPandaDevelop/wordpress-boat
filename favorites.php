<? get_header();

/*
Template Name: Страница избранное
Template Post Type:  page
*/
?>
<div class="stub-second"></div>
<div class="main-full">
  <div class="breadcrumbs">
    <?
      bcn_display();
		?>
  </div>
</div>

<div class="content">
  <div class="main-full">
    <h1>
      <? changeLang('Favorites','Избранное'); ?>

    </h1>
  </div>
  <div class="main-full btn-container-favorites"><a class="btn btn--blue-border empty-favorites"
      href="<? changeLang('/favorites/','/izbrannoe/'); ?>">
      <? changeLang('Clear','Очиситить'); ?>
    </a></div>
  <div class="main-full catalog-sorting-favorites">
    <?
      if (get_locale() == 'en_US') {
        get_template_part('template-parts/archive-yachts/sorting-favorites-en');
      }else{
        get_template_part('template-parts/archive-yachts/sorting-favorites');
      }
    ?>
  </div>

  <div class="main-grid catalog-favorites lang-yachts" data-lang="<? changeLang('en','ru'); ?>">
  </div>
  <div class="main-full btn-container-section"><a class="btn btn--yellow btn-more-ajax" href="#">
      <? changeLang('Show more','Показать еще'); ?>
    </a>
  </div>

</div>
<? get_footer(); ?>