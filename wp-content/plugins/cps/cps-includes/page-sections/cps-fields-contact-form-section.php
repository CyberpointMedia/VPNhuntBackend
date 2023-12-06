<?php 

require_once ABSPATH ."wp-load.php";
global $wpdb;

function cps_contact_form_section() {
   
    // If plugin settings don't exist, then create them
    if( !get_option( 'cps_contact_form_section_settings' ) ) {
        add_option( 'cps_contact_form_section_settings' );
    }

    add_settings_section(
    
        // Unique identifier for the section
        'cps_contact_form_section',
    
        // Section Title
        __( '', 'cps' ),
    
        // Callback for an optional description
        'cps_contact_form_section_function',
    
        // Admin page to add section to
        'cps-contact-form-section'
    );



    // add_settings_field(
    
    //     // Unique identifier for field
    //     'section_title',
    
    //     // Field Title
    //     __( 'Section Title', 'cps'),
    
    //     // Callback for field markup
    //     'cps_canvas_section_title_function',
    
    //     // Page to go on
    //     'cps-contact-form-section',

    //     // Section to go in
    //     'cps_contact_form_section'
    // );

    // add_settings_field(
    
    //     // Unique identifier for field
    //     'section_description',
    
    //     // Field Title
    //     __( 'Section Description', 'cps'),
        
    //     // Callback for field markup
    //     'cps_canvas_section_description_function',
        
    //     // Page to go on
    //     'cps-contact-form-section',
        
    //     // Section to go in
    //     'cps_contact_form_section'
    // );

    


    

    

register_setting(
  'cps_contact_form_section_settings',
  'cps_contact_form_section_settings'
);

}

add_action( 'admin_init', 'cps_contact_form_section' );

function cps_contact_form_section_function() {
    global $wpdb;
    $result = $wpdb->get_results( "SELECT * FROM  `vwppn_contact_form`" );
     ?>
    <br/>
    <div class="container-fluid">
        <div class="row">
            <div class="col"><?php esc_html_e( 'Contact Form Settings', 'cps' );?> </div>
            <div class="col right-block">
                <button id="export-table" type="button" class="btn btn-sm btn-outline-primary">Export to Excel</button>
            </div>
        </div>
    </div>
    
    
    <div class="container-fluid">
        <table id="contact-form-queries" class="table table-striped">
            <caption style="display:none;">Contact Form Leads</caption>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Create Date</th>
                    <th scope="col">Update Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $count = 1; foreach ( $result as $contacts ){ ?>
                <tr>
                    <th scope="row"><?php echo $count; ?></th>
                    <td data-first_name="<?php echo $contacts->first_name; ?>"><?php echo $contacts->first_name; ?></td>
                    <td><?php echo $contacts->last_name; ?></td>
                    <td><?php echo $contacts->email; ?></td>
                    <td><?php echo $contacts->country_code . '-' .$contacts->phone_number; ?></td>
                    <td><?php echo $contacts->create_date; ?></td>
                    <td><?php echo $contacts->update_date; ?></td>
                    <td><span class="dashicons dashicons-editor-expand data_record" data-id="<?php echo $contacts->id; ?>" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> </span></td>
                </tr>
                <?php $count++; } ?>
            </tbody>
        </table>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
    
    
<?php }

function cps_contact_form_section_title_function() {
    $options = get_option( 'cps_contact_form_section_settings' );
    $section_title = '';
    if( isset( $options[ 'section_title' ] ) ) {
        $section_title = esc_html( $options['section_title'] );
    }

    echo    '<input 
                    type="text" 
                    id="first_" 
                    name="cps_contact_form_section_settings[section_title]" 
                    value="' . $section_title . '" 
                    placeholder="Please enter section title" class="regular-text" />';

}

function cps_contact_form_section_description_function() {

$options = get_option( 'cps_canvas_section_settings' );

    $section_description = '';
    if( isset( $options[ 'section_description' ] ) ) {
        $section_description = esc_html( $options['section_description'] );
    }
    
    echo '<textarea type="text" id="footer_scripts" name="cps_canvas_section_settings[section_description]" placeholder="Please enter section description here" cols="100" rows="10">' . $section_description . '</textarea>';
}



