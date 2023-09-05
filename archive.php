<? get_header(); ?>
<div class="stub"></div>
<div class="main-full">
  <div class="breadcrumbs">
    <?
      bcn_display();
		?>
  </div>
</div>
<?
$post_type = get_queried_object();
$idCustomType = $post_type->rewrite['slug'];

?>
<div class="content">
  <div class="main-full">
    <h1>
      <? echo post_type_archive_title(); ?>
    </h1>
  </div>
  <div class="main-grid catalog-grid">
    <?
      while(have_posts()){
        the_post();?>

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