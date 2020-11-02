<?php $footer_banner = moltodestroyed_theme_site_option( 'footer_banner_image_id', false ); ?>

</div>

<footer class="site-footer">
  <div class="footer-menu">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center" style="overflow: hidden;">
          <?php
            if( !empty( $footer_banner ) ) echo wp_get_attachment_image(
              $footer_banner, 'medium_large', null, array( 'class' => 'footer-banner' ) 
            );
          ?>

          <div class="footer-characters bottom-cushion">
            <div class="left flex-center">
              <?php require get_template_directory() . '/partials/random-character-image.php'; ?>
            </div>

            <div class="left flex-center">
              <?php require get_template_directory() . '/partials/random-character-image.php'; ?>
            </div>

            <div class="right flex-center">
              <?php require get_template_directory() . '/partials/random-character-image.php'; ?>
            </div>
          </div>
        </div>

        <div class="col-md-6">



          <nav class="footer-menu-container">
            <div class="column-container">
              <h2>Explore</h2>

              <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
            </div>

            <div class="column-container">
              <h2>Connect</h2>

              <?php require get_template_directory() . '/partials/header-social-container.php'; ?>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div> 

  <div class="copyright-container">
    <div class="content-container">
      <div class="copyright-column">
        <?php 
          echo '<span>Copyright &copy; 2014-' . date( 'Y' ) . ' moltoDESTROYED.  All rights reserved.</span>';
        ?>
      </div>
      
      <div class="privacy-column">
        <?php wp_nav_menu( array( 'theme_location' => 'privacy' ) ); ?>
      </div>

      <div class="designer-column">
        <?php 
          echo '<span>Site by ';
            echo '<a href="' . esc_url( 'https://agskryp.com' ) . '" target="_blank">A.G. Skryp</a>';
          echo '</span>';
        ?>
      </div>
    </div>
  </div> 
</footer>

<?php wp_footer(); ?>

</body>
</html>
