<div class="feedback">
  <h3>
    <? footer_menu_five(); ?>
  </h3>
  <div class="feedback-footer-marker feedback-footer-item">
    <i></i><span>Dubai Harbour Marina</span>
  </div>
  <div class="feedback-footer-mail feedback-footer-item">
    <a href="mailto:<? echo $GLOBALS['crbAll']['mail']; ?>"><i></i><span>
        <? echo $GLOBALS['crbAll']['mail']; ?>
      </span></a>
  </div>
  <div class="feedback-footer-phone feedback-footer-item">
    <a href="tel:<? echo $GLOBALS['crbAll']['phones'][0]['link']; ?>"> <i></i><span>
        <? echo $GLOBALS['crbAll']['phones'][0]['title']; ?>
      </span></a>
  </div>
  <div class="btn-container">
    <a class="btn btn--yellow btn-element element-btn" href="#" data-element="1"><span>
        <? changeLang('call me','перезвоните мне'); ?>
      </span><i></i></a>
  </div>
  <? get_template_part('template-parts/module/social-default'); ?>
  <a class="btn-new-site" href="#"><i></i> <span>
      <? changeLang('Sale, maintenance of yachts','Продажа, обслуживание яхт'); ?>
    </span></a>
</div>