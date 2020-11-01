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
          <nav class="row">
            <div class="col-xs-6 zero-cushion">
              <h2>Explore</h2>

              <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
            </div>

            <div class="col-xs-6 zero-cushion connect-container">
              <h2>Connect</h2>

              <?php require get_template_directory() . '/partials/header-social-container.php'; ?>
            </div>
          </nav>
        </div>
      </div>
    </div> <?php // .container // ?>
  </div> <?php // .footer-menu // ?>

  <div class="footer-info">
    <div class="container">
      <span class="copyright text-center">moltoDESTROYED &amp; moltodestroyed.com is Copyright &copy; 2014-2019 <a href="mailto:molto@moltodestroyed.com">molto D. stroyed</a></span>
      
      <span class="privacy"><a href="<?php echo esc_url( MOLTO_PRIVACY_POLICY ); ?>">Privacy Policy</a></span>

      <span class="designer text-right">Designed by <a href="<?php echo esc_url( 'http://agskryp.com' ); ?>"  target="_blank" rel="noopener">A.G. Skryp</a></span>
    </div>
  </div> 
</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
