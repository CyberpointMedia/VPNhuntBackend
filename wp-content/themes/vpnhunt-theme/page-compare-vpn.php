<?php
// Template Name: Compare VPN

get_header(); ?>
<!-- top banner start here -->
<section class="top-bg bg-center bg-cover" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/contact-bg.png'); background-size: cover; background-repeat: no-repeat;">
        <div>
            <div class="container">
                <nav class="md:mb-16 mb-10 pt-6" aria-label="breadcrumb">
                    <ol class="flex space-x-2 items-center">
                        <li class="text-black flex space-x-1 items-center">
                            <a href="<?php echo get_site_url(); ?>">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-icon.svg" />
                            </a>
                            <span>/</span>
                        </li>
                        <li class="text-red-400 text-sm" aria-current="page">
                            <?php the_title(); ?>
                        </li>
                      </ol>
                  </nav>
                    <div class="flex md:flex-row flex-col flex-wrap relative md:text-left">
                        <div class="lg:w-2/3 w-full">
                            <h1 class="font-medium text-4xl text-black mb-3">
                                VPN Comparison Tool
                            </h1>
                            <p class="text-base">
                                Use the VPN comparison tool below to compare up to five VPNs side-by-side based on their pricing, speeds, security, logging policy, and more.
                            </p>
                            <div class="lg:my-10 my-10 md:mb-20 max-w-xl">
                                <p class="font-medium text-base">Add a VPN to compare:</p>
                                
                                <div class="flex flex-col md:flex-row items-center gap-3 mt-5 ">
                                    <div class="flex flex-col md:flex-row items-center gap-3 md:w-auto w-full add-compare-row">
                                        <div class="vpnCompare md:w-auto w-full">
                                            <select class="compareSelect-item">
                                                <option value="" data-thumbnail="<?php echo get_stylesheet_directory_uri(); ?>/images/express-small-logo.svg">
                                                    --select--
                                                </option>
                                                <option value="express" data-thumbnail="<?php echo get_stylesheet_directory_uri(); ?>/images/express-small-logo.svg">
                                                    Express VPN
                                                </option>
                                                <option value="cyberGhost" data-thumbnail="<?php echo get_stylesheet_directory_uri(); ?>/images/cyber-ghost-brand-logo.svg">
                                                    Cyber Ghost
                                                </option>
                                                <option value="IPVanish" data-thumbnail="<?php echo get_stylesheet_directory_uri(); ?>/images/ip-vanish-small-logo.svg">
                                                    IP Vanish
                                                </option>
                                                <option value="private-internet-access" data-thumbnail="<?php echo get_stylesheet_directory_uri(); ?>/images/private-internet-small-logo.png">
                                                    Private Internet Access
                                                </option>
                                                <option value="private-internet-access" data-thumbnail="<?php echo get_stylesheet_directory_uri(); ?>/images/private-internet-small-logo.png">
                                                    Nord VPN
                                                </option>
                                            </select>
                                            <div class="showCompare-item md:w-48 w-full text-base text-[#646F79]">
                                                <button class="btn-select bg-white border border-[#E9E9E9] w-full py-2 px-1 rounded relative items-center" value="">
                                                </button>
                                                <ul class="compare_listing"></ul>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="border border-[#E9E9E9] md:w-10 w-full h-10 bg-white text-center rounded" type="button" id="add-compare">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="mx-auto add-icon inline-block">
                                            <path d="M13 20L13 4C13 3.5 12.6 3 12 3C11.4 3 11 3.5 11 4L11 20C11 20.2652 11.1054 20.5196 11.2929 20.7071C11.4804 20.8946 11.7348 21 12 21C12.6 21 13 20.5 13 20Z" fill="#0D0E10"/>
                                            <path d="M4 13L20 13C20.5 13 21 12.6 21 12C21 11.4 20.5 11 20 11L4 11C3.73478 11 3.48043 11.1054 3.29289 11.2929C3.10536 11.4804 3 11.7348 3 12C3 12.6 3.5 13 4 13Z" fill="#0D0E10"/>
                                        </svg>
                                        <span class="text-[#0D0E10] font-medium md:hidden inline-block ml-2">Add more</span>
                                    </button>
                                    <button class="border border-[#E9E9E9] md:w-10 w-full h-10 bg-white text-center rounded hidden" type="button" id="remove-compare">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 22 22" fill="none" class="remove-icon mx-auto inline-block">
                                            <path d="M6.46407 16.8336L16.835 6.46274C17.1591 6.13864 17.2239 5.55528 16.835 5.16637C16.4461 4.77747 15.8627 4.84228 15.5386 5.16637L5.16771 15.5373C4.9958 15.7092 4.89923 15.9423 4.89923 16.1855C4.89923 16.4286 4.9958 16.6617 5.16771 16.8336C5.55662 17.2225 6.13998 17.1577 6.46407 16.8336Z" fill="#0D0E10"/>
                                            <path d="M16.8318 15.5373L6.46088 5.16637C6.13679 4.84228 5.55342 4.77746 5.16451 5.16637C4.7756 5.55528 4.84042 6.13864 5.16451 6.46273L15.5354 16.8336C15.7073 17.0055 15.9405 17.1021 16.1836 17.1021C16.4267 17.1021 16.6599 17.0055 16.8318 16.8336C17.2207 16.4447 17.1559 15.8614 16.8318 15.5373Z" fill="#0D0E10"/>
                                        </svg>
                                        <span class="text-[#0D0E10] font-medium md:hidden inline-block ml-2">Cancel</span>
                                    </button>
                                    
                                </div>
                                <span class="error"></span>
                                <button class="bg-[#FF6961] text-white p-3 w-full md:w-80 mx-auto text-center rounded mt-5" id="compare-now">Compare Now</button>  
                                
                                  
                            </div>
                        </div>
                        <div class="lg:w-1/4 w-full lg:absolute bottom-0 right-0 content-end hidden lg:block">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/nord-vs-express.svg" alt="#" class="inline-block" />
                        </div>
                    </div> 
            </div>
          </div>
    </section>
    <!-- top banner end here -->

    <!-- content section start here -->
    <section class="our-expertise-sec md:py-14 py-5">
        <div class="container">
        

            
            <div class="flex relative items-start px-0 md:px-10 lg:px-0">
                <div class="w-full text-left">
                    <!-- right content section start -->

                    <div class="right_content_sec">
                        <div class="overflow-x-auto md:mb-14 mb-8 mt-6">
                           
                            <table class="w-auto table " style="display:none;">
                                <thead>
                                    <tr>
                                        <th class="py-2 px-3 text-base font-medium text-center border-0">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>
                        <div class="relative">
                            <h2 class="text-2xl lg:text-3xl font-medium text-black mb-5">Most popular comparisons</h2>
                            <div class="grid lg:grid-cols-2 grid-cols-1 gap-3 mb-20">
                                <div class="flex items-center bg-white border rounded text-center py-1 px-3 mt-3 comparisons-hover">
                                    <div class="flex-1">
                                        <img class="mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/compare-logo1.png" alt="#">
                                    </div>
                                    <div class="flex-1">
                                        <div class="font-normal text-sm">VS.</div>
                                    </div>
                                    <div class="flex-1">
                                        <img class="mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/compare-logo2.png" alt="#">
                                    </div>
                                </div>
                                <div class="flex items-center bg-white border rounded text-center py-1 px-3 mt-3 comparisons-hover">
                                    <div class="flex-1">
                                        <img class="mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/compare-logo1.png" alt="#">
                                    </div>
                                    <div class="flex-1">
                                        <div class="font-normal text-sm">VS.</div>
                                    </div>
                                    <div class="flex-1">
                                        <img class="mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/compare-logo2.png" alt="#">
                                    </div>
                                </div>
                                <div class="flex items-center bg-white border rounded text-center py-1 px-3 mt-3 comparisons-hover">
                                    <div class="flex-1">
                                        <img class="mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/compare-logo1.png" alt="#">
                                    </div>
                                    <div class="flex-1">
                                        <div class="font-normal text-sm">VS.</div>
                                    </div>
                                    <div class="flex-1">
                                        <img class="mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/compare-logo2.png" alt="#">
                                    </div>
                                </div>
                                <div class="flex items-center bg-white border rounded text-center py-1 px-3 mt-3 comparisons-hover">
                                    <div class="flex-1">
                                        <img class="mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/compare-logo1.png" alt="#">
                                    </div>
                                    <div class="flex-1">
                                        <div class="font-normal text-sm">VS.</div>
                                    </div>
                                    <div class="flex-1">
                                        <img class="mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/compare-logo2.png" alt="#">
                                    </div>
                                </div>
                                <div class="flex items-center bg-white border rounded text-center py-1 px-3 mt-3 comparisons-hover">
                                    <div class="flex-1">
                                        <img class="mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/compare-logo1.png" alt="#">
                                    </div>
                                    <div class="flex-1">
                                        <div class="font-normal text-sm">VS.</div>
                                    </div>
                                    <div class="flex-1">
                                        <img class="mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/compare-logo2.png" alt="#">
                                    </div>
                                </div>
                                <div class="flex items-center bg-white border rounded text-center py-1 px-3 mt-3 comparisons-hover">
                                    <div class="flex-1">
                                        <img class="mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/compare-logo1.png" alt="#">
                                    </div>
                                    <div class="flex-1">
                                        <div class="font-normal text-sm">VS.</div>
                                    </div>
                                    <div class="flex-1">
                                        <img class="mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/compare-logo2.png" alt="#">
                                    </div>
                                </div>
                                <div class="flex items-center bg-white border rounded text-center py-1 px-3 mt-3 comparisons-hover">
                                    <div class="flex-1">
                                        <img class="mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/compare-logo1.png" alt="#">
                                    </div>
                                    <div class="flex-1">
                                        <div class="font-normal text-sm">VS.</div>
                                    </div>
                                    <div class="flex-1">
                                        <img class="mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/compare-logo2.png" alt="#">
                                    </div>
                                </div>
                                <div class="flex items-center bg-white border rounded text-center py-1 px-3 mt-3 comparisons-hover">
                                    <div class="flex-1">
                                        <img class="mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/compare-logo1.png" alt="#">
                                    </div>
                                    <div class="flex-1">
                                        <div class="font-normal text-sm">VS.</div>
                                    </div>
                                    <div class="flex-1">
                                        <img class="mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/compare-logo2.png" alt="#">
                                    </div>
                                </div>
                                <div class="flex items-center bg-white border rounded text-center py-1 px-3 mt-3 comparisons-hover">
                                    <div class="flex-1">
                                        <img class="mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/compare-logo1.png" alt="#">
                                    </div>
                                    <div class="flex-1">
                                        <div class="font-normal text-sm">VS.</div>
                                    </div>
                                    <div class="flex-1">
                                        <img class="mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/compare-logo2.png" alt="#">
                                    </div>
                                </div>
                                <div class="flex items-center bg-white border rounded text-center py-1 px-3 mt-3 comparisons-hover">
                                    <div class="flex-1">
                                        <img class="mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/compare-logo1.png" alt="#">
                                    </div>
                                    <div class="flex-1">
                                        <div class="font-normal text-sm">VS.</div>
                                    </div>
                                    <div class="flex-1">
                                        <img class="mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/compare-logo2.png" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-8">
                            <h2 class="text-2xl lg:text-3xl font-medium text-black mb-5">How to Choose the Right VPN</h2>
                            <p>
                                There’s a lot of information to take in when comparing VPN services, and not all of it will be 100% relevant to you. If you’re just looking for a VPN that excels in all categories, take a look at our recommendations for <a href="javascript:void(0);" class="text-black underline">the best VPNs overall</a>.
                                <br>
                                <br>
                                If you’re using our tool to weigh up between a few VPNs, we want to help you make a responsible and informed buying decision. To help you do this, here’s a more detailed explanation of the attributes included in the comparison tool:
                            </p>
                        </div>
                        <div class="mb-8">
                            <h2 class="text-2xl lg:text-3xl font-medium text-black my-5">Pricing</h2>
                            <p>
                                While there are plenty of free VPNs on the market, the best VPN services cost money. Whether that cost is paid on a rolling monthly contract or a single up-front fee is up to you.
                                <br>
                                <br>
                                Our tool lists each VPN’s free trial period (if there is one) and how long the money-back guarantee period is. Every reputable VPN will be happy to refund you if you aren’t satisfied with the product, so buying a VPN is extremely low-risk.
                                <br>
                                <br>
                                If you don’t need a full suite of features, then there are also a handful of trustworthy <a href="javascript:void(0);" class="text-black underline">free VPNs we recommend</a>.
                            </p>
                        </div>

                        <div class="mb-8">
                            <h2 class="text-2xl lg:text-3xl font-medium text-black my-5">Security & Privacy</h2>
                            <p>
                                No matter why you need a VPN, it’s vital you can trust it to keep your data encrypted and private.
                                <br>
                                <br>
                                Our comparison tool keeps it simple by listing only the most important privacy and security features. You can see the type of data each VPN logs, where the VPN is incorporated, how it encrypts data, and whether it has suffered any data leaks in our testing.
                            </p>
                        </div>

                        <div class="mb-8">
                            <h2 class="text-2xl lg:text-3xl font-medium text-black my-5">Speed & Servers</h2>
                            <p>
                                Download speeds are important for a VPN, but they rely heavily on the service’s server network. Always check our full <a href="javascript:void(0);" class="text-black underline">VPN reviews</a> to make sure there is a server in or near your country as well as the country you want to connect to.
                                <br>
                                <br>
                                We list average local download speeds in the comparison tool above. We test from London, UK, but if you connect to a server near your location then you should expect similar results.If you plan on mostly connecting to distant servers, we cover international speeds in our reviews and our <a href="javascript:void(0);" class="text-black underline">VPN speed comparison tool</a>.
                            </p>
                        </div>

                        <div class="mb-8">
                            <h2 class="text-2xl lg:text-3xl font-medium text-black my-5">Streaming & P2P</h2>
                            <p>
                                Streaming and torrenting are two of the most popular reasons to use a VPN.
                                <br>
                                <br>
                                We put particular emphasis on whether or not a VPN can access the US Netflix library because of its popularity and huge range of content, but we don’t stop there. You can also see all of the other streaming services each VPN unblocked in our testing.
                                <br>
                                <br>
                                As for torrenting, you can see whether P2P traffic is allowed by the VPN, and on how many servers it is permitted.
                            </p>
                        </div>

                        <div class="mb-8">
                            <h2 class="text-2xl lg:text-3xl font-medium text-black my-5">Compatibility</h2>
                            <p>
                                Good VPNs have applications for as many platforms and devices as possible, but even the best might not support the specific platform you’re looking for.
                                <br>
                                <br>
                                In the comparison tool, you’ll find the devices each VPN makes a bespoke application for, as well as the devices that are supported by installing the VPN on your router. Smart DNS lets you stream foreign content libraries, but it won’t protect your traffic.
                            </p>
                        </div>

                        <div class="mb-8">
                            <h2 class="text-2xl lg:text-3xl font-medium text-black my-5">Advanced Features</h2>
                            <p>
                                Every VPN has a different set of features. Here you can see some of the more common extras that we think are particularly useful or important. The VPN kill switch is vital for keeping your connection secure, while the ability to work in China is critical if you live in any country with a censored internet.
                            </p>
                        </div>
                    </div>
                    <!-- right content section end -->
                </div>
            </div>
        </div>
    </section>
    <!-- content section end here -->

    <section class="relative mt-8 md:mb-20 mb-8">
        <div class="container">
            <div class="max-w-3xl mx-auto">
                <!-- faq start here -->
                <div class="text-2xl lg:text-3xl font-medium text-black text-center mb-8">Frequently Asked Questions</div>
                <div accordion="" class="mb-7">
                    <div accordion-section="" class="mb-4 rounded-lg bg-white accordian-row">
                      <div class="mb-0 accordion-toggle">
                        <button section-trigger="" class="relative flex items-center w-full p-4 font-semibold text-left transition-all  cursor-pointer ease-soft-in text-black text-base" aria-expanded="true">
                            What is the #1 best VPN?
                          <i section-open-icon="" class="absolute right-0 pt-1 mr-4 leading-tight">
                            <img class="faq-arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/images/chevron-down.svg" alt="#">
                          </i>
                        </button>
                      </div>
                      <div section-content="" class="overflow-hidden transition-all ease-soft-in-out duration-350 accordion-content">
                        <div class="p-4 leading-normal text-base opacity-80 text-left">
                            Based on our most recent tests, ExpressVPN is the current #1 VPN service. It has an extensive set of security features, consistently fast speeds, and intuitive applications for all devices. Importantly, it also has an excellent track record for protecting its users’ privacy.
                            <br>
                            <br>
                            ExpressVPN works particularly well for unblocking geo-restricted streaming services. It can access 10 international Netflix regions, along with other popular services like Hulu, Disney Plus, and HBO Max.
                            <br>
                            <br>
                            Put simply, ExpressVPN outperforms every other VPN service in almost every single testing category, and it has done so for several years. Despite its above-average subscription price, it’s absolutely worth it given its superior capabilities as a VPN.
                        </div>
                      </div>
                    </div>
                    <div accordion-section="" class="mb-4 rounded-lg bg-white accordian-row">
                        <div class="mb-0 accordion-toggle">
                        <button section-trigger="" class="relative flex items-center w-full p-4 font-semibold text-left transition-all  cursor-pointer ease-soft-in text-black text-base" aria-expanded="false">
                            Are VPN Services Legal?
                            <i section-open-icon="" class="absolute right-0 pt-1 mr-4 leading-tight">
                                <img class="faq-arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/images/chevron-down.svg" alt="#">
                            </i>
                        </button>
                      </div>
                      <div section-content="" class="overflow-hidden transition-all ease-soft-in-out duration-350 accordion-content">
                        <div class="p-4 leading-normal text-base opacity-80 text-left">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                          <br>
                          <br>
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </div>
                      </div>
                    </div>
                    <div accordion-section="" class="mb-4 rounded-lg bg-white accordian-row">
                        <div class="mb-0 accordion-toggle">
                        <button section-trigger="" class="relative flex items-center w-full p-4 font-semibold text-left transition-all  cursor-pointer ease-soft-in text-black text-base" aria-expanded="false">
                            Are VPNs trustworthy?
                            <i section-open-icon="" class="absolute right-0 pt-1 mr-4 leading-tight">
                                <img class="faq-arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/images/chevron-down.svg" alt="#">
                            </i>
                        </button>
                      </div>
                      <div section-content="" class="overflow-hidden transition-all ease-soft-in-out duration-350 accordion-content">
                        <div class="p-4 leading-normal text-base opacity-80 text-left ">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </div>
                      </div>
                    </div>
                    <div accordion-section="" class="mb-4 rounded-lg bg-white accordian-row">
                        <div class="mb-0 accordion-toggle">
                        <button section-trigger="" class="relative flex items-center w-full p-4 font-semibold text-left transition-all  cursor-pointer ease-soft-in text-black text-base" aria-expanded="false">
                            How do I Set UP &amp; Use a VPN? 
                            <i section-open-icon="" class="absolute right-0 pt-1 mr-4 leading-tight">
                                <img class="faq-arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/images/chevron-down.svg" alt="#">
                            </i>
                        </button>
                      </div>
                      <div section-content="" class="overflow-hidden transition-all ease-soft-in-out duration-350 accordion-content">
                        <div class="p-4 leading-normal text-base opacity-80 text-left ">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. 
                          <br>
                          <br>
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </div>
                      </div>
                    </div>
                    <div accordion-section="" class="mb-4 rounded-lg bg-white accordian-row">
                        <div class="mb-0 accordion-toggle">
                        <button section-trigger="" class="relative flex items-center w-full p-4 font-semibold text-left transition-all  cursor-pointer ease-soft-in text-black text-base" aria-expanded="false">
                            Is it worth paying for a VPN?
                            <i section-open-icon="" class="absolute right-0 pt-1 mr-4 leading-tight">
                                <img class="faq-arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/images/chevron-down.svg" alt="#">
                            </i>
                        </button>
                      </div>
                      <div section-content="" class="overflow-hidden transition-all ease-soft-in-out duration-350 accordion-content">
                        <div class="p-4 leading-normal text-base opacity-80 text-left ">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. 
                        </div>
                      </div>              
                    </div>
                    <div accordion-section="" class="mb-4 rounded-lg bg-white accordian-row">
                        <div class="mb-0 accordion-toggle">
                        <button section-trigger="" class="relative flex items-center w-full p-4 font-semibold text-left transition-all  cursor-pointer ease-soft-in text-black text-base" aria-expanded="false">
                            Can you be tracked if you use a VPN?
                            <i section-open-icon="" class="absolute right-0 pt-1 mr-4 leading-tight">
                                <img class="faq-arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/images/chevron-down.svg" alt="#">
                            </i>
                        </button>
                      </div>
                      <div section-content="" class="overflow-hidden transition-all ease-soft-in-out duration-350 accordion-content">
                        <div class="p-4 leading-normal text-base opacity-80 text-left ">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. 
                        </div>
                      </div>              
                    </div>
                    <div accordion-section="" class="mb-4 rounded-lg bg-white accordian-row">
                        <div class="mb-0 accordion-toggle">
                        <button section-trigger="" class="relative flex items-center w-full p-4 font-semibold text-left transition-all  cursor-pointer ease-soft-in text-black text-base" aria-expanded="false">
                            Which free VPNs are best?
                            <i section-open-icon="" class="absolute right-0 pt-1 mr-4 leading-tight">
                                <img class="faq-arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/images/chevron-down.svg" alt="#">
                            </i>
                        </button>
                      </div>
                      <div section-content="" class="overflow-hidden transition-all ease-soft-in-out duration-350 accordion-content">
                        <div class="p-4 leading-normal text-base opacity-80 text-left ">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. 
                        </div>
                      </div>              
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>