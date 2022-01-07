/**
 * Display support images if user is running an ad blocker
 * Run outside of anonymous loading function to be defined
 * before google ad script runs
 */
function moltoBlockerMessage() {
  jQuery( ".ad-container" ).before(
    '<div class="ad-blocker-container">' +
      '<img src="' + moltoConfig.themeDirectory + '/images/messages/blocker-message-01.png" ' +
           'alt="Help support moltoDESTROYED">' +
      '<img src="' + moltoConfig.themeDirectory + '/images/messages/blocker-message-02.png" ' +
           'alt="Disable your ad-blocker">' + 
    '</div>'
  );
}

( function() {
  window.dataLayer = window.dataLayer || [];

  document.addEventListener( "DOMContentLoaded", function() {
    var menuToggle         = document.querySelector( '.menu-toggle' );
    var mainNavMenu        = document.querySelector( '.main-nav-menu' );
    var menuIcon           = document.querySelector( '.main-menu-icon' );
    var textifiedContainer = document.querySelector( '.textified-container' );

    // Toggle open class when menu button's clicked
    menuToggle.onclick = function() {
      menuIcon.classList.toggle( 'open' );
      mainNavMenu.classList.toggle( 'in' );
    }

    // Check if textified component exists
    if( typeof( textifiedContainer ) != 'undefined' && textifiedContainer != null ) {    
      var button    = textifiedContainer.querySelector( 'button' );
      // var text      = textifiedContainer.querySelector( 'span' );
      // var arrow     = textifiedContainer.querySelector( 'svg' );
      var textified = textifiedContainer.querySelector( '.textified-text-container' );
          
      // Toggle comic texted version button
      button.addEventListener( 'click', function () {

        // For Google Tag Manager
        // dataLayer.push( {
        //   'event': 'Comic',
        //   'action': window.location.pathname,
        //   'label': 'Click comic text button'
        // } );

        textified.classList.toggle( 'molto-sr-text' );
        // arrow.classList.toggle( 'flip' );
        button.classList.toggle( 'opened' );

        if( button.innerText === "Close the text version" ) {
          button.innerText = "Read the text version";
        }

        else {
          button.innerText = "Close the text version";
        } 
      } );
    }
  } );
} )();
