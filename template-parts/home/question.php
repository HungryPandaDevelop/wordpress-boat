<?
if(get_field('sekciya_11')['vkl'][0] == 'on'){?>
<section class="question-home">
  <div class="main-full">
    <div class="question-home-tabs">
      <span class="active"><em>
          <? echo get_field('sekciya_11')['tab']['levaya_knopka']; ?>
        </em></span>
      <span> <em>
          <? echo get_field('sekciya_11')['tab']['pravaya_knopka']; ?>
        </em></span>
    </div>
  </div>
  <div class="question-home-container">
    <div class="question-home-item active">
      <div class="question-hide">
        <div class="main-grid">
          <div class="col-6 col-sm-12 col-xs-12">
            <? echo get_field('sekciya_11')['nash_flot']['levaya_chast']; ?>
          </div>
          <div class="col-6 col-sm-12 col-xs-12">
            <? echo get_field('sekciya_11')['nash_flot']['pravaya_chast']; ?>
          </div>
        </div>
        <div class="main-grid question-home-footer">
          <div class="col-12">
            <h3>
              <? echo get_field('sekciya_11')['question_bottom']['zagolovok']; ?>
            </h3>
          </div>
          <div class="col-6 col-sm-12 col-xs-12">
            <? echo get_field('sekciya_11')['question_bottom']['tekst_1']; ?>
          </div>
          <div class="col-6 col-sm-12 col-xs-12">
            <? echo get_field('sekciya_11')['question_bottom']['tekst_2']; ?>
          </div>
        </div>
      </div>
      <div class="btn-container main-full question-more-container">
        <a href="#" class="btn btn--blue question-more">Подробнее</a>
      </div>
    </div>
    <div class="question-home-item ">
      <div class="question-hide">
        <div class="main-grid">
          <div class="col-6 col-sm-12 col-xs-12">
            <? echo get_field('sekciya_11')['kak_vybrat_optimalnuju_yahtu_v_dubae']['levaya_chast']; ?>
          </div>
          <div class="col-6 col-sm-12 col-xs-12">
            <? echo get_field('sekciya_11')['kak_vybrat_optimalnuju_yahtu_v_dubae']['pravaya_chast']; ?>
          </div>
        </div>

      </div>
      <div class="btn-container main-full question-more-container">
        <a href="#" class="btn btn--blue question-more">Подробнее</a>
      </div>
    </div>

  </div>
</section>

<?}?>