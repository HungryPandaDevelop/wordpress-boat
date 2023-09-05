<? if(get_field('sekciya_2',changeLangId())['vkl'][0] == 'on'){?>
<section class="selection-home">
  <div class="head-section main-full">
    <h2>
      <? echo get_field('sekciya_2')['zagolovok']; ?>
    </h2>
  </div>
  <form class="main-grid selection-form" action='<? changeLang("/en/yachts/",' /yahty-v-dubae/'); ?>' method="GET">
    <div class="col-4 col-xs-12">
      <div class="selection-item">
        <select class="style-select" data-text="<? changeLang('VESSEL TYPE','ТИП СУДНА'); ?>" data-class="boad-select"
          name="yachtsCategory">
          <option value="">
            <? changeLang('All','Все'); ?>
          </option>
          <option value="<? changeLang('katera-en','katera'); ?>">
            <? changeLang('Boats','Катера'); ?>
          </option>
          <option value="<? changeLang('yahty-standart-en','yahty-standart'); ?>">
            <? changeLang('Yachts','Яхты'); ?>
          </option>
          <option value="<? changeLang('super-yahty-en','super-yahty'); ?>">
            <? changeLang('Super yachts','Супер Яхты'); ?>
          </option>
        </select>
      </div>
    </div>
    <div class="col-4 col-xs-12">
      <div class="selection-item">
        <h3>
          <? changeLang('NUMBER OF CABINS','КОЛИЧЕСТВО КАЮТ'); ?>
        </h3>
        <!--    data-type="double" -->
        <div class="range-slider-box">
          <div class="hidden-input-irs">
            <input type="text" name="cabinFrom" class="from">
            <input type="text" name="cabinTo" class="to">
          </div>
          <div class="range-slider" data-type="double" data-min="0" data-max="4" data-from="0" data-to="4"></div>
        </div>


        <!-- <div class="range-sliders-container style-range-container">
          <div class="slider-track"></div>
          <input class="slider-1" type="range" min="0" max="4" value="0" name="cabinFrom">
          <div class="range-num range-num-1" data-name="cabinFrom">0</div>
          <input class="slider-2" type="range" min="0" max="4" value="4" name="cabinTo">
          <div class="range-num range-num-2" data-name="cabinTo">0</div>
        </div> -->
      </div>
    </div>
    <div class="col-4 col-xs-12">
      <div class="selection-item">
        <h3>
          <? changeLang('PRICE (AED/hour)','ЦЕНА (AED/час)'); ?>
        </h3>
        <div class="range-sliders-container style-range-container">
          <div class="slider-track"></div>
          <input class="slider-1" type="range" min="0" max="4000" step="50" value="0" name="priceFromA">
          <div class="range-num range-num-1" data-name="priceFromA">0</div>
          <input class="slider-2" type="range" min="0" max="4000" step="50" value="1500" name="priceToA">

          <div class="range-num range-num-2" data-name="priceToA">0</div>
        </div>
      </div>
    </div>
    <div class="col-4 col-xs-12">
      <div class="selection-item">
        <h3>
          <? changeLang('LENGTH (m.)','ДЛИНА (м.)'); ?>
        </h3>
        <div class="range-sliders-container style-range-container">
          <div class="slider-track"></div>
          <input class="slider-1" type="range" min="0" max="35" value="8" name="longFromM">
          <div class="range-num range-num-1" data-name="longFromM">0</div>
          <input class="slider-2" type="range" min="0" max="35" value="35" name="longToM">

          <div class="range-num range-num-2" data-name="longToM">0</div>
        </div>
      </div>
    </div>
    <div class="col-4 col-xs-12">
      <div class="selection-item">
        <h3>
          <? changeLang('CAPACITY (guests)','ВМЕСТИМОСТЬ (чел.)'); ?>
        </h3>
        <div class="range-sliders-container style-range-container">
          <div class="slider-track"></div>
          <input class="slider-1" type="range" min="1" max="55" value="1" name="guestFrom">
          <div class="range-num range-num-1" data-name="guestFrom">0</div>
          <input class="slider-2" type="range" min="1" max="55" value="20" name="guestTo">

          <div class="range-num range-num-2" data-name="guestTo">0</div>
        </div>
      </div>
    </div>
    <div class="col-4 col-xs-12">
      <div class="selection-btn-container">
        <!-- <div class="btn btn--yellow">Поиск яхт</div> -->
        <input type="submit" class="btn btn--yellow" value="<? changeLang('Yacht Search','Поиск яхт'); ?>">
      </div>
    </div>
  </form>
</section>
<?} ?>