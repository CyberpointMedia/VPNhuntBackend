<?php 
/** Template Name: Review **/
get_header(); ?>
<!-- top banner start here -->
<section class="top-bg bg-center bg-cover" style="background-image: url('images/contact-bg.png'); background-size: cover; background-repeat: no-repeat;">
    <div>
        <div class="container">
            <nav class="md:mb-16 mb-10 pt-6" aria-label="breadcrumb">
                <ol class="flex space-x-2 items-center">
                    <li class="text-black flex space-x-1 items-center"><a href="<?php bloginfo('url'); ?>"><img src="<?php echo theme_url(); ?>/images/home-icon.svg" /></a><span>/</span></li>
                    <li class="text-red-400 text-sm" aria-current="page"><?php the_title(); ?></li>
                  </ol>
              </nav>
                <div class="flex md:flex-row flex-col flex-wrap relative md:text-left">
                    <div class="md:w-2/3 w-full">
                        <h1 class="font-medium text-4xl text-black mb-3">
                        <?php the_title(); ?>
                        </h1>
                        <p class="text-base">
                            One of the most popular VPNs might also be the most secure.
                        </p>
                        <ul class="flex flex-col lg:flex-row lg:space-y-0 space-y-5 lg:space-x-3 my-7 lg:items-center">
                            <li>
                                <img src="<?php echo theme_url(); ?>/images/profile-icon.svg" alt="#" class="inline-block" />
                                <a href="javascript:void(0);" class="text-red-400 text-sm font-medium"><?php echo get_post_meta(get_the_id(), '_page_author_name', true); ?></a>
                                <img src="<?php echo theme_url(); ?>/images/vertical-line.svg" alt="#" class="inline-block" />
                                <span class="text-sm">Fact-checked and Reviewed by</span>
                            </li>
                            <li>
                                <img src="<?php echo theme_url(); ?>/images/profile-icon.svg" alt="#" class="inline-block" />
                                <a href="javascript:void(0);" class="text-red-400 text-sm font-medium"><?php echo get_post_meta(get_the_id(), '_page_fact_checker', true); ?></a>
                                <img src="<?php echo theme_url(); ?>/images/vertical-line.svg" alt="#" class="lg:inline-block hidden" />
                            </li>
                            <li>
                                <img src="<?php echo theme_url(); ?>/images/check-circle-icon.svg" alt="#" class="inline-block" />
                                <span class="text-sm">Last Updated <?php echo get_the_modified_date(); ?></span>
                            </li>
                        </ul>
                        <div class="flex flex-wrap items-center mb-10">
                            <p>Share on:</p>
                            <ul class="flex space-x-3 pl-3">
                            <?php $social_media =  get_post_meta(get_the_id(), '_page_social', true); $social_media = explode("|", $social_media); ?>
                                <?php foreach($social_media as $key=>$value){ ?>
                                <li>
                                    <a class="hover:text-red-400" data-href="<?php echo get_the_permalink(); ?>" data-layout="button_count">
                                    <i class="fab fa-<?php echo $value; ?>"></i>
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="md:w-1/4 w-full md:absolute bottom-0 right-0 content-end">
                        <img src="<?php echo theme_url(); ?>/images/nord-review-img.svg" alt="#" class="inline-block" />
                    </div>
                </div>                   
        </div>
      </div>
</section>
<!-- top banner end here -->

<!-- page link start -->
<section class="list-links">
    <div class="container">
        <div class="flex flex-wrap md:flex-wrap-reverse md:flex-row items-center text-center md:text-left md:mt-0 mt-5 py-5 justify-between">
            <p class="md:w-1/6 w-full font-medium text-base">VPN Guides:</p>
            <ul class="md:w-10/12 w-full overflow-x-auto horizontal-scroll whitespace-nowrap">
                <li class="">
                    <a href="javascript:void(0);" class="text-sm font-normal border-b-4 border-transparent duration-30 hover-text text-center active">VPN for Straming</a>
                </li>
                <li class="">
                    <a href="javascript:void(0);" class="text-sm font-normal border-b-4 border-transparent duration-30 hover-text text-center">VPNs for Torrenting</a>
                </li>
                <li class="">
                    <a href="javascript:void(0);" class="text-sm font-normal border-b-4 border-transparent duration-30 hover-text text-center">VPNs for Gamers</a>
                </li>
                <li class="">
                    <a href="javascript:void(0);" class="text-sm font-normal border-b-4 border-transparent duration-30 hover-text text-center">VPNs for Cheap</a>
                </li>
                <li class="">
                    <a href="javascript:void(0);" class="text-sm font-normal border-b-4 border-transparent duration-30 hover-text text-center">VPNs for iPhone</a>
                </li>
                <li class="">
                    <a href="javascript:void(0);" class="text-sm font-normal border-b-4 border-transparent duration-30 hover-text text-center">VPNs for Android</a>
                </li>
                <li class="">
                    <a href="javascript:void(0);" class="text-sm font-normal border-b-4 border-transparent duration-30 hover-text text-center">Free VPNs</a>
                </li>
                <li class="">
                    <a href="javascript:void(0);" class="text-sm font-normal border-b-4 border-transparent duration-30 hover-text text-center">VPNs for Chrome</a>
                </li>
                
            </ul>
        </div>
    </div>
</section>
<!-- page link end -->

<!-- content section start here -->
<section class="our-expertise-sec md:py-14 py-5">
    <div class="container">
        <div class="flex lg:flex-row flex-col flex-wrap relative items-start px-0 md:px-10 lg:px-0">
            <div class="lg:w-3/12 rounded-lg relative mb-3 md:mb-4 lg:mb-0 md-sm-none">
                <div class="bg-gray-light-100 w-full text-center py-5 px-8 border border-b-0">
                    <img src="<?php echo theme_url(); ?>/images/nord-vpn-lgo.svg" alt="#" class="inline-block mx-auto">
                    <div class="text-base relative inline-block font-medium">Editors Rating: 9.7<span class="text-xs">/10</span>
                        <div class="absolute -left-5 top-1 w-4 h-4  invisible md:visible"><img src="<?php echo theme_url(); ?>/images/logo-icon.svg"></div>
                    </div>
                    <div class="my-5 text-center">
                        <a href="javascript:void(0);" class="btn-bg-orange-500 duration-500 rounded text-white font-medium py-1 px-3 inline-block">Visit NordVPN</a>
                    </div>
                </div>

                <div class="rounded-lg sticky mb-3 md:mb-4 lg:mb-0">
                    <div id="table-of-contents" class="flex-column text-sm bg-white border py-4 table-content overflow-y-scroll hidden lg:block"></div>
                </div>                    
            </div>
            <div class="lg:w-3/4 w-full lg:pl-28 text-left">
                <!-- right content section start -->
                <div class="right_content_sec">
                    <?php the_content(); ?>
                    <?php get_template_part('template-parts/faqs'); ?>
                </div>
                <!-- right content section end -->

            </div>
        </div>
    </div>
</section>
<!-- content section end here -->

<!-- blog section start -->
<section class="blog_sec md:py-12 py-8">
    <div class="container mx-auto">
        <div class="text-center">
            <div class="font-medium text-3xl md:text-4xl text-black">
                Related Posts</b>
            </div>
            <p class="text-lg font-normal mt-3 mb-7">Easy reads on VPNs and staying safe online. All you need to know, all in one place.</p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 grid-cols-1 gap-3">
            <!-- blog 1 -->
           <div class="bg-black-dark rounded-lg px-5 pb-8 md:pt-12 pt-8 relative blogs-col">
               <a href="javascript:void(0);" class="absolute right-3 top-3"><img src="<?php echo theme_url(); ?>/images/read-more-icon-white.svg" alt="#" class="w-8 h-8"/></a>
               <img src="<?php echo theme_url(); ?>/images/blog1.png" alt="#" class="mx-auto w-40 h-32 mb-5"/>
               <a href="javascript:void(0);" class="text-white">
                   <span class="block text-xs font-normal">Aug 7, 2023 | by Mark Oliver  </span>
                   <span class="block mt-2 text-2xl font-medium">What is a VPN?</a>
               </a>
           </div>
           <!-- blog 2 -->
           <div class="bg-orange-light-100 rounded-lg px-5 pb-8 md:pt-12 pt-8 relative blogs-col">
            <a href="javascript:void(0);" class="absolute right-3 top-3"><img src="<?php echo theme_url(); ?>/images/read-more-icon-black.svg" alt="#" class="w-8 h-8"/></a>
            <img src="<?php echo theme_url(); ?>/images/blog2.png" alt="#" class="mx-auto w-40 h-32 mb-5"/>
            <a href="javascript:void(0);" class="text-black">
                <span class="block text-xs font-normal">Aug 7, 2023 | by Mark Oliver  </span>
                <span class="block mt-2 text-2xl font-medium">How to Set Up a VPN?
                </a>
            </a>
        </div>
        <!-- blog 3 -->
        <div class="bg-voilet-light-300 rounded-lg px-5 pb-8 md:pt-12 pt-8 relative blogs-col">
            <a href="javascript:void(0);" class="absolute right-3 top-3"><img src="<?php echo theme_url(); ?>/images/read-more-icon-black.svg" alt="#" class="w-8 h-8"/></a>
            <img src="<?php echo theme_url(); ?>/images/blog3.png" alt="#" class="mx-auto w-40 h-32 mb-5"/>
            <a href="javascript:void(0);" class="text-black">
                <span class="block text-xs font-normal">Aug 7, 2023 | by Mark Oliver  </span>
                <span class="block mt-2 text-2xl font-medium">How does a VPN work to encrypt your data?</a>
            </a>
        </div>
        <!-- blog 4 -->
        <div class="bg-yellow-light-200 rounded-lg px-5 pb-8 md:pt-12 pt-8 relative blogs-col">
            <a href="javascript:void(0);" class="absolute right-3 top-3"><img src="<?php echo theme_url(); ?>/images/read-more-icon-black.svg" alt="#" class="w-8 h-8"/></a>
            <img src="<?php echo theme_url(); ?>/images/blog4.png" alt="#" class="mx-auto w-40 h-32 mb-5"/>
            <a href="javascript:void(0);" class="text-black">
                <span class="block text-xs font-normal">Aug 7, 2023 | by Mark Oliver  </span>
                <span class="block mt-2 text-2xl font-medium">Are VPNs 100% safe?
                </a>
            </a>
        </div>
        <!-- blog 5 -->
        <div class="bg-blue-dark-400 rounded-lg px-5 pb-8 md:pt-12 pt-8 relative blogs-col">
            <a href="javascript:void(0);" class="absolute right-3 top-3"><img src="<?php echo theme_url(); ?>/images/read-more-icon-black.svg" alt="#" class="w-8 h-8"/></a>
            <img src="<?php echo theme_url(); ?>/images/blog5.png" alt="#" class="mx-auto w-40 h-32 mb-5"/>
            <a href="javascript:void(0);" class="text-black">
                <span class="block text-xs font-normal">Aug 7, 2023 | by Mark Oliver  </span>
                <span class="block mt-2 text-2xl font-medium">Are VPNs legal? Check before you use one</a>
            </a>
        </div>
        <!-- blog 6 -->
        <div class="bg-green-dark-400 rounded-lg px-5 pb-8 md:pt-12 pt-8 relative blogs-col">
            <a href="javascript:void(0);" class="absolute right-3 top-3"><img src="<?php echo theme_url(); ?>/images/read-more-icon-black.svg" alt="#" class="w-8 h-8"/></a>
            <img src="<?php echo theme_url(); ?>/images/blog6.png" alt="#" class="mx-auto w-40 h-32 mb-5"/>
            <a href="javascript:void(0);" class="text-black">
                <span class="block text-xs font-normal">Aug 7, 2023 | by Mark Oliver  </span>
                <span class="block mt-2 text-2xl font-medium">How does a VPN work to encrypt your data?</a>
            </a>
        </div>
        </div>
        <div class="text-center my-8">
            <a href="javascript:void(0);" class="btn-bg-orange-500 duration-500 rounded text-white font-medium py-1 px-3 inline-block">See All Posts</a>
        </div>
    </div>
</section>
<!-- blog section end -->
<?php get_footer();