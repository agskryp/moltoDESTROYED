<script>

function PopupCenter(url, title, w, h) {
    // Fixes dual-screen position                         Most browsers      Firefox
    var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : window.screenX;
    var dualScreenTop = window.screenTop != undefined ? window.screenTop : window.screenY;

    var width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
    var height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

    var left = ((width / 2) - (w / 2)) + dualScreenLeft;
    var top = ((height / 2) - (h / 2)) + dualScreenTop;
    var newWindow = window.open(url, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);

    // Puts focus on the newWindow
    if (window.focus) {
        newWindow.focus();
    }
}

</script>





  <a class="twitter-share-button"
  href="https://twitter.com/intent/tweet?text=Read%20<?php echo get_the_title(); ?>%20on%20moltoDESTROYED%20<?php echo get_permalink(); ?>"
       target="popup" 
  onclick="PopupCenter('https://twitter.com/intent/tweet?text=Read%20<?php echo get_the_title(); ?>%20on%20moltoDESTROYED%20<?php echo get_permalink(); ?>','popup','600','300');">
Twitter</a>



