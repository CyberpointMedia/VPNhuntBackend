<form method="post" action="options.php">
    <!-- Display necessary hidden fields for settings -->
    <?php settings_fields( 'cps_why_trust_section_settings' ); ?>
    <!-- Display the settings sections for the page -->
    <?php do_settings_sections( 'cps-why-trust-section' ); ?>
    <!-- Default Submit Button -->
    <?php submit_button(); ?>
</form>