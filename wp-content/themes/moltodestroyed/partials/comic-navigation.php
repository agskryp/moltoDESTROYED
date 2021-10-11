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
?>

<nav class="comic-navigation-container molto-text-center">
  <h2 class="molto-sr-text">Comic navigation menu</h2>

  <?php
    echo '<div class="button-container">';
      if( $post -> ID !== $first_comic[0] -> ID ) {
        echo "<a class='comic-nav-button' href='" . get_permalink( $first_comic[0] -> ID ) . "'>";
          echo "<span class='molto-sr-text'>First Comic</span> &lt; &lt; &lt;";
        echo "</a>";
      }
    echo '</div>';

    echo '<div class="button-container">';
      echo get_previous_post_link( '%link', '<span class="molto-sr-text">Previous Comic</span> &lt;');
    echo '</div>';

    echo '<div class="button-container">';
      echo "<a class='comic-nav-button' href='" . get_permalink( $random_comic[0] -> ID ) . "'>";
        echo "<span class='molto-sr-text'>Random Comic</span> &#63; &#63; &#63;";
      echo "</a>";
    echo '</div>';
    
    echo '<div class="button-container">';
      echo get_next_post_link( '%link', '<span class="molto-sr-text">Next Comic</span> &gt;');
    echo '</div>';

    echo '<div class="button-container">';
      if( $post -> ID !== $latest_comic[0] -> ID ) {
        echo "<a class='comic-nav-button' href='" . get_permalink( $latest_comic[0] -> ID ) . "'>";
          echo "<span class='molto-sr-text'>Latest Comic</span> &gt; &gt; &gt;";
        echo "</a>";
      }
    echo '</div>';
  ?>
</nav>
