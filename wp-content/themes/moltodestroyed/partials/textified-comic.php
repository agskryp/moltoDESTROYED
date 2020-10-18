<?php
  $textified = get_field( 'textify_comic' );

  if( !empty( $textified ) && !is_home() ) {
?>
  <div class="textified">
    <button id="textified-toggle" class="flex-center">
      <span id="textified-button">View text version</span>

      <svg id="textified-arrow" width="12" height="12" viewBox="0 0 24 24">
        <path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/>
      </svg>
    </button>

    <?php 
      echo '<div id="textified-text" class="textified-text-container text-left sr-only">';
        echo  $textified;
      echo '</div>';
    ?>
  </div>
<?php 
  }
