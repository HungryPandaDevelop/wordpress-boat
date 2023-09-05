<? get_header(); ?>
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

      <?/* echo post_type_archive_title(); */?>
      <?
          changeLang('Blog', 'Блог');
			?>
    </h1>
  </div>
  <div>

    <?
    $terms = get_terms( array(
      'hide_empty'  => 1,
      'orderby'     => 'name',
      'order'       => 'ASC',
      'taxonomy'    => 'blog_cat',
      'pad_counts'  => 1
    ) );
    // оставим только термины с parent=0
    $terms = wp_list_filter( $terms, array('parent'=>0) );
    
    ?>

  </div>
  <div class="main-full blog-tags">
    <a class="btn btn--blue-border <?if ($_SERVER['REQUEST_URI'] == ('/blog/') || $_SERVER['REQUEST_URI'] == ('/en/blog/') ) {?>active
  <?}?>" data-href="" href="<? changeLang('/en/blog/','/blog/'); ?>/">
      <? changeLang('all','все'); ?>
    </a>
    <?
      foreach($terms as $term){?>

    <a class="btn btn--blue-border" href="#" data-href="<? echo $term->slug;?>">
      <?echo $term->name;?>
    </a>
    <?}
    ?>
  </div>

  <div class="main-grid-list blog-grid" data-lang=<? changeLang('en', 'ru' ); ?>>
    <?/*
      while(have_posts()){
        the_post();?>
    <div class="col-4 col-sm-6 col-xs-12">
      <? get_template_part('template-parts/module/items/blog-item', null, array(
      'img' =>  get_the_post_thumbnail_url(),
      'title' => get_the_title(),
      'link' => get_the_permalink(),
      'text'  =>  get_the_excerpt(),
      'date'  =>  get_the_date()
    )); ?>
    </div>
    <?}*/?>
  </div>
  <div class="main-full btn-container-section"><a class="btn btn--yellow btn-more-ajax btn-more-ajax-blog" href="#">
      <? changeLang('Show more', 'Показать еще'); ?>
    </a>
  </div>
  <div class="main-full pagination-container">
    <!-- pagination-component start-->
    <?php/* the_posts_pagination(); */?>
    <!-- pagination-component start-->
  </div>
  <? get_template_part('template-parts/feedback/free',null, array(
    'title' =>  get_field('sekciya_9',changeLangId())['zagolovok']
  )); ?>
</div>
<? get_footer(); ?>