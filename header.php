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

  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content">
      <?php esc_html_e( 'Skip to content', 'moltodestroyed' ); ?>
    </a>

    <header id="masthead" class="site-header">
      <div class="site-branding text-center">
        <div class="container" style="padding: 0;">
          <div class="col-xs-12" style="padding-bottom: 24px;"> <?php // required for social-container // ?>
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
        </div> <?php // .container-fluid // ?>
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
