<?php
  /**
   * The blog page template
   */

  get_header();
?>

<div class="blog-page-container">
  <?php require_once get_template_directory() . '/partials/ads/top-of-main-area.php'; ?>

  <main class="blog-posts-list narrow-container" style="background: white; border: 2px solid black;">
    <header>
      <h1 class="page-title text-center"><?php single_post_title(); ?></h1>
    </header>
    
    <?php 
      
        while ( have_posts() ) {
          the_post();
        ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>           
            <?php 
              the_title(
                '<header><h2 class="blog-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2></header>'
              );
            
              if( has_post_thumbnail() ) { 
            ?>
              <div class="text-center">
                <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
                  <?php
                    the_post_thumbnail( 
                      'post-thumbnail', array( 'alt' => the_title_attribute( array( 'echo' => false, ) ), )
                    );
                  ?>
                </a>
              </div>
            <?php } ?>

            <div class="entry-content">
              <?php the_excerpt(); ?>
            </div>
          </article>
        <?php
        }

      
        molto_posts_navigation();
    ?>
  </main>

  <?php require_once get_template_directory() . '/partials/ads/bottom-of-main-area.php'; ?>
</div>

<?php
  get_footer();
