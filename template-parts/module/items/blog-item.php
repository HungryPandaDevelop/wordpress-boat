<?

$img;
$noimg;
if($args['img']){
  $img = $args['img'];
}else{
  $img = get_bloginfo('template_url').'/frontend/images/logo.svg';
  $noimg = true;
}

?>

<div class="blog-item"><a class="blog-item-img <? if($noimg){?> no-img <?} ?>" href="<? echo $args['link']; ?>">
    <div class="img-cover">
      <img src="<? echo $img; ?>" alt="" />
    </div>
  </a>
  <div class="blog-item-info">
    <div class="blog-item-date">
      <? echo $args['date']; ?>
    </div>
    <h3><a href="<? echo $args['link']; ?>">
        <? echo $args['title']; ?>
      </a></h3>
    <div class="blog-item-text">
      <? echo $args['text']; ?>
    </div>
    <div class="btn-container"><a class="btn btn--blue-border" href="<? echo $args['link']; ?>">
        <? changeLang('Read','Прочитать'); ?>
      </a></div>
  </div>
</div>