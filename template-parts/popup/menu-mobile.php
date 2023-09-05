<div class="menu-mobile">
  <div class="menu-mobile-body">
    <nav class="popup-nav">
      <? modal_menu(); ?>
    </nav>

  </div>
  <? get_template_part('template-parts/module/search-default'); ?>
  <div class="menu-footer">
    <div class="menu-footer-item">
      <a class="phone-btn" href="tel:<? echo $GLOBALS['crbAll']['phones'][0]['link']; ?>"> <i></i><span>
          <? echo $GLOBALS['crbAll']['phones'][0]['title']; ?>
        </span></a>
    </div>
    <div class="menu-footer-item"><a class="btn-header btn btn--yellow element-btn" data-element="1" href="#">
        <? changeLang('Call me','Перезвонить мне'); ?>
      </a></div>
    <div class="menu-footer-item">
      <? get_template_part('template-parts/module/social-default'); ?>
    </div>
    <div class="menu-footer-item">
      <div class="popup-lang">
        <div class="language-select">
          <? lang_menu(); ?>
        </div>
      </div>
    </div>
  </div>
</div>