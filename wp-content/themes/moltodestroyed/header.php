<?php $banner_image = moltodestroyed_theme_site_option( 'header_banner_image_id', false ); ?>

<!doctype html>

<html <?php language_attributes(); ?>>
  <?php require get_template_directory() . '/partials/head.php'; ?>

  <body <?php body_class(); ?>>
    <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NCG5RNG"
              height="0" width="0" style="display:none;visibility:hidden">
      </iframe>
    </noscript> 

    <a class="molto-sr-text" href="#content">Skip to content</a>

    <header class="header-container">
      <div class="header-background text-center">
        <div class="content-container">
          <?php 
            require get_template_directory() . '/partials/header-characters.php'; 
            
            echo '<a class="site-banner" href="' . esc_url( home_url( '/' ) ) . '" rel="home">';
              echo '<p class="molto-sr-text">' . get_bloginfo( 'name' ) . '</p>';

              if( !empty( $banner_image ) ) echo wp_get_attachment_image( $banner_image, 'medium_large' );
            echo '</a>';
          ?>
          
          <div class="visible-xs">
            <?php require get_template_directory() . '/partials/social-links.php'; ?>
          </div>
        </div>
      </div>

      <nav class="main-navigation">
        <button class="menu-toggle" type="button" data-toggle="collapse" data-target="#mainMenu"
                aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle Navigation">
          <span class="button-text">Menu</span>

          <div class="main-menu-icon">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </button>

        <div class="collapse main-nav-menu" id="mainMenu">
          <?php 
            wp_nav_menu( array(
              'theme_location' => 'main-menu',
              // 'menu_class'    => 'menu collapse unique-menu'
              'depth'          => 1,
              'container'      => false,
            ) );
          ?>
          
          <div class="hidden-xs">
            <?php require get_template_directory() . '/partials/social-links.php'; ?>
          </div>
        </div>
      </nav> 
    </header>

    <div id="content">
