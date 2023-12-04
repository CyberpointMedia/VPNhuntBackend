<?php 

//backend css

function cps_admin_styles(){
    wp_enqueue_style( "cps-admin", "/wp-content/plugins/cps/css/cps-admin.css", [], time() );
    wp_enqueue_style( "cps-bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css", [], time() );
    wp_enqueue_style( "cps-datatables", "//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css", [], time() );
} 
add_action( "admin_enqueue_scripts", "cps_admin_styles" );

//frontend css
function cps_frontend_styles(){
    wp_enqueue_style( "cps-front-style", "/wp-content/plugins/cps/css/cps-frontend.css", [], time() );
} 
add_action( "wp_enqueue_scripts", "cps_frontend_styles" );