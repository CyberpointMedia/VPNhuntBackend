<!-- page link start -->
<section class="page-link mobile-none">
    <div class="container">
        <ul class="flex space-x-3 justify-center">
            <li>
                
                <a href="<?php echo get_permalink( get_page_by_path( 'privacy-policy' ) ); ?>" class="py-4 px-2 inline-block text-sm font-normal border-b-4 border-transparent <?php echo get_post_field( 'post_name') == 'privacy-policy' ? 'active' : ''; ?> duration-300">Privacy Policy</a>
            </li>
            <li>
                <a href="<?php echo get_permalink( get_page_by_path( 'cookie-policy' ) ); ?>" class="py-4 px-2 inline-block text-sm font-normal border-b-4 border-transparent duration-300 <?php echo get_post_field( 'post_name') == 'cookie-policy' ? 'active' : ''; ?>">Cookie Policy</a>
            </li>
            <li>
                <a href="<?php echo get_permalink( get_page_by_path( 'terms-of-use' ) ); ?>" class="py-4 px-2 inline-block text-sm font-normal border-b-4 border-transparent duration-300 <?php echo get_post_field( 'post_name') == 'terms-of-use' ? 'active' : ''; ?>">Terms of Use</a>
            </li>
            <li>
                <a href="<?php echo get_permalink( get_page_by_path( 'disclaimer' ) ); ?>" class="py-4 px-2 inline-block text-sm font-normal border-b-4 border-transparent duration-300 <?php echo get_post_field( 'post_name') == 'disclaimer' ? 'active' : ''; ?>">Disclaimer</a>
            </li>
        </ul>
    </div>
</section>
<!-- page link end -->