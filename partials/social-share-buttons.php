

<div class="social-share-container text-center">
  <a id="shareTwitter"
     class="social-share-button"
     href="https://twitter.com/intent/tweet?text=Check out the comic &#39;<?php echo get_the_title(); ?>&#39; @ moltoDESTROYED: <?php echo get_permalink(); ?>"
     target="popupTwitter" 
     onclick="PopupCenter('','popupTwitter','600','300');">
    <svg width="25" height="25" viewBox="0 0 24 24">
      <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
    </svg>
  </a>
  
  <div id="shareBtn" class="btn btn-success clearfix">Share</div>
  
  <a id="shareFacebook"
     class="social-share-button"
     href="https://www.facebook.com/dialog/share?app_id=1022797411100057&display=popup&href=<?php echo get_permalink(); ?>"
     target="popupFacebook" 
     onclick="PopupCenter('','popupFacebook','600','600');">
    FACEBOOK
  </a>
  
  
  
</div>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '1022797411100057',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v2.12'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<script>
document.getElementById('shareBtn').onclick = function() {
  FB.ui({
    method: 'share',
    display: 'popup',
    href: 'https://developers.facebook.com/docs/',
  }, function(response){});
}
</script>