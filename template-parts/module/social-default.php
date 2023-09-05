<div class="social-default">
  <?if($GLOBALS['crbAll']['whatsapp']){?>
  <a class="whatsapp-btn" target="_blank" href="<? echo $GLOBALS['crbAll']['whatsapp']; ?>"> <i>
    </i><span>WhatsApp</span></a>
  <?}?>
  <div class="social">
    <?if($GLOBALS['crbAll']['facebook']){?>
    <a class="social-ico--white" target="_blank" href="<? echo $GLOBALS['crbAll']['facebook']; ?>">
      <img src="<?php echo get_bloginfo('template_url');?>/frontend/images/social/facebook-blue.svg" alt="">
      <img class="ico-hover" src="<?php echo get_bloginfo('template_url');?>/frontend/images/social/facebook-white.svg"
        alt="">
    </a>
    <?}?>
    <?if($GLOBALS['crbAll']['inst']){?>
    <a class="social-ico--white" target="_blank" href="<? echo $GLOBALS['crbAll']['inst']; ?>">
      <img src="<?php echo get_bloginfo('template_url');?>/frontend/images/social/instagram-blue.svg" alt="">
      <img class="ico-hover" src="<?php echo get_bloginfo('template_url');?>/frontend/images/social/instagram-white.svg"
        alt="">
    </a>
    <?}?>
  </div>
</div>