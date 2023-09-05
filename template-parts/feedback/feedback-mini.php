<div class="feedback-mini">
  <h2>
    <? changeLang('Feedback','Обратная связь'); ?>
  </h2>
  <?
  	if (get_locale() == 'en_US') {
      echo do_shortcode('[contact-form-7 id="2337" title="Обратная связь яхты sidebar en" html_class="form"]');
    }else{
      echo do_shortcode('[contact-form-7 id="1589" title="Обратная связь яхты sidebar" html_class="form"]');
    }
  
  ?>

</div>