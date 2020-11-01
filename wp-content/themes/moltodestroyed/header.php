<?php
  $banner_image = moltodestroyed_theme_site_option( 'header_banner_image_id', false );
?>

<!doctype html>

<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" />
    <?php
      require get_template_directory() . '/partials/head/config.php'; 
      
      wp_head();
    ?>  
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-64750314-1"></script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"
            onerror="blockerMessage();"></script>
    <?php require get_template_directory() . '/partials/head/google-scripts.php'; ?>
  </head>

  <body <?php body_class(); ?>>
    <?php require get_template_directory() . '/partials/head/tag-manager-noscript.php'; ?>

    <div>
      <a class="screen-reader-text" href="#content">Skip to content</a>

      <header class="header-container">
        <div class="header-background text-center">
          <div class="content-container">
            <?php 
              require get_template_directory() . '/partials/header-characters.php'; 
              
              echo '<a class="site-banner" href="' . esc_url( home_url( '/' ) ) . '" rel="home">';
                echo '<p class="screen-reader-text">' . get_bloginfo( 'name' ) . '</p>';

                if( !empty( $banner_image ) ) echo wp_get_attachment_image( $banner_image, 'medium_large' );
              echo '</a>';
            ?>
            
            <div class="visible-xs">
              <?php require get_template_directory() . '/partials/header-social-container.php'; ?>
            </div>
          </div>
        </div>

        <nav class="main-navigation">
          <button class="menu-toggle" type="button" data-toggle="collapse" data-target="#mainMenu"
                  aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle Navigation">
            <p>Menu</p>

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
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
              ) );
            ?>
            
            <div class="hidden-xs">
              <?php require get_template_directory() . '/partials/header-social-container.php'; ?>
            </div>
          </div>
        </nav> 
      </header>

      <div id="content" class="site-content">
