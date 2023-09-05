<? $faq_left = carbon_get_post_meta(changeLangId(), 'faq_items_left' ); ?>
<? $faq_right = carbon_get_post_meta(changeLangId(), 'faq_items_right' ); ?>
<?

if(carbon_get_post_meta(changeLangId(),'faq_on')){
  
  ?>
<section class="faq-home">
  <div class="main-full head-section">
    <h2 class="title-section">
      <? echo carbon_get_post_meta(changeLangId(), 'faq_main_topic' ); ?>
    </h2>
    <div class="subtitle-section">
      <? echo carbon_get_post_meta(changeLangId(), 'faq_sub_topic' ); ?>
    </div>
  </div>
  <div class="main-grid faq-container">
    <div class="col-5 col-lg-6 col-md-6 col-sm-12">
      <?
        foreach($faq_left  as $item){?>
      <div class="faq-item">
        <div class="faq-head">
          <h3>
            <? echo $item['topic']; ?>
          </h3><span> <i></i><em></em></span>
        </div>
        <div class="faq-content">
          <? echo $item['description']; ?>
        </div>
      </div>
      <?
        }
        ?>
    </div>
    <div class="col-2 faq-delimetr-container hidden-lg hidden-md hidden-sm hidden-xs">
      <div class="faq-delimetr"></div>
    </div>
    <div class="col-5 col-lg-6 col-md-6 col-sm-12">
      <?
        foreach($faq_right  as $item){?>
      <div class="faq-item">
        <div class="faq-head">
          <h3>
            <? echo $item['topic']; ?>
          </h3><span> <i></i><em></em></span>
        </div>
        <div class="faq-content">
          <? echo $item['description']; ?>
        </div>
      </div>
      <?
        }
        ?>
    </div>
  </div>
  </div>
</section>
<?}?>