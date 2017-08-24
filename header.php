<?php
    $template_url = get_template_directory_uri();
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js" ng-app="TEDxTheme">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

  <!-- Favicons -->
  <link href="<?= $template_url; ?>/dist/img/favicons/favicon.ico" rel="shortcut icon">
  <link href="<?= $template_url; ?>/dist/img/favicons/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="<?= $template_url; ?>/dist/img/favicons/apple-touch-icon.png" rel="apple-touch-icon-precomposed">
  <link href="<?= $template_url; ?>/dist/img/favicons/apple-touch-icon-57x57-precomposed.png" rel="apple-touch-icon" sizes="57x57">
  <link href="<?= $template_url; ?>/dist/img/favicons/apple-touch-icon-72x72-precomposed.png" rel="apple-touch-icon" sizes="72x72">
  <link href="<?= $template_url; ?>/dist/img/favicons/apple-touch-icon-114x114-precomposed.png" rel="apple-touch-icon" sizes="114x114">

  <?php wp_head(); ?>
  
</head>

<body <?php body_class(); ?>>

  <div class="black-bg">
    <div class="container">
      <header>

        <div class="row">
         
          <div class="col-xs-12 col-md-3 col-lg-3">
              <?php (get_theme_mod('logo')) ? $logo = get_theme_mod('logo') : $logo = '//placehold.it/229x50.png' ?>
              <a href="<?= home_url(); ?>" target="_self">
                  <img src="<?= $logo ?>" alt="Logo" class="img-responsive">
              </a>
          </div>
          
          <div class="col-xs-12 col-md-6 col-lg-6">
              <div class="header-date-location">
                  <time class="date"><?= get_theme_mod('event_date', 'Event Date') ?></time>
                  <span class="location"><?= get_theme_mod('event_location', 'Event Location') ?></span>
              </div>
          </div>
          
          <div class="col-xs-12 col-md-3 col-lg-3">
              <span class="pull-right social-links">
                  <?php if ( !@empty( get_theme_mod( 'facebook_url') ) ) : ?>
                      <a href="<?= get_theme_mod( 'facebook_url' ); ?>" target="_blank" class="btn btn-link"><i class="fa fa-2x fa-facebook"></i></a>
                  <?php endif; ?>
                  <?php if ( !@empty( get_theme_mod( 'instagram_account') ) ) : ?>
                      <a href="https://www.instagram.com/<?= get_theme_mod( 'instagram_account' ); ?>" target="_blank" class="btn btn-link"><i class="fa fa-2x fa-instagram"></i></a>
                  <?php endif; ?>
                  <?php if ( !@empty( get_theme_mod( 'twitter_account') ) ) : ?>
                      <a href="https://www.twitter.com/<?= get_theme_mod( 'twitter_account' ); ?>" target="_blank" class="btn btn-link"><i class="fa fa-2x fa-twitter"></i></a>
                  <?php endif; ?>
              </span>
          </div>
        </div><!-- .row -->
      </header>
    </div>
  </div><!-- .black-bg -->
    
    <?php if ( is_front_page() ) : ?>
    <div class="red-bg">
        <div class="container">
            <div class="row homepage-header-actions">
                <div class="col-xs-12">
                    <a href="<?= get_theme_mod('button_callout_link', '/'); ?>" target="_blank" class="btn btn-link btn-lg pull-left"><i class="fa fa-file-text-o fa-2x"></i><br/><?= get_theme_mod( 'button_callout_text' ); ?></a>
                    <p class="text-white"><em><?= get_theme_mod('header_callout', 'Header Callout') ?></em></p>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand visible-xs-block"><?= bloginfo( 'name' ); ?></a>
            </div>

            <?php
                wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                );
            ?>
        </div>
    </nav>
