<div class="social">
  <?if($GLOBALS['crbAll']['vk']){?>
  <a class="social-ico--white" href="<? echo $GLOBALS['crbAll']['vk']; ?>">
    <img src="<?php echo get_bloginfo('template_url');?>/frontend/images/social/vk-blue.svg" alt="">
    <img class="ico-hover" src="<?php echo get_bloginfo('template_url');?>/frontend/images/social/vk-yellow.svg"
      alt=""></a>
  <?}?>
  <?if($GLOBALS['crbAll']['telegram']){?>
  <a class="social-ico--white" href="<? echo $GLOBALS['crbAll']['telegram']; ?>">
    <img src="<?php echo get_bloginfo('template_url');?>/frontend/images/social/telegram-blue.svg" alt="">
    <img class="ico-hover" src="<?php echo get_bloginfo('template_url');?>/frontend/images/social/telegram-yellow.svg"
      alt="">
  </a>
  <?}?>
  <?if($GLOBALS['crbAll']['inst']){?>
  <a class="social-ico--white" href="<? echo $GLOBALS['crbAll']['inst']; ?>">
    <img src="<?php echo get_bloginfo('template_url');?>/frontend/images/social/instagram-blue.svg" alt="">
    <img class="ico-hover" src="<?php echo get_bloginfo('template_url');?>/frontend/images/social/instagram-yellow.svg"
      alt="">
  </a>
  <?}?>

</div>