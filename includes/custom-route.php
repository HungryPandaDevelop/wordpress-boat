<?php

add_action('rest_api_init', 'reg_path');

function reg_path(){
  register_rest_route('search','all', array(
    'methods' =>  WP_REST_SERVER::READABLE, // 'GET'
    'callback'  =>  'searchAll'
  ));

  register_rest_route('search','yachts', array(
    'methods' =>  WP_REST_SERVER::READABLE, // 'GET'
    'callback'  =>  'searchYachts'
  ));

  register_rest_route('search','blog', array(
    'methods' =>  WP_REST_SERVER::READABLE, // 'GET'
    'callback'  =>  'searchBlog'
  ));
}




function searchAll($data){

  $customPosts = new WP_Query(array(
    'post_type' => array('yachts','services','routes','blog',),
    'posts_per_page' => -1,
    // 'search_prod_title' => $data['search'],
    's' =>  $data['search']
  ));

  $typesResults = array(
    'yachts'  =>  array(),
    'services'  =>  array(),
    'routes'  =>  array(),
    'blog'  =>  array(),
  );


  // $customPostsResults = array();

  while($customPosts->have_posts()){
    $customPosts->the_post();

    foreach ($typesResults as $key => $value) {
      // echo $key;
      if(get_post_type() == $key){
        array_push($typesResults[$key], array(
          'id' => get_the_ID(),
          'title' => get_the_title(),
          'link'  => get_permalink(get_the_ID())
        ));
      }
    }

  }

  return $typesResults;
}

function searchYachts($data){



  if($data['longFromF']){
    $longFromF = array(
      'key' =>  'yachts_harakteristiki_yachts_char_element_3',
      'compare' =>  '>=',
      'value' =>  $data['longFromF'],
      'type'    => 'NUMERIC'
    );
  };

  if($data['longToF']){
    $longToF = array(
      'key' =>  'yachts_harakteristiki_yachts_char_element_3',
      'compare' =>  '<=',
      'value' =>  $data['longToF'],
      'type'    => 'NUMERIC'
    );
  };

  // Sort
    
  if($data['sort'] === 'longToMaxF'){
    $sortingType = array(
      'key' =>  'yachts_harakteristiki_yachts_char_element_3',
      'type'    => 'NUMERIC'
    );
    $sorting = array( 
      'yachts_harakteristiki_yachts_char_element_3' => 'DESK',
    );    
  };

  if($data['sort'] === 'longToMinF'){
    $sortingType = array(
      'key' =>  'yachts_harakteristiki_yachts_char_element_3',
      'type'    => 'NUMERIC'
    );
    $sorting = array( 
      'yachts_harakteristiki_yachts_char_element_3' => 'ASC',
    );    
  };

  // Sort

  if($data['longFromM']){
    $longFromM = array(
      'key' =>  'yachts_harakteristiki_yachts_char_element_32',
      'compare' =>  '>=',
      'value' =>  $data['longFromM'],
      'type'    => 'NUMERIC'
    );
  };

  if($data['longToM']){
    $longToM = array(
      'key' =>  'yachts_harakteristiki_yachts_char_element_32',
      'compare' =>  '<=',
      'value' =>  $data['longToM'],
      'type'    => 'NUMERIC'
    );
  };
  
  // Sort
    
  if($data['sort'] === 'longToMaxM'){
    $sortingType = array(
      'key' =>  'yachts_harakteristiki_yachts_char_element_32',
      'type'    => 'NUMERIC'
    );
    $sorting = array( 
      'yachts_harakteristiki_yachts_char_element_32' => 'DESK',
    );    
  };

  if($data['sort'] === 'longToMinM'){
    $sortingType = array(
      'key' =>  'yachts_harakteristiki_yachts_char_element_32',
      'type'    => 'NUMERIC'
    );
    $sorting = array( 
      'yachts_harakteristiki_yachts_char_element_32' => 'ASC',
    );    
  };

  // Sort


// price A


  if($data['priceFromA']){
    $priceFromA = array(
      'key' =>  'yachts_price',
      'compare' =>  '>=',
      'value' =>  $data['priceFromA'],
      'type'    => 'NUMERIC'
    );
  };

  if($data['priceToA']){
    $priceToA = array(
      'key' =>  'yachts_price',
      'compare' =>  '<=',
      'value' =>  $data['priceToA'],
      'type'    => 'NUMERIC'
    );
  };
// Sort
  
  if($data['sort'] === 'priceToMaxA'){
    $sortingType = array(
      'key' =>  'yachts_price',
      'type'    => 'NUMERIC'
    );
    $sorting = array( 
      'yachts_price' => 'DESK',
    );    
  };
  
  if($data['sort'] === 'priceToMinA'){
    $sortingType = array(
      'key' =>  'yachts_price',
      'type'    => 'NUMERIC'
    );
    $sorting = array( 
      'yachts_price' => 'ASC',
    );    
  };

  // Sort
// price A
// price R

  // if($data['priceFromR']){
  //   $priceFromR = array(
  //     'key' =>  'yachts_price2',
  //     'compare' =>  '>=',
  //     'value' =>  $data['priceFromR'],
  //     'type'    => 'NUMERIC'
  //   );
  // };
  

  // if($data['priceToR']){
  //   $priceToR = array(
  //     'key' =>  'yachts_price2',
  //     'compare' =>  '<=',
  //     'value' =>  $data['priceToR'],
  //     'type'    => 'NUMERIC'
  //   );
  // };

  // if($data['sort'] === 'priceToMaxR'){

  //   $sortingType = array(
  //     'key' =>  'yachts_price2',
  //     'type'    => 'NUMERIC'
  //   );
  //   $sorting = array( 
  //     'yachts_price2' => 'DESK',
  //   );    
  // };
  
  // if($data['sort'] === 'priceToMinR'){
  //   $sortingType = array(
  //     'key' =>  'yachts_price2',
  //     'type'    => 'NUMERIC'
  //   );
  //   $sorting = array( 
  //     'yachts_price2' => 'ASC',
  //   );    
  // };

// price R

  if($data['guestFrom']){
    $guestFrom = array(
      'key' =>  'yachts_harakteristiki_yachts_char_element_5',
      'compare' =>  '>=',
      'value' =>  $data['guestFrom'],
      'type'    => 'NUMERIC'
    );
  };

  if($data['guestTo']){
    $guestTo = array(
      'key' =>  'yachts_harakteristiki_yachts_char_element_5',
      'compare' =>  '<=',
      'value' =>  $data['guestTo'],
      'type'    => 'NUMERIC'
    );
  };

  if($data['cabinFrom']){
    $cabinFrom = array(
      'key' =>  'yachts_harakteristiki_yachts_char_element_6',
      'compare' =>  '>=',
      'value' =>  $data['cabinFrom'],
      'type'    => 'NUMERIC'
    );
  };

  if($data['cabinTo']){
    $cabinTo = array(
      'key' =>  'yachts_harakteristiki_yachts_char_element_6',
      'compare' =>  '<=',
      'value' =>  $data['cabinTo'],
      'type'    => 'NUMERIC'
    );
  };

  if($data['yearFrom']){
    $yearFrom = array(
      'key' =>  'yachts_harakteristiki_yachts_char_element_2',
      'compare' =>  '>=',
      'value' =>  $data['yearFrom'],
      'type'    => 'NUMERIC'
    );
  };

  if($data['yearTo']){
    $yearTo = array(
      'key' =>  'yachts_harakteristiki_yachts_char_element_2',
      'compare' =>  '<=',
      'value' =>  $data['yearTo'],
      'type'    => 'NUMERIC'
    );
  };

  // Sort
    
  if($data['sort'] === 'yearToMax'){
    $sortingType = array(
      'key' =>  'yachts_harakteristiki_yachts_char_element_2',
      'type'    => 'NUMERIC'
    );
    $sorting = array( 
      'yachts_harakteristiki_yachts_char_element_2' => 'DESK',
    );    
  };

  if($data['sort'] === 'yearToMin'){
    $sortingType = array(
      'key' =>  'yachts_harakteristiki_yachts_char_element_2',
      'type'    => 'NUMERIC'
    );
    $sorting = array( 
      'yachts_harakteristiki_yachts_char_element_2' => 'ASC',
    );    
  };

  // Sort

  if($data['refitFrom']){
    $refitFrom = array(
      'key' =>  'yachts_harakteristiki_yachts_char_element_22',
      'compare' =>  '>=',
      'value' =>  $data['refitFrom'],
      'type'    => 'NUMERIC'
    );
  };

  if($data['refitTo']){
    $refitTo = array(
      'key' =>  'yachts_harakteristiki_yachts_char_element_22',
      'compare' =>  '<=',
      'value' =>  $data['refitTo'],
      'type'    => 'NUMERIC'
    );
  };

  if($data['typeBoad']){
    $typeBoad = array(
      'key' =>  'tip_sudna',
      'compare' =>  '=',
      'value' =>  $data['typeBoad'],
    );
  };
  

  if($data['yachtsCategory']){
    $yachtsCategory = array(
      'taxonomy' => 'yachts_cat',
      'field'    => 'slug',
      'terms'    => $data['yachtsCategory']
    );
  };

  if($data['favorites']){
    $favorites = $data['favorites'];
    $favorites = explode( ',', $favorites );
  };
  // en
  $customPosts = new WP_Query(array(
    'post_type' => 'yachts',
    'post__in' =>  $favorites,
    'posts_per_page' => $data['sizeUpload'],
    'lang' => $data['lang'],
    'paged' =>  $data['countUpload'],
    'search_prod_title' => $data['title'],
    'tax_query' => array(
      $yachtsCategory,
      array(
        'taxonomy' => 'yachts_cat',
        'field'    => 'slug',
        'terms'    => array( 'katera-wake','boats-wake' ),
        'operator' => 'NOT IN',
      ),
    ),
    
    'meta_query'  => array(
      $longFromF,
      $longToF,
      $longFromM,
      $longToM,
      $priceFromA,
      $priceToA,
      // $priceFromR,
      // $priceToR,
      $guestFrom,
      $guestTo,
      $cabinFrom,
      $cabinTo,
      $yearFrom,
      $yearTo,
      $refitFrom,
      $refitTo,
      $typeBoad,
      $sortingType,
    ),
    'orderby' =>  $sorting
    // 's' =>  $data['search']
  ));


  $customPostsResults = array();
  $sizePosts = $customPosts->found_posts;
  // $sizePosts = 0;
  while($customPosts->have_posts()){
    $customPosts->the_post();
    // $sizePosts++;
    array_push($customPostsResults, 
      array(
        'id' => get_the_ID(),
        'title' => get_the_title(),
        'link'  => get_permalink(get_the_ID()),
        'yachts_galereya'  => get_field('yachts_galereya',get_the_ID()),
        'yachts_price'  => get_field('yachts_price',get_the_ID()),
        'yachts_price_rub'  => get_field('yachts_price2',get_the_ID()),
        'god_refit'  => get_field('yachts_harakteristiki_yachts_char_element_2',get_the_ID()),
        'god_postrojki'  => get_field('yachts_harakteristiki_yachts_char_element_22',get_the_ID()),
        'yachts_harakteristiki'  => get_field('yachts_harakteristiki',get_the_ID()),
        'refit_text'  => get_field('refit_text',get_the_ID()),
        'naznachenie'  => get_field('naznachenie',get_the_ID()),
        'sizePosts'  =>  $sizePosts,
        'lang'  =>  $data['lang']
      )
  );

  }

  return $customPostsResults;
}

function searchBlog($data){

  if($data['blogCategory']){
    $blogCategory = array(
      'taxonomy' => 'blog_cat',
      'field'    => 'slug',
      'terms'    => $data['blogCategory']
    );
  };


  $customPosts = new WP_Query(array(
    'post_type' => 'blog',
    'posts_per_page' => $data['sizeUpload'],
    'lang' => $data['lang'],
    'paged' =>  $data['countUpload'],
    'tax_query' => array(
      $blogCategory
    ),
    

    // 's' =>  $data['search']
  ));

  $customPostsResults = array();
  $sizePosts = $customPosts->found_posts;

  while($customPosts->have_posts()){
    $customPosts->the_post();
    
    array_push($customPostsResults, 
      array(
        'sizePosts'  =>  $sizePosts,
        'img' =>  get_the_post_thumbnail_url(get_the_ID()),
        'title' => get_the_title(get_the_ID()),
        'link' => get_the_permalink(get_the_ID()),
        'text'  =>  get_the_excerpt(get_the_ID()),
        'date'  =>  get_the_date('',get_the_ID()),
        'lang'  =>  $data['lang']
      )
  );

  }

  return $customPostsResults;
}
?>