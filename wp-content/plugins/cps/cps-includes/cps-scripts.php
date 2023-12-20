<?php 

//Load JS Backend
function cps_admin_scripts() {
    
    wp_enqueue_script( "cps-bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js", array('wp-blocks', 'wp-editor', 'jquery'), time() );
    wp_enqueue_script( "cps-datatable", "//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js", array('cps-bootstrap'), time() );
    wp_enqueue_script( "cps-jquery-validate", "/wp-content/plugins/cps/js/jquery.validate.min.js", array('cps-datatable'), time() );
    wp_enqueue_script( "cps-table-to-excel", "https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js", array('cps-datatable'), time() );
    wp_enqueue_script( "cps-admin", "/wp-content/plugins/cps/js/cps-admin.js", array( 'cps-table-to-excel'), time() );
    wp_localize_script( 'cps-admin', 'ajax', array( 'url' => admin_url( 'admin-ajax.php' ) ) );
    
    

}
add_action( "admin_enqueue_scripts", "cps_admin_scripts", 100 );


//Load CSS on the frontend
function cps_frontend_scripts(){
    wp_enqueue_script( 'comment-reply' );
    wp_enqueue_script( "cps-frontend", "/wp-content/plugins/cps/js/cps-frontend.js", ['jquery'], time(), true);
    wp_localize_script( 'cps-frontend', 'ajax', array( 'url' => admin_url( 'admin-ajax.php' ) ) );
    
    
}
add_action( "wp_enqueue_scripts", "cps_frontend_scripts");