<?php
    /** Template Name: Guides **/

    get_header(); 
    get_template_part('template-parts/page-banner')
?>

    

    <!-- latest guides start -->
    <section class="latest_guides_sec lg:py-20 py-8">
        <div class="container mx-auto">
            <div class="text-center md:text-left">
                <h2 class="font-medium text-3xl md:text-4xl text-black mb-4">
                    Latest Guides
                </h2>
                <p class="text-lg font-normal">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus scelerisque ante eros, in aliquet elit gravida non. Maecenas vestibulum turpis orci, nec placerat dolor vulputate quis. Phasellus pellentesque hendrerit tempor.
                </p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 grid-cols-1 gap-3 mt-12">
                <?php 
                        $args = array(
                            'post_type' => 'guides',
                            'posts_per_page' => -1,
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
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/read-more-icon-white.svg" alt="#" class="w-8 h-8"/>
                    </a>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/blog1.png" alt="#" class="mx-auto w-40 h-32 mb-5"/>
                    <a href="javascript:void(0);" class="text-white">
                        <span class="block text-xs font-normal"><?php echo get_the_modified_date(); ?> | by <?php echo get_the_author_meta('first_name') != '' ? get_the_author_meta('first_name') : ' Janmeet Singh'; ?>  </span>
                        <span class="block mt-2 text-2xl font-medium"><?php the_title(); ?></a>
                    </a>
                </div>
                <!-- blog <?php echo $count; ?> -->
                <?php if($count == 6){ $count =0; } $count++; endwhile; endif; ?>
            </div>
            <div aria-label="Page navigation example" class="mt-14">
                <ul class="flex flex-wrap justify-center items-center -space-x-px h-8 text-sm">
                <li>
                    <a href="javascript:void(0);" class="flex items-center justify-center px-3 h-8 w-8 leading-tight text-black font-medium text-sm bg-white rounded-full hover:bg-red-400 hover:text-white duration-300 mx-1">
                    <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    </a>
                </li>
                <?php $count_pages = wp_count_posts( $post_type = 'guides' );?>
                <li>
                    <a href="javascript:void(0);" class="flex items-center justify-center px-3 h-8 w-8 leading-tight font-medium text-sm bg-red-400 text-white rounded-full hover:bg-red-400 hover:text-white duration-300 mx-1"><?php //print_r($count_pages); ?></a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="flex items-center justify-center px-3 h-8 w-8 leading-tight text-black font-medium text-sm bg-white rounded-full hover:bg-red-400 hover:text-white duration-300 mx-1">2</a>
                </li>
                <li>
                    <a href="javascript:void(0);" aria-current="page" class="flex items-center justify-center px-3 h-8 w-8 leading-tight text-black font-medium text-sm bg-white rounded-full hover:bg-red-400 hover:text-white duration-300 mx-1">3</a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="flex items-center justify-center px-3 h-8 w-8 leading-tight text-black font-medium text-sm bg-white rounded-full hover:bg-red-400 hover:text-white duration-300 mx-1">4</a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="flex items-center justify-center px-3 h-8 w-8 leading-tight text-black font-medium text-sm bg-white rounded-full hover:bg-red-400 hover:text-white duration-300 mx-1">5</a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="flex items-center justify-center px-3 h-8 w-8 leading-tight text-black font-medium text-sm bg-white rounded-full hover:bg-red-400 hover:text-white duration-300 mx-1">6</a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="flex items-center justify-center px-3 h-8 w-8 leading-tight text-black font-medium text-sm bg-white rounded-full hover:bg-red-400 hover:text-white duration-300 mx-1">7</a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="flex items-center justify-center px-3 h-8 w-8 leading-tight text-black font-medium text-sm bg-white rounded-full hover:bg-red-400 hover:text-white duration-300 mx-1">8</a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="flex items-center justify-center px-3 h-8 w-8 leading-tight text-black font-medium text-sm bg-white rounded-full hover:bg-red-400 hover:text-white duration-300 mx-1">9</a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="flex items-center justify-center px-3 h-8 w-8 leading-tight text-black font-medium text-sm bg-white rounded-full hover:bg-red-400 hover:text-white duration-300 mx-1">10</a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="flex items-center justify-center px-3 h-8 w-8 leading-tight text-black font-medium text-sm bg-white rounded-full hover:bg-red-400 hover:text-white duration-300 mx-1">
                    <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    </a>
                </li>
                </ul>
            </div> 
        </div>
    </section>
    <!-- latest guides end -->

    <!-- explore categories start here -->
    <section class="latest_guides_sec md:pb-24 py-10">
        <div class="container">
            <div class="mx-auto max-w-screen-md text-center content-center">
                <h2 class="font-medium text-3xl md:text-4xl text-black">
                    Explore Topics by Categories
                </h2>
                <p class="text-lg font-normal mt-3 mb-7">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla aliquam ultrices urna, at tempor nisi. Vestibulum ac enim vel orci.
                </p>
            </div>
            <div class="categories_tag_line gap-3 items-center flex flex-wrap md:px-10 justify-center text-base">
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
                <div class="border p-2 rounded">
                    <a href="<?php echo get_category_link( $cat->term_id ) ?>">
                        <?php echo $cat->name; ?>
                    </a>
                </div>
                <?php   } ?>
            </div>
        </div>
    </section>
    <!-- explore categories end here-->

<?php get_footer(); ?>