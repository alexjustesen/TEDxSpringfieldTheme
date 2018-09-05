<!doctype html>
<?php $template_directory_uri = esc_url( get_template_directory_uri() ); ?>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicons -->
        <link href="<?php echo $template_directory_uri; ?>/dist/img/favicons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo $template_directory_uri; ?>/dist/img/favicons/apple-touch-icon.png" rel="apple-touch-icon">
        <link href="<?php echo $template_directory_uri; ?>/dist/img/favicons/apple-touch-icon.png" rel="apple-touch-icon-precomposed">
        <link href="<?php echo $template_directory_uri; ?>/dist/img/favicons/apple-touch-icon-57x57-precomposed.png" rel="apple-touch-icon" sizes="57x57">
        <link href="<?php echo $template_directory_uri; ?>/dist/img/favicons/apple-touch-icon-72x72-precomposed.png" rel="apple-touch-icon" sizes="72x72">
        <link href="<?php echo $template_directory_uri; ?>/dist/img/favicons/apple-touch-icon-114x114-precomposed.png" rel="apple-touch-icon" sizes="114x114">
        
        <title><?php echo wp_title('&raquo;', TRUE, 'right'); ?><?php bloginfo('name'); ?></title>
        
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

        <?php if ( get_theme_mod( 'tedx_cta_enable' ) == '1' ) : ?>
            <?php get_template_part( 'partials/_call_to_action' ); ?>
        <?php endif; ?>

        <div class="black-bg">

            <header class="container">

                <div class="row">

                    <div class="col-xs-12 col-md-3 hidden-xs hidden-sm">
                        <?php ( get_theme_mod( 'logo' ) ) ? $logo = get_theme_mod( 'logo' ) : $logo = '//placehold.it/229x50.png' ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" target="_self">
                            <img src="<?php echo $logo ?>" alt="<?php bloginfo('name'); ?>" class="img-responsive">
                        </a>
                    </div>

                    <div class="col-xs-12 col-md-9 text-right">

                        <div class="header-date-location">
                            <time class="date"><i class="fa fa-calendar-o fa-fw hidden" aria-hidden="true"></i> <?php echo date( 'F j, Y', strtotime( get_theme_mod('event_date') ) ); ?></time>
                            <span class="location"><i class="fa fa-map-marker fa-fw hidden" aria-hidden="true"></i><?php echo get_theme_mod('event_location', 'Event Location'); ?></span>
                        </div>

                    </div>

                </div><!-- /.row -->

            </header><!-- /.page-header -->

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

                    <ul class="nav navbar-nav navbar-right">
                        <?php if ( !empty( get_theme_mod( 'facebook_url') ) ) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod( 'facebook_url' ); ?>" target="_blank" rel="noopener">
                                    <i class="fa fa-facebook fa-fw"></i> Facebook
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if ( !empty( get_theme_mod( 'instagram_account') ) ) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod( 'instagram_account' ); ?>" target="_blank" rel="noopener">
                                    <i class="fa fa-instagram fa-fw"></i> Instagram
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if ( !empty( get_theme_mod( 'twitter_account') ) ) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod( 'twitter_account' ); ?>" target="_blank" rel="noopener">
                                    <i class="fa fa-twitter fa-fw"></i> Twitter
                                </a>
                            </li>
                        <?php endif; ?>

                    </ul>

                </div>

            </div><!-- /.container -->

        </div><!-- /.navbar -->
