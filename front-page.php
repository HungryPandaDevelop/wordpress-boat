<? get_header(); ?>

<div class="stub"></div>

<? get_template_part('template-parts/home/main'); ?>
<? get_template_part('template-parts/home/selection'); ?>
<? get_template_part('template-parts/home/yachts'); ?>
<? get_template_part('template-parts/home/services'); ?>
<? get_template_part('template-parts/home/suitable'); ?>
<? get_template_part('template-parts/home/warning'); ?>
<? get_template_part('template-parts/home/routes'); ?>
<div class="stub-section"> </div>
<? get_template_part('template-parts/home/advantages',null, array(
    'title' =>  get_field('sekciya_8',changeLangId())['zagolovok'],
    'main-class' =>  'advantages-home'
  )); ?>
<? get_template_part('template-parts/feedback/free',null, array(
    'title' =>  get_field('sekciya_9',changeLangId())['zagolovok']
  )); ?>
<!-- <div class="stub-section"></div> -->
<? get_template_part('template-parts/home/about'); ?>
<? get_template_part('template-parts/home/question'); ?>
<div class="stub-section"></div>
<? get_template_part('template-parts/home/banner'); ?>
<? get_template_part('template-parts/home/team'); ?>
<? get_template_part('template-parts/home/reviews'); ?>
<? get_template_part('template-parts/home/faq'); ?>
<? get_template_part('template-parts/home/blog'); ?>
<? get_template_part('template-parts/home/partners'); ?>

<div class="stub-footer"></div>


<? get_footer(); ?>