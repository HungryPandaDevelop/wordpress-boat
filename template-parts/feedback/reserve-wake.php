<section class="feedback-home feedback-origin">
  <div class="main-grid">
    <div class="col-12">
      <h2>
        <? echo $args['title']; ?>
      </h2>
    </div>
    <div class="col-12 form-default">
      <?
      	if (get_locale() == 'en_US') {
          echo do_shortcode('[contact-form-7 id="1724" title="Забронировать услугу eng" html_class="main-grid form"]');
        }else{
          echo do_shortcode('[contact-form-7 id="1594" title="Забронировать услугу"  html_class="main-grid form"]');
        }
      ?>
    </div>

  </div>
</section>