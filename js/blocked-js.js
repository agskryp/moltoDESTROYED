var jQuery;

function adsMessage() {
  jQuery( ".ad-container" ).before(
    '<div style="text-align: center; margin: 0 auto 1.5em;"><img src="' + moltoConfig.themeDirectory + '/images/messages/blocker-message-01.png" alt="Help support moltoDESTROYED"><img src="' + moltoConfig.themeDirectory + '/images/messages/blocker-message-02.png" alt="Disable your ad-blocker"></div>'
  );
} 
