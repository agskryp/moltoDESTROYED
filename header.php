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
    
	<?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?> >
    <div id="page" class="site">
      <a class="skip-link screen-reader-text" href="#content">
        <?php esc_html_e( 'Skip to content', 'moltodestroyed' ); ?>
      </a>

      <header id="masthead" class="site-header">
        <div class="site-branding text-center" style="height: 250px; background: pink;">
          <div class="container-fluid">
            <div class="row">
              <div class="col-xs-12">
                <?php
                  the_custom_logo();

                  if ( is_front_page() && is_home() ) :
                ?>
                  <h1 class="site-title">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                      <?php bloginfo( 'name' ); ?>
                    </a>
                  </h1>

                <?php else : ?>
                  <p class="site-title">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                      <?php bloginfo( 'name' ); ?>
                    </a>
                  </p>

                <?php endif; ?>
              </div>
            </div>
          </div>
        </div><!-- .site-branding -->

        <nav id="site-navigation" class="main-navigation" style="background: lightgreen;">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">          
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                  <?php esc_html_e( 'Primary Menu', 'moltodestroyed' ); ?>
                </button>

                <?php
                  wp_nav_menu( array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                  ) );
                ?>
              </div>
            </div>
          </div>
        </nav><!-- #site-navigation -->
      </header><!-- #masthead -->

      <div id="content" class="site-content">
