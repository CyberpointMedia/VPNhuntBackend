<?php 

function cps_why_trust_section() {
   
    // If plugin settings don't exist, then create them
    if( !get_option( 'cps_why_trust_section_settings' ) ) {
        add_option( 'cps_why_trust_section_settings' );
    }

    add_settings_section(
    
        // Unique identifier for the section
    'cps_why_trust_section',
    
    // Section Title
    __( '', 'cps' ),
    
    // Callback for an optional description
    'cps_why_trust_section_function',
    
    // Admin page to add section to
    'cps-why-trust-section'
    );

    add_settings_field(
    
        // Unique identifier for field
    'section_title',
    
    // Field Title
    __( 'Section Title', 'cps'),
    
    // Callback for field markup
    'cps_why_trust_section_title_function',
    
    // Page to go on
    'cps-why-trust-section',

    // Section to go in
    'cps_why_trust_section'
    );

    add_settings_field(
    
        // Unique identifier for field
        'section_description',
    
        // Field Title
        __( 'Section Description', 'cps'),
        
        // Callback for field markup
        'cps_why_trust_section_description_function',
        
        // Page to go on
        'cps-why-trust-section',
        
        // Section to go in
        'cps_why_trust_section'
    );

    


    

    

register_setting(
  'cps_why_trust_section_settings',
  'cps_why_trust_section_settings'
);

}
add_action( 'admin_init', 'cps_why_trust_section' );

function cps_why_trust_section_function() {

    esc_html_e( 'Canvas section settings', 'cps' );

}

function cps_why_trust_section_title_function() {
    $options = get_option( 'cps_why_trust_section_settings' );
    $section_title = '';
    if( isset( $options[ 'section_title' ] ) ) {
        $section_title = esc_html( $options['section_title'] );
    }

    echo    '<input 
                    type="text" 
                    id="bucket_name" 
                    name="cps_why_trust_section_settings[section_title]" 
                    value="' . $section_title . '" 
                    placeholder="Please enter section title" class="regular-text" />';

}

function cps_why_trust_section_description_function() {

$options = get_option( 'cps_why_trust_section_settings' );

    $section_description = '';
    if( isset( $options[ 'section_description' ] ) ) {
        $section_description = esc_html( $options['section_description'] );
    }
    
    echo '<textarea type="text" id="footer_scripts" name="cps_why_trust_section_settings[section_description]" placeholder="Please enter section description here" cols="100" rows="10">' . $section_description . '</textarea>';
}

