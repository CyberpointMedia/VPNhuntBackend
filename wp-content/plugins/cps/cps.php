<?php
/*
 * Plugin Name:       Cyber Point Cloud Solutions
 * Plugin URI:        https://www.cyberpoint.co/
 * Description:       Handle media with cloud for faster website.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2+
 * Author:            Cyber Point
 * Author URI:        https://www.cyberpoint.co
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       cyber-point-cloud-solutions
 * Domain Path:       /languages
 */

if( !defined ('WPINC') ){
    die("You are not authorised to access this page");
}
define( 'CPS_URL', WP_PLUGIN_DIR . '/');
define( 'CPS_PAGE_DESC', '' );

//ENQUEUE CSS
include( CPS_URL . 'cps/cps-includes/cps-styles.php');

//ENQUEUE JS
include( CPS_URL . 'cps/cps-includes/cps-scripts.php');

//ENQUEUE Menus
include( CPS_URL . 'cps/cps-includes/cps-menus.php');

//Include Functions file
include( CPS_URL . 'cps/cps-includes/cps-functions.php');

//Include Configuration Fields 
include( CPS_URL . 'cps/cps-includes/page-sections/cps-fields-configuration.php');

//Include Configuration Fields 
include( CPS_URL . 'cps/cps-includes/page-sections/cps-fields-header-footer-scripts.php');

include( CPS_URL . 'cps/cps-includes/page-sections/cps-fields-hero-section.php');

include( CPS_URL . 'cps/cps-includes/page-sections/cps-fields-canvas-section.php');

include( CPS_URL . 'cps/cps-includes/page-sections/cps-fields-face-off-section.php');

include( CPS_URL . 'cps/cps-includes/page-sections/cps-fields-why-trust-section.php');

include( CPS_URL . 'cps/cps-includes/page-sections/cps-fields-contact-form-section.php');
include( CPS_URL . 'cps/cps-includes/page-sections/cps-modal.php');

function cps_settings(){
    if( !current_user_can('manage_options')){
        return;
    }
    
    ?>
    <div class="wrap">
        <div id="cps-panel" class="cps-panel">
            <div class="cps-panel-content">
                <?php include( CPS_URL . 'cps/cps-includes/cps-header.php'); ?>
                <div class="cps-body">
                    <?php include( CPS_URL . 'cps/cps-templates/cps-configuration.php'); ?>
                </div>
            </div>
        </div>
        <?php include( CPS_URL . 'cps/cps-includes/cps-footer.php'); ?>
    </div>
<?php
}

function cps_sticky_bar(){
    if( !current_user_can('manage_options')){
        return;
    }
    ?>
    <div class="wrap">
        <div id="cps-panel" class="cps-panel">
            <div class="cps-panel-content">
                <?php include( CPS_URL . 'cps/cps-includes/cps-header.php'); ?>
                <div class="cps-body">
                <?php include( CPS_URL . 'cps/cps-includes/cps-coming-soon.php'); ?>
                </div>
            </div>
        </div>
        <?php include( CPS_URL . 'cps/cps-includes/cps-footer.php'); ?>
    </div>
        
<?php
}

function cps_smtp_mailer(){
    if( !current_user_can('manage_options')){ return; }
    ?>
    <div class="wrap">
        <div id="cps-panel" class="cps-panel">
            <div class="cps-panel-content">
                <?php include( CPS_URL . 'cps/cps-includes/cps-header.php'); ?>
                <div class="cps-body">
                    <?php include( CPS_URL . 'cps/cps-includes/cps-coming-soon.php'); ?>
                </div>
            </div>
            <?php include( CPS_URL . 'cps/cps-includes/cps-footer.php'); ?>
        </div>
    </div>
<?php
}

function cps_pop_up(){
    if( !current_user_can('manage_options')){
        return;
    }
    ?>
    <div class="wrap">
        <div id="cps-panel" class="cps-panel">
            <div class="cps-panel-content">
                <?php include( CPS_URL . 'cps/cps-includes/cps-header.php'); ?>
                <div class="cps-body">
                <?php include( CPS_URL . 'cps/cps-includes/cps-coming-soon.php'); ?>
                </div>
            </div>
            <?php include( CPS_URL . 'cps/cps-includes/cps-footer.php'); ?>
        </div>
    </div>
            
<?php
}

function cps_external_links(){
    if( !current_user_can('manage_options')){
        return;
    }
    ?>
    <div class="wrap">
        <div id="cps-panel" class="cps-panel">
            <div class="cps-panel-content">
                <?php include( CPS_URL . 'cps/cps-includes/cps-header.php'); ?>
                <div class="cps-body">
                    <?php include( CPS_URL . 'cps/cps-includes/cps-coming-soon.php'); ?>
                </div>
            </div>
            <?php include( CPS_URL . 'cps/cps-includes/cps-footer.php'); ?>
        </div>
    </div>
            
<?php
}

function cps_translate(){
    if( !current_user_can('manage_options')){
        return;
    }
    ?>
    <div class="wrap">
        <div id="cps-panel" class="cps-panel">
            <div class="cps-panel-content">
                <?php include( CPS_URL . 'cps/cps-includes/cps-header.php'); ?>
                <div class="cps-body">
                    <?php include( CPS_URL . 'cps/cps-includes/cps-coming-soon.php'); ?>
                </div>
            </div>
            <?php include( CPS_URL . 'cps/cps-includes/cps-footer.php'); ?>
        </div>
    </div>
<?php
}

function cps_header_footer_scripts(){
    if( !current_user_can('manage_options')){
        return;
    }
    
    ?>
    <div class="wrap">
        <div id="cps-panel" class="cps-panel">
            <div class="cps-panel-content">
                <?php include( CPS_URL . 'cps/cps-includes/cps-header.php'); ?>
                <div class="cps-body">
                    <?php include( CPS_URL . 'cps/cps-templates/cps-header-footer-scripts.php'); ?>
                </div>
            </div>
            <?php include( CPS_URL . 'cps/cps-includes/cps-footer.php'); ?>
        </div>
    </div>
<?php
}

function cps_hero_section_menu(){
    if( !current_user_can('manage_options')){
        return;
    }
    
?>
    <div class="wrap">
        <div id="cps-panel" class="cps-panel">
            <div class="cps-panel-content">
                <?php include( CPS_URL . 'cps/cps-includes/cps-header.php'); ?>
                <div class="cps-body">
                    <?php include( CPS_URL . 'cps/cps-templates/cps-hero-section.php'); ?>
                </div>
            </div>
            <?php include( CPS_URL . 'cps/cps-includes/cps-footer.php'); ?>
        </div>
    </div>
<?php
}

function cps_canvas_section_menu(){
    if( !current_user_can('manage_options')){
        return;
    }
    
?>
    <div class="wrap">
        <div id="cps-panel" class="cps-panel">
            <div class="cps-panel-content">
                <?php include( CPS_URL . 'cps/cps-includes/cps-header.php'); ?>
                <div class="cps-body">
                    <?php include( CPS_URL . 'cps/cps-templates/cps-canvas-section.php'); ?>
                </div>
            </div>
            <?php include( CPS_URL . 'cps/cps-includes/cps-footer.php'); ?>
        </div>
    </div>
<?php
}

function cps_face_off_section_menu(){
    if( !current_user_can('manage_options')){
        return;
    }
    
?>
    <div class="wrap">
        <div id="cps-panel" class="cps-panel">
            <div class="cps-panel-content">
                <?php include( CPS_URL . 'cps/cps-includes/cps-header.php'); ?>
                <div class="cps-body">
                    <?php include( CPS_URL . 'cps/cps-templates/cps-face-off-section.php'); ?>
                </div>
            </div>
            <?php include( CPS_URL . 'cps/cps-includes/cps-footer.php'); ?>
        </div>
    </div>
<?php
}

function cps_why_trust_section_menu(){
    if( !current_user_can('manage_options')){
        return;
    }
    
?>
    <div class="wrap">
        <div id="cps-panel" class="cps-panel">
            <div class="cps-panel-content">
                <?php include( CPS_URL . 'cps/cps-includes/cps-header.php'); ?>
                <div class="cps-body">
                    <?php include( CPS_URL . 'cps/cps-templates/cps-why-trust-section.php'); ?>
                </div>
            </div>
            <?php include( CPS_URL . 'cps/cps-includes/cps-footer.php'); ?>
        </div>
    </div>
<?php
}

function cps_contact_form_section_menu(){
    if( !current_user_can('manage_options')){
        return;
    }
    
?>
    <div class="wrap">
        <div id="cps-panel" class="cps-panel">
            <div class="cps-panel-content">
                <?php include( CPS_URL . 'cps/cps-includes/cps-header.php'); ?>
                <div class="cps-body">
                    <?php include( CPS_URL . 'cps/cps-templates/cps-contact-form-section.php'); ?>
                </div>
            </div>
            <?php include( CPS_URL . 'cps/cps-includes/cps-footer.php'); ?>
        </div>
    </div>
<?php
}


global $jal_db_version;
$jal_db_version = '1.0';

function jal_install() {
	global $wpdb;
	global $jal_db_version;

	$table_name = $wpdb->prefix . 'contact_form';
	
	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE $table_name (
		`id` int(11) primary key NOT NULL AUTO_INCREMENT,
        `first_name` varchar(50) NOT NULL,
        `last_name` varchar(50) NOT NULL,
        `email` varchar(100) NOT NULL,
        `phone_number` varchar(10) NULL,
        `country_code` varchar(5) NULL,
        `message` text NOT NULL,
        `status` tinyint(1) DEFAULT 1,
        `create_date` datetime NOT NULL DEFAULT current_timestamp(),
        `update_date` datetime DEFAULT NULL ON UPDATE current_timestamp()
	) $charset_collate;";
    
    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
	dbDelta( $sql );

	add_option( 'cps_configuration_settings', $jal_db_version );
}
register_activation_hook( __FILE__, 'jal_install' );


