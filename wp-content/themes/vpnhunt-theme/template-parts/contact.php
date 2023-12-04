<!-- Get in touch form start here -->
<?php 
         $configuration = get_option('cps_configuration_settings');
         if($configuration['contact_number']){
             $contact_number = $configuration['contact_number'];
         } 
?>
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
                            <h4 class="text-lg font-medium leading-6 text-black"><?php echo $contact_number; ?>
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
                    <form id="contact-form" class="">
                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-2 md:mb-0 md:w-2/4">
                                <label class="block mb-2" for="firstName">
                                    First name
                                </label>
                                <input class="w-full p-3 text-base leading-tight text-gray-700 border rounded appearance-none focus:shadow-none focus:outline-none" name="first_name" type="text" placeholder="First name">
                            </div>
                            <div class="md:ml-2 md:w-2/4">
                                <label class="block mb-2" for="lastName">
                                    Last Name
                                </label>
                                <input class="w-full p-3 text-base leading-tight text-gray-700 border rounded appearance-none focus:shadow-none focus:outline-none" name="last_name" type="text" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2" for="email">
                                Email
                            </label>
                            <input class="w-full p-3 text-base leading-tight text-gray-700 border rounded appearance-none focus:shadow-none focus:outline-none" name="email" type="email" placeholder="yourname@mail.com">
                        </div>
                        <div class="flex mb-4">
                            <!-- Country Code Input -->
                            <div class="relative">
                                <select name="country_code" class="bg-white text-gray-700 text-base appearance-none border border-r-0 p-3 pr-3 rounded rounded-tr-none rounded-br-none focus:shadow-none focus:outline-none">
                                    <option value="">--</option>
                                    <option value="+1" >USA</option>
                                    <option value="+44">UK</option>
                                    <option value="+91">India</option>
                                </select>
                                <div class="absolute inset-y-0 -right-1 flex items-center px-2 pointer-events-none">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/down-arrow.svg" alt="#" />
                                </div>
                            </div>
                
                            <!-- Phone Number Input -->
                            <input class="w-full p-3 text-base leading-tight text-gray-700 border rounded appearance-none focus:shadow-none focus:outline-none" name="phone_number" type="number" placeholder="+1 (555) 000-0000">
                        </div>

                        <div class="mb-4">
                            <label class="block mb-2" for="phoneNumber">
                                Message
                            </label>
                            <textarea name="message" class="w-full h-120 p-3 text-base text-gray-700 border rounded appearance-none focus:shadow-none focus:outline-none " placeholder="Please enter your message"></textarea>
                        </div>
                        <div class="mb-6">
                            <button class="text-lg font-medium py-1 px-3 rounded btn-bg-orange-500 duration-500 text-white focus:outline-none focus:shadow-none" type="submit">
                                Send Message
                            </button>
                        </div>
                    </form>
                    <span id="response"></span>
                </div>
                <!-- contact form end -->
            </div>
        </div>
    </section>
    <!-- Get in touch form end here -->