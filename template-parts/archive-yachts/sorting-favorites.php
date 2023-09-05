<div class="catalog-sorting-container">
  <div class="catalog-total-ifno">Всего яхт: <span>0</span></div>
  <div class="catalog-sort"> <b>Сортировать по:</b>
    <select class="style-select" data-text="Сортировать" data-class="sort-select">
      <option value="longToMaxM">длина: по уменьшению</option>
      <option value="longToMinM">длина: по увеличению</option>
      <option value="priceToMaxA">цена: по уменьшению</option>
      <option value="priceToMinA">цена: по увеличению</option>
      <option value="yearToMax">год постройки: по уменьшению</option>
      <option value="yearToMin">год постройки: по увеличению</option>
    </select>
  </div>
  <div class="catalog-view">
    <a class="listing-tile-btn listing-btn <? if(!$_GET['typelist']){?>active<?};?>" href="/izbrannoe/"></a>
    <a class="listing-list-btn listing-btn <? if($_GET['typelist']){?>active<?};?>" href="/izbrannoe?typelist=list"></a>
  </div>
</div>