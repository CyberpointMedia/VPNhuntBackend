<form method="post" action="options.php">
    <!-- Display necessary hidden fields for settings -->
    <?php settings_fields( 'cps_header_footer_sc_settings' ); ?>
    <!-- Display the settings sections for the page -->
    <?php do_settings_sections( 'cps-header-footer-scripts' ); ?>
    <!-- Default Submit Button -->
    <?php submit_button(); ?>
</form>