<?php // includes/theme_setup.php

function tedxspringfield_setup() {
    
    // Add additional theme support
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    
}

function tedxspringfield_widgets_init() {
    
    // Register blog sidebar
    register_sidebar( array(
        'name'          => __( 'Blog Sidebar', 'tedxspringfield' ),
        'id'            => 'sidebar-blog',
        'description'   => __( 'Sidebar for the blog pages.', 'tedxspringfield' ),
        'before_widget' => '<li>',
        'after_widget'  => '</li>',
        'before_title'  => '<h4 class="widget_title">',
        'after_title'   => '</h4>',
    ));
    
    // Register page sidebar
    register_sidebar( array(
        'name'          => __( 'Page Sidebar', 'tedxspringfield' ),
        'id'            => 'sidebar-page',
        'description'   => __( 'Sidebar for single pages.', 'tedxspringfield' ),
        'before_widget' => '<li>',
        'after_widget'  => '</li>',
        'before_title'  => '<h4 class="widget_title">',
        'after_title'   => '</h4>',
    ));
    
    // Register home sidebar
    register_sidebar( array(
        'name'          => __( 'Home Sidebar', 'tedxspringfield' ),
        'id'            => 'sidebar-home',
        'description'   => __( 'Sidebar for the home page only.', 'tedxspringfield' ),
        'before_widget' => '<li>',
        'after_widget'  => '</li>',
        'before_title'  => '<h4 class="widget_title">',
        'after_title'   => '</h4>',
    ));
    
}

function tedxspringfield_customize_register( $wp_customize ) {
    
    // @section tedx_event
    $wp_customize->add_section( 'tedx_event', array(
        'title'         => __( 'Event Details', 'tedxspringfield' ),
        'priority'      => 1000,
    ));
    
    // @option logo
    $wp_customize->add_setting( 'logo', array(
        'default'       => get_bloginfo('template_url') . '/dist/img/defaults/TEDx_logo_k_RGB__290.jpg',
      )
    );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo', array(
        'priority'      => 1,
        'label'         => __( 'Event logo', 'tedxspringfield' ),
        'section'       => 'tedx_event',
        'settings'      => 'logo',
    )));
    
    // @option event_name
    $wp_customize->add_setting( 'event_name', array(
        'default'       => 'TEDxEventName',
        'transport'     => 'refresh',
    ));
    $wp_customize->add_control( 'tedx_event_event_name', array(
        'priority'      => 2,
        'label'         => __( 'Event name', 'tedxspringfield' ),
        'section'       => 'tedx_event',
        'settings'      => 'event_name',
        'type'          => 'text',
    ));

    // @option event_date
    $wp_customize->add_setting( 'event_date', array(
        'sanitize_callback' => 'tedxspringfield_sanitize_date',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control( 'tedx_event_event_date', array(
        'priority'      => 3,
        'label'         => __( 'Event date', 'tedxspringfield' ),
        'section'       => 'tedx_event',
        'settings'      => 'event_date',
        'type'          => 'date',
        'input_attrs'   => array(
            'placeholder'   => __( 'mm/dd/yyyy', 'tedxspringfield' ),
        ),
    ));

    // @option event_location
    $wp_customize->add_setting( 'event_location', array(
        'default'       => '',
        'transport'     => 'refresh',
    ));
    $wp_customize->add_control( 'tedx_event_event_location', array(
        'priority'      => 4,
        'label'         => __( 'Event location', 'tedxspringfield' ),
        'section'       => 'tedx_event',
        'settings'      => 'event_location',
        'type'          => 'text',
    ));
    
    // @option promoted_speaker_year
    $wp_customize->add_setting( 'promoted_speaker_year', array(
        'default'       => date('Y'),
        'transport'     => 'refresh',
    ));
    $wp_customize->add_control( 'tedx_event_promoted_speaker_year', array(
        'priority'      => 5,
        'label'         => __( 'Promoted speaker year', 'tedxspringfield' ),
        'description'   => __( 'Speakers from this year appear on the homepage.', 'tedxspringfield' ),
        'section'       => 'tedx_event',
        'settings'      => 'promoted_speaker_year',
        'type'          => 'text',
    ));

    // @option promoted_talk_year
    $wp_customize->add_setting( 'promoted_talk_year', array(
        'default'       => date('Y'),
        'transport'     => 'refresh',
    ));
    $wp_customize->add_control( 'tedx_event_promoted_talk_year', array(
        'priority'      => 6,
        'label'         => __( 'Promoted talk year', 'tedxspringfield' ),
        'description'   => __( 'Featured talks from this year appear on the homepage.', 'tedxspringfield' ),
        'section'       => 'tedx_event',
        'settings'      => 'promoted_talk_year',
        'type'          => 'text',
    ));

    // @section tedx_cta
    $wp_customize->add_section( 'tedx_cta', array(
        'title'         => __( 'Call to Action', 'tedxspringfield' ),
        'priority'      => 1001,
    ));

    // @option tedx_cta_enable
    $wp_customize->add_setting( 'tedx_cta_enable', array(
        'default'       => '',
        'transport'     => 'refresh',
    ));
    $wp_customize->add_control( 'tedx_event_cta_enable', array(
        'priority'      => 0,
        'label'         => __( 'Enable', 'tedxspringfield' ),
        'description'   => __( 'Check off this box to turn the call to action on.', 'tedxspringfield' ),
        'section'       => 'tedx_cta',
        'settings'      => 'tedx_cta_enable',
        'type'          => 'checkbox',
    ));

    // @option tedx_cta_text
    $wp_customize->add_setting( 'tedx_cta_text', array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'tedx_event_cta_text', array(
        'priority'      => 1,
        'label'         => __( 'Message text', 'tedxspringfield' ),
        'description'   => __( 'You can use HTML to format the text.', 'tedxspringfield' ),
        'section'       => 'tedx_cta',
        'settings'      => 'tedx_cta_text',
        'type'          => 'textarea',
    ));

    // @option tedx_cta_button_text
    $wp_customize->add_setting( 'tedx_cta_button_text', array(
        'default'       => '',
        'transport'     => 'refresh',
    ));
    $wp_customize->add_control( 'tedx_event_cta_btton_text', array(
        'priority'      => 2,
        'label'         => __( 'Button text', 'tedxspringfield' ),
        'section'       => 'tedx_cta',
        'settings'      => 'tedx_cta_button_text',
        'type'          => 'text',
    ));

    // @option tedx_cta_button_url
    $wp_customize->add_setting( 'tedx_cta_button_url', array(
        'default'       => '',
        'transport'     => 'refresh',
    ));
    $wp_customize->add_control( 'tedx_event_cta_button_url', array(
        'priority'      => 3,
        'label'         => __( 'Button url', 'tedxspringfield' ),
        'section'       => 'tedx_cta',
        'settings'      => 'tedx_cta_button_url',
        'type'          => 'url',
    ));

    // @option tedx_cta_button_target
    $wp_customize->add_setting( 'tedx_cta_button_target', array(
        'default'       => '_self',
        'transport'     => 'refresh',
    ));
    $wp_customize->add_control( 'tedx_event_cta_button_target', array(
        'priority'      => 4,
        'label'         => __( 'Button target', 'tedxspringfield' ),
        'description'   => __( 'The button target specifies where to open the link.', 'tedxspringfield' ),
        'section'       => 'tedx_cta',
        'settings'      => 'tedx_cta_button_target',
        'type'          => 'radio',
        'choices'       => array(
            '_blank'        => __( 'New window or tab', 'tedxspringfield' ),
            '_self'         => __( 'Same window or tab', 'tedxspringfield' ),
        ),
    ));

    /* @section tedx_social
     */
    $wp_customize->add_section( 'tedx_social', array(
        'title'         => __( 'Social Media', 'tedxspringfield' ),
        'priority'      => 1002,
    ));

    // @option facebook_url
    $wp_customize->add_setting( 'facebook_url', array(
        'default'       => '',
        'transport'     => 'refresh',
    ));
    $wp_customize->add_control( 'tedx_social_facebook_url', array(
        'priority'      => 1,
        'label'         => __( 'Facebook URL', 'tedxspringfield' ),
        'section'       => 'tedx_social',
        'settings'      => 'facebook_url',
        'type'          => 'text',
    ));

    // @option instagram_account
    $wp_customize->add_setting( 'instagram_account', array(
        'default'       => '',
        'transport'     => 'refresh',
    ));
    $wp_customize->add_control( 'tedx_social_instagram_account', array(
        'priority'      => 2,
        'label'         => __( 'Instagram Account', 'tedxspringfield' ),
        'section'       => 'tedx_social',
        'settings'      => 'instagram_account',
        'type'          => 'text',
    ));

    // @option twitter_account
    $wp_customize->add_setting( 'twitter_account', array(
        'default'       => '',
        'transport'     => 'refresh',
    ));
    $wp_customize->add_control( 'tedx_social_twitter_account', array(
        'priority'      => 3,
        'label'         => __( 'Twitter Account', 'tedxspringfield' ),
        'section'       => 'tedx_social',
        'settings'      => 'twitter_account',
        'type'          => 'text',
    ));
    
}

// Add theme actions
add_action( 'after_setup_theme', 'tedxspringfield_setup' );
add_action( 'customize_register', 'tedxspringfield_customize_register' );
add_action( 'widgets_init', 'tedxspringfield_widgets_init' );

// Callback functions
function tedxspringfield_sanitize_date( $input ) {
    $date = new DateTime( $input );
    return $date->format('Y-m-d');
}
