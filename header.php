<?php
  /**
   * The header for our theme
   * This is the template that displays all of the <head> section and everything up until <div id="content">
   *
   * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
   * @package moltodestroyed
   */
?>

<!doctype html>
<html <?php language_attributes(); ?> >

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" />
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-64750314-1"></script>
  <?php // <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
  <noscript> <?php // Google Tag Manager (noscript) // ?>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NCG5RNG"
            height="0" width="0" style="display:none;visibility:hidden">
    </iframe>
  </noscript> 

  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content">
      <?php esc_html_e( 'Skip to content', 'moltodestroyed' ); ?>
    </a>

    <header id="masthead" class="site-header">
      <div class="site-branding text-center">
        <div class="container">
          <div class="row">
            <div class="col-xs-12"> <?php // Required for .social-container // ?>
              <?php require get_template_directory() . '/partials/header-characters.php'; ?>

              <a class="site-banner" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <?php if ( is_front_page() ) : ?>
                  <h1 class="site-title sr-only">
                    <?php bloginfo( 'name' ); ?>
                  </h1>

                <?php else : ?>
                  <p class="site-title sr-only">
                    <?php bloginfo( 'name' ); ?>
                  </p>
                <?php endif; ?>

                <img src="<?php echo get_template_directory_uri(); ?>/images/banner/molto-banner-template-xs.png"
                     srcset="<?php echo get_template_directory_uri(); ?>/images/banner/molto-banner-template-sm.png 480w,
                             <?php echo get_template_directory_uri(); ?>/images/banner/molto-banner-template-md.png 768w,"
                     alt="moltoDESTROYED Banner">
              </a>

              <?php require get_template_directory() . '/partials/header-social-container.php'; ?>
            </div>
          </div>
        </div>
      </div>

      <nav id="site-navigation" class="main-navigation">
        <button class="navbar-toggler menu-toggle" type="button" data-toggle="collapse" data-target="#mainNavMenu" aria-controls="mainNavMenu" aria-expanded="false" aria-label="Toggle navigation">
          <b>
            MENU
          </b>

          <span id="main-menu-icon" class="main-menu-icon">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavMenu">
          <?php
            wp_nav_menu( array(
              'theme_location' => 'menu-1',
              'menu_id'        => 'primary-menu',
            ) );
          ?>
        </div>
      </nav> <?php // #site-navigation // ?>
    </header><?php // #masthead // ?>

    <div id="content" class="site-content">
