<!-- top banner start here -->
<section class="contact-top-bg bg-center bg-cover pb-10 md:pb-28" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/contact-bg.png'); background-size: cover; background-repeat: no-repeat;">
    <div>
        <div class="container">
            <nav class="md:mb-20 mb-10 pt-6" aria-label="breadcrumb">
                <ol class="flex space-x-2 items-center">
                    <li class="text-black flex space-x-1 items-center">
                        <a href="<?php echo get_site_url(); ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-icon.svg" /></a><span>/</span></li>
                    <li class="text-red-400 text-sm" aria-current="page"><?php the_title(); ?></li>
                    </ol>
                </nav>
                <div class="flex md:flex-row flex-col flex-wrap align-middle content-center relative items-center md:text-left">
                    <div class="md:w-2/3 w-full">
                        <h1 class="font-medium text-4xl md:text-5xl text-black mb-6">
                            <?php the_title(); ?>
                        </h1>
                        <p class="items-center text-sm">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/check-circle-icon.svg" alt="#" class="inline-block" /> 
                        Last Updated <?php echo get_the_modified_date(); ?></p>
                    </div>
                </div>                   
        </div>
        </div>
</section>
<!-- top banner end here -->