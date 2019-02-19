<?php
  global $post;
  ob_start();
?>

<div class="comic-navigation-container">
  <h2 class="sr-only">Comic navigation menu</h2>
  
  <nav class="comic-navigation text-center row">    
    <div title="First Comic">
      <?php
        $first = get_posts( array(
          'numberposts' => 1,
          'order'       => 'asc',
          'post_type'   => 'comics'
        ) );

        $first_url = get_permalink( $first[0] -> ID );

        if ( $post -> ID !== $first[0] -> ID ) {
          echo "<a href='" . $first_url . "' rel='first'><span class='sr-only'>First Comic</span> &lt; &lt; &lt; </a>";
        }
      ?>
    </div>

    <div title="Previous Comic">
      <?php
        $previous = get_previous_post_link(
		  '%link', ' <span class="sr-only">Previous Comic</span> &lt; ', false, '', 'category'
        );

        echo $previous;
      ?>
    </div>

    <div title="Random Comic">
      <?php
        $random = get_posts( array(
          'numberposts' => 1,
          'orderby'     => 'rand',
          'post_type'   => 'comics',
          'exclude'     => $post -> ID
        ) );

        $random_url = get_permalink( $random[0] -> ID );

        echo "<a href='" . $random_url . "'><span class='sr-only'>Random Comic</span> &#63; &#63; &#63; </a>";
      ?>
    </div>

    <div title="Next Comic">
      <?php
        $next = get_next_post_link(
          '%link', ' <span class="sr-only">Next Comic</span> &gt; ', false, '', 'category'
        );

        echo $next;
      ?>
    </div>

    <div title="Latest Comic">
      <?php
        $latest = get_posts( array(
          'numberposts' => 1,
          'order'       => 'desc',
          'post_type'   => 'comics'
        ) );

        $latest_url = get_permalink( $latest[0] -> ID );

        if ( $post -> ID !== $latest[0] -> ID ) {
          echo "<a href='" . $latest_url . "' rel='last'><span class='sr-only'>Latest Comic</span> &gt; &gt; &gt; </a>";
        }
      ?>
    </div>
  </nav>
</div>

<?php
  $comic_navigation = ob_get_contents();
  ob_end_flush();

  return $comic_navigation;
