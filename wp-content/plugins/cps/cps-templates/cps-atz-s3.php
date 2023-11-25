<form method="post" action="options.php">
    <!-- Display necessary hidden fields for settings -->
    <?php settings_fields( 'cps_atz_s3_settings' ); ?>
    <!-- Display the settings sections for the page -->
    <?php do_settings_sections( 'cps-atz-s3' ); ?>
    <!-- Default Submit Button -->
    <?php submit_button(); ?>
</form>