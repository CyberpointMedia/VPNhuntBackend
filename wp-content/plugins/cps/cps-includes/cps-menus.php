<?php 

function cps_settings_page(){

    add_menu_page(
        
        //Name of the header
        __('Home Page','cpwsplugin'),
        
        //Menu Title 
        __('Home', 'cps'),
        
        //access rights 
        'manage_options',
        
        //slug 
        'cps', 
        
        //function to be called for settings
        'cps_settings', 
        
        // icon for the menu item
        'dashicons-cloud-saved', 
        100
    
    );

    // add_submenu_page(
    //     'cps',
    //     __('External Links', 'cps'),
    //     __('External Links', 'cps'),
    //     'manage_options',
    //     'cps-external-links',
    //     'cps_external_links'

    // ); 

    // add_submenu_page(
    //     'cps',
    //     __('Header-Footer Scripts', 'cps'),
    //     __('Header-Footer Scripts', 'cps'),
    //     'manage_options',
    //     'cps-header-footer-scripts',
    //     'cps_header_footer_scripts'

    // );

    // add_submenu_page(
    //     'cps',
    //     __('Pop-up', 'cps'),
    //     __('Pop-up', 'cps'),
    //     'manage_options',
    //     'cps-pop-up',
    //     'cps_pop_up'

    // );

    // add_submenu_page(
    //     'cps',
    //     __('Sticky Bar', 'cps'),
    //     __('Sticky Bar', 'cps'),
    //     'manage_options',
    //     'cps-sticky-bar',
    //     'cps_sticky_bar'

    // );

    // add_submenu_page(
    //     'cps',
    //     __('SMTP Mail', 'cps'),
    //     __('SMTP Mail', 'cps'),
    //     'manage_options',
    //     'cps-smtp-mailer',
    //     'cps_smtp_mailer'

    // );

    

    // add_submenu_page(
    //     'cps',
    //     __('Translate', 'cps'),
    //     __('Translate', 'cps'),
    //     'manage_options',
    //     'cps-translate',
    //     'cps_translate'

    // );

    add_submenu_page(
        'cps',
        __('Hero Section ', 'cps'),
        __('Hero Section', 'cps'),
        'manage_options',
        'cps-hero-section',
        'cps_hero_section_menu'

    );

    add_submenu_page(
        'cps',
        __('Canvas Section ', 'cps'),
        __('Canvas section', 'cps'),
        'manage_options',
        'cps-canvas-section',
        'cps_canvas_section_menu'

    );

    add_submenu_page(
        'cps',
        __('Face Off Section ', 'cps'),
        __('Face Off section', 'cps'),
        'manage_options',
        'cps-face-off-section',
        'cps_face_off_section_menu'

    );

    add_submenu_page(
        'cps',
        __('Why Trust Section ', 'cps'),
        __('Why Trust section', 'cps'),
        'manage_options',
        'cps-why-trust-section',
        'cps_why_trust_section_menu'

    );
    // add_submenu_page(
    //     'cps',
    //     __('Social Media', 'cps'),
    //     __('Social Media', 'cps'),
    //     'manage_options',
    //     'cps-social-media',
    //     'cps_social_media_function'

    // );

}
add_action( 'admin_menu', 'cps_settings_page');