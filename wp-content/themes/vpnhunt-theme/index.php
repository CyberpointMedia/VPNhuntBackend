<?php get_header(); ?>

<!-- picks picks start here -->
<section class="banner-sec">
    <div class="bg-fixed bg-center bg-cover md:py-16 py-14" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/gray-bg.png');">
        <div class="container mx-auto text-center">
            <div class="mx-auto max-w-screen-md">
                <h1 class="font-medium text-4xl md:text-5xl text-black">
                    Our VPN Picks for <b class="font-bold">2023</b>
                </h1>
                <p class="text-lg font-normal my-7">Discover the most secure and efficient VPN services handpicked for August 2023, ensuring optimal privacy and seamless online experiences.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-5 gap-4 justify-center text-center">
                
				<!-- card 1 start -->
                <div class="grid grid-cols-2 md:grid-cols-1 p-1 items-center">
                    <h3 class="text-base relative pb-3 md:mb-4 ">Best <br /><b class="text-lg">Overall</b>
                        <div class="absolute w-full h-2 left-1/4 bottom-0 bg-no-repeat bg-auto" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/underline-red.png');"></div>
                    </h3>
                    <div class="brand_logos bg-white p-2 border rounded mt-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/express-vpn-logo.png" alt="express-VPN" class="mx-auto">
                        <a href="javascript:void(0);" class="font-medium text-sm text-red-500 my-2 inline-block">ExpressVPN Review</a>
                    </div>
                </div>
                
				<!-- card 2 start -->
                <div class="grid grid-cols-2 md:grid-cols-1 p-1 items-center">
                    <h3 class="text-base relative pb-3 md:mb-4">Best for<br /><b class="text-lg">Gaming</b>
                        <div class="absolute w-full h-2 left-1/4 bottom-0 bg-no-repeat bg-auto" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/underline-yellow.png');"></div>
                    </h3>
                    <div class="brand_logos bg-white p-2 border rounded mt-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/cyber-ghost.png" alt="Cyber Ghost" class="mx-auto">
                        <a href="javascript:void(0);" class="font-medium text-sm text-red-500 my-2 inline-block">CyberGhost VPN Review</a>
                    </div>
                </div>
                
				<!-- card 3 start -->
				<div class="grid grid-cols-2 md:grid-cols-1 p-1 items-center">
					<h3 class="text-base relative pb-3 md:mb-4">Best for<br /><b class="text-lg">Power Users</b>
						<div class="absolute w-full h-2 left-1/4 bottom-0 bg-no-repeat bg-auto" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/underline-green.png');"></div>
					</h3>
					<div class="brand_logos bg-white p-2 border rounded mt-2">
						<img src="<?php echo get_template_directory_uri(); ?>/images/private-internet-access.png" class="mx-auto" alt="Private Internet Access">
						<a href="javascript:void(0);" class="font-medium text-sm text-red-500 my-2 inline-block">PIA VPN Review</a>
					</div>
				</div>
				
				<!-- card 4 start -->
				<div class="grid grid-cols-2 md:grid-cols-1 p-1 items-center">
					<h3 class="text-base relative pb-3 md:mb-4">Best for<br /><b class="text-lg">Streaming</b>
						<div class="absolute w-full h-2 left-1/4 bottom-0 bg-no-repeat bg-auto" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/underline-black.png');"></div>
					</h3>
					<div class="brand_logos bg-white p-2 border rounded mt-2">
						<img src="<?php echo get_template_directory_uri(); ?>/images/ip-vanish.png" alt="IP Vanish" class="mx-auto">
						<a href="javascript:void(0);" class="font-medium text-sm text-red-500 my-2 inline-block">IPVanish Review</a>
					</div>
				</div>
                
				<!-- card 5 start -->
                <div class="grid grid-cols-2 md:grid-cols-1 p-1 items-center">
                    <h3 class="text-base relative pb-3 md:mb-4">Best for<br /><b class="text-lg">Tor</b>
                        <div class="absolute w-full h-2 left-1/4 bottom-0 bg-no-repeat bg-auto" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/underline-blue.png');"></div>
                    </h3>
                    <div class="brand_logos bg-white p-2 border rounded mt-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/nord-vpn.png" alt="nord-VPN" class="mx-auto">
                        <a href="javascript:void(0);" class="font-medium text-sm text-red-500 my-2 inline-block">NordVPN Review</a>
                    </div>
                </div>
            </div>                  
        </div>
    </div>
</section>
<!-- picks section end here -->

    <!-- category section start here -->
    <section class="category_sec relative bg-cente md:pt-16 pt-14 bg-white">
        <div class="vpnHunt-video">
            <video class="w-full h-full object-cover" controls autoplay loop preload="auto" >
                <source src="<?php echo get_template_directory_uri(); ?>/images/vpnHunt.mp4" type="video/mp4">
              </video>
        </div>
        <div class="container mx-auto relative">
            <div class="mx-auto max-w-screen-md">
                <div class="">
                    <div class="text-center">
                        <h2 class="font-medium text-3xl md:text-4xl text-black">
                            Find Best VPNs by Category
                        </h2>
                        <p class="text-lg font-normal my-7">Explore our curated lists of VPNs categorized by specific needs and preferences, guiding you to the perfect fit for your online activities.</p>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 grid-cols-1 gap-3">
                    <div class="p-1">
                      <a href="javascript:void(0);" class="rounded font-medium text-lg inline-block text-center p-3 w-full text-black hover:text-white btn-bg-orange-200 duration-500 category-btn">
                        Best VPNs of 2023
                      </a>
                    </div>
                    <div class="p-1">
                        <a href="javascript:void(0);" class="rounded font-medium text-lg inline-block text-center p-3 w-full text-black hover:text-white btn-bg-blue-200 duration-500 category-btn">
                            Best VPNs For Torrenting 
                        </a>
                    </div>
                    <div class="p-1">
                        <a href="javascript:void(0);" class="rounded font-medium text-lg inline-block text-center p-3 w-full text-black hover:text-white btn-bg-voilet-200 duration-500 category-btn">
                          Best Free VPNs
                        </a>
                      </div>
                      <div class="p-1">
                          <a href="javascript:void(0);" class="rounded font-medium text-lg inline-block text-center p-3 w-full text-black hover:text-white btn-bg-red-200 duration-500 category-btn">
                              Best VPNs For Gaming
                          </a>
                      </div>
                      <div class="p-1">
                        <a href="javascript:void(0);" class="rounded font-medium text-lg inline-block text-center p-3 w-full text-black hover:text-white btn-bg-yellow-200 duration-500 category-btn">
                          Best VPNs Free Trials
                        </a>
                      </div>
                      <div class="p-1">
                          <a href="javascript:void(0);" class="rounded font-medium text-lg inline-block text-center p-3 w-full text-black hover:text-white btn-bg-green-200 duration-500 category-btn">
                              Fastest VPNs
                          </a>
                      </div>
                </div>
              </div>
        </div>
    </section>
    <!-- why trust vpnHunt start here -->
    <section class="whyHunt_sec md:py-16 py-14 relative">
       <div class="container mx-auto">
        <div class="">
            <div class="text-center">
                <h2 class="font-medium text-3xl md:text-4xl text-black">
                    Why Trust vpnHunt?
                </h2>
                <p class="text-lg font-normal my-3">Your Trustworthy Guide in the VPN Jungle</p>
            </div>
        </div>
        <div class="flex md:flex-row flex-col flex-wrap align-middle content-center relative items-center text-center md:text-left">
            <div class="md:w-1/2 w-full p-4">
                <img class="" src="<?php echo get_template_directory_uri(); ?>/images/conselting.png" alt="#" />
            </div>
            <div class="md:w-1/2 w-full p-4 content-center">
                <h4 class="font-bold text-2xl md:text-3xl">150+ Years of
                    Combined Experience</h4>
                <p class="my-3 text-lg">Our experts bring over 150 years of combined experience in cybersecurity, networking, and technology, ensuring that our insights are grounded in deep knowledge and expertise.</p>
                <a href="javascript:void(0);" class="text-lg font-medium py-1 px-3 rounded btn-bg-orange-500 duration-500 text-white">Meet the Experts</a>
            </div>
        </div>
        <div class="flex md:flex-row flex-col-reverse flex-wrap align-middle content-center relative items-center text-center md:text-left">
            <div class="md:w-1/2 w-full p-4 content-center">
                <h4 class="font-bold text-2xl md:text-3xl">Invested <b>16,000</b> hours and <b>$40,000</b> in Testing VPNs</h4>
                <p class="my-3 text-lg">Our team has devoted countless hours and significant resources to rigorously test and research VPNs. This dedication ensures that our reviews and guides stem from genuine experiences, offering you trustworthy and unbiased insights.</p>
                <a href="javascript:void(0);" class="text-lg font-medium py-1 px-3 rounded btn-bg-orange-500 duration-500 text-white">Learn How We Test</a>
            </div>
            <div class="md:w-1/2 w-full p-4">
                <img class="" src="<?php echo get_template_directory_uri(); ?>/images/Product-presentation-.png" alt="#" />
            </div>
        </div>
        <div class="flex md:flex-row flex-col flex-wrap align-middle content-center relative items-center text-center md:text-left">
            <div class="md:w-1/2 w-full p-4">
                <img class="" src="<?php echo get_template_directory_uri(); ?>/images/Pitch-meeting.png" alt="#" />
            </div>
            <div class="md:w-1/2 w-full p-4 content-center">
                <h4 class="font-bold text-2xl md:text-3xl">Reviewed 35+ VPNs</h4>
                <p class="my-3 text-lg">We've conducted comprehensive reviews of 35+ different VPN providers, covering everything from speed and security to user experience and support.</p>
                <a href="javascript:void(0);" class="text-lg font-medium py-1 px-3 rounded btn-bg-orange-500 duration-500 text-white">Check VPN Reviews</a>
            </div>
        </div>
       </div>
    </section>
    <!-- why trust vpnHunt end -->

    <!-- compare and choose section start -->
    <section class="compare_choose_sec md:py-16 py-14 bg-fixed bg-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/gray-bg.png');">
        <div class="container mx-auto">
            <div class="mx-auto max-w-screen-md text-center">
                <div class="text-center">
                    <h2 class="font-medium text-3xl md:text-4xl text-black">
                        VPN Face-Off: <b>Compare & Choose</b>
                    </h2>
                    <p class="text-lg font-normal my-7">Explore our detailed side-by-side comparisons of top VPNs. Break down features, speed, security, and more to find your perfect match in the ever-changing world of VPNs.</p>
                </div>
                <div class="font-bold text-lg text-black mb-3">
                    Popular Comparisons:
                </div>
                <div class="flex items-center bg-white border rounded text-center py-1 mt-3">
                    <div class="flex-1">
                        <img class="mx-auto" src="<?php echo get_template_directory_uri(); ?>/images/compare-logo1.png" alt="#" />
                    </div>
                    <div class="flex-1">
                        <div class="font-normal text-sm">VS.</div>
                    </div>
                    <div class="flex-1">
                        <img class="mx-auto" src="<?php echo get_template_directory_uri(); ?>/images/compare-logo2.png" alt="#" />
                    </div>
                </div>
                <div class="flex items-center bg-white border rounded text-center py-1 mt-3">
                    <div class="flex-1">
                        <img class="mx-auto" src="<?php echo get_template_directory_uri(); ?>/images/compare-logo1.png" alt="#" />
                    </div>
                    <div class="flex-1">
                        <div class="font-normal text-sm">VS.</div>
                    </div>
                    <div class="flex-1">
                        <img class="mx-auto" src="<?php echo get_template_directory_uri(); ?>/images/compare-logo2.png" alt="#" />
                    </div>
                </div>
                <div class="flex items-center bg-white border rounded text-center py-1 mt-3">
                    <div class="flex-1">
                        <img class="mx-auto" src="<?php echo get_template_directory_uri(); ?>/images/compare-logo1.png" alt="#" />
                    </div>
                    <div class="flex-1">
                        <div class="font-normal text-sm">VS.</div>
                    </div>
                    <div class="flex-1">
                        <img class="mx-auto" src="<?php echo get_template_directory_uri(); ?>/images/compare-logo2.png" alt="#" />
                    </div>
                </div>
                <div class="flex items-center bg-white border rounded text-center py-1 mt-3">
                    <div class="flex-1">
                        <img class="mx-auto" src="<?php echo get_template_directory_uri(); ?>/images/compare-logo1.png" alt="#" />
                    </div>
                    <div class="flex-1">
                        <div class="font-normal text-sm">VS.</div>
                    </div>
                    <div class="flex-1">
                        <img class="mx-auto" src="<?php echo get_template_directory_uri(); ?>/images/compare-logo2.png" alt="#" />
                    </div>
                </div>
                <div class="flex items-center bg-white border rounded text-center py-1 mt-3">
                    <div class="flex-1">
                        <img class="mx-auto" src="<?php echo get_template_directory_uri(); ?>/images/compare-logo1.png" alt="#" />
                    </div>
                    <div class="flex-1">
                        <div class="font-normal text-sm">VS.</div>
                    </div>
                    <div class="flex-1">
                        <img class="mx-auto" src="<?php echo get_template_directory_uri(); ?>/images/compare-logo2.png" alt="#" />
                    </div>
                </div>
                <div class="mt-5">
                    <a href="javascript:void(0);" class="text-lg text-left font-medium py-1 pl-3 pr-14 rounded btn-bg-orange-500 duration-500 text-white inline-block w-auto relative" >Compare Yourself Now!<img src="<?php echo get_template_directory_uri(); ?>/images/compare-icon.png" alt="#" class="absolute right-3 top-0" /></a>
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
                <div class="grid grid-cols-2 gap-3 justify-center text-center mt-5 mb-4">
                    <p class="md:text-right text-lg"><b>Excellent</b></p>
                    <div class="text-left">
                        <span class="inline-block"><img src="<?php echo get_template_directory_uri(); ?>/images/rating-star.png" alt="#" /></span>
                        <span class="inline-block"><img src="<?php echo get_template_directory_uri(); ?>/images/rating-star.png" alt="#" /></span>
                        <span class="inline-block"><img src="<?php echo get_template_directory_uri(); ?>/images/rating-star.png" alt="#" /></span>
                        <span class="inline-block"><img src="<?php echo get_template_directory_uri(); ?>/images/rating-star.png" alt="#" /></span>
                        <span class="inline-block"><img src="<?php echo get_template_directory_uri(); ?>/images/rating-star.png" alt="#" /></span>
                    </div>
                </div>
                <p class="justify-center text-center text-sm">Rated 4.9 / 5 based on 272, 822 reviews on<img src="<?php echo get_template_directory_uri(); ?>/images/trustpilot-icon.png" class="inline-block ml-2" /></p>
            </div>         
        </div>
        <!-- review cards start -->
        <div class="grid md:grid-cols-3 grid-cols-1 gap-3">
            <!-- card 1-->
            <div class="bg-white drop-shadow-lg p-4 md:p-6 mt-3">
                <div class="grid grid-cols-2 justify-items-end">
                    <div class="">
                         <span class="inline-block"><img src="<?php echo get_template_directory_uri(); ?>/images/rating-star.png" alt="#" /></span>
                         <span class="inline-block"><img src="<?php echo get_template_directory_uri(); ?>/images/rating-star.png" alt="#" /></span>
                         <span class="inline-block"><img src="<?php echo get_template_directory_uri(); ?>/images/rating-star.png" alt="#" /></span>
                         <span class="inline-block"><img src="<?php echo get_template_directory_uri(); ?>/images/rating-star.png" alt="#" /></span>
                         <span class="inline-block"><img src="<?php echo get_template_directory_uri(); ?>/images/rating-star.png" alt="#" /></span>
                    </div>
                    <div class="">
                     <p class="text-sm">9 hours ago</p>
                    </div>
                 </div>
                 <h4 class="text-lg font-semibold mt-2 mb-1">Very pleased with the insoles</h4>
                 <p>Very pleased with the insoles. A little pricer that the ones I normally order, </p>
                 <a href="javascript:void(0);" class="text-black mt-3 inline-block">Mark Oliver</a>
            </div>
            <!-- card 2-->
            <div class="bg-white drop-shadow-lg p-4 md:p-6 mt-3">
                <div class="grid grid-cols-2 justify-items-end">
                    <div class="">
                         <span class="inline-block"><img src="<?php echo get_template_directory_uri(); ?>/images/rating-star.png" alt="#" /></span>
                         <span class="inline-block"><img src="<?php echo get_template_directory_uri(); ?>/images/rating-star.png" alt="#" /></span>
                         <span class="inline-block"><img src="<?php echo get_template_directory_uri(); ?>/images/rating-star.png" alt="#" /></span>
                         <span class="inline-block"><img src="<?php echo get_template_directory_uri(); ?>/images/rating-star.png" alt="#" /></span>
                         <span class="inline-block"><img src="<?php echo get_template_directory_uri(); ?>/images/rating-star.png" alt="#" /></span>
                    </div>
                    <div class="">
                        <p class="text-sm">9 hours ago</p>
                    </div>
                 </div>
                 <h4 class="text-lg font-semibold mt-2 mb-1">Very pleased with the insoles</h4>
                 <p>Very pleased with the insoles. A little pricer that the ones I normally order, </p>
                 <a href="javascript:void(0);" class="text-black mt-3 inline-block">Mark Oliver</a>
            </div>
            <!-- card 3-->
            <div class="bg-white drop-shadow-lg p-4 md:p-6 mt-3">
                <div class="grid grid-cols-2 justify-items-end">
                    <div class="">
                         <span class="inline-block"><img src="<?php echo get_template_directory_uri(); ?>/images/rating-star.png" alt="#" /></span>
                         <span class="inline-block"><img src="<?php echo get_template_directory_uri(); ?>/images/rating-star.png" alt="#" /></span>
                         <span class="inline-block"><img src="<?php echo get_template_directory_uri(); ?>/images/rating-star.png" alt="#" /></span>
                         <span class="inline-block"><img src="<?php echo get_template_directory_uri(); ?>/images/rating-star.png" alt="#" /></span>
                         <span class="inline-block"><img src="<?php echo get_template_directory_uri(); ?>/images/rating-star.png" alt="#" /></span>
                    </div>
                    <div class="">
                        <p class="text-sm">9 hours ago</p>
                    </div>
                 </div>
                 <h4 class="text-lg font-semibold mt-2 mb-1">Very pleased with the insoles</h4>
                 <p>Very pleased with the insoles. A little pricer that the ones I normally order, </p>
                 <a href="javascript:void(0);" class="text-black mt-3 inline-block">Mark Oliver</a>
            </div>
        </div>
       </div>
    </section>
    <!-- review section end -->

    <!-- blog section start -->
    <section class="blog_sec">
        <div class="container mx-auto">
            <div class="text-center">
                <h2 class="font-medium text-3xl md:text-4xl text-black">
                    vpnHunt Guides</b>
                </h2>
                <p class="text-lg font-normal mt-3 mb-7">Easy reads on VPNs and staying safe online. All you need to know, all in one place.</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 grid-cols-1 gap-3">
                <!-- blog 1 -->
               <div class="btn-black-dark rounded-lg p-5 pt-8 relative">
                   <a href="javascript:void(0);" class="absolute right-3 top-3"><img src="<?php echo get_template_directory_uri(); ?>/images/read-more-icon.png" alt="#" class="w-8 h-8"/></a>
                   <img src="<?php echo get_template_directory_uri(); ?>/images/blog1.png" alt="#" class="mx-auto w-40 h-32 mb-5"/>
                   <a href="javascript:void(0);" class="text-white">
                       <span class="block text-xs font-normal">Aug 7, 2023 | by Mark Oliver  </span>
                       <span class="block mt-2 text-2xl">What is a VPN?</a>
                   </a>
               </div>
               <!-- blog 2 -->
               <div class="btn-orange-light-100 rounded-lg p-5 pt-8 relative">
                <a href="javascript:void(0);" class="absolute right-3 top-3"><img src="<?php echo get_template_directory_uri(); ?>/images/read-more-icon.png" alt="#" class="w-8 h-8"/></a>
                <img src="<?php echo get_template_directory_uri(); ?>/images/blog2.png" alt="#" class="mx-auto w-40 h-32 mb-5"/>
                <a href="javascript:void(0);" class="text-black">
                    <span class="block text-xs font-normal">Aug 7, 2023 | by Mark Oliver  </span>
                    <span class="block mt-2 text-2xl">How to Set Up a VPN?
                    </a>
                </a>
            </div>
            <!-- blog 3 -->
            <div class="btn-voilet-light-300 rounded-lg p-5 pt-8 relative">
                <a href="javascript:void(0);" class="absolute right-3 top-3"><img src="<?php echo get_template_directory_uri(); ?>/images/read-more-icon.png" alt="#" class="w-8 h-8"/></a>
                <img src="<?php echo get_template_directory_uri(); ?>/images/blog3.png" alt="#" class="mx-auto w-40 h-32 mb-5"/>
                <a href="javascript:void(0);" class="text-black">
                    <span class="block text-xs font-normal">Aug 7, 2023 | by Mark Oliver  </span>
                    <span class="block mt-2 text-2xl">How does a VPN work to encrypt your data?</a>
                </a>
            </div>
            <!-- blog 4 -->
            <div class="bg-yellow-light-200 rounded-lg p-5 pt-8 relative">
                <a href="javascript:void(0);" class="absolute right-3 top-3"><img src="<?php echo get_template_directory_uri(); ?>/images/read-more-icon.png" alt="#" class="w-8 h-8"/></a>
                <img src="<?php echo get_template_directory_uri(); ?>/images/blog4.png" alt="#" class="mx-auto w-40 h-32 mb-5"/>
                <a href="javascript:void(0);" class="text-black">
                    <span class="block text-xs font-normal">Aug 7, 2023 | by Mark Oliver  </span>
                    <span class="block mt-2 text-2xl">Are VPNs 100% safe?
                    </a>
                </a>
            </div>
            <!-- blog 5 -->
            <div class="bg-blue-dark-400 rounded-lg p-5 pt-8 relative">
                <a href="javascript:void(0);" class="absolute right-3 top-3"><img src="<?php echo get_template_directory_uri(); ?>/images/read-more-icon.png" alt="#" class="w-8 h-8"/></a>
                <img src="<?php echo get_template_directory_uri(); ?>/images/blog5.png" alt="#" class="mx-auto w-40 h-32 mb-5"/>
                <a href="javascript:void(0);" class="text-black">
                    <span class="block text-xs font-normal">Aug 7, 2023 | by Mark Oliver  </span>
                    <span class="block mt-2 text-2xl">Are VPNs legal? Check before you use one</a>
                </a>
            </div>
            <!-- blog 6 -->
            <div class="bg-green-dark-400 rounded-lg p-5 pt-8 relative">
                <a href="javascript:void(0);" class="absolute right-3 top-3"><img src="<?php echo get_template_directory_uri(); ?>/images/read-more-icon.png" alt="#" class="w-8 h-8"/></a>
                <img src="<?php echo get_template_directory_uri(); ?>/images/blog6.png" alt="#" class="mx-auto w-40 h-32 mb-5"/>
                <a href="javascript:void(0);" class="text-black">
                    <span class="block text-xs font-normal">Aug 7, 2023 | by Mark Oliver  </span>
                    <span class="block mt-2 text-2xl">How does a VPN work to encrypt your data?</a>
                </a>
            </div>
            </div>
            <div class="text-center my-8">
                <a href="javascript:void(0);" class="btn-bg-orange-500 duration-500 rounded text-white font-medium py-1 px-3 inline-block">See All Guides</a>
            </div>
        </div>
    </section>
    <!-- blog section end -->

    <!-- our mission section start -->
<section class="our_mission_sec md:py-16 py-14">
    <div class="container mx-auto">
        <div class="text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/images/marketing-flatline.png" alt="#" class="mx-auto mb-5" />
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