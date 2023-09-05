    <!-- header start-->
    <header>
      <div class="main-grid line-header">
        <div class="col-xs-4 call-mobile-container vertical-align">
          <div class="call-mobile-btn element-btn" data-element="1"></div>
        </div>
        <div class="col-2 col-xs-4 logo-container"><a class="logo" href="<? changeLang('/en/','/'); ?>"> <img
              src="<?echo get_bloginfo('template_url');?>/frontend/images/logo.svg" alt=""></a>
        </div>
        <div class="col-10 col-xs-4 line-top-container vertical-align">
          <div class="search-main">
            <input class="input-search input-search-ajax" type="text" placeholder="<? changeLang('Search','Поиск'); ?>">

            <a href="<? changeLang('/en/search/','/poisk/'); ?>" class="search-ico"></a>
            <div class="close-ico"></div>
            <div class="search-popup">
            </div>
          </div>
          <div><a class="whatsapp-btn" target="_blank" href="<? echo $GLOBALS['crbAll']['whatsapp']; ?>"> <i>
              </i><span>WhatsApp</span></a></div>
          <div><a class="phone-btn" target="_blank" href="tel:<? echo $GLOBALS['crbAll']['phones'][0]['link']; ?>">
              <i></i><span>
                <? echo $GLOBALS['crbAll']['phones'][0]['title']; ?>
              </span></a></div>
          <div><a class="btn-header btn btn--yellow element-btn" data-element="1" href="#">
              <? changeLang('Call me','Перезвонить мне'); ?>
            </a></div>

          <div><a class="liked-btn" href="<? changeLang('/favorites-2/','/izbrannoe/'); ?>"><span></span></a></div>

          <div class="social">
            <a class="social-ico--white" href="<? echo $GLOBALS['crbAll']['facebook']; ?>" target="_blank"><img
                src="<?echo get_bloginfo('template_url');?>/frontend/images/social/facebook-blue.svg" alt=""><img
                class="ico-hover" src="<?echo get_bloginfo('template_url');?>/frontend/images/social/facebook-white.svg"
                alt=""></a>

            <a class="social-ico--white" href="<? echo $GLOBALS['crbAll']['inst']; ?>" target="_blank"><img
                src="<?echo get_bloginfo('template_url');?>/frontend/images/social/instagram-blue.svg" alt=""><img
                class="ico-hover"
                src="<?echo get_bloginfo('template_url');?>/frontend/images/social/instagram-white.svg" alt=""></a>
          </div>
          <div class="hamburger-btn"></div>
          <!-- <div class="language-select"> <span><a href="#">ENG</a> </span><i></i></div> -->
          <div class="language-select">
            <? lang_menu(); ?>

          </div>
          <div class="border-header"></div>
        </div>
      </div>
      <div class="main-grid line-header line-header-nav">
        <div class="col-2"></div>
        <div class="vertical-align col-10">
          <nav class="nav-header">
            <? header_menu(); ?>
          </nav>
        </div>
      </div>
    </header>
    <!-- header end-->