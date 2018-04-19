<script type="text/javascript">
  function getRandomLargeCharacter() {
    var largeCharacters = [];
    
    <?php
      function getLargeCharacters() {
        $dirName = get_template_directory() . "/images/characters/large/";
        $urlPath = get_template_directory_uri() . "/images/characters/large/";
        $files = [];
        $arrayPosition = 0;
        
        if( $directory = opendir( $dirName ) ) {
          while( $image = readdir( $directory ) ) {
            if( $image != "." && $image != ".." && $image != ".DS_Store" ) {
              echo 'largeCharacters[' . $arrayPosition . ']="' . $urlPath . $image . '";' . "\n";
              $arrayPosition++;
            }
          }

          closedir( $directory );
        }

        return( $files );
      }
    
      getLargeCharacters();
    ?>

    var randomNumber = Math.floor( Math.random() * largeCharacters.length );
    var imageString = '<img src="' + largeCharacters[ randomNumber ] + '">';

    return imageString;
  }
  
  document.getElementById( 'characterFarFarLeft' ).insertAdjacentHTML( 'beforeend', getRandomLargeCharacter() );
  document.getElementById( 'characterFarLeft' ).insertAdjacentHTML( 'beforeend', getRandomLargeCharacter() );
  document.getElementById( 'characterLeft' ).insertAdjacentHTML( 'beforeend', getRandomLargeCharacter() );  
  document.getElementById( 'characterRight' ).insertAdjacentHTML( 'beforeend', getRandomLargeCharacter() );
  document.getElementById( 'characterFarRight' ).insertAdjacentHTML( 'beforeend', getRandomLargeCharacter() );
  document.getElementById( 'characterFarFarRight' ).insertAdjacentHTML( 'beforeend', getRandomLargeCharacter() );
</script>
