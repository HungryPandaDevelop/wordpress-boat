<? get_header(); ?>
<div class="stub-second"></div>
<div class="main-full">
  <div class="breadcrumbs">
    <?
      bcn_display();
		?>
  </div>
</div>
<div class="main-full">
  <pre>
<?

$argsTerm = array(
  'taxonomy'  =>  'place_categiry',
  'hide_empty'  =>  false
);

$terms = get_terms($argsTerm);

foreach($terms as $term){
  print_r($term);
  ?>

<?
};
?>
</pre>
</div>

<?


$argc = array(
  'post_type' =>  'place',
  'post_per_page' => '5',
  // 'tax_query' => array(
  //   array(
  //     'taxonomy'  =>  'place_categiry',
  //     'field' =>  'slug',
  //     'terms' =>  'rubrika-1'
  //   )
  // )
);

$items = new WP_Query($argc);

?>
<div class="content">
  <div class="main-full">
    <h1>
      <? echo post_type_archive_title(); ?>
    </h1>
  </div>
  <div class="main-grid catalog-grid">
    <?
      while($items->have_posts()){
        $items->the_post();?>

    <div class="col-4">
      <a href="<? the_permalink(); ?>">
        <? the_title(); ?>
      </a>
    </div>

    <?}?>
  </div>
</div>
<div class="main-full">
  <?php the_posts_pagination(); ?>
</div>
<? get_footer(); ?>