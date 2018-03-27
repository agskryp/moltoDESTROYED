<?php
  /**
   * The template for displaying the footer
   * Contains the closing of the #content div and all content after.
   *
   * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
   * @package moltodestroyed
   */
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" style="">
    <div class="container">
  <div class="row">
    <div class="col-xs-12">
      
      <img src="http://moltodestroyed.local/wp-content/themes/moltodestroyed/images/banner/molto-banner-template-xs.png" srcset="http://moltodestroyed.local/wp-content/themes/moltodestroyed/images/banner/molto-banner-template-sm.png 480w,
             http://moltodestroyed.local/wp-content/themes/moltodestroyed/images/banner/molto-banner-template-md.png 768w," alt="moltoDESTROYED Banner" style="max-height: 90px;">
      
      <?php
                  wp_nav_menu( array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'footer-menu',
                  ) );
                ?>
      
    </div>
      </div>
  </div>
  
  <div class="container">
  <div class="row">
    <div class="col-xs-12">
    
  
  <div class="site-info text-center">
    <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'moltodestroyed' ) ); ?>">
      <?php
        /* translators: %s: CMS name, i.e. WordPress. */
        printf( esc_html__( 'Proudly powered by %s', 'moltodestroyed' ), 'WordPress' );
      ?>
    </a>
    
    <span class="sep"> | </span>
    
    <?php
      /* translators: 1: Theme name, 2: Theme author. */
      printf( esc_html__( 'Theme: %1$s by %2$s.', 'moltodestroyed' ),
             'moltodestroyed', '<a href="http://agskryp.com">AGSkryp</a>'
            );
    ?>
      </div>
    </div>
    </div>
  </div><!-- .site-info -->
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
