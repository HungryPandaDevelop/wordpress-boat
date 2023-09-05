<div class="catalog-grid">
  <? foreach($args['elements'] as $id){?>
  <div class="col-6 col-xs-12">
    <div class="services-yachts-item">
      <a class="services-yachts-item-img img-cover" href="<? echo get_the_permalink($id); ?>">
        <img src="<? echo get_the_post_thumbnail_url($id); ?>" alt="">
      </a>

      <div class="services-yachts-item-info">
        <div class="services-yachts-item-price">
          <? the_field('price_serv', $id);?>
        </div>
        <h3>
          <a href="<? echo get_the_permalink($id); ?>">
            <? echo get_the_title($id); ?>
          </a>
        </h3>
        <div class="services-yachts-item-text">
          <? echo get_the_excerpt($id); ?>
        </div>
        <div class="btn-container">
          <a href="<? echo get_the_permalink($id); ?>" class="btn btn--blue-border">ПОДРОБНЕЕ</a>
        </div>
      </div>
    </div>
  </div>
  <?} ?>
</div>