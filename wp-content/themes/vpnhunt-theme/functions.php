<?php

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
    wp_localize_script( 'custom', 'front_urls', array( 'theme_url' => get_site_url() . '/wp-content/themes/vpnhunt-theme') );
    

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
remove_filter( 'the_content', 'wpautop' );



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
        //var_dump(str_contains($post->post_name, 'guide'));
        if(str_contains($post->post_name, 'guide') === true){
            get_template_part('template-parts/guides-form');
        }
        
}

function guides_save_meta_box( $post_id ) {
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( $parent_id = wp_is_post_revision( $post_id ) ) {
        $post_id = $parent_id;
    }
    $fields = [
                'overall_rating',
                'expert_review_link',
                'cheapest_price',
                'pay_monthly_price',
                'free_trial',
                'money_back_guarantee',
                'data_cap',
                'logging_policy',
                'data_leaks',
                'encryption',
                'jurisdiction',
                'average_local_download_speed',
                'servers',
                'ip_addresses',
                'countries',
                'us_netflix',
                'streaming_services_nblocked',
                'torrenting',
                'simultaneous_connections',
                'native_app_support',
                'compatible_via_router',
                'smart_dns',
                'kill_switch',
                'browser_extensions',
                'works_in_china',
                'support' 
                ];
    foreach ( $fields as $field ) {
        if ( array_key_exists( $field, $_POST ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
        }
     }
}
add_action( 'save_post', 'guides_save_meta_box' );
