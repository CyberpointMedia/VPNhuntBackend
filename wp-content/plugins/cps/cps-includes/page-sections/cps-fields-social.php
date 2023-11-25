<?php 

function cps_social_media() {

// If plugin settings don't exist, then create them
if( !get_option( 'cps_social_settings' ) ) {
    add_option( 'cps_social_settings' );
}

add_settings_section(
  
    // Unique identifier for the section
  'cps_social_section',
  
  // Section Title
  __( '', 'cps' ),
  
  // Callback for an optional description
  'cps_social_section_function',
  
  // Admin page to add section to
  'cps-social'
);

add_settings_field(
  
    // Unique identifier for field
  'bucket_name',
  
  // Field Title
  __( 'Bucket Name', 'cps'),
  
  // Callback for field markup
  'cps_bucket_name_function',
  
  // Page to go on
  'cps-atz-s3',

  // Section to go in
  'cps_atz_s3_section'
);

add_settings_field(
  
    // Unique identifier for field
    'access_key',
  
    // Field Title
    __( 'Access Key', 'cps'),
    
    // Callback for field markup
    'cps_access_key_function',
    
    // Page to go on
    'cps-atz-s3',
    
    // Section to go in
    'cps_atz_s3_section'
);

add_settings_field(
  
    // Unique identifier for field
    'secret_key',
  
    // Field Title
    __( 'Secret Key', 'cps'),
    
    // Callback for field markup
    'cps_access_key_function',
    
    // Page to go on
    'cps-atz-s3',
    
    // Section to go in
    'cps_atz_s3_section'
);


add_settings_field(
  
    // Unique identifier for field
    'region',
  
    // Field Title
    __( 'Region', 'cps'),
    
    // Callback for field markup
    'cps_region_function',
    
    // Page to go on
    'cps-atz-s3',
    
    // Section to go in
    'cps_atz_s3_section'
);

add_settings_field(
  
    // Unique identifier for field
    'version',
  
    // Field Title
    __( 'Version', 'cps'),
    
    // Callback for field markup
    'cps_version_function',
    
    // Page to go on
    'cps-atz-s3',
    
    // Section to go in
    'cps_atz_s3_section'
);

register_setting(
  'cps_atz_s3_settings',
  'cps_atz_s3_settings'
);

}
add_action( 'admin_init', 'cps_atz_s3' );

function cps_social_section_function() {

    esc_html_e( 'Amazon S3 Settings', 'cps' );

}

function cps_bucket_name_function() {
    $options = get_option( 'cps_atz_s3_settings' );
    $bucket_name = '';
    if( isset( $options[ 'bucket_name' ] ) ) {
        $bucket_name = esc_html( $options['bucket_name'] );
    }

    echo    '<input 
                    type="text" 
                    id="bucket_name" 
                    name="cps_atz_s3_settings[bucket_name]" 
                    value="' . $bucket_name . '" 
                    placeholder="Please enter bucket name" class="regular-text" />';

}

function cps_access_key_function() {

$options = get_option( 'cps_atz_s3_settings' );

    $access_key = '';
    if( isset( $options[ 'access_key' ] ) ) {
        $access_key = esc_html( $options['access_key'] );
    }

    echo    '<input 
                    type="text" 
                    id="access_key" 
                    name="cps_atz_s3_settings[access_key]" 
                    value="' . $access_key . '" 
                    placeholder="Please enter access key" class="regular-text" />';

}

function cps_secret_key_function() {

    $options = get_option( 'cps_atz_s3_settings' );
    
        $secret_key = '';
        if( isset( $options[ 'secret_key' ] ) ) {
            $secret_key = esc_html( $options['secret_key'] );
        }
    
        echo    '<input 
                        type="text" 
                        id="secret_key" 
                        name="cps_atz_s3_settings[secret_key]" 
                        value="' . $secret_key . '" 
                        placeholder="Please enter secret key" class="regular-text"/>';
}

function cps_version_function() {

    $options = get_option( 'cps_atz_s3_settings' );
    
        $version = '';
        if( isset( $options[ 'version' ] ) ) {
            $version = esc_html( $options['version'] );
        }
    
        echo    '<input 
                        type="text" 
                        id="version" 
                        name="cps_atz_s3_settings[version]" 
                        value="' . $version . '" 
                        placeholder="Please enter version" class="regular-text" />';
}

function cps_region_function() {

    $options = get_option( 'cps_atz_s3_settings' );
    
        $region = '';
        if( isset( $options[ 'region' ] ) ) {
            $region = esc_html( $options['region'] );
        }
    
        echo    '<input 
                        type="text" 
                        id="region" 
                        name="cps_atz_s3_settings[region]" 
                        value="' . $region . '" 
                        placeholder="Please enter region" class="regular-text"/>';
}