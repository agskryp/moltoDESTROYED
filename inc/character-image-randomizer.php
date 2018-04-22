<?php

$root = get_template_directory();
$path = '/images/characters/large/';
$imageURLRoot = get_template_directory_uri() . $path;

function getImagesFromDir( $path ) {
  $images = array();
  
  if ( $img_dir = opendir( $path ) ) {
    while ( false !== ( $img_file = readdir( $img_dir ) ) ) {
      if ( preg_match("/(\.png)$/", $img_file ) ) {
        $images[] = $img_file;
      }
    }
    
    closedir( $img_dir );
  }
  
  return $images;
}

function getRandomFromArray( $ar ) {
  $num = array_rand( $ar );
  return $ar[ $num ];
}

$imgList = getImagesFromDir( $root . $path );
$img = getRandomFromArray( $imgList );