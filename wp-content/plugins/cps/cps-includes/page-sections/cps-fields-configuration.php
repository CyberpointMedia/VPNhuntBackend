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
    'first_name',
    // Field Title
    __( 'First Name', 'cps'),
    // Callback for field markup
    'cps_first_name_function',
    // Page to go on
    'cps',
    // Section to go in
    'cps_settings_section'
  );
  
  add_settings_field(
    // Unique identifier for field
    'last_name',
    // Field Title
    __( 'Last Name', 'cps'),
    // Callback for field markup
    'cps_last_name_function',
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

  esc_html_e( 'Here are the basic configuration settings for the plugin.', 'cps' );

}

function cps_first_name_function() {

  $options = get_option( 'cps_configuration_settings' );

	$first_name = '';
	if( isset( $options[ 'first_name' ] ) ) {
		$first_name = esc_html( $options['first_name'] );
	}

  echo '<input 
              type="text" 
              id="first_name" 
              name="cps_configuration_settings[first_name]" 
              value="' . $first_name . '" 
              placeholder="Please enter first name" />';

}

function cps_last_name_function() {

  $options = get_option( 'cps_configuration_settings' );

	$last_name = '';
	if( isset( $options[ 'last_name' ] ) ) {
		$last_name = esc_html( $options['last_name'] );
	}

  echo '<input 
              type="text" 
              id="last_name" 
              name="cps_configuration_settings[last_name]" 
              value="' . $last_name . '" 
              placeholder="Please enter last name" />';

}