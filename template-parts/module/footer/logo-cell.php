<a class="logo" href="/">
  <img src="<?echo get_bloginfo('template_url');?>/frontend/images/logo-footer.svg">
</a>
<? get_template_part('template-parts/module/search-default'); ?>
<div class="logo-text">
  <?
      	if (get_locale() == 'en_US') {
          echo $GLOBALS['crbAll']['text_logo_en'];
        }else{
          echo $GLOBALS['crbAll']['text_logo'];
        }
      ?>
</div>
