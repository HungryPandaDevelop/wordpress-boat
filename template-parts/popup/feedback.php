<!-- modal-form start-->

<div class="popup element-show" data-element="1">
  <div class="popup-overlay popup-overlay-js"></div>
  <div class="popup-container">
    <div class="close-btn close-btn_popup close-js"></div>
    <div class="form-default">
      <h3>
        <? changeLang('Get consultation','Получить консультацию'); ?>
      </h3>
      <div class="popup-hint">
        <? changeLang('Leave a request and we will contact you shortly','Оставьте заявку, и мы свяжемся с вами в ближайшее время'); ?>
      </div>

      <?
      	if (get_locale() == 'en_US') {
          echo do_shortcode('[contact-form-7 id="1680" title="Бесплатная консультация шапка eng"]');
        }else{
          echo do_shortcode('[contact-form-7 id="102" title="Обратная связь" html_class="form"]');
        }
      ?>
    </div>
  </div>
</div>
<!-- modal-form end-->