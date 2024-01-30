    <?php 
            $configuration      = get_option('cps_configuration_settings');
            if($configuration['managed_by']){
                $managed_by         = $configuration['managed_by'];
            } 
            if($configuration['footer_logo_description']){
                $footer_logo_des    = $configuration['footer_logo_description'];
            }
            ?>
    <!-- footer start here -->
    <footer class="bg-gray-light-100 md:py-14 py-14">
        <div class="container mx-auto">
            <div class="lg:flex justify-between align-middle border-b pb-3">
                <div class="relative">
                    <span class="lg:absolute left-0 top-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/footer-logo.png" alt="#" class="inline-block"/></span>
                    <p class="lg:pl-14 text-base font-medium"><?php echo $footer_logo_des; ?></p>
                </div>
                <ul class="flex space-x-3 mt-3 lg:mt-0 lg:ml-8 social-icons">
                    <?php $options = get_option( 'cps_configuration_settings' );
                        foreach($options['social_media'] as $key=>$value){ ?>
                    
                            <li><a href="<?php echo $value; ?>" class="<?php echo str_replace("_link", "", $key); ?> duration-300"></a></li>
                    
                    <?php } ?>
                </ul>
            </div>
            <?php 
                    $args = array(
                            'theme_location'    => 'footer-top-menu',
                            'container'         => '',
                            'container_class'   => '',
                            'container_id'      => '',
                            'menu_class'        => 'lg:flex lg:space-x-4 lg:space-y-0 space-y-4 py-5',
                            'add_link_class'    => 'hover:text-red-400 text-base font-medium'
                    );
                    wp_nav_menu( $args ); 
            ?>
            
            <div class="lg:flex flex-row-reverse justify-between align-middle">
                <?php 
                    $args = array(
                            'theme_location'    => 'footer-bottom-menu',
                            'container'         => '',
                            'container_class'   => '',
                            'container_id'      => '',
                            'menu_class'        => 'lg:flex lg:space-x-4',
                            'add_link_class'    => 'hover:text-red-400 text-xs underline'
                    );
                    wp_nav_menu( $args ); 
                ?>
                <p class="text-xs mt-2 lg:mt-0"><?php echo $managed_by; ?> | © <?php echo date('Y'); ?>.  All rights reserved.</p>
            </div>
        </div>
    </footer>
    <!-- footer end here -->


</body>
<?php wp_footer(); ?>
</html>