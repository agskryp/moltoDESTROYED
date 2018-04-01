<?php 
  global $post; 

  ob_start();
?>

<div class="comic-navigation-container">
  <nav class="comic-navigation">
    <?php 
      $first = get_posts( array(
        'numberposts' => 1,
        'order'       => 'asc',
        'post_type'   => 'comics'
      ) );
    
      $first_url = get_permalink( $first[0] -> ID );
    
      if ( $post -> ID !== $first[0] -> ID ) {
        echo "<a href='" . $first_url . "'> < < < </a>";
      }
    
    
     
      $previous = get_previous_post_link(
		'%link', ' &lt; ', false, '', 'category'
	  );
    
      echo $previous;
    
    

      $random = get_posts( array(
        'numberposts' => 1,
        'orderby'     => 'rand',
        'post_type'   => 'comics',
        'exclude'     => $post -> ID
      ) );

    
      $random_url = get_permalink( $random[0] -> ID );
      
      echo "<a href='" . $random_url . "'> ? ? ? </a>";
      
     
    
      $next = get_next_post_link(
        '%link', ' &gt; ', false, '', 'category'
      );
    
      echo $next;
    
      $latest = get_posts( array(
        'numberposts' => 1,
        'order'       => 'desc',
        'post_type'   => 'comics'
      ) );
    
      $latest_url = get_permalink( $latest[0] -> ID );
    
      if ( $post -> ID !== $latest[0] -> ID ) {
        echo "<a href='" . $latest_url . "'> > > > </a>";
      }
    ?>
  </nav>
</div>

<?php

$comic_navigation = ob_get_contents();

ob_end_flush();

return $comic_navigation;