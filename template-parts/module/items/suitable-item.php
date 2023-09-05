<div class="suitable-item <? echo $args['addClass']; ?>">
  <div class="suitable-item-img">
    <a href="<? echo $args['ssylka']; ?>">
      <div class="img-cover"><img src="<? echo $args['izobrazhenie']['url']; ?>"
          alt="<? echo $args['izobrazhenie']['alt']; ?>">
      </div>
    </a>
  </div>
  <div class="suitable-item-info">
    <div class="suitable-item-container">
      <div class="suitable-item-price">
        <? echo $args['cena']; ?>
      </div>
      <h3>
        <? echo $args['zagolovok']; ?>
      </h3>
      <div class="suitable-item-text">
        <? echo $args['tekst']; ?>
      </div>
      <div class="btn-container"><a class="btn btn--white-border" href="<? echo $args['ssylka']; ?>">
          <? changeLang('Learn more','Узнать больше'); ?>
        </a>
      </div>
      <div class="btn-adv-more"></div>
    </div>
  </div>
</div>