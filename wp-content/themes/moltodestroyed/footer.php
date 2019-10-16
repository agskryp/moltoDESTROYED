<?php
  /**
   * The template for displaying the footer
   * Contains the closing of the #content div and all content after.
   *
   * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
   * @package moltodestroyed
   */
?>

</div> <?php // #content // ?>

<footer id="colophon" class="site-footer">
  <div class="footer-menu">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-6 text-center">
          <img class="footer-banner"
               src="<?php echo get_template_directory_uri(); ?>/images/banner/molto-banner-template-inversed-xs.png"
               srcset="<?php echo get_template_directory_uri(); ?>/images/banner/molto-banner-template-inversed-sm.png 360w" alt="moltoDESTROYED Banner"
               height="125"
               width="500">

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

        <div class="col-xs-12 col-md-6">
          <nav class="row">
            <div class="col-xs-6 zero-cushion">
              <h2>Explore</h2>

              <?php
                wp_nav_menu( array(
                  'theme_location' => 'menu-2',
                  'menu_id'        => 'footer-menu',
                ) );
              ?>
            </div>

            <div class="col-xs-6 zero-cushion connect-container">
              <h2>Connect</h2>

              <ul>
                <li>
                  <a href="https://www.facebook.com/moltoDESTROYED/" target="_blank" rel="noopener" title="Facebook">
                    <span class="sr-only">Facebook</span>
                    
                    <svg width="26" height="26" viewBox="0 0 24 24">
                      <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
                    </svg>
                  </a>
                </li>

                <li>
                  <a href="https://twitter.com/moltodestroyed/" target="_blank" rel="noopener" title="Twitter">
                    <span class="sr-only">Twitter</span>
                    
                    <svg width="26" height="26" viewBox="0 0 24 24">
                      <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                    </svg>
                  </a>
                </li>

                <li>
                  <a href="https://www.instagram.com/moltodestroyed/" target="_blank" rel="noopener" title="Instagram">
                    <span class="sr-only">Instagram</span>
                    
                    <svg width="26" height="26" viewBox="0 0 24 24">
                      <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div> <?php // .container // ?>
  </div> <?php // .footer-menu // ?>

  <div id="pagefin" class="footer-info">
    <div class="container">
      <span class="copyright text-center">
        moltoDESTROYED &amp; moltodestroyed.com is Copyright &copy; 2014-2019
        
        <a href="mailto:moltodestroyed@gmail.com">molto D. stroyed</a>
      </span>
      
      <span class="privacy">
        <a href="<?php echo esc_url( MOLTO_PRIVACY_POLICY ); ?>">Privacy Policy</a>
      </span>

      <span class="designer text-right">
        Designed by
        
        <a href="<?php echo esc_url( 'http://agskryp.com' ); ?>"  target="_blank" rel="noopener">A.G. Skryp</a>
      </span>
    </div>
  </div> 
</footer>

</div> <?php // #page // ?>

<?php wp_footer(); ?>

</body>
</html>
