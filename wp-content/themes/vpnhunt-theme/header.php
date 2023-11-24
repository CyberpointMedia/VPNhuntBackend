<?php
wp_head(); ?>

<body <?php body_class(); ?>>
        <!-- header start here -->
        <header class="">
                <nav class="bg-white dark:bg-gray-900 w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
                        <div class="container">
                                <div class="flex flex-wrap items-center justify-between py-4">
                                        <a href="javascript:void(0);" class="flex items-center space-x-3 rtl:space-x-reverse">
                                                <img src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) ); ?>" class="h-8" alt="Flowbite Logo">
                                        </a>
                                        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                                                <button>
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/search.png" alt="search">
                                                </button>
                                                <button id="mobile-menu-button" data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-black-500 lg:hidden focus:outline-none" aria-controls="navbar-sticky" aria-expanded="false">
                                                        <span class="sr-only">Open main menu</span>
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
                                                        'container_class' => 'items-center justify-between duration-500 hidden w-full lg:flex lg:w-auto lg:order-1',
                                                        'container_id' => 'navbar-sticky',
                                                        'menu_class' => 'flex flex-col p-4 lg:p-0 font-medium lg:space-x-8 rtl:space-x-reverse lg:flex-row lg:mt-0'
                                                        //'items_wrap' => '%3$s'
                                                );
                                                wp_nav_menu( $args ); 
                                        ?>
                                        <!-- <div class="items-center justify-between duration-500 hidden w-full lg:flex lg:w-auto lg:order-1" id="navbar-sticky">
                                                <ul class="flex flex-col p-4 lg:p-0 font-medium lg:space-x-8 rtl:space-x-reverse lg:flex-row lg:mt-0">
                                                        <li>
                                                                <a href="#" class="block py-2 px-3 text-black font-medium text-sm lg:p-0 hover:text-red-400" aria-current="page">Best VPN</a>
                                                        </li>
                                                        <li>
                                                                <a href="#" class="block py-2 px-3 text-black font-medium text-sm lg:p-0 hover:text-red-400">VPN Reviews</a>
                                                        </li>
                                                        <li>
                                                                <a href="#" class="block py-2 px-3 text-black font-medium text-sm lg:p-0 hover:text-red-400">Compare VPN</a>
                                                        </li>
                                                        <li>
                                                                <a href="#" class="block py-2 px-3 text-black font-medium text-sm lg:p-0 hover:text-red-400">VPN Setup</a>
                                                        </li>
                                                        <li>
                                                                <a href="#" class="block py-2 px-3 text-black font-medium text-sm lg:p-0 hover:text-red-400">Guides</a>
                                                        </li>
                                                        <li>
                                                                <a href="#" class="block py-2 px-3 text-black font-medium text-sm lg:p-0 hover:text-red-400">Blogs</a>
                                                        </li>
                                                </ul>
                                        </div> -->
                                </div>
                        </div>
                </nav> 
        </header>
        <!-- header end here -->