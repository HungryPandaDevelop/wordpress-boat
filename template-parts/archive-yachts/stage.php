<section class="stage-adv stage-yachts">
  <div class="main-full head-section">
    <h2 class="title-section">
      <? the_field('title_yachts', returnLang(2319, 2300)); ?>
    </h2>
    <h3 class="subtitle-section">
      <? the_field('sub_title_yachts', returnLang(2319, 2300)); ?>
    </h3>
  </div>
  <div class="main-grid stage-adv-items">
    <div class="col-3 hidden-sm hidden-xs"></div>
    <div class="col-3 col-sm-6 col-xs-12 stage-adv-item-2">
      <div class="stage-adv-item">
        <h3>
          <? echo get_field('yachts_stage', returnLang(2319, 2300))['stage_2']['title']; ?>
        </h3>
        <div class="stage-adv-text">
          <? echo get_field('yachts_stage', returnLang(2319, 2300))['stage_2']['text']; ?>
        </div>
        <div class="stage-adv-num"><span>2</span></div>
      </div>
    </div>
    <div class="col-3 hidden-sm hidden-xs"></div>
    <div class="col-3 col-sm-6 col-xs-12 stage-adv-item-4">
      <div class="stage-adv-item stage-adv-item-last">
        <h3> <span>
            <? echo get_field('yachts_stage', returnLang(2319, 2300))['stage_4']['title']; ?>
          </span></h3>
        <div class="stage-adv-text">
          <? echo get_field('yachts_stage', returnLang(2319, 2300))['stage_4']['text']; ?>
        </div>
        <div class="stage-adv-num"><span>4</span></div>
      </div>
    </div>
    <div class="col-12 hidden-sm hidden-xs">
      <div class="stage-adv-line"></div>
    </div>
    <div class="col-3 col-sm-6 col-xs-12 stage-adv-item-1">
      <div class="stage-border-yachts"></div>
      <div class="stage-adv-item stage-offset">
        <div class="stage-adv-num"><span>1</span></div>
        <h3>
          <? echo get_field('yachts_stage', returnLang(2319, 2300))['stage_1']['title']; ?>
        </h3>
        <div class="stage-adv-text">
          <? echo get_field('yachts_stage', returnLang(2319, 2300))['stage_4']['text']; ?>
        </div>
      </div>
    </div>
    <div class="col-3 hidden-sm hidden-xs"></div>
    <div class="col-3 col-sm-6 col-xs-12 stage-adv-item-3">
      <div class="stage-adv-item stage-offset">
        <div class="stage-adv-num"><span>3</span></div>
        <h3>
          <? echo get_field('yachts_stage', returnLang(2319, 2300))['stage_3']['title']; ?>
        </h3>
        <div class="stage-adv-text">
          <? echo get_field('yachts_stage', returnLang(2319, 2300))['stage_3']['text']; ?>
        </div>
      </div>
    </div>
  </div>
</section>