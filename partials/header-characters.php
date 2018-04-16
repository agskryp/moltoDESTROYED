<?php


?>

<script type="text/javascript">
/*
Random Image Script- By JavaScript Kit (http://www.javascriptkit.com) 
Over 400+ free JavaScripts here!
Keep this notice intact please
*/
function random_imglink(){

<?php
function returnimages() {
   $dirname = get_template_directory() . "/images/characters/large/";
  $urlpath = get_template_directory_uri() . "/images/characters/large/";
 
   $extension = "(jpg|jpeg|png|gif|bmp)$";
   $files = array();
   $curimage=0;
  
   if($handle = opendir($dirname)) {
       while(false !== ($file = readdir($handle))){
               
                 echo 'myimages[' . $curimage .']="' . $urlpath . $file . '";' . "\n";
                 $curimage++;
               
       }

       closedir($handle);
   }
   return($files);
}

echo "var myimages=new Array();" . "\n";
returnimages();
?>
  
  var indexToRemove = 0;
var numberToRemove = 2;

myimages.splice(indexToRemove, numberToRemove);
  
  console.log(myimages);

var ry=Math.floor(Math.random()*myimages.length)
document.write('<img src="'+myimages[ry]+'" border=0>')
}
random_imglink()
</script>

<div class="header-characters">
  <div class="large far-right"
       
       style=" background:lightgreen;    top: 10%;
    right: -208px;">

  </div>
  
  <div class="large right"

       style="background:red; ">
  </div>


  <div class="large far-left"
       
       style="
    background: pink;
    top: 17%;
    left: -208px;">
  </div>
            
  <div class="large left"
       
       style=" background:purple;">
  </div>
<!--

            <div style="    width: 70px;
    height: 70px;
    background: turquoise;
    position: absolute;
    top: 64%;
    left: 228px;">
&nbsp;

</div>
-->
  </div> 



