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

  add_settings_section(
    // Unique identifier for the section
    'cps_social_media_section',
    // Section Title
    __( '', 'cps' ),
    // Callback for an optional description
    'cps_social_media_section_callback',
    // Admin page to add section to
    'cps'
  );


  add_settings_field(
    
    // Unique identifier for field
    'contact_number',
  
    // Field Title
    __( 'Contact Number', 'cps'),
  
    // Callback for field markup
    'cps_contact_number_function',
  
    // Page to go on
    'cps',
  
    // Section to go in
    'cps_settings_section'
  );


  add_settings_field(
    
    // Unique identifier for field
    'commission_text',
  
    // Field Title
    __( 'Commission Text', 'cps'),
  
    // Callback for field markup
    'cps_commission_text_function',
  
    // Page to go on
    'cps',
  
    // Section to go in
    'cps_settings_section'
  );


  add_settings_field(
    
    // Unique identifier for field
    'youtube_text',
  
    // Field Title
    __( 'Youtube Text', 'cps'),
  
    // Callback for field markup
    'cps_youtube_text_function',
  
    // Page to go on
    'cps',
  
    // Section to go in
    'cps_settings_section'
  );

  add_settings_field(
    
    // Unique identifier for field
    'youtube_link',
  
    // Field Title
    __( 'Youtube link', 'cps'),
  
    // Callback for field markup
    'cps_youtube_link_function',
  
    // Page to go on
    'cps',
  
    // Section to go in
    'cps_settings_section'
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

  add_settings_field(
    // Unique identifier for field
    'facebook_link',
    
    // Field Title
    __( 'Facebook Link:', 'cps'),
    
    // Callback for field markup
    'cps_facebook_link_function',
    
    // Page to go on
    'cps',
    
    // Section to go in
    'cps_social_media_section'
  );

  add_settings_field(
    // Unique identifier for field
    'linkedin_link',
    
    // Field Title
    __( 'LinkedIn Link:', 'cps'),
    
    // Callback for field markup
    'cps_linkedin_link_function',
    
    // Page to go on
    'cps',
    
    // Section to go in
    'cps_social_media_section'
  );


  add_settings_field(
    // Unique identifier for field
    'instagram_link',
    
    // Field Title
    __( 'Instagram Link:', 'cps'),
    
    // Callback for field markup
    'cps_instagram_link_function',
    
    // Page to go on
    'cps',
    
    // Section to go in
    'cps_social_media_section'
  );

  add_settings_field(
    // Unique identifier for field
    'youtube_link',
    
    // Field Title
    __( 'Youtube Link:', 'cps'),
    
    // Callback for field markup
    'cps_youtube_link_function',
    
    // Page to go on
    'cps',
    
    // Section to go in
    'cps_social_media_section'
  );

  add_settings_field(
    // Unique identifier for field
    'twitter_link',
    
    // Field Title
    __( 'TwitterX Link:', 'cps'),
    
    // Callback for field markup
    'cps_twitter_link_function',
    
    // Page to go on
    'cps',
    
    // Section to go in
    'cps_social_media_section'
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

function cps_social_media_section_callback() {

  esc_html_e( 'Social Media Details', 'cps' );

}

function  cps_contact_number_function() {

  $options = get_option( 'cps_configuration_settings' );

	$contact_number = '';
	if( isset( $options[ 'contact_number' ] ) ) {
		$contact_number = esc_html( $options['contact_number'] );
	}
  
  echo    '<input 
                    type="text" 
                    id="contact_number" 
                    name="cps_configuration_settings[contact_number]" 
                    value="' . $contact_number . '" 
                    placeholder="Please enter contact number" class="regular-text" />';
}

function  cps_commission_text_function() {

  $options = get_option( 'cps_configuration_settings' );

	$commission_text = '';
	if( isset( $options[ 'commission_text' ] ) ) {
		$commission_text = esc_html( $options['commission_text'] );
	}
  
  echo    '<input 
                    type="text" 
                    id="commission_text" 
                    name="cps_configuration_settings[commission_text]" 
                    value="' . $commission_text . '" 
                    placeholder="Please enter commission text" class="regular-text" />';
}


function  cps_youtube_text_function() {

  $options = get_option( 'cps_configuration_settings' );

	$youtube_text = '';
	if( isset( $options[ 'youtube_text' ] ) ) {
		$youtube_text = esc_html( $options['youtube_text'] );
	}
  
  echo    '<input 
                    type="text" 
                    id="youtube_text" 
                    name="cps_configuration_settings[youtube_text]" 
                    value="' . $youtube_text . '" 
                    placeholder="Please enter youtube text" class="regular-text" />';
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


function  cps_facebook_link_function() {

  $options = get_option( 'cps_configuration_settings' );

	$facebook_link = '';
	if( isset( $options['social_media'][ 'facebook_link' ] ) ) {
		$facebook_link = esc_html( $options['social_media']['facebook_link'] );
	}
  
  echo    '<input 
                    type="text" 
                    id="facebook_link" 
                    name="cps_configuration_settings[social_media][facebook_link]" 
                    value="' . $facebook_link . '" 
                    placeholder="Please enter youtube link" class="regular-text" />';
}

function  cps_linkedin_link_function() {

  $options = get_option( 'cps_configuration_settings' );

	$linkedin_link = '';
	if( isset( $options['social_media']['linkdin_link'] ) ) {
		$linkedin_link = esc_html( $options['social_media']['linkdin_link'] );
	}
  
  echo    '<input 
                    type="text" 
                    id="linkedin_link" 
                    name="cps_configuration_settings[social_media][linkdin_link]" 
                    value="' . $linkedin_link . '" 
                    placeholder="Please enter linkedin link" class="regular-text" />';
}


function  cps_instagram_link_function() {

  $options = get_option( 'cps_configuration_settings' );

	$instagram_link = '';
	if( isset( $options['social_media'][ 'instagram_link' ] ) ) {
		$instagram_link = esc_html( $options['social_media']['instagram_link'] );
	}
  
  echo    '<input 
                    type="text" 
                    id="instagram_link" 
                    name="cps_configuration_settings[social_media][instagram_link]" 
                    value="' . $instagram_link . '" 
                    placeholder="Please enter instagram link" class="regular-text" />';
}

function  cps_youtube_link_function() {

  $options = get_option( 'cps_configuration_settings' );

	$youtube_link = '';
	if( isset( $options['social_media'][ 'youtube_link' ] ) ) {
		$youtube_link = esc_html( $options['social_media']['youtube_link'] );
	}
  
  echo    '<input 
                    type="text" 
                    id="instagram_link" 
                    name="cps_configuration_settings[social_media][youtube_link]" 
                    value="' . $youtube_link . '" 
                    placeholder="Please enter youtube link" class="regular-text" />';
}

function  cps_twitter_link_function() {

  $options = get_option( 'cps_configuration_settings' );

	$twitter_link = '';
	if( isset( $options['social_media'][ 'twitter_link' ] ) ) {
		$twitter_link = esc_html( $options['social_media']['twitter_link'] );
	}
  
  echo    '<input 
                    type="text" 
                    id="instagram_link" 
                    name="cps_configuration_settings[social_media][twitter_link]" 
                    value="' . $twitter_link . '" 
                    placeholder="Please enter twitterx link" class="regular-text" />';
}