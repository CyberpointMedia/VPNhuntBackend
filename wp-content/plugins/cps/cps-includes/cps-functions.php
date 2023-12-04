<?php

function cps_configuration_settings() {

    // Define (at least) one section for our fields
    add_settings_section(
      // Unique identifier for the section
      'cps_settings_section',
      // Section Title
      __( 'A Plugin Settings Section', 'cps' ),
      // Callback for an optional description
      'cps_configuration_settings_callback',
      // Admin page to add section to
      'cps'
    );
  
  }
  add_action( 'admin_init', 'cps_configuration_settings' );
  
  function cps_configuration_settings_callback() {
  
    esc_html_e( 'Plugin settings section description', 'cps' );
  
  }

function footer_scripts(){
  global $options;
  if(get_option( 'cps_header_footer_sc_settings' )){
    $options = get_option( 'cps_header_footer_sc_settings' );
    echo $options['footer_scripts'];
  }
}
add_action( 'wp_footer', 'footer_scripts', 20 );

function header_scripts(){
  global $options;
  if(get_option( 'cps_header_footer_sc_settings' )){
    $options = get_option( 'cps_header_footer_sc_settings' );
    if($options['header_scripts']){
      echo $options['header_scripts'];
    }
  }
}
add_action('wp_body_open', 'header_scripts', 0);

add_action('wp_ajax_nopriv_ajaxify_comments', 'retrieve_comments');
add_action('wp_ajax_ajaxify_comments', 'retrieve_comments');

function retrieve_comments($page){
      global $post; 
      $page_id = $_REQUEST['page_id'];
      $comments = get_comments(array(
        'post_id' => $post->ID,
        'hierarchical' => true,
        'status'       => 'approve',
        'parent'       => $comment->comment_ID,
      ));
      
      wp_list_comments( array(
        'avatar_size' => 40,
        'max_depth'   => 5,
        'per_page'    => 10,
        'page'        => $page_id,
        'style'       => 'ol',
        'type'        => 'all',
        'echo'        => true
      ), $comments );
      die;
    
}

add_action( 'wp_ajax_contact_form_submit', 'handle_contact_form' );
add_action( 'wp_ajax_nopriv_contact_form_submit', 'handle_contact_form' );

function handle_contact_form() {
	global $wpdb;
    $formData = array();
    foreach($_POST['formData'] as $data){
    	$formData[$data['name']] = $data['value']; 
    }
    
    $table = $wpdb->prefix.'contact_form';
	$wpdb->insert($table,$formData);
    $insert_id = $wpdb->insert_id;
	if($insert_id){
		$response = array(
						"returnType" => "true",
						"message"	 => "You details have been submitted."
					);
		echo json_encode($response);
	}else{
		$response = array(
						"returnType" => "false",
						"message"	 => "Your details could not be submitted."
					);
		echo json_encode($response);
	}
    wp_die();
}

add_action( 'wp_ajax_delete_contact_request', 'handle_delete_request' );
add_action( 'wp_ajax_nopriv_delete_contact_request', 'handle_delete_request' );

function handle_delete_request() {
	  global $wpdb;
    $id = $_REQUEST['id'];
    $table = $wpdb->prefix.'contact_form';
    if($wpdb->delete( $table, array( 'id' => $id ) )){
		  $response = array(
						        "returnType" => "true",
						        "message"	 => "Record deleted successfully."
					        );
		echo json_encode($response);
	}else{
		$response = array(
						          "returnType" => "false",
						          "message"	 => "Record could not be submitted."
					      );
		echo json_encode($response);
	}
    wp_die();
}