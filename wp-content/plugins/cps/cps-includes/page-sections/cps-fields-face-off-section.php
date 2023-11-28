<?php 

function cps_face_off_section() {
   
    // If plugin settings don't exist, then create them
    if( !get_option( 'cps_face_off_section_settings' ) ) {
        add_option( 'cps_face_off_section_settings' );
    }

    add_settings_section(
    
        // Unique identifier for the section
        'cps_face_off_general_settings',
        
        // Section Title
        __( '', 'cps' ),
        
        // Callback for an optional description
        'cps_face_off_general_settings',
        
        // Admin page to add section to
        'cps-face-off-section'
    );

    add_settings_section(
    
        // Unique identifier for the section
        'cps_face_off_popular_comparisons',
        
        // Section Title
        __( '', 'cps' ),
        
        // Callback for an optional description
        'cps_face_off_popular_comparisons',
        
        // Admin page to add section to
        'cps-face-off-section'
    );

    add_settings_field(
    
        // Unique identifier for field
    'section_title',
    
    // Field Title
    __( 'Section Title', 'cps'),
    
    // Callback for field markup
    'cps_face_off_section_title_function',
    
    // Page to go on
    'cps-face-off-section',

    // Section to go in
    'cps_face_off_general_settings'
    );

    add_settings_field(
    
        // Unique identifier for field
        'section_description',
    
        // Field Title
        __( 'Section Description', 'cps'),
        
        // Callback for field markup
        'cps_face_off_section_description_function',
        
        // Page to go on
        'cps-face-off-section',
        
        // Section to go in
        'cps_face_off_general_settings'
    );

    


    

    

register_setting(
  'cps_face_off_section_settings',
  'cps_face_off_section_settings'
);

}
add_action( 'admin_init', 'cps_face_off_section' );

function cps_face_off_general_settings() {

    esc_html_e( 'Face Off general settings', 'cps' );

}

function cps_face_off_popular_comparisons() {

    esc_html_e( 'Popular Comparisons', 'cps' );

}

function cps_face_off_section_title_function() {
    $options = get_option( 'cps_face_off_section_settings' );
    $section_title = '';
    if( isset( $options[ 'section_title' ] ) ) {
        $section_title = esc_html( $options['section_title'] );
    }

    echo    '<input 
                    type="text" 
                    id="section_title" 
                    name="cps_face_off_section_settings[section_title]" 
                    value="' . $section_title . '" 
                    placeholder="Please enter section title" class="regular-text" />';

}

function cps_face_off_section_description_function() {

$options = get_option( 'cps_face_off_section_settings' );

    $section_description = '';
    if( isset( $options[ 'section_description' ] ) ) {
        $section_description = esc_html( $options['section_description'] );
    }
    
    echo '<textarea type="text" id="section_description" name="cps_face_off_section_settings[section_description]" placeholder="Please enter section description here" cols="100" rows="10">' . $section_description . '</textarea>';
}

