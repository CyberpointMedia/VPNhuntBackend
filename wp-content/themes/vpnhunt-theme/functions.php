<?php

define('COMPARE_PAGE_LINK', get_site_url() . '/compare-vpn');

function theme_setup(){
    
    //Add theme support for Title Tags
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails', array( 'page' ) ); 

    //Add theme support for logo
    add_theme_support( 'custom-logo', array(
        'height' => 480,
        'width'  => 720,
    ) );

    //Add option for post thumbnails
    add_theme_support( 'post-thumbnails', array( 'post', 'customposttypename' ) );

    //Add custom background
    add_theme_support( 'custom-background' );

    //Add menu support
    register_nav_menus( array(
        'header-menu' => 'Header Menu',
        'footer-top-menu' => 'Footer Top Menu',
        'footer-bottom-menu' => 'Footer Bootom Menu'
    ));
    
}


add_action('after_setup_theme','theme_setup');

add_theme_support( 'post-thumbnails',array('page')); 

//enqueue styles and scripts
add_action( 'wp_enqueue_scripts', 'vpnhunt_enqueue_scripts' );
function vpnhunt_enqueue_scripts() {
    
    //enqueue styles
    wp_enqueue_style(   'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css', array(), '5.15.3' );
    wp_enqueue_style(   'slick', get_stylesheet_directory_uri() . '/css/slick.css', array(), '1.0' );
    wp_enqueue_style(   'tailwind-style', get_stylesheet_directory_uri() . '/css/style.css', array(), '1.0' );
    wp_enqueue_style(   'custom', get_stylesheet_directory_uri() . '/css/custom.css', array(), '1.0' );
    wp_enqueue_style(   'stylesheet', get_stylesheet_directory_uri() . '/style.css', array(), '1.0' );
    
    //enqueue scripts
    wp_enqueue_script(  'jquery-validate', get_stylesheet_directory_uri() . '/js/jquery.validate.min.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script(  'additional-methods', get_stylesheet_directory_uri() . '/js/additional-methods.min.js', array( 'jquery-validate' ), '1.0', true );
    wp_enqueue_script(  'slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script(  'custom', get_stylesheet_directory_uri() . '/js/custom.js', array( 'slick' ), '1.0', true );
    wp_localize_script( 'custom', 'front_urls', array( 'theme_url' => get_site_url() . '/wp-content/themes/vpnhunt-theme', 'ajaxUrl' => admin_url( 'admin-ajax.php') ) );
    

}

function add_more_css_attributes ( $url ) {
	if ( FALSE === strpos( $url, 'font-awesome/5.15.3/css/all.min.css' ) ) return $url;
	return "$url' crossorigin='anonymous' referrerpolicy='no-referrer' ";
}

add_filter( 'clean_url', 'add_more_css_attributes', 11, 1 );

// Product Custom Post Type
function vpn_picks_init() {
    // set up product labels
    $labels = array(
        'name' => 'VPN',
        'singular_name' => 'VPN',
        'add_new' => 'Add New VPN Provider',
        'add_new_item' => 'Add New VPN Provider',
        'edit_item' => 'Edit VPN Provider',
        'new_item' => 'New VPN Provider',
        'all_items' => 'All VPN Providers',
        'view_item' => 'View VPN Provider',
        'search_items' => 'Search VPN Providers',
        'not_found' =>  'No VPN Provider(s) Found',
        'not_found_in_trash' => 'No VPN Provider(s) found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'VPN Providers',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'vpn-providers'),
        'query_var' => true,
        'menu_icon' => 'dashicons-randomize',
        'taxonomies'  => array( 'category' ),
        'supports' =>   array(
                            'title',
                            'editor',
                            'excerpt',
                            'trackbacks',
                            'custom-fields',
                            'comments',
                            'revisions',
                            'thumbnail',
                            'author',
                            'page-attributes'
                        )
    );

    register_post_type( 'best-vpns', $args );

    
    // register taxonomy
    register_taxonomy(  'vpn_providers_category', 
                        'vpn_provider', 
                        array( 
                                'hierarchical'  => true, 
                                'label'         => 'Category', 
                                'query_var'     => true, 
                                'rewrite'       => array( 
                                                            'slug' => 'vpn-providers-category' 
                                                    )
                        )
    );
}
add_action( 'init', 'vpn_picks_init' );


// Product Custom Post Type
function vpn_guide_init() {
    // set up product labels
    $labels = array(
        'name' => 'Guide',
        'singular_name' => 'Guides',
        'add_new' => 'Add New Guide',
        'add_new_item' => 'Add New Guide',
        'edit_item' => 'Edit Guide',
        'new_item' => 'New Guide',
        'all_items' => 'All Guides',
        'view_item' => 'View Guide',
        'search_items' => 'Search Guide',
        'not_found' =>  'No Guide(s) Found',
        'not_found_in_trash' => 'No Guide(s) found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Guide',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'guide'),
        'query_var' => true,
        'menu_icon' => 'dashicons-randomize',
        'supports' =>   array(
                            'title',
                            'editor',
                            'excerpt',
                            'trackbacks',
                            'custom-fields',
                            'comments',
                            'revisions',
                            'thumbnail',
                            'author',
                            'page-attributes'
                        )
    );

    register_post_type( 'guide', $args );

    
    
}
add_action( 'init', 'vpn_guide_init' );


//vpn post guides

function vpn_post_guides_init() {
    // set up product labels
    $labels = array(
        'name' => 'Guides',
        'singular_name' => 'Guides',
        'add_new' => 'Add New Guide',
        'add_new_item' => 'Add New Guide',
        'edit_item' => 'Edit Guide',
        'new_item' => 'New Guide',
        'all_items' => 'All Guides',
        'view_item' => 'View Guide',
        'search_items' => 'Search Guide',
        'not_found' =>  'No Guide(s) Found',
        'not_found_in_trash' => 'No Guide(s) found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Guides',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'guide'),
        'query_var' => true,
        'menu_icon' => 'dashicons-randomize',
        'taxonomies'  => array( 'guides' ),
        'supports' =>   array(
                            'title',
                            'editor',
                            'excerpt',
                            'trackbacks',
                            'custom-fields',
                            'comments',
                            'revisions',
                            'thumbnail',
                            'author',
                            'page-attributes'
                        )
    );

    register_post_type( 'guides', $args );

    // register taxonomy
    register_taxonomy(  'guides_category', 
                        'guides', 
                        array( 
                                'hierarchical'  => true, 
                                'label'         => 'Category', 
                                'query_var'     => true, 
                                'rewrite'       => array( 
                                                            'slug' => 'guides-category' 
                                                    )
                        )
    );

    
    
}
add_action( 'init', 'vpn_post_guides_init' );


//Add Reviews Post Type
// Product Custom Post Type
function reviews_init() {
    // set up product labels
    $labels = array(
        'name' => 'Reviews',
        'singular_name' => 'Review',
        'add_new' => 'Add New Review',
        'add_new_item' => 'Add New Review',
        'edit_item' => 'Edit Review',
        'new_item' => 'New Review',
        'all_items' => 'All Reviews',
        'view_item' => 'View Review',
        'search_items' => 'Search Reviews',
        'not_found' =>  'No Review(s) Found',
        'not_found_in_trash' => 'No Review(s) found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Reviews',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'reviews'),
        'query_var' => true,
        'menu_icon' => 'dashicons-list-view',
        'supports' =>   array(
                            'title',
                            'editor',
                            'excerpt',
                            'trackbacks',
                            'custom-fields',
                            'comments',
                            'revisions',
                            'thumbnail',
                            'author',
                            'page-attributes'
                        )
    );
    register_post_type( 'reviews', $args );
}
add_action( 'init', 'reviews_init' );


// FAQs
function faqs_init() {
    // set up product labels
    $labels = array(
        'name' => 'FAQs',
        'singular_name' => 'Frequently Asked Questions',
        'add_new' => 'Add New FAQ',
        'add_new_item' => 'Add New FAQ',
        'edit_item' => 'Edit FAQ',
        'new_item' => 'New FAQ',
        'all_items' => 'All FAQs',
        'view_item' => 'View FAQ',
        'search_items' => 'Search FAQ',
        'not_found' =>  'No FAQ(s) Found',
        'not_found_in_trash' => 'No FAQ(s) found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'FAQs',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'faqs'),
        'query_var' => true,
        'menu_icon' => 'dashicons-list-view',
        'supports' =>   array(
                            'title',
                            'editor',
                            'excerpt',
                            'trackbacks',
                            'custom-fields',
                            'comments',
                            'revisions',
                            'thumbnail',
                            'author',
                            'page-attributes'
                        )
    );
    register_post_type( 'faqs', $args );
}
add_action( 'init', 'faqs_init' );

function vpnhunt_sidebars_setup(){
    register_sidebar([
        'name'          => esc_html__('Footer Top Left'),
        'id'            => 'footer-top-left',
        'description'   => '',
        'before_widget' => '<div class="relative">',
        'after_widget'  => '</div>'
    ]);

    register_sidebar([
        'name'          => esc_html__('Footer Top Right'),
        'id'            => 'footer-top-right',
        'description'   => '',
        'before_widget' => '<ul class="flex space-x-3 mt-3 lg:mt-0 lg:ml-8 social-icons">',
        'after_widget'  => '</ul>'
    ]);
}

add_action('widgets_init', 'vpnhunt_sidebars_setup');


function wporg_settings_init() {
	// register a new setting for "reading" page
	register_setting('reading', 'wporg_setting_name');

	// register a new section in the "reading" page
	add_settings_section(
		'wporg_settings_section',
		'WPOrg Settings Section', 'wporg_settings_section_callback',
		'options-general'
	);

	// register a new field in the "wporg_settings_section" section, inside the "reading" page
	add_settings_field(
		'wporg_settings_field',
		'WPOrg Setting', 'wporg_settings_field_callback',
		'reading',
		'wporg_settings_section'
	);
}

/**
 * register wporg_settings_init to the admin_init action hook
 */
add_action('admin_init', 'wporg_settings_init');


add_filter( 'nav_menu_link_attributes', 'wpse156165_menu_add_class', 10, 3 );

function wpse156165_menu_add_class( $classes, $item, $args ) {
    if(isset($args->add_link_class)) {
        $classes['class'] = $args->add_link_class;
    }
    return $classes;
}

add_action ( 'category_edit_form_fields', function( $tag ){
    $cat_title = get_term_meta( $tag->term_id, '_color', true ); ?>
    <tr class='form-field'>
        <th scope='row'><label for='color'><?php _e('Category Color'); ?></label></th>
        <td>
            <input type='text' name='cat_color' id='cat_color' value='<?php echo $cat_title ?>'>
            <p class='description'><?php _e('Enter color name, used in best vpns section'); ?></p>
        </td>
    </tr> <?php
});
add_action ( 'edited_category', function( $term_id ) {
    if ( isset( $_POST['cat_color'] ) )
        update_term_meta( $term_id , '_color', $_POST['cat_color'] );
});

remove_filter( 'the_excerpt', 'wpautop' );
// remove_filter( 'the_content', 'wpautop' );

add_action( 'wp_ajax_get_guide', 'get_guide_meta_js' );
add_action( 'wp_ajax_nopriv_get_guide', 'get_guide_meta_js' );

function get_guide_meta_js() {
    $post_type = $_REQUEST['data'];
	$args = array(
        'numberposts'      => 5,
        'orderby'     => 'ID',
        'order' => 'ASC',
		'include'          => array(211, 214, 263, 265, 267),
		'post_type'        => $post_type,
		'suppress_filters' => true,
      );

      $posts = get_posts( $args );

	if($posts){
		$response = array(
						"returnType" => "true",
						"message"	 => "You details have been submitted.",
                        "data" => $posts
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

add_action( 'wp_ajax_get_comparison_table', 'get_comparison_template_data' );
add_action( 'wp_ajax_nopriv_get_comparison_table', 'get_comparison_template_data' );

function get_comparison_template_data() {
    $include_posts = $_REQUEST['data'];
    $post_type = $_REQUEST['data']['post_type'];
	$args = array(
        'numberposts'      => 5,
		'order'            => 'ASC',
		'include'          => $_REQUEST['data']['include_posts'],
		'post_type'        => $post_type,
        
    );


        $posts = get_posts( $args );
        $count = 1;
        $headings = [];
        $rows = [];
        $table = [];
        $row_title = "";
        foreach($posts as $post){
            $headers = '<th class="py-2 px-3 text-base font-medium text-center border">';
            $headers .=          '<div class="product-box p-5 relative">';
            $headers .=            '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 22 22" fill="none" class="close-icon mx-auto absolute right-0 top-0">';
            $headers .=              '<path d="M6.46407 16.8336L16.835 6.46274C17.1591 6.13864 17.2239 5.55528 16.835 5.16637C16.4461 4.77747 15.8627 4.84228 15.5386 5.16637L5.16771 15.5373C4.9958 15.7092 4.89923 15.9423 4.89923 16.1855C4.89923 16.4286 4.9958 16.6617 5.16771 16.8336C5.55662 17.2225 6.13998 17.1577 6.46407 16.8336Z" fill="#0D0E10"></path>';
            $headers .=              '<path d="M16.8318 15.5373L6.46088 5.16637C6.13679 4.84228 5.55342 4.77746 5.16451 5.16637C4.7756 5.55528 4.84042 6.13864 5.16451 6.46273L15.5354 16.8336C15.7073 17.0055 15.9405 17.1021 16.1836 17.1021C16.4267 17.1021 16.6599 17.0055 16.8318 16.8336C17.2207 16.4447 17.1559 15.8614 16.8318 15.5373Z" fill="#0D0E10"></path>';
            $headers .=            '</svg>';
            $headers .=            '<p></p>';
            $headers .=            '<img src="' . get_stylesheet_directory_uri() . '/images/' . $post->post_name . '-small-logo.svg" alt="#" class="mx-auto my-2" />';
            $headers .=            '<a href="javascript:void(0);" class="btn-bg-orange-500 duration-500 rounded text-white font-medium py-1 px-3 inline-block">Visit Site</a>';
            $headers .=          '</div>';
            $headers .=          '<a href="javascript:void(0);" class="text-black rounded border border-[#E9E9E9] text-center py-3 w-36 inline-block add-product hidden">';
            $headers .=            '<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none" class="inline-block mr-2">';
            $headers .=              '<path d="M11.9154 18.3333L11.9154 3.66667C11.9154 3.20833 11.5487 2.75 10.9987 2.75C10.4487 2.75 10.082 3.20833 10.082 3.66667L10.082 18.3333C10.082 18.5764 10.1786 18.8096 10.3505 18.9815C10.5224 19.1534 10.7556 19.25 10.9987 19.25C11.5487 19.25 11.9154 18.7917 11.9154 18.3333Z" fill="#0D0E10"/>';
            $headers .=              '<path d="M3.66667 11.9167L18.3333 11.9167C18.7917 11.9167 19.25 11.55 19.25 11C19.25 10.45 18.7917 10.0833 18.3333 10.0833L3.66667 10.0833C3.42355 10.0833 3.19039 10.1799 3.01849 10.3518C2.84658 10.5237 2.75 10.7569 2.75 11C2.75 11.55 3.20833 11.9167 3.66667 11.9167Z" fill="#0D0E10"/>';
            $headers .=            '</svg>';
            $headers .=              'Read more';
            $headers .=          '</a>';
            $headers .=        '</th>';
            $headings[] = $headers;

            unset($meta['_edit_lock']);
            unset($meta['_edit_last']);
            unset($meta['_wp_old_slug']);

            
            
            $count++;
        }
        $meta = get_post_meta($posts[0]->ID);
        foreach($meta as $key=>$value){
            if(str_contains($key, "_tab") === false){
                unset($meta[$key]);
            }
        }
        
        foreach($meta as $key=>$value){
            if($key == '_tab_cheapest_price'){
                $body  = '<tr>';
                $body .=    '<td class="py-2 px-3 text-base text-left border">';
                $body .=        '<div class="items-center justify-between flex">';
                $body .=            ucwords(str_replace("_", " ", str_replace("_tab", " ", $key))); 
                $body .=            '<img src="' . get_stylesheet_directory_uri() . '/images/question-mark.svg" class="inline-block" />';
                $body .=        '</div>';
                $body .=    '</td>';
            }else if($key == '_tab_cheapest_price'){

            }else{
                $body  = '<tr>';
                $body .=    '<td class="py-2 px-3 text-base text-left border">';
                $body .=        '<div class="items-center justify-between flex">';
                $body .=             ucwords(str_replace("_", " ", str_replace("_tab", " ", $key))); 
                $body .=            '<img src="' . get_stylesheet_directory_uri() . '/images/question-mark.svg" class="inline-block" />';
                $body .=        '</div>';
                $body .=    '</td>';
            }
            for($i = 0; $i < count($posts); $i++){
                if($key === '_tab_overall_rating'){
                    $body .= '<td class="py-2 px-3 text-base text-center border">';
                    if(get_post_meta($posts[$i]->ID, $key, true)){
                    
                        $body .=    '<div class="flex items-center mb-3 justify-center">';
                        $body .=        '<div class="w-1/4 bg-gray-200 rounded h-1.5 mx-3">';
                        $body .=            '<div class="bg-green-600 h-1.5 rounded" style="width: 88%"></div>';
                        $body .=        '</div>';
                        $body .=        '<div class="text-sm font-medium text-black">' . get_post_meta($posts[$i]->ID, $key, true).' <i class="text-xs ml-1 not-italic text-black">/10</i></div>';
                        $body .=    '</div>';
                    
                    }else{
                        $body .=    '<div class="flex items-center mb-3 justify-center">';
                        $body .=        '<div class="text-sm font-medium text-black"> N/A </div>';
                        $body .=    '</div>';
                    }
                    $body .= '</td>';
                    
                }else{
                    
                    $body .=    '<td class="py-2 px-3 text-base text-center border">';
                    $body .=        '<div class="flex items-center mb-3 justify-center">';
                    $body .=            '</div>';
                    $body .=           '<div class="text-sm font-medium text-black">' . ucfirst( !get_post_meta($posts[$i]->ID, $key, true) ? 'N/A' :  get_post_meta($posts[$i]->ID, $key, true) ) . '</div>';
                    $body .=        '</div>';
                    $body .=   ' </td>';
                }
            }
            $body .= '</tr>';
            if($key ==  '_tab_expert_review_link'){
                $row_title = "Pricing";
                $body .=    '<tr>';
                $body .=        '<td class="py-2 px-3 text-base font-medium text-left border bg-gray-light-200">' . $row_title . '</td>';
                for($greys =0; $greys < count($posts); $greys++){
                    $body .=             '<td class="py-2 px-3 text-base text-center border bg-gray-light-200">&nbsp;</td>';
                }
                $body .=     '</tr>';
            }else if($key ==  '_tab_data_cap'){
                $row_title = "Security & Privacy";
                $body .=    '<tr>';
                $body .=        '<td class="py-2 px-3 text-base font-medium text-left border bg-gray-light-200">' . $row_title . '</td>';
                for($greys =0; $greys < count($posts); $greys++){
                    $body .=             '<td class="py-2 px-3 text-base text-center border bg-gray-light-200">&nbsp;</td>';
                }
                $body .=     '</tr>';
            }else if($key ==  '_tab_jurisdiction'){
                $row_title = "Speed & Servers";
                $body .=    '<tr>';
                $body .=        '<td class="py-2 px-3 text-base font-medium text-left border bg-gray-light-200">' . $row_title . '</td>';
                for($greys =0; $greys < count($posts); $greys++){
                    $body .=             '<td class="py-2 px-3 text-base text-center border bg-gray-light-200">&nbsp;</td>';
                }
                $body .=     '</tr>';
            }else if($key ==  '_tab_countries'){
                $row_title = "Streaming & P2P";
                $body .=    '<tr>';
                $body .=        '<td class="py-2 px-3 text-base font-medium text-left border bg-gray-light-200">' . $row_title . '</td>';
                for($greys =0; $greys < count($posts); $greys++){
                    $body .=             '<td class="py-2 px-3 text-base text-center border bg-gray-light-200">&nbsp;</td>';
                }
                $body .=     '</tr>';
            }else if($key ==  '_tab_torrenting'){
                $row_title = "Compatibility";
                $body .=    '<tr>';
                $body .=        '<td class="py-2 px-3 text-base font-medium text-left border bg-gray-light-200">' . $row_title . '</td>';
                for($greys =0; $greys < count($posts); $greys++){
                    $body .=             '<td class="py-2 px-3 text-base text-center border bg-gray-light-200">&nbsp;</td>';
                }
                $body .=     '</tr>';
            }else if($key ==  '_tab_smart_dns'){
                $row_title = "Additional Info";
                $body .=    '<tr>';
                $body .=        '<td class="py-2 px-3 text-base font-medium text-left border bg-gray-light-200">' . $row_title . '</td>';
                for($greys =0; $greys < count($posts); $greys++){
                    $body .=             '<td class="py-2 px-3 text-base text-center border bg-gray-light-200">&nbsp;</td>';
                }
                $body .=     '</tr>';
            }
            
            

            
            $rows[] = $body;
            
            
        }
    if($posts){
     $table['header']   = $headings;
     $table['body']     = $rows; 
	$response = array(
						"returnType" => "true",
						"message"	 => "Returned " . count($_REQUEST['data']['include_posts']) . ' records',
                        "data" => $table
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


add_shortcode( 'comparison_table', 'create_comparison_table_schema' );
function create_comparison_table_schema(){
    $html = '<table class="w-auto table">';
    $html .=    '<thead>';
    $html .=        '<tr>';
    $html .=            '<th class="py-2 px-3 text-base font-medium text-center border-0">&nbsp;</th>';
    $html .=        '</tr>';
    $html .=    '</thead>';
    $html .=    '<tbody>';
    $html .=    '</tbody>';
    $html .= '</table>';
    return $html;
}

add_shortcode( 'vpnhunt_why_trust', 'create_why_trust_vpnhunt_schema' );
function create_why_trust_vpnhunt_schema(){
    ob_start();
$html = '<div class="shadow-xl rounded-2xl py-3 px-5 mb-8 md:mb-16 mt-8 border vpnHunt_trust_box relative bg-white">
            <div class="flex flex-col md:flex-row flex-wrap py-5">
                <div class="md:w-4/5 w-full md:pr-10">
                    <h6 class="text-xl md:text-2xl font-medium mb-4"> Why Trust vpnHunt?</h6>
                    <p class="text-base">
                        We\'re completely independent and focused on VPN software. We\'ve spent 150+ years and thousands of hours testing and reviewing VPNs using our unbiased VPN review process to recommend the best ones.
                        <br>
                        <br>
                        Here are some of our key VPN testing statistics:
                    </p>
                </div>
                <div class="w-1/5 hidden md:block">
                    <img src="'. get_stylesheet_directory_uri(). '/images/logo-icon.svg" alt="#" />
                </div>
            </div>
            <div class="flex flex-col md:flex-row flex-wrap my-5 md:space-x-5 xl:space-x-10 md:space-y-0 space-y-5">
                <div class="flex flex-wrap items-start">
                    <img src="'. get_stylesheet_directory_uri(). '/images/lab-icon.svg" alt="#" class="mr-1" />
                    <p>
                        <b class="font-bold block mb-1">35+</b>
                        <span class="text-base">VPNs Tested</span>
                    </p>
                </div>
                <div class="flex flex-wrap items-start">
                    <img src="'. get_stylesheet_directory_uri(). '/images/stopwatch-icon.svg" alt="#" class="mr-1" />
                    <p>
                        <b class="font-bold block mb-1">16,000</b>
                        <span class="text-base">Total Hours of Testing</span>
                    </p>
                </div>
                <div class="flex flex-wrap items-start">
                    <img src="'. get_stylesheet_directory_uri(). '/images/money-icon.svg" alt="#" class="mr-1" />
                    <p>
                        <b class="font-bold block mb-1">$40,000</b>
                        <span class="text-base">Money Invested Of Testing</span>
                    </p>
                </div>
            </div>
        </div>';
    return $html;
}

add_shortcode( 'vpnhunt_our_verdict', 'create_our_verdict_schema' );
function create_our_verdict_schema($attributes){
    ob_start();
    $args = shortcode_atts(array(
        'post_id' => '',
        'verdict_title' => 'Our Verdict'
    ), $attributes);
    $title = $args['verdict_title'];
    $meta = get_post_meta($args['post_id']);
    $verdict_html =    '<div class="relative">';
    $verdict_html .=    '<div class="absolute -left-8 top-1 w-6 h-6  invisible md:visible">';
	$verdict_html .=         '<img src="'.get_stylesheet_directory_uri() .'/images/logo-icon.svg" />';
	$verdict_html .=	'</div>';
    $verdict_html .=    '<h3 class="text-2xl lg:text-3xl font-medium text-black my-5">' . $title. '</h3>';
    $verdict_html .=     '<div class="bg-gray-light-100 rounded-2xl p-5 relative mt-6 py-7">';
    $verdict_html .=        '<div class="flex flex-col md:flex-row justify-end items-center mb-3">';
    $verdict_html .=            '<div class="md:w-1/2 w-full font-medium text-red-400 mb-3 md:mb-0">';
    $verdict_html .=                $meta['_verd_title'][0];
	$verdict_html .=	        '</div>';
    $verdict_html .=            '<div class="md:w-1/2 w-full">';
    $verdict_html .=                '<div class="flex items-center mb-3 md:justify-end">';
    $verdict_html .=                    '<div class="text-base font-medium text-black">Rating:</div>';
    $verdict_html .=                        '<div class="w-1/4 bg-gray-200 rounded h-1.5 mx-3">';
    $verdict_html .=                            '<div class="bg-green-600 h-1.5 rounded" style="width: 88%"></div>';
    $verdict_html .=                        '</div>';
    $verdict_html .=                        '<div class="text-sm font-medium text-black"> '. $meta['_tab_overall_rating'][0] .' <i class="text-xs ml-1 not-italic text-black">/10</i>';
    $verdict_html .=                           '<img src="'.get_stylesheet_directory_uri().'/images/info-icon.svg" alt="#" class="ml-2 inline-block"/></div>';
    $verdict_html .=                         '</div>';
    $verdict_html .=                     '</div>';
    $verdict_html .=                '</div>';
    $verdict_html .=                '<div class="">';
    $verdict_html .=                    '<p>';
    $verdict_html .=                         $meta['_verd_description'][0];
    $verdict_html .=                    '</p>';
    $verdict_html .=                    '<div class="flex flex-wrap items-center mt-5">';
    $verdict_html .=                        '<p class="text-base">Available on:</p>';
    $verdict_html .=                        '<ul class="flex space-x-1 md:space-x-3 pl-3">';
                                        $accounts = explode("|", $meta['_verd_social'][0]); 
                                        foreach($accounts as $account){ 
    $verdict_html .=                              '<li>';
    $verdict_html .=                                '<a class="hover:text-red-400" href="javascript:void(0);">';
    $verdict_html .=                                    '<img src="'.get_stylesheet_directory_uri().'/images/'.$account.'.svg" alt="#" class="inline-block" />';
    $verdict_html .=                                 '</a>';
    $verdict_html .=                               '</li>';
                                        }
    $verdict_html .=                        '</ul>';
    $verdict_html .=                    '</div>';
    $verdict_html .=                '</div>';
    $verdict_html .=                '<div class="flex flex-wrap flex-col md:flex-row bg-gray-dark-400 -mx-5 px-5 mt-7 -mb-7 pb-7 rounded-2xl rounded-tl-none rounded-tr-none">';
    $verdict_html .=                    '<div class="md:w-1/2 w-full">';
    $verdict_html .=                        '<div class="font-bold text-green-dark-400 my-4">Pros</div>';
    $verdict_html .=                            '<ul class="ulList pros_list space-y-2 mr-2">';
                                            $pros = explode("|", $meta['_verd_pros'][0]); 
                                            foreach($pros as $pro){
    $verdict_html .=                                    '<li class="text-base">';
    $verdict_html .=                                         $pro;
    $verdict_html .=                                    '</li>';
                                            }
    $verdict_html .=                            '</ul>';
    $verdict_html .=                        '</div>';
    $verdict_html .=                    '<div class="md:w-1/2 w-full">';
    $verdict_html .=                '<div class="font-bold text-red-dark-400 my-4">Cons</div>';
    $verdict_html .=                    '<ul class="ulList cons_list space-y-2">';
                                    $cons = explode("|", $meta['_verd_cons'][0]); 
                                    foreach($cons as $con){ 
    $verdict_html .=                            '<li class="text-base">';
    $verdict_html .=                                $con;
    $verdict_html .=                            '</li>';
                                    }                                         
    $verdict_html .=                    '</ul>';
    $verdict_html .=                '</div>';
    $verdict_html .=            '</div>';
    $verdict_html .=        '</div>';
    $verdict_html .=    '</div>';
    return $verdict_html;

 }

add_shortcode( 'vpnhunt_vpn_features', 'create_vpn_features_schema' );
function create_vpn_features_schema($attributes){
    $args = shortcode_atts(array(
                'post_id' => ''
            ), $attributes);
    $title = strtolower(get_the_title($args['post_id']));
    $meta = get_post_meta($args['post_id']);
    $features_html = '<h4 class="mt-10 text-xl lg:text-2xl font-medium text-black mb-5">'. ucwords(str_replace('guide', '',  $title)) . 'Updates - ' .date('Y').'</h4>';
    $features_html .=        '<div class="rounded-2xl overflow-x-auto">';
    $features_html .=            '<table class="w-full border-collaps">';
    $features_html .=                '<tbody>';
                        foreach($meta as $key=>$value){ if(str_contains($key , '_feat') === true) {  
    $features_html .=                    '<tr class="bg-gray-light-100">';
    $features_html .=                        '<td class="py-3 px-5 border border-slate-200"><b>'.ucwords(str_replace("_", " ", str_replace("_feat", "", $key))) .' </b></td>';
    $features_html .=                        '<td class="py-3 px-5 border border-slate-200">' . $value[0] .' </td>';
    $features_html .=               '</tr>';
                        } }    
    $features_html .=    '</tbody>';
    $features_html .= '</table>';
    $features_html .= '</div>';
    return $features_html;
   
}

add_shortcode( 'vpnhunt_vpn_coupon', 'create_vpn_coupon_schema' );
function create_vpn_coupon_schema($attributes){
    $args = shortcode_atts(array(
                'post_id' => ''
            ), $attributes);
    $title = strtolower(get_the_title($args['post_id']));
    $meta = get_post_meta($args['post_id']);
    $coupon_html =   '<div class="py-5 lg:px-10 px-4 mt-10 mb-14 deal_coupon_box relative">';
    $coupon_html .=    '<div class="flex md:flex-row flex-col justify-between items-center md:mt-4">';
    $coupon_html .=   '<div class="md:w-1/4 w-full text-center pr-7 md:border-r-2 border-b-2 md:border-b-0 pb-3 md:pb-0 mb-4 md:mb-0 border-dashed border-spacing-10 border-black md:mr-6">';
    $coupon_html .=        '<img src="'.theme_url().'/images/nord-vpn-lgo.svg" alt="#" class="inline-block mx-auto" />';
    $coupon_html .=                '<div class="flex items-center mb-3 justify-center">';
    $coupon_html .=                    '<div class="w-1/4 bg-gray-200 rounded h-1.5 mx-3">';
    $coupon_html .=                        '<div class="bg-green-600 h-1.5 rounded" style="width: 88%"></div>';
    $coupon_html .=                    '</div>';
    $coupon_html .=                    '<div class="text-sm font-medium text-black">';
    $coupon_html .=                        $meta['_tab_overall_rating'][0];
    $coupon_html .=                        '<i class="text-xs ml-1 not-italic text-black">/10</i>';
    $coupon_html .=                        '<img src="'.theme_url().'/images/info-icon.svg" alt="#" class="ml-2 inline-block">';
    $coupon_html .=                    '</div>';
    $coupon_html .=                '</div>';
    $coupon_html .=            '</div>';
    $coupon_html .=            '<div class="md:w-3/4 w-full text-center">';
    $coupon_html .=                '<div class="text-base font-normal">'. $meta['_coup_heading'][0].'</div>';
    $coupon_html .=                '<div class="font-bold md:text-2xl text-xl mt-1 mb-4">' . $meta['_coup_text'][0].'</div>';
    $coupon_html .=            '<a href="javascript:void(0);" class="btn-bg-orange-500 duration-500 rounded text-white font-medium py-2 px-8 inline-block mb-3 items-center uppercase">';
    $coupon_html .=                        '<img src="'.theme_url().'/images/like-white.svg" alt="#" class="inline-block mr-2" />';
    $coupon_html .=                            $meta['_coup_button_text'][0];
    $coupon_html .=                    '</a>';
    $coupon_html .=                '<p class="text-sm">Coupon applied automatically</p>';
    $coupon_html .=            '</div>';
    $coupon_html .=       '</div>';
    $coupon_html .=    '</div>';

    return $coupon_html;

}


add_shortcode( 'vpnhunt_vpn_table', 'create_vpn_table_schema' );
function create_vpn_table_schema($attributes){
    $args = shortcode_atts(array(
                'post_id' => ''
            ), $attributes);
    $title = strtolower(get_the_title($args['post_id']));
    $meta = get_post_meta($args['post_id']);
    
    $args = array(
        'numberposts'      => 1,
		'include'          => $args['post_id'],
		'post_type'        => 'guides',
        
    );


        $posts = get_posts( $args );
        
        
        $count = 1;
        $headings = [];
        $rows = [];
        $table = [];
        $row_title = "";
        $table = '<div class="overflow-x-auto md:mb-14 mb-8 mt-6">';
        $table .= '<table class="w-auto table">';
        $table .=    '<thead>';
        $table .=        '<tr>';
        $table .=  '<th class="py-2 px-3 text-base font-medium text-center border-0">&nbsp;</th>';     
        foreach($posts as $post){
            $table .= '<th class="py-2 px-3 text-base font-medium text-center border">';
            $table .=          '<div class="product-box p-5 relative">';
            $table .=            '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 22 22" fill="none" class="close-icon mx-auto absolute right-0 top-0">';
            $table .=              '<path d="M6.46407 16.8336L16.835 6.46274C17.1591 6.13864 17.2239 5.55528 16.835 5.16637C16.4461 4.77747 15.8627 4.84228 15.5386 5.16637L5.16771 15.5373C4.9958 15.7092 4.89923 15.9423 4.89923 16.1855C4.89923 16.4286 4.9958 16.6617 5.16771 16.8336C5.55662 17.2225 6.13998 17.1577 6.46407 16.8336Z" fill="#0D0E10"></path>';
            $table .=              '<path d="M16.8318 15.5373L6.46088 5.16637C6.13679 4.84228 5.55342 4.77746 5.16451 5.16637C4.7756 5.55528 4.84042 6.13864 5.16451 6.46273L15.5354 16.8336C15.7073 17.0055 15.9405 17.1021 16.1836 17.1021C16.4267 17.1021 16.6599 17.0055 16.8318 16.8336C17.2207 16.4447 17.1559 15.8614 16.8318 15.5373Z" fill="#0D0E10"></path>';
            $table .=            '</svg>';
            $table .=            '<p></p>';
            $table .=            '<img src="' . get_stylesheet_directory_uri() . '/images/' . $post->post_name . '-small-logo.svg" alt="#" class="mx-auto my-2" />';
            $table .=            '<a href="javascript:void(0);" class="btn-bg-orange-500 duration-500 rounded text-white font-medium py-1 px-3 inline-block">Visit Site</a>';
            $table .=          '</div>';
            $table .=          '<a href="javascript:void(0);" class="text-black rounded border border-[#E9E9E9] text-center py-3 w-36 inline-block add-product hidden">';
            $table .=            '<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none" class="inline-block mr-2">';
            $table .=              '<path d="M11.9154 18.3333L11.9154 3.66667C11.9154 3.20833 11.5487 2.75 10.9987 2.75C10.4487 2.75 10.082 3.20833 10.082 3.66667L10.082 18.3333C10.082 18.5764 10.1786 18.8096 10.3505 18.9815C10.5224 19.1534 10.7556 19.25 10.9987 19.25C11.5487 19.25 11.9154 18.7917 11.9154 18.3333Z" fill="#0D0E10"/>';
            $table .=              '<path d="M3.66667 11.9167L18.3333 11.9167C18.7917 11.9167 19.25 11.55 19.25 11C19.25 10.45 18.7917 10.0833 18.3333 10.0833L3.66667 10.0833C3.42355 10.0833 3.19039 10.1799 3.01849 10.3518C2.84658 10.5237 2.75 10.7569 2.75 11C2.75 11.55 3.20833 11.9167 3.66667 11.9167Z" fill="#0D0E10"/>';
            $table .=            '</svg>';
            $table .=              'Read more';
            $table .=          '</a>';
            $table .=        '</th>';
            $count++;
        }
        
        $table .=        '</tr>';
        $table .=    '</thead>';
        $table .=    '<tbody>';
        
        $meta = get_post_meta($posts[0]->ID);
        foreach($meta as $key=>$value){
            if(str_contains($key, "_tab") === false){
                unset($meta[$key]);
            }
        }
        
        foreach($meta as $key=>$value){
            if($key == '_tab_cheapest_price'){
               
                $table .= '<tr>';
                $table .=    '<td class="py-2 px-3 text-base text-left border">';
                $table .=        '<div class="items-center justify-between flex">';
                $table .=            ucwords(str_replace("_", " ", str_replace("_tab", " ", $key))); 
                $table .=            '<img src="' . get_stylesheet_directory_uri() . '/images/question-mark.svg" class="inline-block" />';
                $table .=        '</div>';
                $table .=    '</td>';
            }else if($key == '_tab_cheapest_price'){

            }else{
                $table  .= '<tr>';
                $table .=    '<td class="py-2 px-3 text-base text-left border">';
                $table .=        '<div class="items-center justify-between flex">';
                $table .=             ucwords(str_replace("_", " ", str_replace("_tab", " ", $key))); 
                $table .=            '<img src="' . get_stylesheet_directory_uri() . '/images/question-mark.svg" class="inline-block" />';
                $table .=        '</div>';
                $table .=    '</td>';
            }
            for($i = 0; $i < count($posts); $i++){
                if($key === '_tab_overall_rating'){
                    $table .= '<td class="py-2 px-3 text-base text-center border">';
                    if(get_post_meta($posts[$i]->ID, $key, true)){
                    
                        $table .=    '<div class="flex items-center mb-3 justify-center">';
                        $table .=        '<div class="w-1/4 bg-gray-200 rounded h-1.5 mx-3">';
                        $table .=            '<div class="bg-green-600 h-1.5 rounded" style="width: 88%"></div>';
                        $table .=        '</div>';
                        $table .=        '<div class="text-sm font-medium text-black">' . get_post_meta($posts[$i]->ID, $key, true).' <i class="text-xs ml-1 not-italic text-black">/10</i></div>';
                        $table .=    '</div>';
                    
                    }else{
                        $table .=    '<div class="flex items-center mb-3 justify-center">';
                        $table .=        '<div class="text-sm font-medium text-black"> N/A </div>';
                        $table .=    '</div>';
                    }
                    $table .= '</td>';
                    
                }else{
                    
                    $table .=    '<td class="py-2 px-3 text-base text-center border">';
                    $table .=        '<div class="flex items-center mb-3 justify-center">';
                    $table .=            '</div>';
                    $table .=           '<div class="text-sm font-medium text-black">' . ucfirst( !get_post_meta($posts[$i]->ID, $key, true) ? 'N/A' :  get_post_meta($posts[$i]->ID, $key, true) ) . '</div>';
                    $table .=        '</div>';
                    $table .=   ' </td>';
                }
            }
            $table .= '</tr>';
            if($key ==  '_tab_overall_rating'){

                $row_title = "Pricing";
                $table .=    '<tr>';
                $table .=        '<td class="py-2 px-3 text-base font-medium text-left border bg-gray-light-200">' . $row_title . '</td>';
                for($greys =0; $greys < count($posts); $greys++){
                    $table .=             '<td class="py-2 px-3 text-base text-center border bg-gray-light-200">&nbsp;</td>';
                }
                $table .=     '</tr>';
            }else if($key ==  '_tab_data_cap'){
                $row_title = "Security & Privacy";
                $table .=    '<tr>';
                $table .=        '<td class="py-2 px-3 text-base font-medium text-left border bg-gray-light-200">' . $row_title . '</td>';
                for($greys =0; $greys < count($posts); $greys++){
                    $table .=             '<td class="py-2 px-3 text-base text-center border bg-gray-light-200">&nbsp;</td>';
                }
                $table .=     '</tr>';
            }else if($key ==  '_tab_jurisdiction'){
                $row_title = "Speed & Servers";
                $table .=    '<tr>';
                $table .=        '<td class="py-2 px-3 text-base font-medium text-left border bg-gray-light-200">' . $row_title .'</td>';
                for($greys =0; $greys < count($posts); $greys++){
                    $table .=             '<td class="py-2 px-3 text-base text-center border bg-gray-light-200">&nbsp;</td>';
                }
                $table .=     '</tr>';
            }else if($key ==  '_tab_countries'){
                $row_title = "Streaming & P2P";
                $table .=    '<tr>';
                $table .=        '<td class="py-2 px-3 text-base font-medium text-left border bg-gray-light-200">' . $row_title . '</td>';
                for($greys =0; $greys < count($posts); $greys++){
                    $table .=             '<td class="py-2 px-3 text-base text-center border bg-gray-light-200">&nbsp;</td>';
                }
                $table .=     '</tr>';
            }else if($key ==  '_tab_torrenting'){
                $row_title = "Compatibility";
                $table .=    '<tr>';
                $table .=        '<td class="py-2 px-3 text-base font-medium text-left border bg-gray-light-200">' . $row_title . '</td>';
                for($greys =0; $greys < count($posts); $greys++){
                    $table .=             '<td class="py-2 px-3 text-base text-center border bg-gray-light-200">&nbsp;</td>';
                }
                $table .=     '</tr>';
            }else if($key ==  '_tab_smart_dns'){
                $row_title = "Additional Info";
                $table .=    '<tr>';
                $table .=    '<td class="py-2 px-3 text-base font-medium text-left border bg-gray-light-200">' . $row_title . '</td>';
                for($greys =0; $greys < count($posts); $greys++){
                    $table .=  '<td class="py-2 px-3 text-base text-center border bg-gray-light-200">&nbsp;</td>';
                }
                $table .= '</tr>';
            }
            
            

            
            //$rows[] = $body;
            
            
        }
        $table .=    '</tbody>';
        $table .= '</table>';
        $table .= '</div>';
        return $table;

}


function theme_url(){
    return get_stylesheet_directory_uri();
}

add_filter('gutenberg_can_edit_post', '__return_false', 5);
add_filter('use_block_editor_for_post', '__return_false', 5);

/* Nav Walker */
function register_navwalker(){
	require_once get_template_directory() . '/template-parts/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
