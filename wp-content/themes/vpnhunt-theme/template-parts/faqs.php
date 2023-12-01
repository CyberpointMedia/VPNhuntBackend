<!-- faq section start here -->
<section class="faq-sec pb-14">
        <div class="container">
            <div class="mx-auto max-w-screen-md text-center content-center">
                <h2 class="font-medium text-3xl md:text-4xl text-black mb-8">
                    Frequently Asked Questions
                </h2>
                <!-- accordian start -->
                <div accordion>
                    <?php 
                        $args = array(
                            'post_type' => 'faqs',
                            'posts_per_page' => 10,
                            'order' => 'ASC'
                        );
                        $count = 1;
                        $post_query = new WP_Query($args);
                        if ( $post_query->have_posts() ) : while ( $post_query->have_posts() ) : $post_query->the_post();
                        
                    ?>
                    <div accordion-section class="mb-4 rounded-lg bg-white accordian-row">
                      <h5 class="mb-0 accordion-toggle">
                        <button section-trigger class="relative flex items-center w-full p-4 font-semibold text-left transition-all  cursor-pointer ease-soft-in text-black text-base" aria-expanded="true">
                            <?php the_title(); ?>
                          <i section-open-icon class="absolute right-0 pt-1 mr-4 leading-tight">
                            <img class="faq-arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/images/chevron-down.svg" alt="#" />
                          </i>
                        </button>
                      </h5>
                      <div section-content class="overflow-hidden transition-all ease-soft-in-out duration-350 accordion-content">
                        <div class="p-4 leading-normal text-base opacity-80 text-left">
                            <?php the_content(); ?>
                        </div>
                      </div>
                    </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- faq section end here -->