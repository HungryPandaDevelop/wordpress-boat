<footer class="footer-lg">
  <div class="main-grid">
    <div class="col-3 logo-container">
      <? get_template_part('template-parts/module/footer/logo-cell'); ?>
      <? get_template_part('template-parts/module/footer/footer-links'); ?>
    </div>
    <div class="col-3 nav-1-container">
      <? get_template_part('template-parts/module/footer/menu-1'); ?>
      <div class="nav">
        <? footer_menu_three(); ?>
      </div>
    </div>
    <div class="col-3 nav-2-container">
      <? get_template_part('template-parts/module/footer/menu-2'); ?>
      <div class="nav nav-second">
        <? footer_menu_four(); ?>
      </div>
    </div>
    <div class="col-3 ">
      <? get_template_part('template-parts/module/footer/feedback-footer'); ?>
    </div>
  </div>
</footer>