<!-- modal-form start-->

<div class="popup element-show large-popup" data-element="3">
  <div class="popup-overlay popup-overlay-js"></div>
  <div class="popup-container">
    <div class="close-btn close-btn_popup close-js"></div>
    <div class="form-default">
      <h3>
        <? changeLang('Book a yacht','Забронировать яхту'); ?> <span></span>
      </h3>

      <?
      	if (get_locale() == 'en_US') {
          echo do_shortcode('[contact-form-7 id="1732" title="Аренда яхты всплывающие окно eng" html_class="main-grid form"]');
        }else{
          echo do_shortcode('[contact-form-7 id="1614" title="Аренда яхты всплывающие окно" html_class="main-grid form"]');
        }
      ?>
    </div>
  </div>
</div>
<!-- modal-form end-->