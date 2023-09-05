<? if($args['type']=='normal'){?>
<div class="reviews-item">
  <div class="reviews-text">
    <? echo $args['comment']; ?>
  </div>
  <div class="reviews-info">
    <div class="reviews-img img-cover"><img src="<? echo $args['img']; ?>" alt=""></div>
    <h2>
      <? echo $args['author']; ?>
    </h2>
  </div>
</div>
<?} ?>

<? if($args['type']=='video'){?>
<div class="reviews-video-item">
  <div class="reviews-video-box">
    <video width="100%" height="100%" controls loop>
      <source src="<? echo $args['video']; ?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
    </video>

    <div class="video-btn video-play"><span> </span><i></i></div>
  </div>
  <div class="reviews-video-info">
    <div>
      <div class="reviews-img img-cover"><img src="<? echo $args['img']; ?>" alt=""></div>
    </div>
    <div class="reviews-video-text">
      <h2>
        <? echo $args['author']; ?>
      </h2>
      <div class="reviews-date">
        <? echo $args['date']; ?>
      </div>
    </div>
  </div>
</div>

<?} ?>

<? if($args['type']=='social'){?>
<div class="socrew-item">
  <div class="socrew-item-img img-cover"> <img src="<? echo $args['social_rew']; ?>" alt=""></div>
  <!-- <div class="add-btn"><i>+</i></div> -->
</div>
<?} ?>

<? if($args['type']=='report'){?>
<div class="reviews-video-item">
  <div class="report-item">
    <video width="100%" height="100%">
      <source src=<? echo $args['video']; ?> type='video/ogg; codecs="theora, vorbis"'>
    </video>
    <div class="video-btn"><span> </span><i></i></div>
  </div>
</div>
<?} ?>