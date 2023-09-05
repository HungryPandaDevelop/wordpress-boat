<div class="popup element-show" data-element="10">
  <div class="popup-overlay popup-overlay-js"></div>
  <div class="popup-container popup-container-video">
    <div class="close-btn close-btn_popup close-js"></div>
    <div class="video-container">
      <video width="100%" height="100%" poster="<? the_field('video_fajl_about_img'); ?>" controls loop muted
        playsinline>
        <?/* <source src="<? the_field('video_fajl_about'); ?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>*/?>
        <source src="<? the_field('video_fajl_about'); ?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>


        <!-- You can embed a Flash player here, to play your mp4 video in older browsers -->
      </video>
      <div class="video-btn video-play">
        <span></span>
        <i></i>
      </div>
    </div>
  </div>
</div>