<?php get_header(); ?>
    <!-- top banner start here -->
        <section class="py-14">
            <div>
                <div class="container">
                    <div class="mx-auto max-w-screen-md text-center content-center justify-center">
                        <img src="<?php echo get_stylesheet_directory_uri();  ?>/images/404.svg" alt="" class="inline-block" />
                        <h1 class="font-medium text-3xl md:text-4xl text-black mb-6">Page not Found</h1>
                        <p>
                            Sorry, the page you are looking for doesn’t exist or has been removed. Keep exploring out site:
                        </p>
                        <a href="<?php echo get_home_url(); ?>" class="btn-bg-orange-500 duration-500 rounded text-white font-medium py-1 px-3 inline-block mt-10">
                            Go to Home
                        </a>
                    </div>                  
                </div>
            </div>
        </section>
    <!-- top banner end here -->
<?php get_footer(); ?>