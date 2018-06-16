<?php
/**
 * Create new section Customizer */
 
function customizer_social( $wp_customize ) {
 
    // Create section Social
    $wp_customize->add_section (
        'section_theme_option',
        array(
            'title' => 'Theme options',
            'description' => 'Theme options setting',
            'priority' => 250
        )
    );

    $wp_customize->add_section (
        'section_contact_option',
        array(
            'title' => 'Contact options',
            'description' => 'Contact options setting',
            'priority' => 270
        )
    );

    /* Image Upload */
    $wp_customize->add_setting( 'img-upload' );
    
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'img-upload-logo',
            array(
                'label' => 'Logo',
                'section' => 'section_theme_option',
                'settings' => 'img-upload'
            )
        )
    );


    // Create setting
    $wp_customize->add_setting (
            'facebook',
            array(
                'default' => 'http://'
            )
    );
    
    $wp_customize->add_setting (
        'twitter',
        array(
            'default' => 'http://'
        )
    );

    // Create coltrol
    $wp_customize->add_control (
        'control_facebook',
        array(
            'label' => 'Facebook link',
            'section' => 'section_theme_option',
            'type' => 'text',
            'settings' => 'facebook'
        )
    );

    $wp_customize->add_control (
        'control_twitter',
        array(
            'label' => 'Twitter link',
            'section' => 'section_theme_option',
            'type' => 'text',
            'settings' => 'twitter'
        )
    );

    /**
     * Contact options
     */
    $wp_customize->add_setting (
        'email_contact',
        array(
            'default' => ''
        )
    );

    // Subscribe
    $wp_customize->add_setting (
        'email_subscribe',
        array(
            'default' => ''
        )
    );

    // Video link
    $wp_customize->add_setting (
        'youtube_video_link',
        array(
            'default' => 'http://'
        )
    );

    $wp_customize->add_control (
        'control_youtube_video_link',
        array(
            'label' => 'Youtube video link',
            'section' => 'section_contact_option',
            'type' => 'text',
            'settings' => 'youtube_video_link'
        )
    );

    $wp_customize->add_control (
        'control_email_contact',
        array(
            'label' => 'Email contact',
            'section' => 'section_contact_option',
            'type' => 'text',
            'settings' => 'email_contact'
        )
    );

    $wp_customize->add_control (
        'control_email_subscribe',
        array(
            'label' => 'Email subscribe',
            'section' => 'section_contact_option',
            'type' => 'text',
            'settings' => 'email_subscribe'
        )
    );
}
add_action( 'customize_register', 'customizer_social' );