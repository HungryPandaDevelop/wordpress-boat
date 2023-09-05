<a class="logo" href="/">
  <img src="<?echo get_bloginfo('template_url');?>/frontend/images/logo-footer.svg">
</a>

<div class="logo-text">
  <?
      	if (get_locale() == 'en_US') {
          echo $GLOBALS['crbAll']['text_logo_en'];
        }else{
          echo $GLOBALS['crbAll']['text_logo'];
        }
      ?>
</div>