<?php
  global $imageURLRoot;
  global $imgList;
?>

<img src="<?php echo $imageURLRoot . getRandomFromArray( $imgList ); ?>" width="220" height="220" alt=""/>
