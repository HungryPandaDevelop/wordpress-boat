<section class="feedback-home feedback-origin">
  <div class="main-grid">
    <div class="col-12">
      <h2>
        <? changeLang('Feedback','Обратная связь'); ?>
      </h2>
    </div>
    <div class="col-12 form-default">
      <?
      	if (get_locale() == 'en_US') {
          echo do_shortcode('[contact-form-7 id="2340" title="Обратная связь en" html_class="main-grid form"]');
        }else{
          echo do_shortcode('[contact-form-7 id="1591" title="Обратная связь" html_class="main-grid form"]');
        }
      ?>

    </div>

  </div>
</section>