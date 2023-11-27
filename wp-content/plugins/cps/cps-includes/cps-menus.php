<?php 

function cps_settings_page(){

    add_menu_page(
        
        //Name of the header
        __('Configuration','cpwsplugin'),
        
        //Menu Title 
        __('Config', 'cps'),
        
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
        __('External Links', 'cps'),
        __('External Links', 'cps'),
        'manage_options',
        'cps-external-links',
        'cps_external_links'

    ); 

    add_submenu_page(
        'cps',
        __('Header-Footer Scripts', 'cps'),
        __('Header-Footer Scripts', 'cps'),
        'manage_options',
        'cps-header-footer-scripts',
        'cps_header_footer_scripts'

    );

    add_submenu_page(
        'cps',
        __('Pop-up', 'cps'),
        __('Pop-up', 'cps'),
        'manage_options',
        'cps-pop-up',
        'cps_pop_up'

    );

    add_submenu_page(
        'cps',
        __('Sticky Bar', 'cps'),
        __('Sticky Bar', 'cps'),
        'manage_options',
        'cps-sticky-bar',
        'cps_sticky_bar'

    );

    add_submenu_page(
        'cps',
        __('SMTP Mail', 'cps'),
        __('SMTP Mail', 'cps'),
        'manage_options',
        'cps-smtp-mailer',
        'cps_smtp_mailer'

    );

    

    add_submenu_page(
        'cps',
        __('Translate', 'cps'),
        __('Translate', 'cps'),
        'manage_options',
        'cps-translate',
        'cps_translate'

    );

    add_submenu_page(
        'cps',
        __('Amazon S3', 'cps'),
        __('Amazon S3', 'cps'),
        'manage_options',
        'cps-atz-s3',
        'cps_atz_s3_menu'

    );

    add_submenu_page(
        'cps',
        __('Social Media', 'cps'),
        __('Social Media', 'cps'),
        'manage_options',
        'cps-social-media',
        'cps_social_media_function'

    );

}
add_action( 'admin_menu', 'cps_settings_page');