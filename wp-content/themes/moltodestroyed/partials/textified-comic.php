<?php
  $textified = get_post_meta( get_the_ID(), 'textify_comic', true );

  if( !empty( $textified ) ) {
?>
  <div class="textified-container">
    <button class="molto-flex-center textified-button">
      Read the text version

      <svg width="12" height="12" viewBox="0 0 24 24">
        <path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/>
      </svg>
    </button>

    <div class="textified-text-container molto-sr-text">
      <?php echo wpautop( $textified ); ?>
    </div>
  </div>
<?php 
  }
