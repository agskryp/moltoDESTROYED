<?php
  global $imageURLRoot;
  global $imgList;
?>

<img src="<?php echo $imageURLRoot . getRandomFromArray( $imgList ); ?>" alt="" />
