<?php
/** Template Name: Contact Page Template **/


get_header(); ?>
<!-- about section start here -->
<section class="contact-top-bg bg-center bg-cover" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/contact-bg.png'); background-size: cover; background-repeat: no-repeat;">
        <div>
            <div class="container">
                <nav class="mb-4 pt-6" aria-label="breadcrumb">
                    <ol class="flex space-x-2 items-center">
                      <li class="text-black flex space-x-1 items-center"><a href="index.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-icon.svg" /></a><span>/</span></li>
                      <li class="text-red-400 text-sm" aria-current="page"><?php echo wp_trim_words( get_the_title(), 1, ''); ?></li>
                    </ol>
                  </nav>
                <div class="flex md:flex-row flex-col flex-wrap align-middle content-center relative items-center md:text-left">
                    <div class="md:w-2/3 w-full">
                        <h1 class="font-medium text-4xl md:text-5xl text-black mb-6">
                            Contact Us</b>
                        </h1>
                    </div>
                    <div class="md:w-1/3 w-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/contact-img.svg" alt="#" class="w-7/12" />
                    </div>
                </div>                  
            </div>
          </div>
    </section>
    <!-- about section end here -->
    <?php get_template_part('template-parts/contact'); ?>

    <?php get_template_part('template-parts/faqs'); ?>
<?php get_footer(); ?>