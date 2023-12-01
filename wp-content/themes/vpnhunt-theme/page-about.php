<?php
/** Template Name: About Page **/


get_header(); ?>

<!-- about section start here -->
<section class="about-top-bg bg-center bg-cover pb-24" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/about-bg.png'); background-size: cover; background-repeat: no-repeat;">
        <div>
            <div class="container">
                <nav class="mb-6 pt-6" aria-label="breadcrumb">
                    <ol class="flex space-x-2 items-center">
                      <li class="text-black flex space-x-1 items-center">
                            <a href="index.html">
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
                    <div class="lg:w-2/3 w-full">
                        <h6 class="text-red-400 text-2xl font-medium"><?php the_title(); ?></h6>
                        <h1 class="font-medium text-4xl md:text-5xl text-black mb-6">
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
                    <div class="lg:w-1/3 w-full md:pl-14">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-icon.svg" alt="#" class="w-80" />
                    </div>
                </div>                  
            </div>
          </div>
    </section>
    <!-- about section end here -->
    <!-- our expertise section start here -->
    <section class="our-expertise-sec pt-14">
        <div class="container">
            <div class="">
                <h2 class="font-medium text-3xl md:text-4xl text-black">
                    Our Expertise
                </h2>
                <p class="mt-3">
                    We’re rangers of digital privacy. If a VPN doesn’t protect your online security, you’ll hear about it from us. We also hunt for bargains, and we can sniff out bad deals a mile out. Through thick marketing and flashy deals. 
                </p>

                <p class="mt-3">
                    We also have experts in networking and cybersecurity on our side. From regular browsing and streaming to torrenting, online gaming, and even the dark web, there’s no corner of the internet we haven’t explored. And we know exactly how difficult it is to stay safe and anonymous online.
                </p>
                <p class="mt-3">                    
                    Unlike Aragorn, we’re never caught off guard. 
                </p>
            </div>
            <div class="flex lg:flex-row flex-col flex-wrap content-center relative items-center mt-10">
                <div class="lg:w-2/4 w-full text-right">
                    <img class="w-4/5 inline-block" src="<?php echo get_stylesheet_directory_uri(); ?>/images/expertise.svg" alt="#" />
                </div>
                <div class="lg:w-2/4 w-full content-center lg:absolute right-0 bottom-0">
                    <div class="grid grid-cols-2 gap-0">
                        <div class="md:p-6 p-4 md:pb-24 pb-8 w-full rounded-tl-2xl relative" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/bg-shape1.svg); background-repeat: no-repeat; background-size: cover;">
                            <p class="font-bold text-4xl md:text-5xl mb-2">35+</p>
                            <p class="text-sm md:text-base">VPNs Tested</p>
                        </div>
                        <div class="md:p-6 p-4 md:pt-24 pt-8 w-full relative text-white" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/bg-shape2.svg); background-repeat: no-repeat; background-size: cover;">
                            <p class="font-bold text-4xl md:text-5xl mb-2">$40k</p>
                            <p class="text-sm md:text-base">Money Invested Of Testing</p>
                        </div>
                        <div class="md:p-6 p-4 md:pt-24 pt-8 w-full relative text-white" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/bg-shape3.svg); background-repeat: no-repeat; background-size: cover;">
                            <p class="font-bold text-4xl md:text-5xl mb-2">16k+</p>
                            <p class="text-sm md:text-base">Total Hours of Testing</p>
                        </div>
                        <div class="md:p-6 p-4 md:pb-24 pb-8 w-full relative" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/bg-shape4.svg); background-repeat: no-repeat; background-size: cover;">
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
    <section class="reviews-sec py-14 bg-fixed bg-cover" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/gray-bg.png');">
        <div class="container">
            <div class="">
                <h2 class="font-medium text-3xl md:text-4xl text-black">
                    Independent Reviews
                </h2>
                <p class="mt-3">
                    Of course we earn affiliate commissions! Like you, we got bills to pay, and every purchase you make through our site helps advance our mission of independent testing and reviews. 
                </p>

                <p class="mt-3">
                    Most of our resources go to our VPN hunters, who are always on the lookout for the best VPN deals. It’s a tough game, and we appreciate your support. 
                </p>
                <p class="mt-3">                    
                    We’re not marketing shills for any company. Our allegiance lies with you, the reader. There’s no one-VPN-fits-all, and our ambition is to help you find the best service for your needs. You can count on our bow.
                </p>
                <p class="mt-3">                             
                    We want to become a central hub of knowledge regarding online privacy and security, a place where anyone can learn what it takes to protect their online activity from prying eyes. With surveillance and freedom of expression under attack in many places around the world, being able to browse without someone looking over your shoulder is slowly becoming a privilege.
                </p>
            </div>
        </div>
    </section>
    <!-- reviews section start here -->

    <!-- why trust vpnHunt start here -->
    <section class="whyHunt_sec md:py-16 py-14 relative">
       <div class="container mx-auto">
        <div class="flex lg:flex-row flex-col flex-wrap align-middle content-center relative items-center">
            <div class="lg:w-2/3 w-full content-center">
                <h4 class="font-bold text-2xl md:text-3xl">VPN Testing Methodology</h4>
                <p class="mt-3">
                    We believe in transparency and integrity. We test each of the VPNs ourselves, and while we do like some more than others, we’re not in love with any. They broke our hearts with those 70% off deals.
                </p>
                <p class="mt-3">
                    During our VPN testing, multiple team members independently evaluate a given service. They start with the most popular online activities, and then they move on to raw speed tests from servers around the world. We also cover more niche cases, like router installations, multihop configurations, encryption strength, suitability for regions with high censorship, and more.
                </p>
                <p class="mt-3">
                    If there are additional features, like antiviruses or ad blockers, we test those too. We poke around and leave no stone unturned, hoping to catch the scent of weaknesses in each VPN service. 
                </p>
                <p class="mt-3">
                    At the end of the day, our managing editors aggregate the testing data and put together the full picture. If something looks too good to be true, they pursue the matter and sniff out the problem. 
                </p>
            </div>
            <div class="lg:w-1/3 w-full p-4">
                <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/conselting.png" alt="#" />
            </div>
        </div>
       </div>
    </section>
    <!-- why trust vpnHunt end -->

    <!-- vpnHunt team section start -->
    <section class="reviews-sec py-14 bg-fixed bg-cover" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/gray-bg.png');">
        <div class="container">
            <div class="mx-auto max-w-screen-md text-center content-center">
                <h2 class="font-medium text-3xl md:text-4xl text-black">
                    VPN Research & Testing Team
                </h2>
                <p class="my-7">Meet our awesome team members. They come from all walks of life. Some of them even have an insider perspective on how VPNs are actually made.</p>
            </div>
            <div class="mx-auto max-w-screen-lg text-center">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 grid-cols-1 gap-8 items-center content-center justify-center">
                    <!-- team member 1 -->
                    <div class="py-5 px-4">
                        <div class="rounded-lg pt-8 relative bg-white">
                            <a href="javascript:void(0);" class="absolute right-3 top-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/read-more-icon-black.svg" alt="#" class="w-8 h-8"></a>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/team-member1.svg" alt="#" />
                        </div>
                        <h3 class="font-medium text-2xl mt-2 mb-2">Bessie Cooper</h3>
                        <p>Head of Research</p>
                        <ul class="flex space-x-3 justify-center mt-1">
                            <li><a class="hover:text-red-400" href="javascript:void(0);"><i class="far fa-envelope"></i></a></li>
                            <li><a class="hover:text-red-400" href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="hover:text-red-400" href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>

                    <!-- team member 2 -->
                    <div class="py-5 px-4">
                        <div class="rounded-lg pt-8 relative bg-white">
                            <a href="javascript:void(0);" class="absolute right-3 top-3">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/read-more-icon-black.svg" alt="#" class="w-8 h-8"></a>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/team-member2.svg" alt="#" />
                        </div>
                        <h3 class="font-medium text-2xl mt-2 mb-2">Theresa Webb</h3>
                        <p>Head of Research</p>
                        <ul class="flex space-x-3 justify-center mt-1">
                            <li><a class="hover:text-red-400" href="javascript:void(0);"><i class="far fa-envelope"></i></a></li>
                            <li><a class="hover:text-red-400" href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="hover:text-red-400" href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>

                    <!-- team member 3 -->
                    <div class="py-5 px-4">
                        <div class="rounded-lg pt-8 relative bg-white">
                            <a href="javascript:void(0);" class="absolute right-3 top-3">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/read-more-icon-black.svg" alt="#" class="w-8 h-8"></a>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/team-member3.svg" alt="#" />
                        </div>
                        <h3 class="font-medium text-2xl mt-2 mb-2">Brooklyn Simmons</h3>
                        <p>Head of Research</p>
                        <ul class="flex space-x-3 justify-center mt-1">
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

    <!-- Get in touch form start here -->
    <section class="get-in-touch py-14">
        <div class="container">
            <div class="text-left mb-10">
                <h2 class="font-medium text-3xl md:text-4xl text-black">
                    Need help? Get in touch
                </h2>
                <p class="my-3">
                    Leave us a message and we'll get back to you within a few hours.
                </p>
            </div>
            <div class="flex flex-wrap align-middle content-center">
                <div class="md:w-2/4 w-full">
                    <div class="mb-7">
                        <h3 class="font-medium text-2xl text-black">Call Us</h3>
                        <p class="my-1">Call our team Mon-Fri from 8am to 5pm.</p>
                        <div class="flex items-center mt-3">
                            <i class="fas fa-phone rotate-90 mr-3"></i>
                            <h4 class="text-lg font-medium leading-6 text-black">(987) 654-3210
                        </div>
                        </h4>
                    </div>
                    <div class="mb-4">
                        <h3 class="font-medium text-2xl text-black">Chat with us</h3>
                        <p class="my-1">Speak to our friendly team via live chat</p>
                        <div class="flex items-center mt-3">
                            <i class="far fa-comment mr-3"></i>
                            <h4 class="text-lg font-medium leading-6 text-black">Start a live chat
                        </div>
                        <div class="flex items-center mt-3">
                            <i class="far fa-paper-plane mr-3"></i>
                            <h4 class="text-lg font-medium leading-6 text-black">Shoot us an email
                        </div>
                        <div class="flex items-center mt-3">
                            <i class="fab fa-twitter mr-3"></i>
                            <h4 class="text-lg font-medium leading-6 text-black">Message us on Twitter
                        </div>
                        </h4>
                    </div>
                </div>

                <!--contact form start-->
                <div class="md:w-2/4 w-full">
                    <form class="">
                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-2 md:mb-0 md:w-2/4">
                                <label class="block mb-2" for="firstName">
                                    First name
                                </label>
                                <input class="w-full p-3 text-base leading-tight text-gray-700 border rounded appearance-none focus:shadow-none focus:outline-none" id="firstName" type="text" placeholder="First name" required>
                            </div>
                            <div class="md:ml-2 md:w-2/4">
                                <label class="block mb-2" for="lastName">
                                    Last Name
                                </label>
                                <input class="w-full p-3 text-base leading-tight text-gray-700 border rounded appearance-none focus:shadow-none focus:outline-none" id="lastName" type="text" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2" for="email">
                                Email
                            </label>
                            <input class="w-full p-3 text-base leading-tight text-gray-700 border rounded appearance-none focus:shadow-none focus:outline-none" id="email" type="email" placeholder="you@company.com" required>
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2" for="phoneNumber">
                                Phone number
                            </label>
                            <input class="w-full p-3 text-base leading-tight text-gray-700 border rounded appearance-none focus:shadow-none focus:outline-none" id="phoneNumber" type="number" placeholder="+1 (555) 000-0000" required>
                        </div>
                        <div class="flex mb-4">
                            <!-- Country Code Input -->
                            <div class="relative">
                                <select class="bg-white text-gray-700 text-base appearance-none border border-r-0 p-3 pr-3 rounded rounded-tr-none rounded-br-none focus:shadow-none focus:outline-none">
                                    <option value="+1">USA</option>
                                    <option value="+44">UK</option>
                                    <option value="+91">India</option>
                                </select>
                                <div class="absolute inset-y-0 -right-1 flex items-center px-2 pointer-events-none">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/down-arrow.svg" alt="#" />
                                </div>
                            </div>
                
                            <!-- Phone Number Input -->
                            <input type="tel" class="flex-1 p-3 text-base text-gray-700 border rounded rounded-tl-none rounded-bl-none appearance-none focus:shadow-none focus:outline-none" placeholder="+1 (555) 000-0000" required>
                        </div>

                        <div class="mb-4">
                            <label class="block mb-2" for="phoneNumber">
                                Message
                            </label>
                            <textarea class="w-full h-120 p-3 text-base text-gray-700 border rounded appearance-none focus:shadow-none focus:outline-none " placeholder="Leave us a message..."></textarea>
                        </div>
                        <div class="mb-6">
                            <button class="text-lg font-medium py-1 px-3 rounded btn-bg-orange-500 duration-500 text-white focus:outline-none focus:shadow-none" type="submit">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
                <!-- contact form end -->
            </div>
        </div>
    </section>
    <!-- Get in touch form end here -->

<?php /*if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		the_title();
        the_content();
	} 
} */
get_footer(); ?>