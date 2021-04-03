<?php
  global $imageURLRoot;
  global $imgList;
?>

<img class="random-character" src="<?php echo $imageURLRoot . getRandomFromArray( $imgList ); ?>" width="220" height="220" alt=""/>
