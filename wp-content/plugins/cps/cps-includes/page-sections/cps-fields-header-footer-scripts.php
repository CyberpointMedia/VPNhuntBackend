<?php 

function cps_header_footer_sc() {

// If plugin settings don't exist, then create them
if( !get_option( 'cps_header_footer_sc_settings' ) ) {
    add_option( 'cps_header_footer_sc_settings' );
}

// Define (at least) one section for our fields
add_settings_section(
  
  // Unique identifier for the section
  'cps_header_footer_scripts_section',
  
  // Section Title
  __( '', 'cps' ),
  
  // Callback for an optional description
  'cps_header_footer_sc_function',
  
  // Admin page to add section to
  'cps-header-footer-scripts'
);

add_settings_field(
  // Unique identifier for field
  'header_scripts',
  // Field Title
  __( 'Header Scripts', 'cps'),
  // Callback for field markup
  'cps_header_sc_function',
  // Page to go on
  'cps-header-footer-scripts',
  // Section to go in
  'cps_header_footer_scripts_section'
);

add_settings_field(
  // Unique identifier for field
  'footer_scripts',
  // Field Title
  __( 'Footer Scripts', 'cps'),
  // Callback for field markup
  'cps_footer_sc_function',
  // Page to go on
  'cps-header-footer-scripts',
  // Section to go in
  'cps_header_footer_scripts_section'
);

register_setting(
  'cps_header_footer_sc_settings',
  'cps_header_footer_sc_settings'
);

}
add_action( 'admin_init', 'cps_header_footer_sc' );

function cps_header_footer_sc_function() {

    esc_html_e( 'Header-Footer Scripts', 'cps' );

}

function cps_header_sc_function() {
    $options = get_option( 'cps_header_footer_sc_settings' );
    $header_scripts = '';
    if( isset( $options[ 'header_scripts' ] ) ) {
        $header_scripts = esc_html( $options['header_scripts'] );
    }

    echo    '<textarea 
                    type="text" 
                    id="header_scripts" 
                    name="cps_header_footer_sc_settings[header_scripts]" 
                    placeholder="Please enter footer scripts for header" cols="100" rows="10">' . $header_scripts . '</textarea>
                    <p><small>*Anything you enter here will appear right after the body tag begins.</small></p>';

}

function cps_footer_sc_function() {

$options = get_option( 'cps_header_footer_sc_settings' );

    $footer_scripts = '';
    if( isset( $options[ 'footer_scripts' ] ) ) {
        $footer_scripts = esc_html( $options['footer_scripts'] );
    }

    echo    '<textarea 
                    type="text" 
                    id="footer_scripts" 
                    name="cps_header_footer_sc_settings[footer_scripts]" 
                    placeholder="Please enter footer scripts for footer" cols="100" rows="10">' . $footer_scripts . '</textarea>
                    <p><small>*Anything you enter here will appear right before the body tag ends.</small></p>';

}