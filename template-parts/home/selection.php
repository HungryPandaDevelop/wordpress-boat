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
        <div class="range-slider-box">
          <div class="hidden-input-irs">
            <input type="text" name="cabinFrom" class="from">
            <input type="text" name="cabinTo" class="to">
          </div>
          <div class="range-slider" data-type="double" data-min="0" data-max="4" data-from="0" data-to="4"></div>
        </div>
      </div>
    </div>
    <div class="col-4 col-xs-12">
      <div class="selection-item">
        <h3>
          <? changeLang('PRICE (AED/hour)','ЦЕНА (AED/час)'); ?>
        </h3>
        <div class="range-slider-box">
          <div class="hidden-input-irs">
            <input type="text" name="priceFromA" class="from">
            <input type="text" name="priceToA" class="to">
          </div>
          <div class="range-slider" data-type="double" data-min="0" data-max="4000" data-from="0" data-to="4000"></div>
        </div>
      </div>
    </div>
    <div class="col-4 col-xs-12">
      <div class="selection-item">
        <h3>
          <? changeLang('LENGTH (m.)','ДЛИНА (м.)'); ?>
        </h3>

        <div class="range-slider-box">
          <div class="hidden-input-irs">
            <input type="text" name="longFromM" class="from">
            <input type="text" name="longToM" class="to">
          </div>
          <div class="range-slider" data-type="double" data-min="0" data-max="35" data-from="0" data-to="35"></div>
        </div>
      </div>
    </div>
    <div class="col-4 col-xs-12">
      <div class="selection-item">
        <h3>
          <? changeLang('CAPACITY (guests)','ВМЕСТИМОСТЬ (чел.)'); ?>
        </h3>

        <div class="range-slider-box">
          <div class="hidden-input-irs">
            <input type="text" name="guestFrom" class="from">
            <input type="text" name="guestTo" class="to">
          </div>
          <div class="range-slider" data-type="double" data-min="1" data-max="55" data-from="1" data-to="55"></div>
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