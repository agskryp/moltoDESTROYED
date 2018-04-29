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
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-64750314-1"></script>
  
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-64750314-1');
  </script>
  
  <!-- Google Tag Manager -->
  <script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NCG5RNG');
  </script>
  <!-- End Google Tag Manager -->
  
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
  <!-- Google Tag Manager (noscript) -->
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NCG5RNG"
            height="0" width="0" style="display:none;visibility:hidden">
    </iframe>
  </noscript>
  <!-- End Google Tag Manager (noscript) -->
  
  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content">
      <?php esc_html_e( 'Skip to content', 'moltodestroyed' ); ?>
    </a>

    <header id="masthead" class="site-header">
      <div class="site-branding text-center">
        <div class="container">
          <div class="row">
            <div class="col-xs-12"> <?php // required for social-container // ?>
              <?php 
                if ( is_front_page() ) :
                  require get_template_directory() . '/partials/header-characters.php';
              ?>

                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                  <h1 class="site-title sr-only">
                    <?php bloginfo( 'name' ); ?>
                  </h1>

                  <?php require get_template_directory() . '/partials/site-banner.php'; ?>
                </a>
              <?php
                  require get_template_directory() . '/partials/header-social-container.php';

                else :
                  require get_template_directory() . '/partials/header-characters.php';
              ?>                
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                  <p class="site-title sr-only">
                    <?php bloginfo( 'name' ); ?>
                  </p>

                  <?php require get_template_directory() . '/partials/site-banner.php'; ?>
                </a>
              <?php
                  require get_template_directory() . '/partials/header-social-container.php';

                endif;
              ?>            
            </div> <?php // .col-xs-12 // ?>
          </div>
        </div> <?php // .container // ?>
      </div> <?php // .site-branding // ?>

      <nav id="site-navigation" class="main-navigation">
        <button
                class="navbar-toggler menu-toggle"
                type="button"
                data-toggle="collapse"
                data-target="#mainNavMenu"
                aria-controls="mainNavMenu"
                aria-expanded="false"
                aria-label="Toggle navigation">
          <b>MENU</b>
          
          <div id="main-menu-icon" class="main-menu-icon">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
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
    </header> <?php // #masthead // ?>

    <div id="content" class="site-content">
