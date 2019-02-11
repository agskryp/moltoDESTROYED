<?php
/**
 * Custom template tags for this theme
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package moltodestroyed
 */

/**
 * Prints HTML with meta information for the current post-date/time.
 */
if ( !function_exists( 'molto_post_date' ) ) :
  function molto_post_date() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	
    if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
      $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
    }

	$time_string = sprintf( $time_string,
      esc_attr( get_the_date( 'c' ) ),
	  esc_html( get_the_date( 'm/d/Y' ) ),
	  esc_attr( get_the_modified_date( 'c' ) ),
	  esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
      /* translators: %s: post date. */
	  esc_html_x( '%s', 'post date', 'moltodestroyed' ), $time_string
	);
	
    echo $posted_on;
  }
endif;

/**
 * Prints HTML with meta information for the author.
 */
if ( !function_exists( 'molto_post_author' ) ) :
  function molto_post_author() {
    $author = sprintf(
      /* translators: %s: post author. */
      esc_html_x( 'by %s', 'post author', 'moltodestroyed' ),
      '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
    );

    echo '<span class="byline"> ' . $author . '</span>';
  }
endif;

if ( ! function_exists( 'moltodestroyed_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function moltodestroyed_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'moltodestroyed' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'moltodestroyed' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'moltodestroyed' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'moltodestroyed' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'moltodestroyed' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);
			echo '</span>';
		}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'moltodestroyed' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;

if ( ! function_exists( 'moltodestroyed_post_thumbnail' ) ) :
  /**
   * Displays an optional post thumbnail.
   *
   * Wraps the post thumbnail in an anchor element on index views, or a div
   * element when on single views.
   */
  function moltodestroyed_post_thumbnail() {
      if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
          return;
      }

      if ( is_singular() ) :
      ?>

      <div class="post-thumbnail">
          <?php the_post_thumbnail(); ?>
      </div><!-- .post-thumbnail -->

      <?php else : ?>

      <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
          <?php
              the_post_thumbnail( 'post-thumbnail', array(
                  'alt' => the_title_attribute( array(
                      'echo' => false,
                  ) ),
              ) );
          ?>
      </a>

      <?php endif; // End is_singular().
  }
endif;

/**
 * Returns the navigation for next/previous list of posts, when applicable.
 */
function molto_posts_navigation( $args = array() ) {
  $navigation = '';

  // Don't print empty markup if there's only one page.
  if ( $GLOBALS[ 'wp_query' ] -> max_num_pages > 1 ) {
    $args = wp_parse_args( $args, array(
      'prev_text'          => esc_html__( '&larr; View older posts', 'moltodestroyed' ),
      'next_text'          => esc_html__( 'View newer posts &rarr;', 'moltodestroyed' ),
      'screen_reader_text' => esc_html__( 'Posts navigation', 'moltodestroyed' ),
    ) );

    $next_link = get_previous_posts_link( $args[ 'next_text' ] );
    $prev_link = get_next_posts_link( $args[ 'prev_text' ] );

    if ( $prev_link ) {
      $navigation .= '<div class="nav-previous">' . $prev_link . '</div>';
    }

    if ( $next_link ) {
      $navigation .= '<div class="nav-next">' . $next_link . '</div>';
    }

    $navigation = _navigation_markup( $navigation, 'posts-navigation', $args[ 'screen_reader_text' ] );
  }

  echo $navigation;
}

/**
 * Retrieves the navigation for next/previous post, when applicable.
 */
function molto_blog_navigation( $args = array() ) {
  $args = wp_parse_args( $args, array(
	'prev_text'          => '<small>&larr; View previous post</small><br>%title',
	'next_text'          => '<small>View next post &rarr;</small><br>%title',
	'in_same_term'       => false,
	'excluded_terms'     => '',
	'taxonomy'           => 'category',
	'screen_reader_text' => esc_html__( 'Post navigation', 'moltodestroyed' ),
  ) );

  $navigation = '';

  $previous = get_previous_post_link(
	'<div class="nav-previous">%link</div>',
	$args[ 'prev_text' ],
	$args[ 'in_same_term' ],
	$args[ 'excluded_terms' ],
	$args[ 'taxonomy' ]
  );

  $next = get_next_post_link(
    '<div class="nav-next">%link</div>',
    $args[ 'next_text' ],
    $args[ 'in_same_term' ],
    $args[ 'excluded_terms' ],
    $args[ 'taxonomy' ]
  );

  // Only add markup if there's somewhere to navigate to.
  if ( $previous || $next ) {
    $navigation = _navigation_markup( $previous . $next, 'post-navigation', $args[ 'screen_reader_text' ] );
  }

  echo $navigation;
}