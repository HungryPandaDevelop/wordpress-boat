<? /*echo $_SERVER['REQUEST_URI'];*/ ?>
<div class="catalog-sorting-container">
  <div class="btn-sidebar"></div>
  <div class="catalog-filter">
    <div>
      <a class="btn btn--blue-border <?if ($_SERVER['REQUEST_URI'] == ('/en/yachts/') || $_SERVER['REQUEST_URI'] == '/en/yachts/?typelist=list' ) {?>active
  <?}?>" href="<?if($_GET['typelist'] == 'list'){?>/en/yachts?typelist=list<?}else{?>/en/yachts<?}?>">
        All yachts</a>
    </div>
    <div>
      <a class="btn btn--blue-border <?if (str_contains($_SERVER['REQUEST_URI'], 'boats')) {?>active<?}?>"
        data-href="katera-en"
        href="<?if($_GET['typelist'] == 'list'){?>/en/boats?typelist=list<?}else{?>/en/boats<?}?>">
        Boats
      </a>
    </div>
    <div>
      <a class="btn btn--blue-border <?if (str_contains($_SERVER['REQUEST_URI'], 'standard-yachts')) {?>active<?}?>"
        data-href="yahty-standart-en"
        href="<?if($_GET['typelist'] == 'list'){?>/en/standard-yachts?typelist=list<?}else{?>/en/standard-yachts<?}?>">
        Yachts
      </a>
    </div>

    <div>
      <a class="btn btn--blue-border <?if (str_contains($_SERVER['REQUEST_URI'], 'vip-yachts')) {?>active<?}?>"
        data-href="super-yahty-en"
        href="<?if($_GET['typelist'] == 'list'){?>/en/vip-yachts?typelist=list<?}else{?>/en/vip-yachts<?}?>">
        Super yachts
      </a>
    </div>
  </div>
  <div class="catalog-sort"> <b>Sort by:</b>
    <select class="style-select order-select-box" data-text="Sort" data-class='sort-select select-order-ajax'>
      <option value="priceToMaxA">price: descending</option>
      <option value="priceToMinA">price: ascending</option>
      <option value="longToMaxM">length: decreasing</option>
      <option value="longToMinM">length: increasing</option>
      <option value="yearToMax">year of construction: descending</option>
      <option value="yearToMin">year built: ascending</option>
    </select>
  </div>
  <div class="btn-sort"></div>
  <div class="catalog-view">
    <a class="listing-tile-btn listing-btn <? if(!$_GET['typelist']){?>active<?};?>" href="/en/yachts/"
      data-type="tile"></a>
    <a class="listing-list-btn listing-btn <? if($_GET['typelist']){?>active<?};?>" href="/en/yachts?typelist=list"
      data-type="list"></a>
  </div>
</div>

<div class="catalog-sort-mobile">
  <div class="catalog-sort-mobile-container">
    <div class="sidebar-search-controls">
      <div class="sort-btn active close-sort-mobile"></div>
      <div class="close-btn--black close-sort-mobile"></div>
    </div><b>Sort by:</b>
    <ul class="ln order-select-box" data-text="цена: по уменьшению" data-class="sort-select select-order-ajax">
      <li><a href="?sort=priceToMaxA">price: descending</a></li>
      <li><a href="?sort=priceToMinA">price: ascending</a></li>
      <li><a href="?sort=longToMaxM">length: decreasing</a></li>
      <li><a href="?sort=longToMinM">length: increasing</a></li>
      <li><a href="?sort=yearToMax">year of construction: descending</a></li>
      <li><a href="?sort=yearToMin">year built: ascending</a></li>
    </ul>
    <div class="btn-container"><a class="btn btn--blue" href="/en/yachts/">Reset filters</a>
    </div>
  </div>
</div>