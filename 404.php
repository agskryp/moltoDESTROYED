<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package moltodestroyed
 */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main container">
    <div class="row">
      <div class="col-xs-12 col-sm-8">
        <section class="error-404 not-found">
          <header class="page-header">
            <h1 class="page-title">
              <?php esc_html_e( '4OH4!!', 'moltodestroyed' ); ?>
            </h1>
          </header>
          <!-- .page-header -->

          <div class="page-content">
            <p>
              <?php esc_html_e( 'This page does not exist :(', 'moltodestroyed' ); ?>
            </p>
          </div>
          <!-- .page-content -->
        </section>
        <!-- .error-404 -->
      </div>
    </div>
  </main>
  <!-- #main -->
</div>
<!-- #primary -->

<?php
get_footer();
