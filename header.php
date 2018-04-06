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
        <div class="container-fluid">
          <div class="col-xs-12"> <?php // Required for social-container // ?>
            <?php if ( is_front_page() ) : ?>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <h1 class="site-title sr-only">
                  <?php bloginfo( 'name' ); ?>
                </h1>

                <?php 
                  // the_header_image_tag(); 

                  require get_template_directory() . '/partials/site-banner.php';
                ?>
              </a>
            <?php
              require get_template_directory() . '/partials/social-container.php';

              else :
            ?>                
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <p class="site-title sr-only">
                  <?php bloginfo( 'name' ); ?>
                </p>

                <?php
                  // the_header_image_tag(); 

                  require get_template_directory() . '/partials/site-banner.php';
                ?>
              </a>
            <?php
              require get_template_directory() . '/partials/social-container.php';

              endif;
            ?>            
          </div> <?php // .col-xs-12 // ?>
        </div> <?php // .container-fluid // ?>
      </div> <?php // .site-branding // ?>

      <nav id="site-navigation" class="main-navigation">
        <div class="container">        
          <button class="menu-toggle main-menu-button" aria-controls="primary-menu" aria-expanded="false">
            <?php esc_html_e( 'Main Menu', 'moltodestroyed' ); ?>
            
            <i class="fa fa-bars" aria-hidden="true"></i> 
          </button>

          <?php
            wp_nav_menu( array(
              'theme_location' => 'menu-1',
              'menu_id'        => 'primary-menu',
            ) );
          ?>
        </div> <?php // .container // ?>
      </nav> <?php // #site-navigation // ?>
    </header> <?php // #masthead // ?>

    <div id="content" class="site-content">
