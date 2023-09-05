<div class="services-yachts-item">
  <a class="services-yachts-item-img img-cover" href="<? echo $argc['link']; ?>">
    <img src="/images/temp/serv/1.jpg" alt="">
  </a>

  <div class="services-yachts-item-info">
    <?php
    print_r($argc);
    echo $argc['id']; ?>
    <div class="services-yachts-item-price">
      <? the_field('orice_serv', $argc['id']);?>
    </div>
    <h3>
      <? echo $argc['title']; ?>
    </h3>
    <div class="services-yachts-item-text">Для по-настоящему безмятежного отдыха на яхте мы возьмем на себя
      организацию питания и обслуживания на борту. Предлагаем вашему вниманию Life station BBQ menu</div>
    <div class="btn-container">
      <a href="<? echo $argc['link']; ?>" class="btn btn--blue-border">ПОДРОБНЕЕ</a>
    </div>
  </div>
</div>