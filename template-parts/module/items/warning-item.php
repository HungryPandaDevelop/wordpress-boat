<div class="warning-item">
  <div class="warning-close"></div>
  <div class="warning-item-container">
    <div class="warning-item-img">
      <img class="back" src="<? echo $args['izobrazhenie']['url']; ?>" alt="" />
      <img class="front" src="<? echo $args['izobrazhenie_active']['url']; ?>" alt="" />
    </div>

    <div class="warning-item-info">
      <h3>
        <? echo $args['zagolovok']; ?>
      </h3>
      <div class="warning-item-text">
        <? echo $args['tekst']; ?>
      </div>
      <div class="warning-hidden-text">
        <? echo $args['tekst_2']; ?>
      </div>
      <div class="btn-container"><a class="btn btn--white-border warning-show" href="#">
          <? changeLang('More','Подробнее'); ?>
        </a></div>
    </div>
  </div>
</div>