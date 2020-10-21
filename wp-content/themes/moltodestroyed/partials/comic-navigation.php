<?php
  global $post;

  $first_comic = get_posts( array(
    'numberposts' => 1,
    'order'       => 'asc',
    'post_type'   => 'comics'
  ) );

  $random_comic = get_posts( array(
    'numberposts' => 1,
    'orderby'     => 'rand',
    'post_type'   => 'comics',
    'exclude'     => $post -> ID
  ) );

  $latest_comic = get_posts( array(
    'numberposts' => 1,
    'order'       => 'desc',
    'post_type'   => 'comics'
  ) );

  ob_start();
?>

<nav class="comic-navigation-container text-center">
  <h2 class="sr-only">Comic navigation menu</h2>

  <?php
    echo '<div class="button-container">';
      if( $post -> ID !== $first_comic[0] -> ID ) {
        echo "<a href='" . get_permalink( $first_comic[0] -> ID ) . "'>";
          echo "<span class='sr-only'>First Comic</span> &lt; &lt; &lt;";
        echo "</a>";
      }
    echo '</div>';

    echo '<div class="button-container">';
      echo get_previous_post_link( '%link', '<span class="sr-only">Previous Comic</span> &lt;');
    echo '</div>';

    echo '<div class="button-container">';
      echo "<a href='" . get_permalink( $random_comic[0] -> ID ) . "'>";
        echo "<span class='sr-only'>Random Comic</span> &#63; &#63; &#63;";
      echo "</a>";
    echo '</div>';
    
    echo '<div class="button-container">';
      echo get_next_post_link( '%link', '<span class="sr-only">Next Comic</span> &gt;');
    echo '</div>';

    echo '<div class="button-container">';
      if( $post -> ID !== $latest_comic[0] -> ID ) {
        echo "<a href='" . get_permalink( $latest_comic[0] -> ID ) . "'>";
          echo "<span class='sr-only'>Latest Comic</span> &gt; &gt; &gt;";
        echo "</a>";
      }
    echo '</div>';
  ?>
</nav>

<?php
  $comic_navigation = ob_get_contents();

  ob_end_flush();

  return $comic_navigation;
