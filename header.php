<?php
  global $TEDxMenus;
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
  <link href="<?= $template_url; ?>/assets/img/favicons/favicon.ico" rel="shortcut icon">
  <link href="<?= $template_url; ?>/assets/img/favicons/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="<?= $template_url; ?>/assets/img/favicons/apple-touch-icon.png" rel="apple-touch-icon-precomposed">
  <link href="<?= $template_url; ?>/assets/img/favicons/apple-touch-icon-57x57-precomposed.png" rel="apple-touch-icon" sizes="57x57">
  <link href="<?= $template_url; ?>/assets/img/favicons/apple-touch-icon-72x72-precomposed.png" rel="apple-touch-icon" sizes="72x72">
  <link href="<?= $template_url; ?>/assets/img/favicons/apple-touch-icon-114x114-precomposed.png" rel="apple-touch-icon" sizes="114x114">

  <?php wp_head(); ?>
  
</head>

<body <?php body_class(); ?>>

<div id="fb-root"></div>
<script>(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=230769680405348&version=v2.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

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
          
          <div class="col-xs-12 hidden">
            <div class="call-to-action">
              <?php $button_callout_text = get_theme_mod('button_callout_text', 'CTA');?>
              
              <?php if(!empty($button_callout_text)): ?>
                 <span>
                     <span class="text-muted"><?= get_theme_mod('header_callout', 'Header Callout') ?></span>
                     <a href="<?= get_theme_mod('button_callout_link', '/'); ?>" class="btn btn-sm btn-danger" target="_blank"><?= $button_callout_text ?></a>
                 </span>                  
              <?php endif;?>
            </div>
          </div>
        </div><!-- .row -->

        <nav class="primary-nav" ng-controller="NavCtrl" ng-class="{'mobile-visible': isVisible}">
          <div class="toggle visible-xs " ng-click="toggleMenu()">Menu</div>
          <?= $TEDxMenus->primary_nav(); ?>
        </nav>

      </header>
    </div>
  </div><!-- .black-bg -->

  <?php if($TEDxMenus->show_secondary_nav()): ?>
    <div class="primary-nav-secondary-container">
      <div class="container ">
        <nav class="primary-nav-secondary">
          <?= $TEDxMenus->secondary_nav(); ?>
        </nav>
      </div>
    </div>
  <?php endif; ?>
  
    <?php if ( is_front_page() ) : ?>

    <div class="red-bg">
        <div class="container">
            <div class="row homepage-header-actions">
                <div class="col-xs-12 col-md-6 col-lg-6 text-center">
                    <a href="<?= get_theme_mod('button_callout_link', '/'); ?>" target="_blank" class="btn btn-link btn-lg"><i class="fa fa-file-text-o fa-2x"></i><br/><?= $button_callout_text ?></a>
                    <p class="text-white"><em><?= get_theme_mod('header_callout', 'Header Callout') ?></em></p>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-6 text-center">
                    <a href="" target="_blank" class="btn btn-link btn-lg"><i class="fa fa-mobile fa-2x"></i><br/>Download the Event App</a>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    