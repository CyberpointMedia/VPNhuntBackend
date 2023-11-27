<?php 

function cps_social_media_init() {

// If plugin settings don't exist, then create them
if( !get_option( 'cps_social_media_settings' ) ) {
    add_option(  'cps_social_media_settings' );
}

add_settings_section(
  
    // Unique identifier for the section
  'cps_social_media_section',
  
  // Section Title
  __( '', 'cps' ),
  
  // Callback for an optional description
  'cps_social_media_description',
  
  // Admin page to add section to
  'cps-social-media'
);

// add_settings_field(
  
//     // Unique identifier for field
//   'social_media_name',
  
//   // Field Title
//   __( 'Social Media Name', 'cps'),
  
//   // Callback for field markup
//   'cps_social_media_name_function',
  
//   // Page to go on
//   'cps-social-media',

//   // Section to go in
//   'cps_social_media_section'
// );

    register_setting(
    'cps_social_media_settings',
    'cps_social_media_settings'
    );

}
add_action( 'admin_init', 'cps_social_media_init' );

function cps_social_media_description() {

    esc_html_e( 'Social Media Description', 'cps' );

}

// function cps_social_media_name_function() {
//     $options = get_option( 'cps_social_media_settings' );
//     $social_media_name = '';
//     if( isset( $options[ 'social_media_name' ] ) ) {
//         $social_media_name = esc_html( $options['social_media_name'] );
//     }

//     echo    '<input 
//                     type="text" 
//                     id="social_media_name" 
//                     name="cps_social_media_settings[social_media_name]" 
//                     value="' . $bucket_name . '" 
//                     placeholder="Please enter bucket name" class="regular-text" />';

// }
