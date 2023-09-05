<div class="catalog-sorting-container">
  <div class="catalog-total-ifno">Total yachts: <span>0</span></div>
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
  <div class="catalog-view">
    <a class="listing-tile-btn listing-btn <? if(!$_GET['typelist']){?>active<?};?>" href="/en/favorites/"></a>
    <a class="listing-list-btn listing-btn <? if($_GET['typelist']){?>active<?};?>"
      href="/en/favorites-2?typelist=list"></a>
  </div>
</div>