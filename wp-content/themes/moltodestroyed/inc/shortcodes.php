<?php

function random_molto_character( $atts ) {  
  global $imageURLRoot;
  global $imgList;

  $float = 'pull-left';
  
  if( !empty( $atts[ 'float' ] ) ) $float = 'pull-right';
  
  $shortcode = '<img class="' . $float . ' src="' . $imageURLRoot . getRandomFromArray( $imgList ) . '" alt="Random Characer" />';
  
  return $shortcode;
}
add_shortcode( 'molto-character', 'random_molto_character' );
