<?php get_header(); ?>

<!-- picks picks start here -->
<section class="banner-sec">
    <?php $cps_hero_section_settings = get_option( 'cps_hero_section_settings' ); ?>
    <div class="bg-fixed bg-center bg-cover md:py-32 py-14" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/bg-block-img.png');">
        <div class="container mx-auto text-center">
            <div class="mx-auto max-w-screen-md">
                <h1 class="font-medium text-4xl md:text-5xl text-black">
                    <?php echo $cps_hero_section_settings['section_title']; ?>
                </h1>
                <p class="text-lg font-normal my-5"><?php echo $cps_hero_section_settings['section_description']; ?></p>
        -1    </div>
            <div class="grid grid-cols-1 md:grid-cols-5 gap-4 justify-center text-center mt-8">
                
                <!-- card 1 start -->
                <div class="grid grid-cols-2 md:grid-cols-1 p-1 items-center">
                    <h3 class="text-base relative pb-3 md:mb-4">Best <br /><b class="text-lg">Overall</b>
                        <div class="absolute w-3/6 h-2 left-1/4 bottom-0 bg-no-repeat bg-auto" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/underline-red.png');"></div>
                    </h3>
                    <div class="brand_logos box-shadow box-shadow-red bg-white px-2 md:pt-8 md:pb-4 py-3 border rounded-lg">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/express-vpn-logo.png" alt="express-VPN" class="mx-auto">
                        <a href="javascript:void(0);" class="font-medium text-xs text-red-500 my-2 inline-block">ExpressVPN Review</a>
                    </div>
                </div>
                
                <!-- card 2 start -->
                <div class="grid grid-cols-2 md:grid-cols-1 p-1 items-center">
                    <h3 class="text-base relative pb-3 md:mb-4">Best for<br /><b class="text-lg">Gaming</b>
                        <div class="absolute w-3/6 h-2 left-1/4 bottom-0 bg-no-repeat bg-auto" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/underline-yellow.png');"></div>
                    </h3>
                    <div class="brand_logos box-shadow box-shadow-yellow bg-white px-2 md:pt-8 md:pb-4 py-3 border rounded-lg">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cyber-ghost.png" alt="Cyber Ghost" class="mx-auto">
                            <a href="javascript:void(0);" class="font-medium text-xs text-red-500 my-2 inline-block">CyberGhost VPN Review</a>
                    </div>
                </div>
                
                <!-- card 3 start -->
                <div class="grid grid-cols-2 md:grid-cols-1 p-1 items-center">
                    <h3 class="text-base relative pb-3 md:mb-4">Best for<br /><b class="text-lg">Power Users</b>
                        <div class="absolute w-3/6 h-2 left-1/4 bottom-0 bg-no-repeat bg-auto" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/underline-green.png');"></div>
                    </h3>
                    
                    <div class="brand_logos box-shadow box-shadow-green bg-white px-2 md:pt-8 md:pb-4 py-3 border rounded-lg">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/private-internet-access.png" class="mx-auto" alt="Private Internet Access">
                        <a href="javascript:void(0);" class="font-medium text-xs text-red-500 my-2 inline-block">PIA VPN Review</a>
                    </div>
                </div>
                
                <!-- card 4 start -->
                <div class="grid grid-cols-2 md:grid-cols-1 p-1 items-center">
                    <h3 class="text-base relative pb-3 md:mb-4">Best for<br /><b class="text-lg">Streaming</b>
                        <div class="absolute w-3/6 h-2 left-1/4 bottom-0 bg-no-repeat bg-auto" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/underline-black.png');"></div>
                    </h3>
                    <div class="brand_logos box-shadow bg-white px-2 md:pt-8 md:pb-4 py-3 border rounded-lg">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ip-vanish.png" alt="IP Vanish" class="mx-auto">
                        <a href="javascript:void(0);" class="font-medium text-xs text-red-500 my-2 inline-block">IPVanish Review</a>
                    </div>
                </div>
                
                <!-- card 5 start -->
                <div class="grid grid-cols-2 md:grid-cols-1 p-1 items-center">
                    <h3 class="text-base relative pb-3 md:mb-4">Best for<br /><b class="text-lg">Tor</b>
                        <div class="absolute w-3/6 h-2 left-1/4 bottom-0 bg-no-repeat bg-auto" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/underline-blue.png');"></div>
                    </h3>
                    <div class="brand_logos box-shadow box-shadow-blue bg-white px-2 md:pt-8 md:pb-4 py-3 border rounded-lg">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/nord-vpn.png" alt="nord-VPN" class="mx-auto">
                        <a href="javascript:void(0);" class="font-medium text-xs text-red-500 my-2 inline-block">NordVPN Review</a>
                    </div>
                </div>
            </div>                 
        </div>
    </div>
</section>
<!-- picks section end here -->

<!-- canvas section start here -->
<section class="category_sec relative bg-cente md:pt-16 pt-14 bg-white overflow-hidden">
    <?php $cps_canvas_section_settings = get_option( 'cps_canvas_section_settings' ); ?>
    <div class="container mx-auto relative z-20">
        <div class="mx-auto max-w-screen-md">
            <div class>
                <div class="text-center">
                    <h2 class="font-medium text-3xl md:text-4xl text-black">
                        <?php echo $cps_canvas_section_settings['section_title']; ?>
                    </h2>
                    <p class="text-lg font-normal my-5">
                        <?php echo $cps_canvas_section_settings['section_description']; ?>
                    </p>
                </div>
            </div>
            
            <div class="grid md:grid-cols-2 grid-cols-1 gap-3">
                <?php   $args = array(
                            'type'       => 'best-vpns',
                            'taxonomy'   => 'category',
                            'orderby'    => 'name',
                            'order'      => 'DESC',
                            'hide_empty' => false,
                            'exclude'    => array(1)
                        );

                        $cats = get_categories($args);

                        foreach($cats as $cat) {
                ?>
                <div class="p-1">
                    <a href="<?php echo get_category_link( $cat->term_id ) ?>" class="rounded font-medium text-lg inline-block text-center p-3 w-full text-black hover:text-white btn-bg-<?php echo get_term_meta($cat->term_id)['_color'][0]; ?>-200 duration-500 category-btn">
                        <?php echo $cat->name; ?>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="vpnHunt-video">
        <canvas id="videoCanvas" width="1440" height="560"></canvas>
    </div>
</section>
<!-- Canvas Section Ends Here -->


<!-- why trust vpnHunt start here -->
<section class="whyHunt_sec md:py-16 py-14 relative">
    <?php $cps_why_trust_section_settings = get_option( 'cps_why_trust_section_settings' ); ?>
    <div class="container">
        <div class="max-w-sm mx-auto">
            <div class="text-center">
                <h2 class="font-medium text-3xl md:text-4xl text-black">
                    <?php echo $cps_why_trust_section_settings['section_title']; ?>
                </h2>
                <p class="text-lg font-normal my-3"><?php echo $cps_why_trust_section_settings['section_description']; ?></p>
            </div>
        </div>
        <div class="max-w-4xl mx-auto">
            <?php 
            $args = array(
                'post_type' => 'guide',
                'posts_per_page' => 3,
                'order' => 'ASC'
            );
                    
            $count = 1;
            $post_query = new WP_Query($args);
            if ( $post_query->have_posts() ) : while ( $post_query->have_posts() ) : $post_query->the_post();
            if($count % 2 != 0){ ?>
            <div class="flex md:flex-row flex-col flex-wrap align-middle content-center relative items-center text-center md:text-left mb-10">
                <div class="md:w-1/2 w-full md:pr-12 mb-5 md:mb-0">
                    <img class="" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="#" />
                </div>
                <div class="md:w-1/2 w-full content-center">
                    <h4 class="font-medium text-2xl md:text-3xl mb-3"><?php the_title(); ?></h4>
                        <p class="text-lg"><?php the_excerpt(); ?></p>
                        <a href="javascript:void(0);" class="text-lg font-medium py-1 px-3 rounded btn-bg-orange-500 duration-500 text-white mt-5 inline-block"><?php echo $count === 3 ? 'Check VPN Reviews' : 'Meet the Experts'; ?></a>
                </div>
            </div>
                
            <?php }else{ ?>

            <div class="flex md:flex-row flex-col-reverse flex-wrap align-middle content-center relative items-center text-center md:text-left mb-10">
                <div class="md:w-1/2 w-full content-center md:pr-12">
                    <h4 class="font-medium text-2xl md:text-3xl mb-3"><?php the_title(); ?></h4>
                    <p class="text-lg"><?php the_excerpt(); ?></p>
                    <a href="javascript:void(0);" class="text-lg font-medium py-1 px-3 rounded btn-bg-orange-500 duration-500 text-white  mt-5 inline-block">Learn How We Test</a>
                </div>
                <div class="md:w-1/2 w-full mb-5 md:mb-0">
                    <img class="" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="#" />
                </div>
            </div>
            <?php  } $count++; endwhile;  endif; ?>
        </div>
    </div>
</section>
<!-- why trust vpnHunt end -->

<!-- compare and choose section start -->
<section class="compare_choose_sec md:py-16 py-14 bg-gray-light-100">
    <?php $cps_face_off_section_settings = get_option('cps_face_off_section_settings'); ?>
    <div class="container">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="font-medium text-3xl md:text-4xl text-black">
                <?php echo $cps_face_off_section_settings['section_title']; ?>
            </h2>
            <p class="text-lg font-normal my-5">
                <?php echo $cps_face_off_section_settings['section_description']; ?>
            </p>
        </div>
        <div class="mx-auto max-w-xl text-center">
            <div class="font-bold text-lg text-black mb-4">
                    Popular Comparisons:
            </div>
            <div class="flex items-center bg-white border rounded text-center py-1 px-3 mt-3 comparisons-hover">
                <div class="flex-1">
                    <img class="mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/compare-logo1.png" alt="#" />
                </div>
                <div class="flex-1">
                    <div class="font-normal text-sm">VS.</div>
                </div>
                <div class="flex-1">
                    <img class="mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/compare-logo2.png" alt="#" />
                </div>
            </div>
            <div class="flex items-center bg-white border rounded text-center py-1 px-3 mt-3 comparisons-hover">
                <div class="flex-1">
                    <img class="mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/compare-logo1.png" alt="#" />
                </div>
                <div class="flex-1">
                    <div class="font-normal text-sm">VS.</div>
                </div>
                <div class="flex-1">
                    <img class="mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/compare-logo2.png" alt="#" />
                </div>
            </div>
            <div class="flex items-center bg-white border rounded text-center py-1 px-3 mt-3 comparisons-hover">
                <div class="flex-1">
                    <img class="mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/compare-logo1.png" alt="#" />
                </div>
                <div class="flex-1">
                    <div class="font-normal text-sm">VS.</div>
                </div>
                <div class="flex-1">
                    <img class="mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/compare-logo2.png" alt="#" />
                </div>
            </div>
            <div class="flex items-center bg-white border rounded text-center py-1 px-3 mt-3 comparisons-hover">
                <div class="flex-1">
                    <img class="mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/compare-logo1.png" alt="#" />
                </div>
                <div class="flex-1">
                    <div class="font-normal text-sm">VS.</div>
                </div>
                <div class="flex-1">
                    <img class="mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/compare-logo2.png" alt="#" />
                </div>
            </div>
            <div class="flex items-center bg-white border rounded text-center py-1 px-3 mt-3 comparisons-hover">
                <div class="flex-1">
                    <img class="mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/compare-logo1.png" alt="#" />
                </div>
                <div class="flex-1">
                    <div class="font-normal text-sm">VS.</div>
                </div>
                <div class="flex-1">
                    <img class="mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/compare-logo2.png" alt="#" />
                </div>
            </div>
            <div class="mt-5">
                <a href="javascript:void(0);" class="text-lg text-left font-medium py-1 pl-3 pr-14 rounded btn-bg-orange-500 duration-500 text-white inline-block w-auto relative" >Compare Yourself Now!<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/compare-icon.png" alt="#" class="absolute right-3 top-0" /></a>
            </div>
        </div>
    </div>
</section>
<!-- compare and choose section end -->
    <!-- review section start -->
    <section class="review_sec md:py-16 py-14">
       <div class="container mx-auto">
        <div class="text-center">
            <h2 class="font-medium text-3xl md:text-4xl text-black">
                What Our Readers Say About Us
            </h2>
            <div class="mx-auto max-w-screen-md">
                <div class="grid grid-cols-2 gap-3 justify-center text-center mt-6 mb-4">
                    <p class="md:text-right text-lg"><b>Excellent</b></p>
                    <div class="text-left">
                        <?php for($i=1; $i<=5; $i++){?>
                            <span class="inline-block">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/rating-star.png" alt="#" />
                            </span>
                        <?php } ?>
                    </div>
                </div>
                <p class="justify-center text-center text-sm">Rated 4.9 / 5 based on 272, 822 reviews on<img src="<?php echo get_template_directory_uri(); ?>/images/trustpilot-icon.png" class="inline-block ml-2" /></p>
            </div>         
        </div>
        <!-- review cards start -->
        <div class="slider bg-white p-3 md:p-5 mt-3">

            <?php 
                    $args = array(
                        'post_type' => 'reviews',
                        'posts_per_page' => 10
                    );
                    
                    $post_query = new WP_Query($args);
                    if ( $post_query->have_posts() ) : while ( $post_query->have_posts() ) : $post_query->the_post();
            ?>
            <div class="">
                <div class="bg-white drop-shadow-lg p-3 md:p-5 mt-3 review-box">
                    <div class="grid grid-cols-2 justify-items-start">
                        <div class="">
                             <span class="inline-block">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/rating-star.png" alt="#" />
                            </span>
                             <span class="inline-block">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/rating-star.png" alt="#" />
                            </span>
                             <span class="inline-block">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/rating-star.png" alt="#" />
                            </span>
                             <span class="inline-block">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/rating-star.png" alt="#" />
                            </span>
                             <span class="inline-block">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/rating-star.png" alt="#" />
                            </span>
                        </div>
                        <div class="">
                         <p class="text-sm text-right roboto-400">9 hours ago</p>
                        </div>
                     </div>
                     <h4 class="text-base md:text-lg font-semibold mt-2 mb-1 roboto-500 truncate"><?php the_title(); ?></h4>
                     <p class="roboto-400 text-base md:text-lg"><?php the_content(); ?></p>
                     <a href="javascript:void(0);" class="text-base md:text-lg text-black mt-3 inline-block roboto-400">Mark Oliver</a>
                </div>
            </div>
            <?php endwhile; endif; ?>
        </div>
       </div>
    </section>
    <!-- review section end -->

    <!-- blog section start -->
    <section class="blog_sec">
        <div class="container mx-auto">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="font-medium text-3xl md:text-4xl text-black">
                    VPNHunt Guides
                </h2>
                <p class="text-lg font-normal mt-3 mb-7">Easy reads on VPNs and staying safe online. All you need to know, all in one place.</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 grid-cols-1 gap-3">
            <?php 
                        $args = array(
                            'post_type' => 'guides',
                            'posts_per_page' => 7,
                            'order' => 'ASC'
                        );
                        $count = 1;
                        $post_query = new WP_Query($args);
                        if ( $post_query->have_posts() ) : while ( $post_query->have_posts() ) : $post_query->the_post();
                        
                        if    ($count === 1) :  $color = 'bg-black-dark';
                        elseif($count === 2) :  $color = 'bg-orange-light-100';
                        elseif($count === 3) :  $color = 'bg-voilet-light-300';
                        elseif($count === 4) :  $color = 'bg-yellow-light-200';
                        elseif($count === 5) :  $color = 'bg-blue-dark-400';
                        elseif($count === 6) :  $color = 'bg-green-dark-400';
                        endif;
                        $author_id = get_post_field( 'post_author', get_the_id() ); ?>
                <!-- blog <?php echo $count; ?> -->
                <div class="<?php echo $color; ?> rounded-lg px-5 pb-8 md:pt-12 pt-8 relative blogs-col">
                    <a href="javascript:void(0);" class="absolute right-3 top-3">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/read-more-icon-<?php echo $color === 'bg-black-dark' ? 'white': 'black'; ?>.svg" alt="#" class="w-8 h-8"></a>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/blog1.png" alt="#" class="mx-auto w-40 h-32 mb-5">
                        <a href="javascript:void(0);" class="<?php echo $color === 'bg-black-dark' ? 'text-white': 'text-black'; ?>">
                        <span class="block text-xs font-normal"><?php echo get_the_date(); ?> | by <?php echo get_the_author_meta( 'first_name', $author_id ); ?> </span>
                        <span class="block mt-2 text-2xl font-medium"><?php the_title(); ?></span></a>
                    </div>
                    <!-- blog <?php echo $count; ?> -->
                    <?php if($count == 6){ $count =0; } $count++; endwhile; endif; ?>
                </div>
            <div class="text-center my-8">
                <a href="<?php echo get_the_permalink(193) ?>" class="btn-bg-orange-500 duration-500 rounded text-white font-medium py-1 px-3 inline-block">See All Guides</a>
            </div>
        </div>
    </section>
    <!-- blog section end -->

<!-- our mission section start -->
<section class="our_mission_sec md:py-16 py-14">
    <div class="container mx-auto">
        <div class="text-center">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/marketing-flatline.png" alt="#" class="mx-auto mb-5" />
            <h2 class="font-medium text-3xl md:text-4xl text-black">
                Privacy isn't a privilege; it's your right. We make sure of it.</b>
            </h2>
            <div class="my-8">
                <a href="javascript:void(0);" class="btn-bg-orange-500 duration-500 rounded text-white font-medium py-1 px-3 inline-block">Discover Our Mission</a>
            </div>
        </div>
    </div>
</section>
<!-- our mission section end -->

<?php get_footer(); ?>