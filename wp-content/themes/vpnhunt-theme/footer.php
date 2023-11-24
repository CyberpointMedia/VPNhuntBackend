    <!-- footer start here -->
    <footer class="bg-fixed bg-cover md:py-16 py-14" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/gray-bg.png');">
        <div class="container mx-auto">
            <div class="lg:flex justify-between align-middle border-b pb-3">
                <div class="relative">
                    <span class="lg:absolute left-0 top-0"><img src="<?php echo get_template_directory_uri(); ?>/images/footer-logo.png" alt="#" class="inline-block"/></span>
                    <p class="lg:pl-14 text-base font-medium">VPN Hunt is your expert guide in the VPN landscape, offering unbiased reviews, in-depth analysis, and user-centric insights. Trust our 150+ years of combined experience for secure, private browsing.</p>
                </div>
                
                <ul class="flex space-x-3 mt-3 lg:mt-0 lg:ml-8 social-icons">
                
                    <li><a href="javascript:void(0);" class="facebook duration-300"></a></li>
                    <li><a href="javascript:void(0);" class="linkdin duration-300"></a></li>
                    <li><a href="javascript:void(0);" class="instagram duration-300"></a></li>
                    <li><a href="javascript:void(0);" class="youtube duration-300"></a></li>
                    <li><a href="javascript:void(0);" class="twitter duration-300"></a></li>
                </ul>
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