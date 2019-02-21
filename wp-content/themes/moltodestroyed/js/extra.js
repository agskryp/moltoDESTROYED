( function($) {
  $( document ).ready( function() {
    
    // Display support images if user is running an ad blocker
    function blockerMessage() {
      $( ".ad-container" ).before(
        '<div style="text-align: center; margin: 0 auto 1.5em;"><img src="' + moltoConfig.themeDirectory + '/images/messages/blocker-message-01.png" alt="Help support moltoDESTROYED"><img src="' + moltoConfig.themeDirectory + '/images/messages/blocker-message-02.png" alt="Disable your ad-blocker"></div>'
      );
    }
    
    
    // Toggle open class when menu button's clicked
    $( '.menu-toggle' ).click( function () {
      $( '#main-menu-icon' ).toggleClass( 'open' );
    } );

    
    // Toggle comic texted version button
    $( '#textified-toggle' ).click( function () {
      var textifiedButton = document.getElementById( "textified-button" );

      $( '#textified-text' ).toggleClass( 'sr-only' );
      $( '#textified-arrow' ).toggleClass( 'textified-arrow' );

      if( textifiedButton.innerHTML === "Close text version" ) {
        textifiedButton.innerHTML = "View text version";
      }

      else {
        textifiedButton.innerHTML = "Close text version";
      } 
    } );
  } );
} )( jQuery );