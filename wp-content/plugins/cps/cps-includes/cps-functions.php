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

add_action( 'wp_ajax_get_contact_data', 'handle_contact_data' );
add_action( 'wp_ajax_nopriv_get_contact_data', 'handle_contact_data' );

function handle_contact_data() {
	  global $wpdb;
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM ". $wpdb->prefix ."contact_form WHERE id=". $id ."";
    $result = $wpdb->get_results($sql);
    print_r($result);
    return;
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

add_action('media_buttons', 'add_my_media_button');
function add_my_media_button() {
  echo '<button type="button" id="shortcode-inserter" class="button" data-title="Guides" data-close="Close" data-type="meta">Short Code Inserter</button>';
}

add_action('media_buttons', 'add_list_shortcodes_button');
function add_list_shortcodes_button() {
  echo '<button type="button" id="list-shortcodes" class="button" data-title="Shortcodes" data-close="Close" data-type="shortcodes">List Shortcodes</button>';
}

function wpdocs_custom_admin_footer_text() {
  $html = '<!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>';

    return $html;
}
add_filter( 'admin_footer_text', 'wpdocs_custom_admin_footer_text' );

add_action( 'wp_ajax_get_guides', 'handle_guides_data' );
add_action( 'wp_ajax_nopriv_get_guides', 'handle_guides_data' );

function handle_guides_data() {
    
    global $wpdb;
    $guide_name = $_REQUEST['data'];
    $sql = "SELECT ID, post_title FROM ". $wpdb->prefix ."posts WHERE post_type = 'guides' AND post_title LIKE '%". $guide_name ."%' LIMIT 5";
    $result = $wpdb->get_results($sql);

    $count = 0;
   foreach($result as $key=>$value){
     
        $data[$count]['list_id'] = $value->ID;
        $data[$count]['list_text'] = $value->post_title;
        $count++;
      
    }
    if($result){
		  $response = array(
						        "returnType" => "true",
						        "message"	 => count($result) ." Records found matching your query",
                    "data" => $data
					        );
		
	  }else{
		  $response = array(
						          "returnType" => "false",
						          "message"	 => "There are no guides matching your query."
					      );
	  }
    echo json_encode($response);
    wp_die();
}

add_action( 'wp_ajax_get_guide_meta', 'handle_guide_meta_data' );
add_action( 'wp_ajax_nopriv_get_guide_meta', 'handle_guide_meta_data' );

function handle_guide_meta_data() {
    $result = get_post_meta( $_REQUEST['data']['id']);
    $dataType = $_REQUEST['data']['data_type'];
    
    $data = [];
    $count = 0;
    if($dataType == "meta"){
        foreach($result as $key=>$value){
     
          $data[$count]['list_id'] = $key;
          $data[$count]['list_text'] =  ucwords(str_replace('_', ' ', $key)) . ': <span class="fw-bold" data-key="' .wp_strip_all_tags($key). '">' . $value[0]. '</span><br/><span class="shortcode"</span>';
          $count++;
      
        }
    }else if($dataType === "shortcodes"){
      global $shortcode_tags;
      $data = [];
      $count = 0;
      foreach($shortcode_tags as $key=>$value){
        if(str_contains($key, "vpnhunt_")){ 
          $data[$count]['list_id'] = $key;
          $data[$count]['post_id'] = $_REQUEST['data']['id'];
          $data[$count]['list_text'] = ucwords(str_replace("_", " ", str_replace("vpnhunt_", "", $key)));
          $count++;

        }else{
          continue;
        }
      }
    }
    if($data){
		  $response = array(
						        "returnType" => "true",
						        "message"	 => $count ." ".$dataType ." options found for this post",
                    "data" => $data
					        );
		
	  }else{
		  $response = array(
						          "returnType" => "false",
						          "message"	 => "There are no guides matching your query."
					      );
	  }
    echo json_encode($response);
    wp_die();
}

function btn_shortcode( $atts, $content = null ) {
 
  $a = shortcode_atts( array(
      'guide-id' => $atts['guide-id'],
      'guide-meta-key' => $atts['guide-meta-key']
  ), $atts );
  $get_post_meta = get_post_meta( $atts['guide-id'], $atts['guide-meta-key'], true);
  return $get_post_meta;
}
add_shortcode( 'display-guide-attributes', 'btn_shortcode' );


/**
 * Register meta boxes.
 */

function guides_register_meta_boxes() {
  add_meta_box( 'guides-1', __( 'Extra Meta Fields', 'guides' ), 'guides_display_callback', 'guides' );
}
add_action( 'add_meta_boxes', 'guides_register_meta_boxes' );

/**
* Meta box display callback.
*
* @param WP_Post $post Current post object.
*/
function guides_display_callback( $post ) {
  include( plugin_dir_path( __DIR__ ) . 'cps-templates/guides-form.php');
}

function guides_save_meta_box( $post_id ) {
if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
  if ( $parent_id = wp_is_post_revision( $post_id ) ) {
      $post_id = $parent_id;
  }
  if(isset($_REQUEST['_verd_pros'])){
    $_POST['_verd_pros'] = implode("|", $_REQUEST['_verd_pros']);
  }
  if(isset($_REQUEST['_verd_cons'])){
    $_POST['_verd_cons'] = implode("|", $_REQUEST['_verd_cons']);
  }
  
  if(isset($_REQUEST['_verd_social'])){
    $_POST['_verd_social'] = implode("|", $_REQUEST['_verd_social']);
  }
  $fields = [
              '_tab_overall_rating',
              '_tab_expert_review_link',
              '_tab_cheapest_price',
              '_tab_pay_monthly_price',
              '_tab_free_trial',
              '_tab_money_back_guarantee',
              '_tab_data_cap',
              '_tab_logging_policy',
              '_tab_data_leaks',
              '_tab_encryption',
              '_tab_jurisdiction',
              '_tab_average_local_download_speed',
              '_tab_servers',
              '_tab_ip_addresses',
              '_tab_countries',
              '_tab_us_netflix',
              '_tab_streaming_services_nblocked',
              '_tab_torrenting',
              '_tab_simultaneous_connections',
              '_tab_native_app_support',
              '_tab_compatible_via_router',
              '_tab_smart_dns',
              '_tab_kill_switch',
              '_tab_browser_extensions',
              '_tab_works_in_china',
              '_tab_support',
              '_verd_title',
              '_verd_description',
              '_verd_social',
              '_verd_pros',
              '_verd_cons',
              '_feat_price',
              '_feat_money_back_guarantee',
              '_feat_does_VPN_keep_logs',
              '_feat_number_of_servers',
              '_feat_number_of_devices_per_license',
              '_feat_kill_switch',
              '_feat_based_in_country',
              '_feat_support',
              '_feat_supports_torrenting',
              '_stream_channel_4',
              '_stream_amazon_prime_video',
              '_stream_BBC_iPlayer',
              '_stream_disney+',
              '_stream_hotstar_india',
              '_stream_hulu',
              '_stream_ITVX',
              '_stream_netflix_us',
              '_stream_youtube',
              '_coup_heading',
              '_coup_text',
              '_coup_button_text',
              '_coup_text_below_button'
            ];
        
  foreach ( $fields as $field ) {
          
      if ( array_key_exists( $field, $_POST ) ) {
          update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
      }
   }
}
add_action( 'save_post', 'guides_save_meta_box' );



function pages_register_meta_boxes() {
  add_meta_box( 'guides-1', __( 'Extra Meta Fields', 'guides' ), 'pages_display_callback', 'page' );
}
add_action( 'add_meta_boxes', 'pages_register_meta_boxes' );

/**
* Meta box display callback.
*
* @param WP_Post $post Current post object.
*/
function pages_display_callback( $post ) {

  include( plugin_dir_path( __DIR__ ) . 'cps-templates/pages-form.php');

}

function pages_save_meta_box( $post_id ) {
if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
  if ( $parent_id = wp_is_post_revision( $post_id ) ) {
      $post_id = $parent_id;

  }
  if(isset($_REQUEST['_page_social'])){
    $_POST['_page_social'] = implode("|", $_REQUEST['_page_social']);
  }

  $fields = [
              '_page_author_name',
              '_page_fact_checker',
              '_page_editors_rating',
              '_page_rating',
              '_page_caption',
              '_page_social'

            ];
        
  foreach ( $fields as $field ) {
          
      if ( array_key_exists( $field, $_POST ) ) {
          update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
      }
   }
}
add_action( 'save_post', 'pages_save_meta_box' );

function vpnhunt_list_all_shortcodes(){
  global $shortcode_tags;
  $data = [];
  $count = 0;
  foreach($shortcode_tags as $key=>$value){
    if(str_contains($key, "vpnhunt_")){ 
      $data[$count]['list_id'] = $key;
      $data[$count]['list_text'] = '[' . $key . ']';
      $count++;

    }else{
      continue;
    }
   
  
  }

  if($data){
    $response = array(
                  "returnType" => "true",
                  "message"	 => $count ." shortcodes found.",
                  "data" => $data
                );
  
  }else{
    $response = array(
                    "returnType" => "false",
                    "message"	 => "There are no guides matching your query."
              );
  }
  echo json_encode($response);
  wp_die();
}
add_action( 'wp_ajax_list_all_shortcodes', 'vpnhunt_list_all_shortcodes' );
add_action( 'wp_ajax_nopriv_list_all_shortcodes', 'vpnhunt_list_all_shortcodes' );