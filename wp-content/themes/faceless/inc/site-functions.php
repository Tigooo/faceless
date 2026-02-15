<?php


function masteralex_init() {

  // IMAGE SIZES

  add_image_size( 'full', 1320); 
  add_image_size( 'page_image', 750); 
  add_image_size( 'mobile', 500); 

  //SITE TITLE
  add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'masteralex_init' );


function new_excerpt_more( $more ) {
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');


