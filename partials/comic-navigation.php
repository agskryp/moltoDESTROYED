<?php global $post; ?>

<div class="comic-navigation-container">
  <nav class="comic-navigation">
    
     <?php 
    
    $first = get_posts(array('numberposts' => 1,  'order' => 'asc', 'post_type'      => 'comics',));
$url = get_permalink($first[0]->ID);
    

    if ( $post->ID !== $first[0]->ID ) {
echo "<a href='" . $url . "'> < < < </a>";
    }
  ?>
    
  <?php $previous = get_previous_post_link(
		'%link', ' &lt; ', false, '', 'category'
	);
    
    echo $previous;
    ?>
    
    
    <a href="#">???</a>
    
      <?php $next = get_next_post_link(
		'%link', ' &gt; ', false, '', 'category'
	);
    
    echo $next;
    ?>
    
  
    <?php  $latest = get_posts(array('numberposts' => 1,  'post_type'      => 'comics',));
$url = get_permalink($latest[0]->ID);
echo "<a href='" . $url . "'> > > > </a>";
  ?>
    
  </nav>
  </div>