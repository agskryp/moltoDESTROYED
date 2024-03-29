<?php 
  $footer_banner = moltodestroyed_theme_site_option( 'footer_banner_image_id', false ); 
  
  echo '</div>'; // end of #content
?>

<footer class="site-footer">
  <div class="main-footer-background">
    <div class="main-footer-container">
      <div class="images-container">
        <?php
          if( !empty( $footer_banner ) ) echo wp_get_attachment_image( $footer_banner, 'medium_large' );

          echo '<div class="characters-container">';
            require get_template_directory() . '/partials/random-character-image.php'; 
            require get_template_directory() . '/partials/random-character-image.php'; 
            require get_template_directory() . '/partials/random-character-image.php';          
          echo '</div>';
        ?>
      </div>

      <nav class="menu-container">
        <div class="column-container">
          <h2>Explore</h2>

          <?php 
            wp_nav_menu( array(
              'theme_location' => 'footer',
              'depth'          => 1,
              'container'      => false,
            ) );
          ?>
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
        wp_nav_menu( array( 
          'theme_location' => 'privacy',
          'menu_class'     => 'privacy-container',
          'depth'          => 1,
          'container'      => false,
        ) );
        
        echo '<span class="copyright-container">Copyright &copy; 2014-' . date( 'Y' ) . ' moltoDESTROYED.  All rights reserved.</span>';

        echo '<span>Site by ';
          echo '<a href="' . esc_url( 'https://agskryp.com' ) .
               '" class="gtm-network-link" data-label="Visiting A.G Skryp homepage" target="_blank" rel="noopener">A.G. Skryp</a>';
        echo '</span>';
      ?>
    </div>
  </div> 
</footer>

<?php wp_footer(); ?>

</body>
</html>
