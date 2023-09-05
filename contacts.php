<? 

/*
Template Name: Страница контакты
Template Post Type:  page
*/

get_header(); ?>

<div class="stub-second"></div>
<div class="main-full">
  <div class="breadcrumbs">
    <?
		  bcn_display();
		?>
  </div>
</div>

<div class="content">
  <div class="main-full">
    <h1>
      <? changeLang('Contacts','Контакты'); ?>

    </h1>
  </div>
  <? 
  $a = 0;
  $points = carbon_get_post_meta(returnLang(1673,10), 'contacts_points' ); 
  ?>
  <div class="page main-grid contacts-items-container">
    <?
        foreach($points  as $item){
         
          ?>
    <div class="col-4 col-xs-12">
      <div class="contacts-item">
        <div class="contacts-item-img"> <img src="<? echo $item['image']; ?>" alt=""></div>
        <h3>
          <? echo $item['text']; ?>
        </h3>
        <ul class="ln contacts-item-list">
          <li class="contacts-item-list-phone">
            <div class="contacts-ico-box"><i class="phone-ico"></i></div>
            <div class="contacts-item-text"><a target="_blank" href="tel:<? echo $item['num']; ?>">
                <? echo $item['num']; ?>
              </a></div>
          </li>
          <li>
            <div class="contacts-ico-box">
              <div class="marker-ico"></div>
            </div>
            <div class="contacts-item-text">
              <div>
                <? echo $item['address']; ?>
              </div>
            </div>
          </li>
          <?if($item['mail']){?>
          <li>
            <div class="contacts-ico-box"><i class="mail-ico"></i></div>
            <div class="contacts-item-text"><a target="_blank" href="mailto:<? echo $item['mail']; ?>">
                <? echo $item['mail']; ?>
              </a></div>
          </li>
          <?}?>
          <li>
            <div class="contacts-ico-box"><i class="stub-ico"></i></div>
            <div class="contacts-item-text">
              <? echo $item['coords']; ?>
            </div>
          </li>
          <li>
            <div class="contacts-ico-box"></div>
            <div class="contacts-item-text">
              <? echo $item['description']; ?>
            </div>
          </li>
        </ul>
        <div class="btn-container"> <a class="btn btn--yellow btn-map-center show-in-map" data-index="<? echo $a; ?>"
            href="#">
            <? changeLang('Show on the map','Показать на карте'); ?>:
          </a></div>
      </div>
    </div>
    <?
   $a++;
  }?>

  </div>
  <div class="main-full contacts-social">
    <h3>
      <? changeLang('Social media','Социальные сети'); ?>:
    </h3>
    <div class="social">
      <a class="social-ico--white" href="<? echo $GLOBALS['crbAll']['facebook']; ?>">
        <img src="<?echo get_bloginfo('template_url');?>/frontend/images/social/facebook-blue.svg" alt="">
        <img class="ico-hover" src="<?echo get_bloginfo('template_url');?>/frontend/images/social/facebook-white.svg"
          alt=""></a><a class="social-ico--white" href="<? echo $GLOBALS['crbAll']['inst']; ?>"><img
          src="<?echo get_bloginfo('template_url');?>/frontend/images/social/instagram-blue.svg" alt=""><img
          class="ico-hover" src="<?echo get_bloginfo('template_url');?>/frontend/images/social/instagram-white.svg"
          alt=""></a><a class="social-ico--white" href="<? echo $GLOBALS['crbAll']['whatsapp']; ?>"><img
          src="<?echo get_bloginfo('template_url');?>/frontend/images/social/whatsapp-blue.svg" alt=""><img
          class="ico-hover" src="<?echo get_bloginfo('template_url');?>/frontend/images/social/whatsapp-white.svg"
          alt=""></a>
    </div>
  </div>
  <div class="main-grid contacts-info-container">
    <div class="col-12">
      <div class="address-for-map">
        <?
        foreach($points  as $item){?>
        <div class="contacts-address-line" id="address-0" data-coord-x="<? echo $item['coordsx']; ?>"
          data-coord-y="<? echo $item['coordsy']; ?>" data-index="0">
          <div class="address">
            <div class="metro">
              <? echo $item['text']; ?>
            </div>
            <div class="text-address">
              <? echo $item['description']; ?>
            </div>
          </div>
          <div class="phone-feedback">
            <div>
              <? echo $item['num']; ?>
            </div>
          </div>
        </div>
        <?}?>

      </div>
      <?/*      <div class="map_home">
        <div id="map" data-marker="<?echo get_bloginfo('template_url');?>/frontend/images/icons/marker-star.svg">
    </div>
  </div>
  <script
    src="https://api-maps.yandex.ru/2.1/?lang=en_US&amp;amp;apikey=AAyE0FsBAAAApZ_zfwIA_dXSEkWE4_EY3eJc0MxKY2DPitcAAAAAAAAAAADTxJqFLJMxqfrjbNVz6ghuLNJ4tw"
    type="text/javascript"></script>
  <script src="<?echo get_bloginfo('template_url');?>/frontend/js/map.js"></script>*/?>
  <div>
    <div class="map_home">
      <div id="map"></div>
    </div>

    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQZbRPUHCf8ZzHP6QOUOVJFgNSljNI15k&callback=initMap&v=weekly"
      defer></script>
    <script>
    // Initialize and add the map


    function initMap() {
      // The location of Uluru


      let googleCoordsArr = [];
      $('.contacts-address-line').each(function() {
        googleCoordsArr.push({
          'lat': Number($(this).data('coord-x')),
          'lng': Number($(this).data('coord-y'))
        });
      });
      console.log(googleCoordsArr);

      const uluru = [{
          lat: 25.083556,
          lng: 55.148000
        },
        {
          lat: 25.1,
          lng: 55.2
        }
      ];
      // The map, centered at Uluru


      const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 14,
        center: googleCoordsArr[0],
      });

      const bounds = new google.maps.LatLngBounds();

      // The marker, positioned at Uluru

      const image = {
        url: '/wp-content/themes/pandadev/frontend/images/icons/marker-star.svg',
        scaledSize: new google.maps.Size(30, 71)
      }
      let marker;
      googleCoordsArr.forEach(element => {

        let myLatLng = new google.maps.LatLng(element.lat, element.lng);

        marker = new google.maps.Marker({
          position: element,
          map: map,
          icon: image
        });

        bounds.extend(myLatLng);


      });


      $('.show-in-map').on('click', function(e) {
        e.preventDefault();
        console.log(marker)
        map.setCenter(googleCoordsArr[$(this).data('index')]);
        let offsetTop = $(window).width() < 992 ? 90 : 160;
        $("body, html").animate({
          scrollTop: $('#map').offset().top - offsetTop
        }, 500);
      });
      map.fitBounds(bounds);
      map.panToBounds(bounds);

    }

    window.initMap = initMap;
    </script>
  </div>
</div>
</div>
<? get_template_part('template-parts/feedback/feedback'); ?>
</div>

<? get_footer(); ?>