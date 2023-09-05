<? get_header(); ?>
<? $slides = carbon_get_the_post_meta( 'crb_detail_slider' );
?>
<div class="stub-second"></div>
<div class="main-full">
  <div class="breadcrumbs">
    <?
      bcn_display();
		?>
  </div>
  <div class="subhead">
    <?
    $theParent = wp_get_post_parent_id(get_the_ID());

    if($theParent){?>
    <a class="btn btn--green" href="<? echo get_permalink($theParent); ?>">
      Back to
      <? echo get_the_title($theParent); ?>
    </a>
    <?} ?>
  </div>

  <?
  $findPages = get_pages([
    'child_of'  =>  get_the_ID()
  ]);
  
  
  if($theParent || $findPages){?>
  <div class="page-menu">
    <h2>
      <a href="<? echo get_permalink($theParent); ?>">

        <? echo get_the_title($theParent); ?>
      </a>
    </h2>
    <?
      if($theParent){
        $findChildrenOf = $theParent;
      }
      else{
        $findChildrenOf = get_the_ID();
      }

      $argsMenu = [
        'title_li'  =>  NULL,
        'child_of'  =>  $findChildrenOf
      ];
      wp_list_pages($argsMenu);
      ?>
  </div>
  <?} ?>
</div>

<div class="content">
  <div class="main-full">
    <h1>
      <? the_title(); ?>
    </h1>
  </div>

  <div class="page">
    <?if (get_the_post_thumbnail_url()){?>
    <div class="main-grid">

      <div class="page-img">
        <img src="<? echo get_the_post_thumbnail_url(); ?>" alt="">
      </div>
      <div class="page-content">
        <? the_content(); ?>
      </div>
    </div>
    <?}else{?>
    <div class="main-full">
      <? the_content(); ?>
    </div>
    <?}?>
  </div>


  <div class="stub-footer"></div>

</div>

<? get_footer(); ?>