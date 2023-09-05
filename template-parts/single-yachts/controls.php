<div class="yachts-detail-about--mobile">
  <div class="main-grid">
    <div class="col-6 col-xs-12">
      <div class="vertical-align">
        <h2>
          <? the_title(); ?>
        </h2>
      </div>
    </div>
    <div class="col-6 col-xs-12">
      <? get_template_part('template-parts/single-yachts/adv'); ?>
    </div>
  </div>
</div>
<div class="yachts-detail-about">
  <div class="main-full">
    <div class="yachts-detail-price vertical-align"><span>
        <? the_field('yachts_price'); ?>
        <? changeLang('AED/hour','AED/час'); ?>
      </span></div>
    <div class="yachts-detail-adv--destop">
      <? get_template_part('template-parts/single-yachts/adv'); ?>
    </div>
    <div class="yachts-detail-controls vertical-align">
      <div class="btn-container">
        <a class="liked-btn" data-id="<? echo the_ID(); ?>" href="#"></a>
        <a class="btn btn--yellow element-btn" data-element="3" href="#">
          <? changeLang('Book','Забронировать'); ?>
        </a>
        <a class="btn btn--blue-border element-btn" data-element="1" href="#">
          <? changeLang('Ask a Question','Задать вопрос'); ?>
        </a>
        <a class="phone-btn--yellow" target="_blank" href="tel:<? echo $GLOBALS['crbAll']['phones'][0]['link']; ?>"></a>
        <a class="whatsapp-btn--single" target="_blank" href="<? echo $GLOBALS['crbAll']['whatsapp']; ?>">
        </a>
      </div>
    </div>
  </div>
  <div class="yachts-detail-controls--mobile main-full">
    <a class="btn btn--yellow element-btn" data-element="3" href="#">
      <? changeLang('Book','Забронировать'); ?>
    </a>
    <a class="btn btn--blue-border element-btn" data-element="1" href="#">
      <? changeLang('Ask a Question','Задать вопрос'); ?>
    </a>
  </div>
</div>