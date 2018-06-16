var jQuery;

( function( $ ) {
  $( '.menu-toggle' ).click( function () {
    $( '#main-menu-icon' ).toggleClass( 'open' );
  } );
  
  $( '#textified-toggle' ).click( function () {
    $( '#textified-text' ).toggleClass( 'sr-only' );
  } );
} )( jQuery );
