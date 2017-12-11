<?php

//-- Sidebar Settings -------------------------------------------------------
$sidebar_settings = [
  'class'        => 'sidebar',
  'before_title' => '<h4 class="widgettitle">',
  'after_title'  => "</h4>\n"
];
register_sidebar(array_merge($sidebar_settings, ['name' => 'Blog Sidebar', 'id' => 'blog-sidebar']));
register_sidebar(array_merge($sidebar_settings, ['name' => 'Page Sidebar', 'id' => 'page-sidebar']));
register_sidebar(array_merge($sidebar_settings, ['name' => 'Home Sidebar', 'id' => 'home-sidebar']));

add_image_size('post-sticky', 688, 350, true);
add_image_size('post-unsticky', 440, 240, true);

function tedx_customize_register ($wp_customize) {

  // Section
  $wp_customize->add_section(
    'tedx_event',
    array(
      'title'    => __('TEDx Event', 'tedx'),
      'priority' => 1000,
    ));

  $wp_customize->add_setting(
    'promoted_talk_year',
    array(
      'default'   => date('Y'),
      'transport' => 'refresh',
    ));
  $wp_customize->add_control(
    'tedx_event_promoted_talk_year',
    array(
      'priority' => 2,
      'label'    => __('Promoted Talk Year', 'tedx'),
      'section'  => 'tedx_event',
      'settings' => 'promoted_talk_year',
      'type'     => 'text'
    ));

  $wp_customize->add_setting(
    'promoted_speaker_year',
    array(
      'default'   => date('Y'),
      'transport' => 'refresh',
    ));
  $wp_customize->add_control(
    'tedx_event_promoted_speaker_year',
    array(
      'priority' => 2,
      'label'    => __('Promoted Speaker Year', 'tedx'),
      'section'  => 'tedx_event',
      'settings' => 'promoted_speaker_year',
      'type'     => 'text'
    ));

  $wp_customize->add_setting(
    'logo'
  );
  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize, 'logo', array(
      'priority' => 1,
      'label'    => __('Logo', 'tedx'),
      'section'  => 'tedx_event',
      'settings' => 'logo',
    )));

  $wp_customize->add_setting(
    'event_name',
    array(
      'default'   => 'TEDxCity',
      'transport' => 'refresh',
    ));
  $wp_customize->add_control(
    'tedx_event_event_name',
    array(
      'priority' => 3,
      'label'    => __('Event Name', 'tedx'),
      'section'  => 'tedx_event',
      'settings' => 'event_name',
      'type'     => 'text'
    ));

  $wp_customize->add_setting(
    'event_date',
    array(
      'sanitize_callback' => 'tedx_sanitize_date',
      'transport' => 'refresh',
    ));
  $wp_customize->add_control(
    'tedx_event_event_date',
    array(
      'priority' => 4,
      'label'    => __('Event Date', 'tedx'),
      'section'  => 'tedx_event',
      'settings' => 'event_date',
      'type'     => 'date',
      'input_attrs' => array(
        'placeholder' => __( 'mm/dd/yyyy' ),
      ),
    ));

  $wp_customize->add_setting(
    'event_location',
    array(
      'default'   => 'Toronto, ON',
      'transport' => 'refresh',
    ));
  $wp_customize->add_control(
    'tedx_event_event_location',
    array(
      'priority' => 5,
      'label'    => __('Event Location', 'tedx'),
      'section'  => 'tedx_event',
      'settings' => 'event_location',
      'type'     => 'text'
    ));

    // Section: tedx_cta
    $wp_customize->add_section(
        'tedx_cta',
        array(
            'title'    => __('TEDx Call to Action', 'tedx'),
            'priority' => 1002,
        ));
    
    // Option: tedx_cta_enable
    $wp_customize->add_setting(
        'tedx_cta_enable',
        array(
            'default'   => '',
            'transport' => 'refresh',
    ));
    $wp_customize->add_control(
        'tedx_event_cta_enable',
        array(
            'priority' => 0,
            'label'    => __('Enable call to action', 'tedx'),
            'description' => __( 'Check off this box to turn the CTA function on.', 'tedx' ),
            'section'  => 'tedx_cta',
            'settings' => 'tedx_cta_enable',
            'type'     => 'checkbox',
    ));
    
    // Option: tedx_cta_text
    $wp_customize->add_setting(
        'tedx_cta_text',
        array(
            'default'   => '',
            'transport' => 'refresh',
    ));
    $wp_customize->add_control(
        'tedx_event_cta_text',
        array(
            'priority' => 1,
            'label'    => __('Message text', 'tedx'),
            'description' => __( 'Use HTML to format the text.', 'tedx' ),
            'section'  => 'tedx_cta',
            'settings' => 'tedx_cta_text',
            'type'     => 'textarea',
    ));

    // Option: tedx_cta_button_text
    $wp_customize->add_setting(
        'tedx_cta_button_text',
        array(
            'default'   => 'About TEDx',
            'transport' => 'refresh',
    ));
    $wp_customize->add_control(
        'tedx_event_cta_btton_text',
        array(
            'priority' => 2,
            'label'    => __('Button text', 'tedx'),
            'section'  => 'tedx_cta',
            'settings' => 'tedx_cta_button_text',
            'type'     => 'text',
    ));

    // Option: tedx_cta_button_url
    $wp_customize->add_setting(
        'tedx_cta_button_url',
        array(
            'default'   => '/',
            'transport' => 'refresh',
    ));
    $wp_customize->add_control(
        'tedx_event_cta_button_url',
        array(
            'priority' => 3,
            'label'    => __('Button url', 'tedx'),
            'section'  => 'tedx_cta',
            'settings' => 'tedx_cta_button_url',
            'type'     => 'url',
    ));
    
    // Option: tedx_cta_button_target
    $wp_customize->add_setting( 
        'tedx_cta_button_target', 
        array(
            'default' => '_self',
            'transport' => 'refresh',
    ));

    $wp_customize->add_control(
        'tedx_event_cta_button_target',
        array(
            'priority' => 4,
            'label' => __( 'Button target' ),
            'description' => __( 'The button target specifies where to open the link.' ),
            'section' => 'tedx_cta',
            'settings' => 'tedx_cta_button_target',
            'type' => 'radio',
            'choices' => array(
                '_blank' => __( 'Blank' ),
                '_self' => __( 'Self' ),
                '_parent' => __( 'Parent' ),
                '_top' => __( 'Top' ),
            ),
    ));

  // Section
  $wp_customize->add_section(
    'tedx_social',
    array(
      'title'    => __('TEDx Social', 'tedx'),
      'priority' => 1001
    ));
    
    //Facebook URL
  $wp_customize->add_setting(
    'facebook_url',
      array(
        'default'   => '',
          'transport' => 'refresh'
      )
  );
    
    $wp_customize->add_control(
        'tedx_social_facebook_url', 
        array(
            'priority'      => 1,
            'label'         => __('Facebook URL', 'tedx'),
            'section'       => 'tedx_social',
            'settings'      => 'facebook_url',
            'type'          => 'text'
        )
    );
    
    //Instagram Account
  $wp_customize->add_setting(
    'instagram_account',
    array(
      'default'   => '',
      'transport' => 'refresh',
    ));
  $wp_customize->add_control(
    'tedx_social_instagram_account',
    array(
      'priority' => 2,
      'label'    => __('Instagram Account', 'tedx'),
      'section'  => 'tedx_social',
      'settings' => 'instagram_account',
      'type'     => 'text'
    ));

    //Twitter Account
  $wp_customize->add_setting(
    'twitter_account',
    array(
      'default'   => '',
      'transport' => 'refresh',
    ));
  $wp_customize->add_control(
    'tedx_social_twitter_account',
    array(
      'priority' => 3,
      'label'    => __('Twitter Account', 'tedx'),
      'section'  => 'tedx_social',
      'settings' => 'twitter_account',
      'type'     => 'text'
    ));
}

add_action('customize_register', 'tedx_customize_register');

function tedx_sanitize_date( $input ) {
    $date = new DateTime( $input );
    return $date->format('m-d-Y');
}
