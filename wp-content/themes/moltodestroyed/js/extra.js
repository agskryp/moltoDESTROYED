/**
 * Display support images if user is running an ad blocker
 * Run outside of anonymous loading function to be defined
 * before googlead script runs
 *
 * TODO: add back to anonymous function and async js(?)
 */
function blockerMessage() {
  jQuery( ".ad-container" ).before(
    '<div class="ad-blocker-container">' +
      '<img src="' + moltoConfig.themeDirectory + '/images/messages/blocker-message-01.png" ' +
           'alt="Help support moltoDESTROYED">' +
      '<img src="' + moltoConfig.themeDirectory + '/images/messages/blocker-message-02.png" ' +
           'alt="Disable your ad-blocker">' + 
    '</div>'
  );
}

( function($) {
  $( document ).ready( function() {




    // Toggle open class when menu button's clicked
    $( '.menu-toggle' ).click( function () {
      $( '.main-menu-icon' ).toggleClass( 'open' );
    } );

    var textifiedContainer = document.querySelector( '.textified-container' );
    
    if( typeof( textifiedContainer ) != 'undefined' && textifiedContainer != null ) {    
      var button    = textifiedContainer.querySelector( 'button' );
      var text      = textifiedContainer.querySelector( 'span' );
      var arrow     = textifiedContainer.querySelector( 'svg' );
      var textified = textifiedContainer.querySelector( '.textified-text-container' );
          
      // Toggle comic texted version button
      button.addEventListener( 'click', function () {
        textified.classList.toggle( 'molto-sr-text' );
        arrow.classList.toggle( 'flip' );

        if( text.innerHTML === "Close the text version" ) {
          text.innerHTML = "Read the text version";
        }

        else {
          text.innerHTML = "Close the text version";
        } 
      } );
    }
  } );
} )( jQuery );
