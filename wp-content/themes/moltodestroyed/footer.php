<?php $footer_banner = moltodestroyed_theme_site_option( 'footer_banner_image_id', false ); ?>

</div>

<footer class="site-footer">
  <div class="main-footer-background">
    <div class="main-footer-container">
      <div class="images-container">
        <?php
          if( !empty( $footer_banner ) ) echo wp_get_attachment_image( $footer_banner, 'medium_large' );
        ?>

        <div class="characters-container">
          <?php 
            require get_template_directory() . '/partials/random-character-image.php'; 
            require get_template_directory() . '/partials/random-character-image.php'; 
            require get_template_directory() . '/partials/random-character-image.php';
          ?>
        </div>
      </div>

      <nav class="menu-container">
        <div class="column-container">
          <h2>Explore</h2>

          <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
        </div>

        <div class="column-container">
          <h2>Connect</h2>

          <?php require get_template_directory() . '/partials/social-links.php'; ?>
        </div>
      </nav>
    </div>
  </div> 
  
  <div class="ip-background">
    <div class="ip-container">
      <?php 
        wp_nav_menu( array( 'theme_location' => 'privacy' ) );
        
        echo '<span>Copyright &copy; 2014-' . date( 'Y' ) . ' moltoDESTROYED.  All rights reserved.</span>';

        echo '<span>Site by ';
          echo '<a href="' . esc_url( 'https://agskryp.com' ) . '" target="_blank">A.G. Skryp</a>';
        echo '</span>';
      ?>
    </div>
  </div> 
</footer>

<?php wp_footer(); ?>

</body>
</html>
