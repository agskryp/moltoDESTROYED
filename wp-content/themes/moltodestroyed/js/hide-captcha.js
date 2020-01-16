var jQuery;

( function( $ ) {
  $( document ).delay( 900 ).queue( function() { // delay time is an arbitrary number
    $( 'div.grecaptcha-badge' ).hide();
  } );
} )( jQuery );
