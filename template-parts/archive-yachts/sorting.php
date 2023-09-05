<? /*echo $_SERVER['REQUEST_URI'];*/ ?>
<div class="catalog-sorting-container">
  <div class="sidebar-btn"></div>
  <div class="catalog-filter">
    <div>
      <a class="btn btn--blue-border <?if ($_SERVER['REQUEST_URI'] == ('/yahty-v-dubae/') || $_SERVER['REQUEST_URI'] == '/yahty-v-dubae/?typelist=list' ) {?>active
  <?}?>" href="<?if($_GET['typelist'] == 'list'){?>/yahty-v-dubae?typelist=list<?}else{?>/yahty-v-dubae<?}?>">
        Все
        яхты</a>
    </div>
    <div>
      <a class="btn btn--blue-border <?if (str_contains($_SERVER['REQUEST_URI'], 'katera')) {?>active<?}?>"
        data-href="katera" href="<?if($_GET['typelist'] == 'list'){?>/katera?typelist=list<?}else{?>/katera<?}?>">
        Катера
      </a>
    </div>
    <div>
      <a class="btn btn--blue-border <?if (str_contains($_SERVER['REQUEST_URI'], 'yahty-standart')) {?>active<?}?>"
        data-href="yahty-standart"
        href="<?if($_GET['typelist'] == 'list'){?>/yahty-standart?typelist=list<?}else{?>/yahty-standart<?}?>">
        Яхты
      </a>
    </div>

    <div>
      <a class="btn btn--blue-border <?if (str_contains($_SERVER['REQUEST_URI'], 'vip-yahty')) {?>active<?}?>"
        data-href="super-yahty"
        href="<?if($_GET['typelist'] == 'list'){?>/vip-yahty?typelist=list<?}else{?>/vip-yahty<?}?>">
        Супер яхты
      </a>
    </div>
  </div>
  <div class="catalog-sort"> <b>Сортировать по:</b>
    <select class="style-select order-select-box" data-text="Сортировать" data-class='sort-select select-order-ajax'>
      <option value="priceToMaxA">цена: по уменьшению</option>
      <option value="priceToMinA">цена: по увеличению</option>
      <option value="longToMaxM">длина: по уменьшению</option>
      <option value="longToMinM">длина: по увеличению</option>
      <option value="yearToMax">год постройки: по уменьшению</option>
      <option value="yearToMin">год постройки: по увеличению</option>
    </select>
  </div>
  <div class="sort-btn"></div>
  <div class="catalog-view">
    <a class="listing-tile-btn listing-btn <? if(!$_GET['typelist']){?>active<?};?>" data-type="tile"
      href="/yahty-v-dubae/"></a>
    <a class="listing-list-btn listing-btn <? if($_GET['typelist']){?>active<?};?>" data-type="list"
      href="/yahty-v-dubae?typelist=list"></a>
  </div>
</div>

<div class="catalog-sort-mobile">
  <div class="catalog-sort-mobile-container">
    <div class="sidebar-search-controls">
      <div class="sort-btn active close-sort-mobile"></div>
      <div class="close-btn--black close-sort-mobile"></div>
    </div><b>Сортировать по:</b>
    <ul class="ln order-select-box" data-text="цена: по уменьшению" data-class="sort-select select-order-ajax">
      <li><a href="?sort=priceToMaxA">цена: по уменьшению</a></li>
      <li><a href="?sort=priceToMinA">цена: по увеличению</a></li>
      <li><a href="?sort=longToMaxM">длина: по уменьшению</a></li>
      <li><a href="?sort=longToMinM">длина: по увеличению</a></li>
      <li><a href="?sort=yearToMax">год постройки: по уменьшению</a></li>
      <li><a href="?sort=yearToMin">год постройки: по увеличению</a></li>
    </ul>
    <div class="btn-container"><a class="btn btn--blue" href="/yahty-v-dubae/">Сбросить фильтры</a>
    </div>
  </div>
</div>