var jQuery;

( function( $ ) {
  $( '.menu-toggle' ).click( function () {
    $( '#main-menu-icon' ).toggleClass( 'open' );
  } );
  
  $( '#textified-toggle' ).click( function () {
    var textifiedButton = document.getElementById( "textified-button" );
    
    $( '#textified-text' ).toggleClass( 'sr-only' );
    
    $( '#textified-arrow' ).toggleClass( 'textified-arrow' );
    
  if ( textifiedButton.innerHTML === "Close text version" ) {
    textifiedButton.innerHTML = "View text version";
  } else {
    textifiedButton.innerHTML = "Close text version";
  } 
  } );
} )( jQuery );
