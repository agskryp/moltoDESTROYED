<div class="header-characters">
  <div id="characterFarFarLeft" class="large far-far-left"></div>
  
  <div id="characterFarLeft" class="large far-left"></div>
  
  <div id="characterLeft" class="large left"></div>
  
  <div id="characterFarRight" class="large far-right"></div>
  
  <div id="characterRight" class="large right"></div>



            

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



<script type="text/javascript">

  function getRandomLargeCharacter() {
    <?php
      function getLargeCharacters() {
        $dirName = get_template_directory() . "/images/characters/large/";
        $urlPath = get_template_directory_uri() . "/images/characters/large/";
        $files = [];
        $arrayPosition = 0;
        
        if( $directory = opendir( $dirName ) ) {
          while( $image = readdir( $directory ) ) {
            echo 'largeCharacters[' . $arrayPosition . ']="' . $urlPath . $image . '";' . "\n";
            $arrayPosition++;
          }

          closedir( $directory );
        }

        return($files);
      }

      echo "var largeCharacters = new Array();" . "\n";
    
    
    
      getLargeCharacters();
    ?>

  <?php
    /*
     * First two items in array are . and .. respectively,
     * we don't need them in our array so we remove them.
     */   
  ?>
    
    var largeCharacters;
//    console.log( largeCharacters );
    
    largeCharacters.splice(0, 2);
    

    

    
    console.log( largeCharacters );
        
    var randomNumber = Math.floor( Math.random() * largeCharacters.length );
    var imageString = '<img src="'+largeCharacters[randomNumber]+'" border=0>';

    return imageString;
  }

document.getElementById('characterFarFarLeft').insertAdjacentHTML('beforeend', getRandomLargeCharacter());
document.getElementById('characterFarLeft').insertAdjacentHTML('beforeend', getRandomLargeCharacter());
document.getElementById('characterLeft').insertAdjacentHTML('beforeend', getRandomLargeCharacter());
  
document.getElementById('characterRight').insertAdjacentHTML('beforeend', getRandomLargeCharacter());
document.getElementById('characterFarRight').insertAdjacentHTML('beforeend', getRandomLargeCharacter());
  
</script>


