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

    add_submenu_page(
        'cps',
        __('Contact Form', 'cps'),
        __('Contact Form', 'cps'),
        'manage_options',
        'cps-contact-form-section',
        'cps_contact_form_section_menu'

    );
}
add_action( 'admin_menu', 'cps_settings_page');