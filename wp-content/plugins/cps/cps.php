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
define( 'CPS_PAGE_DESC', 'This is a custom plugin created by the Cyber Point Team that combines the functionality of different plugins.' );

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

include( CPS_URL . 'cps/cps-includes/page-sections/cps-fields-atz-s3.php');

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

function cps_atz_s3_menu(){
    if( !current_user_can('manage_options')){
        return;
    }
    
?>
    <div class="wrap">
        <div id="cps-panel" class="cps-panel">
            <div class="cps-panel-content">
                <?php include( CPS_URL . 'cps/cps-includes/cps-header.php'); ?>
                <div class="cps-body">
                    <?php include( CPS_URL . 'cps/cps-templates/cps-atz-s3.php'); ?>
                </div>
            </div>
            <?php include( CPS_URL . 'cps/cps-includes/cps-footer.php'); ?>
        </div>
    </div>
<?php
}