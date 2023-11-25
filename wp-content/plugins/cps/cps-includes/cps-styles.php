<?php 

//backend css

function cps_admin_styles(){
    wp_enqueue_style( "cps-admin", "/wp-content/plugins/cps/css/cps-admin.css", [], time() );
} 
add_action( "admin_enqueue_scripts", "cps_admin_styles" );

//frontend css
function cps_frontend_styles(){
    wp_enqueue_style( "cps-front-style", "/wp-content/plugins/cps/css/cps-frontend.css", [], time() );
} 
add_action( "wp_enqueue_scripts", "cps_frontend_styles" );