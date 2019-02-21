( function($) {
  $( document ).ready( function() {
    //var jQuery;

    if( window.innerWidth > 768 ) {
      $( ".promo-container" ).append( '<div class="text-center" data-comic-rocket-box="728x90"></div>' );
    } 

    else {
      $( ".promo-container" ).append( '<div class="text-center" data-comic-rocket-box="336x280"></div>' );
    }
  } );
} )( jQuery );
