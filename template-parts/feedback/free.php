<? 
if(get_field('sekciya_9',changeLangId())['vkl'][0] == 'on'){?>

<section class="feedback-home">
  <div class="main-grid">
    <div class="col-5 col-md-12">
      <h2>
        <? echo $args['title']; ?>
      </h2>
      <div class="feedback-text">
        <? echo get_field('sekciya_9',changeLangId())['tekst']; ?>
      </div>
    </div>
    <div class="col-7 col-md-12 form-default">

      <?
      	if (get_locale() == 'en_US') {
          echo do_shortcode('[contact-form-7 id="1688" title="Бесплатная консультация общая eng" html_class="main-grid form"]');
        }else{
          echo do_shortcode('[contact-form-7 id="1595" title="Бесплатная консультация общая" html_class="main-grid form"]');
        }
      ?>
    </div>
  </div>
</section>
<?} ?>