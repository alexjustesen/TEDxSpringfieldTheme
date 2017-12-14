<?php
    $template_url = get_template_directory_uri();
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
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
  
    <?php if ( get_theme_mod( 'tedx_cta_enable' ) == '1' ) : ?>
        <?php get_template_part( 'partials/_call_to_action' ); ?>
    <?php endif; ?>

    <div class="black-bg">
        
        <div class="container">
            
            <header>

                <div class="row">

                    <div class="col-xs-12 col-md-3 col-lg-3 hidden-xs hidden-sm">
                        <?php (get_theme_mod('logo')) ? $logo = get_theme_mod('logo') : $logo = '//placehold.it/229x50.png' ?>
                        <a href="<?= home_url(); ?>" target="_self">
                            <img src="<?= $logo ?>" alt="Logo" class="img-responsive">
                        </a>
                    </div>

                    <div class="col-xs-6 col-md-6 col-lg-6">
                        
                        <div class="header-date-location">
                            <time class="date"><i class="fa fa-calendar-o fa-fw" aria-hidden="true"></i> <?php echo date( 'F j, Y', strtotime( get_theme_mod('event_date') ) ); ?></time>
                            <span class="location"><i class="fa fa-map-marker fa-fw" aria-hidden="true"></i><?php echo get_theme_mod('event_location', 'Event Location'); ?></span>
                        </div>
                        
                    </div>

                    <div class="col-xs-6 col-md-3 col-lg-3">
                        
                        <span class="pull-right social-links">
                            
                            <?php if ( !@empty( get_theme_mod( 'facebook_url') ) ) : ?>
                                <a href="<?= get_theme_mod( 'facebook_url' ); ?>" target="_blank" class="btn btn-link link-facebook" rel="noopener"><i class="fa fa-2x fa-facebook"></i></a>
                            <?php endif; ?>
                            
                            <?php if ( !@empty( get_theme_mod( 'instagram_account') ) ) : ?>
                                <a href="https://www.instagram.com/<?= get_theme_mod( 'instagram_account' ); ?>" target="_blank" class="btn btn-link link-instagram" rel="noopener"><i class="fa fa-2x fa-instagram"></i></a>
                            <?php endif; ?>
                            
                            <?php if ( !@empty( get_theme_mod( 'twitter_account') ) ) : ?>
                                <a href="https://www.twitter.com/<?= get_theme_mod( 'twitter_account' ); ?>" target="_blank" class="btn btn-link link-twitter" rel="noopener"><i class="fa fa-2x fa-twitter"></i></a>
                            <?php endif; ?>
                            
                        </span>
                        
                    </div>
                
                </div><!-- /.row -->
            
            </header>
            
        </div><!-- /.container -->
        
    </div><!-- /.black-bg -->
    
    <div class="navbar navbar-inverse " role="navigation">
       
        <div class="container">
           
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-container">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="hidden-md hidden-lg">
                    <a class="navbar-brand" href="<?php echo get_bloginfo( 'url' ); ?>"><?php echo get_bloginfo( 'name' ); ?></a>
                </div>
            </div><!-- /.navbar-header -->
            
            <div id="navbar-container" class="collapse navbar-collapse">
                
                <?php
                    wp_nav_menu( array(
                        'menu'              => 'primary',
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'menu_class'        => 'nav navbar-nav navbar-left',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                    );
                ?>
                
            </div>
            
        </div><!-- /.container -->
        
    </div><!-- /.navbar -->
