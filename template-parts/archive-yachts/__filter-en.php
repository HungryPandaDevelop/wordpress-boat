<div class="sidebar-search">
  <div class="sidebar-search-controls">
    <div class="sidebar-btn active close-sidebar-search"></div>
    <div class="close-btn--black close-sidebar-search"></div>
  </div>
  <form class="search-yachts-form" action="/html/pages/yachts/list.html">
    <div class="search-main">
      <input class="input-search" type="text" name="title" placeholder="Enter name yacht"
        value="<? echo $_GET['title']; ?>">
      <div class="search-ico"></div>
    </div>
    <div class="sidebar-search-item active"><i></i>
      <h3>vessel type

      </h3>
      <div class="sidebar-item-container">
        <div class="form-line">
          <div class="checkbox-container">
          </div>
          <div class="checkbox">
            <label>All yachts
              <input type="radio" name="yachtsCategory" value="" <? if($_GET['yachtsCategory']=='' ){?>checked="checked"
              <?} ?> ><span></span>
            </label>
          </div>
          <div class="checkbox">
            <label>Boats
              <input type="radio" name="yachtsCategory" value="katera-en" <? if($_GET['yachtsCategory']=='katera-en'
                ){?>checked="checked"
              <?} ?>><span></span>
            </label>
          </div>
          <div class="checkbox">
            <label>Yachts
              <input type="radio" name="yachtsCategory" value="yahty-standart-en" <?
                if($_GET['yachtsCategory']=='yahty-standart-en' ){?>checked="checked"
              <?} ?>><span></span>
            </label>
          </div>
          <div class="checkbox">
            <label>Super yachts
              <input type="radio" name="yachtsCategory" value="super-yahty-en" <?
                if($_GET['yachtsCategory']=='super-yahty-en' ){?>checked="checked"
              <?} ?>><span></span>
            </label>
          </div>
        </div>
      </div>
    </div>
    <div class="sidebar-search-item active"><i></i>
      <h3>length</h3>
      <div class="sidebar-item-container">
        <div class="search-tabs">
          <span class="active" data-from="longFromM" data-to="longToM" data-type="longM">meters</span>
          <span data-from="longFromF" data-to="longToF" data-type="longF">feet</span>
        </div>
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
    </div>
    <div class="sidebar-search-item <? if($_GET['priceFromA'] ){?>active<?}?>"><i></i>
      <h3>price per hour
      </h3>
      <div class="sidebar-item-container">
        <div class="search-tabs">
          <span class="active" data-from="priceFromA" data-to="priceToA">AED</span>
          <!-- <span data-from="priceFromR" data-to="priceToR">RUB</span> -->
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
    <div class="sidebar-search-item <? if($_GET['guestFrom'] ){?>active<?}?>"><i></i>
      <h3>number of guests</h3>
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
      <h3>number of cabins</h3>
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
      <h3>year of construction</h3>
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
      <h3>refit year</h3>
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
      <a class="btn btn--blue reset-filters" href="#">Reset filters</a>
    </div>
    <div class="btn-container btns-mobile">
      <a class="btn btn--blue apply-filters" href="#">Apply filters</a>
      <a class="btn btn--white reset-filters" href="#">Reset filters</a>
    </div>
  </form>
</div>