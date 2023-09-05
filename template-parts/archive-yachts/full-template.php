<? get_header(); ?>
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
      <?
          /*changeLang('Yacht and boat rentals in Dubai', 'Аренда яхт и катеров в Дубае');*/
 
          if(is_archive()){
            changeLang('Yacht and boat rentals in Dubai', 'Аренда яхт и катеров в Дубае');
          }else{
            the_title();
          }
			?>

    </h1>
  </div>
  <div class="main-grid catalog-main">
    <div class="col-3 hidden-lg"></div>
    <div class="col-9 col-lg-12">
      <?
      
      if (get_locale() == 'en_US') {
        get_template_part('template-parts/archive-yachts/sorting-en');
      }else{
        get_template_part('template-parts/archive-yachts/sorting');
      }

      ?>

    </div>
    <div class="col-3 catalog-sidebar-container">
      <div class="catalog-sidebar">

        <?

// if (get_locale() == 'en_US') {
//   get_template_part('template-parts/archive-yachts/filter-en');
// }else{
//   get_template_part('template-parts/archive-yachts/filter');
// }
get_template_part('template-parts/archive-yachts/filter');
?>
        <? get_template_part('template-parts/feedback/feedback-mini'); ?>

      </div>
    </div>
    <div class="col-9 col-sm-12 col-xs-12">

      <div class="catalog-grid catalog-yachts lang-yachts" data-lang="<? changeLang('en','ru'); ?>">
      </div>
      <div class="main-full btn-container-section"><a class="btn btn--yellow btn-more-ajax btn-more-ajax-yachts"
          href="#">
          <? changeLang('Show more', 'Показать еще'); ?>
        </a>
      </div>
    </div>
  </div>

  <? get_template_part('template-parts/archive-yachts/stage'); ?>

  <? get_template_part('template-parts/home/routes'); ?>
  <? get_template_part('template-parts/home/services'); ?>
  <? get_template_part('template-parts/feedback/free',null, array(
    'title' =>  get_field('sekciya_9',changeLangId())['zagolovok']
  )); ?>
</div>


<? get_footer(); ?>