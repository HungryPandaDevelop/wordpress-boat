<!-- modal-form start-->

<div class="popup element-show large-popup" data-element="2">
  <div class="popup-overlay popup-overlay-js"></div>
  <div class="popup-container">
    <div class="close-btn close-btn_popup close-js"></div>
    <div class="form-default">
      <h3>
        <? changeLang('Book a service','Забронировать услугу'); ?>
      </h3>
      <div class="popup-hint">
        <? changeLang('Leave a request and we will contact you shortly','Оставьте заявку, и мы свяжемся с вами в ближайшее время'); ?>

      </div>
      <?
      	if (get_locale() == 'en_US') {
          echo do_shortcode('[contact-form-7 id="2338" title="Забронировать услугу кнопка eng" html_class="form main-grid"]');
        }else{
          echo do_shortcode('[contact-form-7 id="1613" title="Забронировать услугу кнопка" html_class="form main-grid"]');
        }
      ?>
    </div>
  </div>
</div>
<!-- modal-form end-->