<section class="feedback-home feedback-origin">
  <div class="main-grid">
    <div class="col-12">
      <h2>
        <? changeLang('Leave feedback','Оставить отзыв'); ?>
      </h2>
    </div>
    <div class="col-12 form-default">

      <?
      	if (get_locale() == 'en_US') {
          echo do_shortcode('[contact-form-7 id="2339" title="Оставить отзыв eng" html_class="main-grid form"]');
        }else{
          echo do_shortcode('[contact-form-7 id="1592" title="Оставить отзыв " html_class="main-grid form"]');
        }
      ?>
    </div>

  </div>
</section>