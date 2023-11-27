    <!-- footer start here -->
    <footer class="bg-fixed bg-cover md:py-16 py-14" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/gray-bg.png');">
        <div class="container mx-auto">
            <div class="lg:flex justify-between align-middle border-b pb-3">
                <?php dynamic_sidebar('footer-top-left'); ?>
                <?php dynamic_sidebar('footer-top-right'); ?>
            </div>
            <ul class="lg:flex lg:space-x-4 lg:space-y-0 space-y-4 py-5">
                <li><a href="javascript:void(0);" class="hover:text-red-400 text-base font-medium">About Us</a></li>
                <li><a href="javascript:void(0);" class="hover:text-red-400 text-base font-medium">Our VPN Experts</a></li>
                <li><a href="javascript:void(0);" class="hover:text-red-400 text-base font-medium">Our Reviews Process</a></li>
                <li><a href="javascript:void(0);" class="hover:text-red-400 text-base font-medium">Tools</a></li>
                <li><a href="javascript:void(0);" class="hover:text-red-400 text-base font-medium">Research</a></li>
                <li><a href="javascript:void(0);" class="hover:text-red-400 text-base font-medium">Contact</a></li>
            </ul>
            <div class="lg:flex flex-row-reverse justify-between align-middle">
                <ul class="lg:flex lg:space-x-4">
                    <a href="javascript:void(0);" class="hover:text-red-400 text-xs underline">Privacy Policy</a>
                    <a href="javascript:void(0);" class="hover:text-red-400 text-xs underline">Cookie Policy</a>
                    <a href="javascript:void(0);" class="hover:text-red-400 text-xs underline">Terms of Use</a>
                    <a href="javascript:void(0);" class="hover:text-red-400 text-xs underline">Disclaimer</a>
                </ul>
                <p class="text-xs mt-2 lg:mt-0">vpnHunt is managed by CyberPoint Media, LLC | © <?php echo date('Y'); ?>.  All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
<?php wp_footer(); ?>