<div class="sidebar-search">
  <div class="sidebar-search-controls">
    <div class="sidebar-btn active close-sidebar-search"></div>
    <div class="close-btn--black close-sidebar-search"></div>
  </div>
  <form class="search-yachts-form" action="/html/pages/yachts/list.html">
    <div class="search-main">
      <input class="input-search" type="text" name="title" placeholder="Введите название яхты"
        value="<? echo $_GET['title']; ?>">
      <div class="search-ico"></div>
    </div>
    <div class="sidebar-search-item active"><i></i>
      <h3>тип судна</h3>
      <div class="sidebar-item-container">
        <div class="form-line">
          <div class="checkbox-container">
          </div>
          <div class="checkbox">
            <label>Все яхты
              <input type="radio" name="yachtsCategory" value="" <? if($_GET['yachtsCategory']=='' ){?>checked="checked"
              <?} ?> ><span></span>
            </label>
          </div>
          <div class="checkbox">
            <label>Катера
              <input type="radio" name="yachtsCategory" value="katera" <? if($_GET['yachtsCategory']=='katera'
                ){?>checked="checked"
              <?} ?>><span></span>
            </label>
          </div>
          <div class="checkbox">
            <label>Яхты
              <input type="radio" name="yachtsCategory" value="yahty-standart" <?
                if($_GET['yachtsCategory']=='yahty-standart' ){?>checked="checked"
              <?} ?>><span></span>
            </label>
          </div>
          <div class="checkbox">
            <label>Супер Яхты
              <input type="radio" name="yachtsCategory" value="super-yahty" <? if($_GET['yachtsCategory']=='super-yahty'
                ){?>checked="checked"
              <?} ?>><span></span>
            </label>
          </div>
        </div>
      </div>
    </div>
    <div class="sidebar-search-item active"><i></i>
      <h3>длина</h3>
      <div class="sidebar-item-container">
        <div class="search-tabs">
          <span class="active" data-from="longFromM" data-to="longToM" data-type="longM">Метры</span>
          <span data-from="longFromF" data-to="longToF" data-type="longF">Футы</span>
        </div>
        <div class="tab-item active">
          <div class="range-sliders-outer">
            <div class="range-sliders-input">
              <input class="input-decorate range-input-from" type="text"
                value="<? if($_GET['longFromM'] ){ echo $_GET['longFromM'];}else{echo 0;}?>"
                name="longFromM"><span>-</span>
              <input class="input-decorate range-input-to" type="text"
                value="<? if($_GET['longToM'] ){ echo $_GET['longToM'];}else{echo 40;}?>" name="longToM">
            </div>
          </div>
          <div class="range-sliders-container style-range-container range-slider-second">
            <div class="slider-track"></div>
            <div class="slider-track slider-track-color"></div>
            <input class="slider-1" type="range" min="0" max="40"
              value="<? if($_GET['longFromM'] ){ echo $_GET['longFromM'];}else{echo 0;}?>">
            <input class="slider-2" type="range" min="0" max="40"
              value="<? if($_GET['longToM'] ){ echo $_GET['longToM'];}else{echo 40;}?>">
          </div>
        </div>
        <div class="tab-item">
          <div class="range-sliders-outer">
            <div class="range-sliders-input">
              <input class="input-decorate range-input-from" type="text"
                value="<? if($_GET['longFromF'] ){ echo $_GET['longFromF'];}else{echo 0;}?>"
                name="longFromF"><span>-</span>
              <input class="input-decorate range-input-to" type="text"
                value="<? if($_GET['longToF'] ){ echo $_GET['longToF'];}else{echo 115;}?>" name="longToF">
            </div>
          </div>
          <div class="range-sliders-container style-range-container range-slider-second">
            <div class="slider-track"></div>
            <div class="slider-track slider-track-color"></div>
            <input class="slider-1" type="range" min="0" max="115"
              value="<? if($_GET['longFromF'] ){ echo $_GET['longFromF'];}else{echo 0;}?>">
            <input class="slider-2" type="range" min="0" max="115"
              value="<? if($_GET['longToF'] ){ echo $_GET['longToF'];}else{echo 115;}?>">
          </div>
        </div>


      </div>
    </div>
    <div class="sidebar-search-item <? if($_GET['priceFromA'] ){?>active<?}?>"><i></i>
      <h3>цена за час
      </h3>
      <div class="sidebar-item-container">
        <div class="search-tabs">
          <span class="active" data-from="priceFromA" data-to="priceToA">AED</span>
          <!-- <span data-from="priceFromR" data-to="priceToR">RUB</span> -->
        </div>
        <div class="range-sliders-outer">
          <div class="range-sliders-input">
            <input class="input-decorate range-input-from" type="text"
              value="<? if($_GET['priceFromA'] ){ echo $_GET['priceFromA'];}else{echo 0;}?>" name="priceFromA" />
            <span>-</span>
            <input class="input-decorate range-input-to" type="text"
              value="<? if($_GET['priceToA'] ){ echo $_GET['priceToA'];}else{echo 4000;}?>" name="priceToA" />
          </div>
        </div>
        <div class="range-sliders-container style-range-container range-slider-second">
          <div class="slider-track"></div>
          <div class="slider-track slider-track-color"></div>
          <input class="slider-1" type="range" min="0" max="4000"
            value="<? if($_GET['priceFromA'] ){ echo $_GET['priceFromA'];}else{echo 0;}?>">
          <input class="slider-2" type="range" min="0" max="4000"
            value="<? if($_GET['priceToA'] ){ echo $_GET['priceToA'];}else{echo 4000;}?>">
        </div>
      </div>
    </div>
    <div class="sidebar-search-item <? if($_GET['guestFrom'] ){?>active<?}?>"><i></i>
      <h3>количество гостей</h3>
      <div class="sidebar-item-container">
        <div class="range-sliders-outer">
          <div class="range-sliders-input">
            <input class="input-decorate range-input-from" type="text"
              value="<? if($_GET['guestFrom'] ){ echo $_GET['guestFrom'];}else{echo 0;}?>"
              name="guestFrom"><span>-</span>
            <input class="input-decorate range-input-to" type="text"
              value="<? if($_GET['guestTo'] ){ echo $_GET['guestTo'];}else{echo 60;}?>" name="guestTo">
          </div>
        </div>
        <div class="range-sliders-container style-range-container range-slider-second">
          <div class="slider-track"></div>
          <div class="slider-track slider-track-color"></div>
          <input class="slider-1" type="range" min="0" max="60"
            value="<? if($_GET['guestFrom'] ){ echo $_GET['guestFrom'];}else{echo 0;}?>">
          <input class="slider-2" type="range" min="0" max="60"
            value="<? if($_GET['guestTo'] ){ echo $_GET['guestTo'];}else{echo 60;}?>">
        </div>
      </div>
    </div>
    <div class="sidebar-search-item  <? if($_GET['cabinFrom'] ){?>active<?}?>"><i></i>
      <h3>количество кают</h3>
      <div class="sidebar-item-container">
        <div class="range-sliders-outer">
          <div class="range-sliders-input">
            <input class="input-decorate range-input-from" type="text"
              value="<? if($_GET['cabinFrom'] ){ echo $_GET['cabinFrom'];}else{echo 0;}?>"
              name="cabinFrom"><span>-</span>
            <input class="input-decorate range-input-to" type="text"
              value="<? if($_GET['cabinTo'] ){ echo $_GET['cabinTo'];}else{echo 4;}?>" name="cabinTo">
          </div>
        </div>
        <div class="range-sliders-container style-range-container range-slider-second">
          <div class="slider-track"></div>
          <div class="slider-track slider-track-color"></div>
          <input class="slider-1" type="range" min="0" max="4"
            value="<? if($_GET['cabinFrom'] ){ echo $_GET['cabinFrom'];}else{echo 0;}?>">
          <input class="slider-2" type="range" min="0" max="4"
            value="<? if($_GET['cabinTo'] ){ echo $_GET['cabinTo'];}else{echo 4;}?>">
        </div>
      </div>
    </div>
    <!-- <div class="sidebar-search-item"><i></i>
      <h3>год постройки</h3>
      <div class="sidebar-item-container">
        <div class="range-sliders-outer">
          <div class="range-sliders-input">
            <input class="input-decorate range-input-from" type="text" value="2000" name="yearFrom"><span>-</span>
            <input class="input-decorate range-input-to" type="text" value="2022" name="yearTo">
          </div>
        </div>
        <div class="range-sliders-container style-range-container range-slider-second">
          <div class="slider-track"></div>
          <div class="slider-track slider-track-color"></div>
          <input class="slider-1" type="range" min="2000" max="2022" value="2000">
          <input class="slider-2" type="range" min="2000" max="2022" value="2022">
        </div>
      </div>
    </div> -->
    <!-- <div class="sidebar-search-item"><i></i>
      <h3>год рефита</h3>
      <div class="sidebar-item-container">
        <div class="range-sliders-outer">
          <div class="range-sliders-input">
            <input class="input-decorate range-input-from" type="text" value="2012" name="refitFrom"><span>-</span>
            <input class="input-decorate range-input-to" type="text" value="2022" name="refitTo">
          </div>
        </div>
        <div class="range-sliders-container style-range-container range-slider-second">
          <div class="slider-track"></div>
          <div class="slider-track slider-track-color"></div>
          <input class="slider-1" type="range" min="2012" max="2022" value="2012">
          <input class="slider-2" type="range" min="2012" max="2022" value="2022">
        </div>
      </div>
    </div> -->
    <div class="btn-container btns-desktop">
      <a class="btn btn--blue reset-filters" href="#">Сбросить фильтры</a>
    </div>
    <div class="btn-container btns-mobile">
      <a class="btn btn--blue apply-filters" href="#">Преминить</a>
      <a class="btn btn--white reset-filters" href="#">Сбросить фильтры</a>
    </div>
  </form>
</div>