<?php 
  global $post; 

  ob_start();
?>

<div class="comic-navigation-container">
  <nav class="comic-navigation text-center row">
    <div class="col-xs-offset-1 col-xs-2">
      <?php 
        $first = get_posts( array(
          'numberposts' => 1,
          'order'       => 'asc',
          'post_type'   => 'comics'
        ) );

        $first_url = get_permalink( $first[0] -> ID );

        if ( $post -> ID !== $first[0] -> ID ) {
          echo "<a href='" . $first_url . "'> &lt; &lt; &lt; </a>";
        } 

        ?>
    </div>
    
    <div class="col-xs-2">
      <?php
    
    
     
      $previous = get_previous_post_link(
		'%link', ' &lt; ', false, '', 'category'
	  );
    
      echo $previous;
      ?>
    </div>
    <div class="col-xs-2">
      
      <?php
    
    

      $random = get_posts( array(
        'numberposts' => 1,
        'orderby'     => 'rand',
        'post_type'   => 'comics',
        'exclude'     => $post -> ID
      ) );

    
      $random_url = get_permalink( $random[0] -> ID );
      
      echo "<a href='" . $random_url . "'> ? ? ? </a>";
      
      ?>
    </div>
    
    <div class="col-xs-2">
      <?php
      
     
    
      $next = get_next_post_link(
        '%link', ' &gt; ', false, '', 'category'
      );
    
      echo $next;
      ?>
    </div>
    
    <div class="col-xs-2">
      <?php
    
      $latest = get_posts( array(
        'numberposts' => 1,
        'order'       => 'desc',
        'post_type'   => 'comics'
      ) );
    
      $latest_url = get_permalink( $latest[0] -> ID );
    
      if ( $post -> ID !== $latest[0] -> ID ) {
        echo "<a href='" . $latest_url . "'> &gt; &gt; &gt; </a>";
      }
    ?>
    </div>
  </nav>
</div>

<?php

$comic_navigation = ob_get_contents();

ob_end_flush();

return $comic_navigation;