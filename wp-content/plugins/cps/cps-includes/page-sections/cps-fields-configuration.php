<?php

function cps_configuration() {

  // If plugin settings don't exist, then create them
  if( !get_option( 'cps_configuration_settings' ) ) {
      add_option( 'cps_configuration_settings' );
  }

  // Define (at least) one section for our fields
  add_settings_section(
    // Unique identifier for the section
    'cps_settings_section',
    // Section Title
    __( '', 'cps' ),
    // Callback for an optional description
    'cps_settings_section_callback',
    // Admin page to add section to
    'cps'
  );

    add_settings_field(
    
      // Unique identifier for field
      'footer_logo_description',
    
      // Field Title
      __( 'Footer Logo Description', 'cps'),
    
      // Callback for field markup
      'cps_footer_logo_description_function',
    
      // Page to go on
      'cps',
    
      // Section to go in
      'cps_settings_section'
  );
  
  add_settings_field(
    // Unique identifier for field
    'managed_by',
    
    // Field Title
    __( 'Managed By:', 'cps'),
    
    // Callback for field markup
    'cps_managed_by_function',
    
    // Page to go on
    'cps',
    
    // Section to go in
    'cps_settings_section'
  );

  register_setting(
    'cps_configuration_settings',
    'cps_configuration_settings'
  );

}
add_action( 'admin_init', 'cps_configuration' );

function cps_settings_section_callback() {

  esc_html_e( 'Here are the basic settings for the website', 'cps' );

}

function cps_footer_logo_description_function() {

  $options = get_option( 'cps_configuration_settings' );

	$footer_logo_description = '';
	if( isset( $options[ 'footer_logo_description' ] ) ) {
		$footer_logo_description = esc_html( $options['footer_logo_description'] );
	}

  echo '<textarea type="text" id="footer_scripts" name="cps_configuration_settings[footer_logo_description]" placeholder="Please enter section description here" cols="100" rows="10">' . $footer_logo_description . '</textarea>';

}

function cps_managed_by_function() {

  $options = get_option( 'cps_configuration_settings' );

	$managed_by = '';
	if( isset( $options[ 'managed_by' ] ) ) {
		$managed_by = esc_html( $options['managed_by'] );
	}

  echo '<textarea type="text" id="footer_scripts" name="cps_configuration_settings[managed_by]" placeholder="Please enter section description here" cols="100" rows="10">' . $managed_by . '</textarea>';

}