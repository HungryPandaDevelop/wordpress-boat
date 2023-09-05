<? get_header(); ?>
<div class="stub-second"></div>
<div class="main-full">
  <div class="breadcrumbs">
    <?
      bcn_display();
		?>
  </div>
</div>

<div class="content blog-content">
  <div class="main-full">
    <h1>
      <? the_title(); ?>
    </h1>
  </div>
  <div class="blog-detail">
    <div class="main-full">
      <div class="blog-roof">
        <div class="blog-data"><span>
            <? echo get_the_date(); ?>
          </span></div>
        <div class="blog-view"><i><img src="<?echo get_bloginfo('template_url');?>/frontend/images/icons/view-gray.svg"
              alt=""></i><b>
            <?=do_shortcode('[post-views]');?>
          </b>
        </div>
      </div>
    </div>
    <?
$images = get_field('izobrazheniya_blog');
$imagesCount = count(get_field('izobrazheniya_blog'));
?>
    <? if($imagesCount > 0){?>
    <div class="blog-images main-grid">
      <? if($imagesCount == 1){?>
      <div class="col-12 blog-images-cell">
        <div class="blog-images-main img-cover"> <img src="<? echo $images[0]['full_image_url'] ?>" alt=""></div>
      </div>
      <?}else{?>
      <div class="col-8 blog-images-cell">
        <div class="blog-images-main img-cover"> <img src="<? echo $images[0]['full_image_url'] ?>" alt=""></div>
      </div>
      <div class="col-4 blog-images-cell-second">

        <div class="blog-images-second img-cover"><img src="<? echo $images[1]['full_image_url'] ?>" alt=""></div>
        <div class="blog-images-second img-cover"><img src="<? echo $images[2]['full_image_url'] ?>" alt=""></div>

      </div>


      <?} ?>
    </div>
    <?} ?>
    <div class="main-full blog-content-container">
      <div class="blog-content">
        <? the_content(); ?>
      </div>
      <? 
      if(get_field('vkl_hint_blog_page')[0] == 'on'){?>
      <div class="blog-hint">
        <div><i></i></div>
        <div>
          <div class="blog-hint-text">
            <? echo get_field('podskazka_blog'); ?>
          </div>
        </div>
      </div>
      <?}?>
      <div class="blog-hint-list">
        <h3>
          <? echo carbon_get_the_post_meta( 'blog_title' ); ?>
        </h3>
        <? 
          $a = 0;
          $items = carbon_get_the_post_meta( 'blog_hint_list' ); ?>
        <? foreach($items as $item){
     
          if($item['on']){
        ?>
        <div class="blog-hint-item">
          <h4>
            <? if($item['num']){?>
            <i>
              <? echo $item['num']; ?>
            </i>
            <?}?>
            <span>
              <? echo $item['name']; ?>
            </span>
          </h4>
          <? echo wpautop( $item['text']); ?>

          <? 
          $imgCount = 0;
          foreach($item['images'] as $img){
            $imgCount++;
          }?>


          <?
            if($imgCount == 1){?>
          <div class="blog-img-one">
            <?}
            else if($imgCount == 2){?>
            <div class="blog-img-two">
              <?}
            else if($imgCount == 3){?>
              <div class="blog-img-three">
                <?}
          ?>
                <? 
          foreach($item['images'] as $img){
            ?>
                <img src="<? echo wp_get_attachment_url($img); ?>" alt="">
                <?}?>

                <?
            if($imgCount == 1){?>
              </div>
              <?}
            else if($imgCount == 2){?>
            </div>
            <?}
            else if($imgCount == 3){?>
          </div>
          <?}
          ?>

        </div>
        <?}}
          ?>

      </div>
      <div class="blog-social">
        <b>
          <? changeLang('Subscribe','Подписаться'); ?>
        </b>
        <div class="social">
          <? dynamic_sidebar('sidebar_new'); ?>
        </div>
      </div>
    </div>

  </div>
  <? get_template_part('template-parts/feedback/free',null, array(
    'title' =>  get_field('sekciya_9',changeLangId())['zagolovok']
  )); ?>

  <? get_template_part('template-parts/detail/another-blog-list',null, array(
    'not' =>  get_the_ID()
  )); ?>
</div>

<div class="stub-footer"></div>
<? get_footer(); ?>