<!DOCTYPE html>
<html>
<!-- head start-->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <? wp_head(); ?>
  <script src="<?php echo get_bloginfo('template_url');?>/frontend/js/sourse/other-js/jquery-3.6.0.min.js">
  </script>
  <script src="<?php echo get_bloginfo('template_url');?>/frontend/js/sourse/other-js/owl.carousel.js"></script>
  <script src="<?php echo get_bloginfo('template_url');?>/frontend/js/sourse/other-js/air-datepicker.js"></script>
  <script src="<?php echo get_bloginfo('template_url');?>/frontend/js/sourse/other-js/owl.carousel2.thumbs.js"></script>
  <script src="<?php echo get_bloginfo('template_url');?>/frontend/js/sourse/other-js/ion.rangeSlider.js"></script>
  <?/*<script src="<?php echo get_bloginfo('template_url');?>/frontend/js/sourse/other-js/lightbox.js"></script>*/?>
  <?/*<script src="<?php echo get_bloginfo('template_url');?>/frontend/js/sourse/other-js/jquery.mask.js"></script>*/?>

  <script src="<?php echo get_bloginfo('template_url');?>/frontend/js/sourse/other-js/phone/intlTelInput-jquery.min.js">
  </script>

  <script src="<?php echo get_bloginfo('template_url');?>/frontend/js/sourse/other-js/jquery.colorbox.js">
  </script>

  <script src="<?php echo get_bloginfo('template_url');?>/frontend/js/sourse/other-js/phone/jquery.maskedinput.js">
  </script>

  <script src="<?php echo get_bloginfo('template_url');?>/frontend/js/common-dist.js"></script>
</head>
<!-- head end-->

<body>
  <? get_template_part('template-parts/popup/nav'); ?>
  <? get_template_part('template-parts/popup/feedback'); ?>
  <? get_template_part('template-parts/popup/reserve-serv'); ?>
  <? get_template_part('template-parts/popup/reserve-yachts'); ?>
  <? get_template_part('head'); ?>