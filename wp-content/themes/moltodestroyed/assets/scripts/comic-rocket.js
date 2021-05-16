( function() {
  document.addEventListener("DOMContentLoaded", function() {
    var promoContainer = document.querySelector( ".promo-container" );
    var divElement = document.createElement( 'div' );
    divElement.setAttribute( 'class', 'text-center' );

    if( window.innerWidth > 768 ) {
      divElement.setAttribute( 'data-comic-rocket-box', '728x90' );
    } 

    else {
      divElement.setAttribute( 'data-comic-rocket-box', '336x280' );
    }

    promoContainer.appendChild( divElement );
  } );
} )();
