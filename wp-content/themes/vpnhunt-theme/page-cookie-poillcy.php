<?php
/** Template Name: Cookie Policy Page Template **/

    get_header();
    
    get_template_part('template-parts/page-banner');
    get_template_part('template-parts/page-links'); ?>

    <!-- cookies policy content section start here -->
    <section class="our-expertise-sec lg:py-14 py-8">
        <div class="container">
            <div class="flex lg:flex-row flex-col flex-wrap relative items-start pl-0 md:pl-10 lg:pl-0">
                <?php get_template_part('template-parts/toc'); ?>
                <div class="lg:w-3/4 lg:pl-16 text-left">
                    <!-- tab content start -->
                    <div class="vertical-tb-content mt-1 lg:pl-10">                        
                        <!-- tab content start -->
                        <div class="text-medium w-full tab-content">
                            <div class="overview-content">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                    <!-- tab content end -->

                </div>
            </div>
        </div>
    </section>
    <!-- cookies policy content section end here -->
<?php get_footer(); ?>