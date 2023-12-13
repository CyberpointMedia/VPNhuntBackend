<?php
/** Template Name: About Page **/


get_header(); ?>

<!-- about section start here -->
<section class="about-top-bg bg-center bg-cover md:pb-24" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/about-bg.png'); background-size: cover; background-repeat: no-repeat;">
        <div>
            <div class="container">
                <nav class="md:mb-20 mb-10 pt-6" aria-label="breadcrumb">
                    <ol class="flex space-x-2 items-center">
                      <li class="text-black flex space-x-1 items-center">
                            <a href="<?php site_url(); ?>">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-icon.svg" />
                            </a>
                            <span>/</span>
                        </li>
                        <li class="text-red-400 text-sm" aria-current="page">
                            <?php echo wp_trim_words( get_the_title(), 1, '' ); ?>
                        </li>
                    </ol>
                  </nav>
                <div class="flex lg:flex-row flex-col flex-wrap align-middle content-center relative items-center md:text-left">
                    <div class="lg:w-2/3 w-full md:pr-14">
                        <h6 class="text-red-400 text-2xl font-medium mb-2"><?php the_title(); ?></h6>
                        <h1 class="font-medium text-4xl md:text-5xl text-black mb-10">
                        commitment. passion. innovation.</b>
                        </h1>
                        <p class="mb-3">
                            We’re vpnHunt, your trustworthy guide through the complicated maze of VPN services. We’re a small, independent team of cybersecurity experts, VPN specialists, and tech writers. Our mission is simple, we want to give you the information you need to select the best VPN for your needs.
                        </p>
                        <p class="mb-3">
                            We may not see eye to eye in terms of Apple or Android, but we all agree on the supremacy of objective testing data. We scout and rigorously investigate all the VPNs we can get our hands on, and we’re not afraid of calling out their weaknesses.
                        </p>
                        <p class="mb-3">                        
                            If our content helped you in your search for the best VPN, don’t hesitate to give us a shout. You can also shout at us if it didn’t, we read every comment and we’d appreciate your feedback.
                        </p>
                    </div>
                    <div class="lg:w-1/3 w-full">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-icon.svg" alt="#" />
                    </div>
                </div>                  
            </div>
          </div>
    </section>
    <!-- about section end here -->
     <!-- our expertise section start here -->
     <section class="our-expertise-sec pt-14">
        <div class="container">
            <div class="md:mb-24 mb-10">
                <h2 class="font-medium text-3xl md:text-4xl text-black">
                    Our Expertise
                </h2>
                <p class="mt-5">
                    We’re rangers of digital privacy. If a VPN doesn’t protect your online security, you’ll hear about it from us. We also hunt for bargains, and we can sniff out bad deals a mile out. Through thick marketing and flashy deals. 
                </p>

                <p class="mt-5">
                    We also have experts in networking and cybersecurity on our side. From regular browsing and streaming to torrenting, online gaming, and even the dark web, there’s no corner of the internet we haven’t explored. And we know exactly how difficult it is to stay safe and anonymous online.
                </p>
                <p class="mt-5">                    
                    Unlike Aragorn, we’re never caught off guard. 
                </p>
            </div>
            <div class="flex lg:flex-row flex-col flex-wrap content-center relative items-center">
                <div class="lg:w-2/4 w-full text-right hidden md:block">
                    <img class="inline-block lg:-mr-28" src="<?php echo get_stylesheet_directory_uri(); ?>/images/expertise.svg" alt="#" />
                </div>
                <div class="lg:w-2/4 w-full content-center lg:absolute right-0 bottom-0 lg:pl-0">
                    <div class="grid grid-cols-2 gap-0">
                        <div class="lg:px-8 px-4 pt-4 md:pt-8 lg:pb-36 pb-28 w-full rounded-tl-2xl relative bg-gray-light-200 overflow-hidden">
                            <div class="absolute -right-5 -bottom-4 w-28 h-40 bg-contain bg-no-repeat" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/bg-shape1.svg);"></div>
                            <p class="font-bold text-4xl md:text-5xl mb-2">35+</p>
                            <p class="text-sm md:text-base">VPNs Tested</p>
                        </div>
                        <div class="lg:px-8 px-4 lg:pt-36 pt-28 w-full relative text-white bg-green-dark-500 overflow-hidden">
                            <div class="absolute -left-6 -top-6 w-36 h-36 bg-contain bg-no-repeat" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/bg-shape2.svg);"></div>
                            <p class="font-bold text-4xl md:text-5xl mb-2">$40k</p>
                            <p class="text-sm md:text-base">Money Invested Of Testing</p>
                        </div>
                        <div class="lg:px-8 px-4 lg:pt-36 pt-28 w-full relative text-white bg-blue-dark-400 overflow-hidden">
                            <div class="absolute -left-10 -top-3 w-44 h-24 bg-contain bg-no-repeat" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/bg-shape3.svg);"></div>
                            <p class="font-bold text-4xl md:text-5xl mb-2">16k+</p>
                            <p class="text-sm md:text-base">Total Hours of Testing</p>
                        </div>
                        <div class="lg:px-8 px-4 pt-4 md:pt-8 lg:pb-32 pb-28 w-full relative" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/bg-shape4.svg); background-repeat: no-repeat; background-size: cover;">
                            <p class="font-bold text-4xl md:text-5xl mb-2">100k+</p>
                            <p class="text-sm md:text-base">Happy Customers From Our Sites</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our expertise section end here -->

    <!-- reviews section start here -->
    <section class="reviews-sec md:py-16 py-14 bg-fixed bg-cover" style="background-image: url('images/gray-bg.png');">
        <div class="container">
            <div class="">
                <h2 class="font-medium text-3xl md:text-4xl text-black">
                    Independent Reviews
                </h2>
                <p class="mt-5">
                    Of course we earn affiliate commissions! Like you, we got bills to pay, and every purchase you make through our site helps advance our mission of independent testing and reviews. 
                </p>

                <p class="mt-5">
                    Most of our resources go to our VPN hunters, who are always on the lookout for the best VPN deals. It’s a tough game, and we appreciate your support. 
                </p>
                <p class="mt-5">                    
                    We’re not marketing shills for any company. Our allegiance lies with you, the reader. There’s no one-VPN-fits-all, and our ambition is to help you find the best service for your needs. You can count on our bow.
                </p>
                <p class="mt-5">                             
                    We want to become a central hub of knowledge regarding online privacy and security, a place where anyone can learn what it takes to protect their online activity from prying eyes. With surveillance and freedom of expression under attack in many places around the world, being able to browse without someone looking over your shoulder is slowly becoming a privilege.
                </p>
            </div>
        </div>
    </section>
    <!-- reviews section start here -->

    <!-- vpnHunt methodology start here -->
    <section class="vpn_methodology md:py-16 py-14 relative">
       <div class="container mx-auto">
        <div class="flex lg:flex-row flex-col flex-wrap align-middle content-center relative items-center">
            <div class="lg:w-2/3 w-full content-center">
                <h2 class="font-medium text-3xl md:text-4xl text-black">VPN Testing Methodology</h2>
                <p class="mt-5">
                    We believe in transparency and integrity. We test each of the VPNs ourselves, and while we do like some more than others, we’re not in love with any. They broke our hearts with those 70% off deals.
                </p>
                <p class="mt-5">
                    During our VPN testing, multiple team members independently evaluate a given service. They start with the most popular online activities, and then they move on to raw speed tests from servers around the world. We also cover more niche cases, like router installations, multihop configurations, encryption strength, suitability for regions with high censorship, and more.
                </p>
                <p class="mt-5">
                    If there are additional features, like antiviruses or ad blockers, we test those too. We poke around and leave no stone unturned, hoping to catch the scent of weaknesses in each VPN service. 
                </p>
                <p class="mt-5">
                    At the end of the day, our managing editors aggregate the testing data and put together the full picture. If something looks too good to be true, they pursue the matter and sniff out the problem. 
                </p>
            </div>
            <div class="lg:w-1/3 w-full p-4">
                <img class="" src="images/conselting.png" alt="#" />
            </div>
        </div>
       </div>
    </section>
    <!-- vpnHunt methodology end -->

    <!-- vpnHunt team section start -->
    <section class="team-sec md:py-16 py-14 bg-gray-light-200">
        <div class="container">
            <div class="mx-auto max-w-screen-md text-center content-center">
                <h2 class="font-medium text-3xl md:text-4xl text-black">
                    VPN Research & Testing Team
                </h2>
                <p class="mb-7 mt-4">Meet our awesome team members. They come from all walks of life. Some of them even have an insider perspective on how VPNs are actually made.</p>
            </div>
            <div class="mx-auto max-w-screen-lg text-center">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 grid-cols-1 gap-8 items-center content-center justify-center">
                    <!-- team member 1 -->
                    <div class="py-5 px-4">
                        <div class="rounded-lg pt-8 relative bg-white-100">
                            <a href="javascript:void(0);" class="absolute right-3 top-3"><img src="images/read-more-icon-black.svg" alt="#" class="w-8 h-8"></a>
                            <img src="images/team-member1.svg" alt="#" />
                        </div>
                        <h3 class="font-medium text-2xl my-3">Bessie Cooper</h3>
                        <p>Head of Research</p>
                        <ul class="flex space-x-3 justify-center mt-3">
                            <li><a class="hover:text-red-400" href="javascript:void(0);"><i class="far fa-envelope"></i></a></li>
                            <li><a class="hover:text-red-400" href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="hover:text-red-400" href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>

                    <!-- team member 2 -->
                    <div class="py-5 px-4">
                        <div class="rounded-lg pt-8 relative bg-white-100">
                            <a href="javascript:void(0);" class="absolute right-3 top-3"><img src="images/read-more-icon-black.svg" alt="#" class="w-8 h-8"></a>
                            <img src="images/team-member2.svg" alt="#" />
                        </div>
                        <h3 class="font-medium text-2xl my-3">Theresa Webb</h3>
                        <p>Head of Research</p>
                        <ul class="flex space-x-3 justify-center mt-3">
                            <li><a class="hover:text-red-400" href="javascript:void(0);"><i class="far fa-envelope"></i></a></li>
                            <li><a class="hover:text-red-400" href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="hover:text-red-400" href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>

                    <!-- team member 3 -->
                    <div class="py-5 px-4">
                        <div class="rounded-lg pt-8 relative bg-white-100">
                            <a href="javascript:void(0);" class="absolute right-3 top-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/read-more-icon-black.svg" alt="#" class="w-8 h-8"></a>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/team-member3.svg" alt="#" />
                        </div>
                        <h3 class="font-medium text-2xl my-3">Brooklyn Simmons</h3>
                        <p>Head of Research</p>
                        <ul class="flex space-x-3 justify-center mt-3">
                            <li><a class="hover:text-red-400" href="javascript:void(0);"><i class="far fa-envelope"></i></a></li>
                            <li><a class="hover:text-red-400" href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="hover:text-red-400" href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>  
                <div class="text-center mt-3">
                    <a href="javascript:void(0);" class="btn-bg-orange-500 duration-500 rounded text-white font-medium py-1 px-3 inline-block">Meet the Experts</a>
                </div>
            </div>
        </div>
    </section>
    <!--vpnHunt team section end -->

    <?php get_template_part('template-parts/contact'); ?>

<?php /*if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		the_title();
        the_content();
	} 
} */
get_footer(); ?>