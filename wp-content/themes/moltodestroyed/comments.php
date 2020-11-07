<?php
  /**
   * The comments template
   * 
   * Not currently being utilized
   */

  if( post_password_required() ) return;
?>

<div>
  <?php	
    if( have_comments() ) { 
      echo '<h2>';
        $comment_count = get_comments_number();
      
        if( 1 === $comment_count ) printf( '1 Comment' );
            
        else {        
          printf( 
            esc_html( _nx( 
              '%1$s Comment', '%1$s Comments', $comment_count, 'comments title', 'moltodestroyed'
            ) ),
            
            number_format_i18n( $comment_count )
          );
        }  
      echo '</h2>';
  
      echo '<ol>';
        wp_list_comments( array(
          'style'      => 'ol',
          'short_ping' => true,
        ) );
      echo '</ol>';

      the_comments_navigation();

      if( !comments_open() ) {
        echo '<p>Comments are closed.</p>';
      }
    }

    comment_form();
  ?>
</div>
