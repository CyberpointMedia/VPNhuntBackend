<?php
wp_head(); ?>

<body <?php body_class(); ?>>
        <!-- header start here -->
        <header class="relative">
                <nav class="bg-white w-full z-20 top-0 start-0 border-b border-gray-200">
                        <div class="container">
                                <div class="flex flex-wrap items-center justify-between py-4">
                                        <a href="javascript:void(0);" class="flex items-center space-x-3 rtl:space-x-reverse">
                                                <img src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) ); ?>" class="h-8" alt="VPNHunt Logo">
                                        </a>
                                        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                                                <button id="top-search" class="mr-2 sm:mr-3 lg:ml-0">
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/search.png" alt="search">
                                                </button>
                                                <button id="mobile-menu-button" data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-black-500 lg:hidden focus:outline-none" aria-controls="navbar-sticky" aria-expanded="false">
                                                        <span class="sr-only">Open Main Menu</span>
                                                        <svg id="menu-icon-open" class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                                                        </svg>
                                                        <svg id="menu-icon-close" class="h-6 w-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                        </svg>
                                                </button>
                                        </div>
                                        <?php 
                                                $args = array(
                                                        'theme_location' => 'header-menu',
                                                        'container' => 'div',
                                                        'container_class' => 'items-center justify-between duration-500 w-full lg:flex lg:w-auto lg:order-1',
                                                        'container_id' => 'navbar-sticky',
                                                        'menu_class' => 'flex flex-col p-4 lg:p-0 font-medium lg:space-x-8 rtl:space-x-reverse lg:flex-row lg:mt-0'
                                                        //'items_wrap' => '%3$s'
                                                );
                                                wp_nav_menu( $args ); 
                                        ?>
                                </div>
                        </div>
                </nav>
                <!-- main search start here -->
                <div id="main-search" class="drop-shadow-lg p-4 bg-white duration-500">    
                        <form class="flex items-center">   
                                <div class="relative w-full">
                                        <button type="submit" class="absolute inset-y-0 start-0 flex items-center p-2.5 text-sm font-medium text-black focus:outline-none hover-text focus-text">
                                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                                </svg>
                                        </button>   
                                        <input type="text" id="simple-search" class="bg-gray-50 text-gray-900 text-sm block w-full ps-10 p-2.5 focus:outline-none" placeholder="Search here..." required>
                                </div>
                                <svg id="search-close" class="h-6 w-6 cursor-pointer hover-text" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                        </form>
                </div>
                <!-- main search end here --> 
        </header>
        <!-- header end here -->