<?php

function theme_setup(){
    
    //Add theme support for Title Tags
    add_theme_support( 'title-tag' );

    //Add theme support for logo
    add_theme_support( 'custom-logo', array(
        'height' => 480,
        'width'  => 720,
    ) );

    //Add option for post thumbnails
    add_theme_support( 'post-thumbnails' );

    //Add custom background
    add_theme_support( 'custom-background' );

    //Add menu support
    register_nav_menus( array(
        'header-menu' => 'Header Menu'
    ));
    
}

add_action('after_setup_theme','theme_setup');

//enqueue styles and scripts
add_action( 'wp_enqueue_scripts', 'vpnhunt_enqueue_scripts' );
function vpnhunt_enqueue_scripts() {
    
    //enqueue styles
    wp_enqueue_style(   'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css', array(), '5.15.3' );
    wp_enqueue_style(   'style', get_stylesheet_directory_uri() . '/css/tailwind-styles.css', array(), '1.0' );
    wp_enqueue_style(   'theme-style', get_stylesheet_directory_uri() . '/style.css', array(), '1.0' );
    
    //enqueue scripts
    wp_enqueue_script(  'custom', get_stylesheet_directory_uri() . '/js/custom.js', array( 'jquery' ), '1.0', true );
}

function add_more_css_attributes ( $url ) {
	if ( FALSE === strpos( $url, 'font-awesome/5.15.3/css/all.min.css' ) ) return $url;
	return "$url' integrity='sha512-8i/ZkzBYlL3oL7UI1+rDlp1T8YPuOjvMK6tN2a50N/4zZ1PZUNw8tZtYU0pww+WvPmOgC6Zg7Ffr8Nz3wPu+ARxQ==' crossorigin='anonymous' referrerpolicy='no-referrer' ";
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
    register_post_type( 'product', $args );

    
    // register taxonomy
    register_taxonomy(  'vpn_providers_category', 
                        'vpn_provider', 
                        array( 
                                'hierarchical' => true, 
                                'label' => 'Category', 
                                'query_var' => true, 
                                'rewrite' => array( 
                                                    'slug' => 'vpn-providers-category' 
                                            )
                        )
                    );
}
add_action( 'init', 'vpn_picks_init' );


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

