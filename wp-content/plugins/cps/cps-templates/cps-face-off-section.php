<form method="post" action="options.php">
    <!-- Display necessary hidden fields for settings -->
    <?php settings_fields( 'cps_face_off_section_settings' ); ?>
    <!-- Display the settings sections for the page -->
    <?php do_settings_sections( 'cps-face-off-section' ); ?>
    <!-- Default Submit Button -->
    <?php submit_button(); ?>
</form>