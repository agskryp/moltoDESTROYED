var jQuery;

if ( window.innerWidth > 768 ) {
  jQuery( ".promo-container" ).append( '<div class="text-center" data-comic-rocket-box="728x90"></div>' );
} else {
  jQuery( ".promo-container" ).append( '<div class="text-center" data-comic-rocket-box="336x280"></div>' );
}

