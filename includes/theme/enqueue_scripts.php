<?php // includes/theme/enqueue_scripts.php

if (!function_exists('TEDx_scripts')) :
    function TEDx_scripts() {

        // deregister the jquery version bundled with wordpress
        wp_deregister_script( 'jquery' );

        // enqueue javascript files    
        wp_enqueue_script( 'vendor', get_template_directory_uri() . '/dist/js/vendor.min.js', array(), '1.3.0-beta2', true );            
        wp_enqueue_script( 'application', get_template_directory_uri() . '/dist/js/application.min.js', array(), '1.3.0-beta2', true );

        //enqueue css files
        wp_enqueue_style( 'vendor', get_template_directory_uri() . '/dist/css/vendor.min.css', array(), '1.3.0-beta2', 'all' );
        wp_enqueue_style( 'application', get_template_directory_uri() . '/dist/css/application.min.css', array(), '1.3.0-beta2', 'all' );
    }

    add_action( 'wp_enqueue_scripts', 'TEDx_scripts' );
endif;
    