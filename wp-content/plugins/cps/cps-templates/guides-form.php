<?php //( '../../../../wp-load.php' ); ?>
<div class="container-fluid">
            <?php $posts = get_post_meta(get_the_id()); ?>
        <div class="bg-light bg-gradient p-3">
            <h5 class="text-underline">Verdict</h5>
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label" for="_verd_title">Verdict Title <?php print_r($_REQUEST['post']); ?></label>
                        <input 
                            class="form-control" 
                            id="_verd_title" 
                            type="text"
                            name="_verd_title" 
                            placeholder="Title"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), '_verd_title', true ) ); ?>">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label" for="_verd_description">Description</label>
                        <textarea 
                            class="form-control" 
                            id="_verd_description" 
                            type="text" 
                            name="_verd_description"
                            placeholder="Description for the verdict"><?php echo esc_attr( get_post_meta( get_the_ID(), '_verd_description', true ) ); ?></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Available on</label><br>
                        <?php $meta = get_post_meta( get_the_ID(), '_verd_social', true ); $meta = explode("|", $meta);  ?>
                        
                            <input type="checkbox" class="form-control form-check-input" id="exampleCheck1" name="_verd_social[]" value="ios" <?php echo in_array("ios", $meta) ? "checked" : ""; ?>>
                            <label class="form-check-label" for="exampleCheck1">IOS</label>
                        
                        
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="_verd_social[]" value="apple-icon" <?php echo in_array("apple-icon", $meta) ? "checked" : ""; ?>>
                        <label class="form-check-label" for="exampleCheck1">Apple</label>
                        
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="_verd_social[]" value="android-icon" <?php echo in_array("android-icon", $meta) ? "checked" : "" ; ?>>
                        <label class="form-check-label" for="exampleCheck1">Android</label>
                        
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="_verd_social[]" value="window-icon" <?php echo in_array("window-icon", $meta) ? "checked" : ""; ?>> 
                        <label class="form-check-label" for="exampleCheck1">Windows</label>
                        
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="_verd_social[]" value="linux-icon" <?php echo in_array("linux-icon", $meta) ? "checked" : ""; ?>>
                        <label class="form-check-label" for="exampleCheck1">Linux</label>
                        
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="_verd_social[]" value="router-icon" <?php echo in_array("router-icon", $meta) ? "checked" : ""; ?>>
                        <label class="form-check-label" for="exampleCheck1">Routers</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-3">
                         <?php $pros = explode("|", get_post_meta(get_the_ID(), '_verd_pros', true)); ?>
                        <button id="addPros" class="btn btn-sm btn-outline-dark pull-right" type="button">Add Pros+</button>
                    </div>
                    
                    <div class="mb-3 pros">
                        <label class="form-label" for="_verd_pros">Pros</label>
                        <?php foreach($pros as $pro){ ?>
                        <?php //echo '<pre>'; print_r( get_post_meta( get_the_ID() ) ); ?>
                        <input 
                            class="form-control mb-3"
                            type="text"
                            id="_verd_pros[]"
                            name="_verd_pros[]"
                            placeholder="Enter pros"
                            value="<?php echo $pro; ?>">
                        <?php } ?>
                            
                    </div>
                    
                    
                </div>
                <div class="col-md-12">
                    <div class="mb-3">
                        <button id="addCons" class="btn btn-sm btn-outline-dark pull-right" type="button">Add Cons+</button>
                    </div>
                    
                    <div class="mb-3 cons">
                        <label class="form-label" for="_verd_cons">Cons</label>
                        <?php $cons = explode("|", get_post_meta(get_the_ID(), '_verd_cons', true)); foreach($cons as $con){ ?>
                        <input 
                            class="form-control mb-3" 
                            type="text"
                            id="_verd_cons[]"
                            name="_verd_cons[]"
                            placeholder="Enter cons"
                            value="<?php echo $con; ?>">
                        <?php } ?>

                    </div>
                </div>
        </div>
        <div class="bg-light bg-gradient p-3">
            <h5 class="text-underline">Coupon Details</h5>
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label" for="_coup_heading">Coupon Heading</label>
                        <input 
                            class="form-control" 
                            id="_coup_heading" 
                            type="text"
                            name="_coup_heading" 
                            placeholder="Coupon Heading"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), '_coup_heading', true ) ); ?>">
                    </div>
                </div>
                
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label" for="_coup_heading">Coupon Text</label>
                        <input 
                            class="form-control" 
                            id="_coup_text" 
                            type="text"
                            name="_coup_text" 
                            placeholder="Coupon Text"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), '_coup_text', true ) ); ?>">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label" for="_coup_button_text">Coupon Button Text</label>
                        <input 
                            class="form-control" 
                            id="_coup_button_text" 
                            type="text"
                            name="_coup_button_text" 
                            placeholder="Coupon Button Text"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), '_coup_button_text', true ) ); ?>">
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-light bg-gradient p-3">
            <h5 class="text-underline">Features</h5>
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label class="form-label" for="_feat_price"><?php echo ucwords( str_replace("_", " ", str_replace("_feat", "", "_feat_price")) ); ?></label>
                        <input 
                            class="form-control" 
                            id="_feat_price" 
                            type="text"
                            name="_feat_price" 
                            placeholder="Price"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), '_feat_price', true ) ); ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label class="form-label" for="_feat_money_back_guarantee"><?php echo ucwords( str_replace("_", " ", str_replace("_feat", "", "_feat_money_back_guarantee")) ); ?></label>
                        <input 
                            class="form-control" 
                            id="_feat_money_back_guarantee" 
                            type="text"
                            name="_feat_money_back_guarantee" 
                            placeholder="Money Back Guarantee"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), '_feat_money_back_guarantee', true ) ); ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label class="form-label" for="_feat_does_VPN_keep_logs"><?php echo ucwords( str_replace("_", " ", str_replace("_feat", "", "_feat_does_VPN_keep_logs")) ); ?></label>
                        <input 
                            class="form-control" 
                            id="_feat_does_VPN_keep_logs" 
                            type="text"
                            name="_feat_does_VPN_keep_logs" 
                            placeholder="Does VPN Keep Logs?"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), '_feat_does_VPN_keep_logs', true ) ); ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label class="form-label" for="_feat_number_of_servers">Number of Servers</label>
                        <input 
                            class="form-control" 
                            id="_feat_number_of_servers" 
                            type="text"
                            name="_feat_number_of_servers" 
                            placeholder="Number of Servers"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), '_feat_number_of_servers', true ) ); ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label class="form-label" for="_feat_number_of_devices_per_license"><?php echo ucwords( str_replace("_", " ", str_replace("_feat", "", "_feat_number_of_devices_per_license")) ); ?></label>
                        <input 
                            class="form-control" 
                            id="_feat_number_of_devices_per_license" 
                            type="text"
                            name="_feat_number_of_devices_per_license" 
                            placeholder="Number of Devices Per License"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), '_feat_number_of_devices_per_license', true ) ); ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label class="form-label" for="_feat_kill_switch"><?php echo ucwords( str_replace("_", " ", str_replace("_feat", "", "_feat_kill_switch")) ); ?></label>
                        <input 
                            class="form-control" 
                            id="_feat_kill_switch" 
                            type="text"
                            name="_feat_kill_switch" 
                            placeholder="Kill Switch"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), '_feat_kill_switch', true ) ); ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label class="form-label" for="_feat_based_in_country"><?php echo ucwords( str_replace("_", " ", str_replace("_feat", "", "_feat_based_in_country")) ); ?></label>
                        <input 
                            class="form-control" 
                            id="_feat_based_in_country" 
                            type="text"
                            name="_feat_based_in_country" 
                            placeholder="Based in Country"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), '_feat_based_in_country', true ) ); ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label class="form-label" for="_feat_support"><?php echo ucwords( str_replace("_", " ", str_replace("_feat", "", "_feat_support")) ); ?></label>
                        <input 
                            class="form-control" 
                            id="_feat_support" 
                            type="text"
                            name="_feat_support" 
                            placeholder="Support"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), '_feat_support', true ) ); ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label class="form-label" for="_feat_supports_torrenting"><?php echo ucwords( str_replace("_", " ", str_replace("_feat", "", "_feat_supports_torrenting")) ); ?></label>
                        <input 
                            class="form-control" 
                            id="_feat_supports_torrenting" 
                            type="text"
                            name="_feat_supports_torrenting" 
                            placeholder="Title"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), '_feat_supports_torrenting', true ) ); ?>">
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-light bg-gradient p-3">
            <h5 class="text-underline">Rating & Review</h5>
            <div class="row">
                <div class="col-md-2">
                    <label class="form-label" for="_tab_overall_rating">Overall Rating</label>
                    <input 
                            class="form-control" 
                            id="_tab_overall_rating" 
                            type="number"
                            name="_tab_overall_rating" 
                            step=".01"
                            placeholder="Overall Rating"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), '_tab_overall_rating', true ) ); ?>">
                </div>
                <div class="col-md-10">
                    <label class="form-label" for="_tab_expert_review_link">Expert Review Link</label>
                    <input 
                            class="form-control" 
                            id="_tab_expert_review_link" 
                            type="text" 
                            name="_tab_expert_review_link"
                            placeholder="Expert Review Link"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), '_tab_expert_review_link', true ) ); ?>">
                </div>
                
            </div>
        </div>
        <div class="bg-light bg-gradient p-3">
            <h5 class="text-underline">Pricing</h5>
            <div class="row">
                <div class="col-md-2">
                    <label class="form-label" for="Cheapest Price">Cheapest Price</label>
                    <input 
                            class="form-control" 
                            id="_tab_cheapest_price" 
                            type="text" 
                            name="_tab_cheapest_price"
                            placeholder="Cheapest Price"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), '_tab_cheapest_price', true ) ); ?>">
                </div>
                <div class="col-md-2">
                    <label class="form-label" for="pay_monthly_price">Pay Monthly Price</label>
                    <input 
                            class="form-control" 
                            id="_tab_pay_monthly_price" 
                            name="_tab_pay_monthly_price"
                            type="text"
                            placeholder="Pay Monthly Price"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), '_tab_pay_monthly_price', true ) ); ?>">
                </div>
                <div class="col-md-2">
                    <label class="form-label" for="_tab_free_trial">Free Trial</label>
                    <select class="form-control" 
                            id="_tab_free_trial" 
                            type="text" 
                            name="_tab_free_trial">
                            <option value="">--select--</option>
                            <option 
                                    value="yes" 
                                    <?php echo esc_attr( get_post_meta( get_the_ID(), '_tab_free_trial', true ) ) === 'yes' ? 'selected' : ''; ?>>
                                    Yes
                            </option>
                            <option 
                                    value="no" 
                                    <?php echo esc_attr( get_post_meta( get_the_ID(), '_tab_free_trial', true ) ) === 'no' ? 'selected' : ''; ?>>
                                    No
                            </option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="money_back_guarantee">Money-Back Guarantee</label>
                    <input 
                            class="form-control" 
                            id="_tab_money_back_guarantee" 
                            type="text" 
                            name="_tab_money_back_guarantee"
                            placeholder="Money-Back Guarantee"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), '_tab_money_back_guarantee', true ) ); ?>">
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="data_cap">Data Cap</label>
                    <input 
                            class="form-control" 
                            id="_tab_data_cap" 
                            type="text" 
                            name="_tab_data_cap"
                            placeholder="Data Cap"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), '_tab_data_cap', true ) ); ?>">
                </div>
            </div>
        </div>
        <div class="bg-light bg-gradient p-3">
            <h5 class="text-underline">Security & Privacy</h5>
            <div class="row">
                <div class="col-md-3">
                    <label class="form-label" for="_tab_logging_policy">Logging Policy</label>
                    <input 
                            class="form-control" 
                            id="_tab_logging_policy" 
                            name="_tab_logging_policy"
                            type="text"
                            placeholder="Logging Policy"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), '_tab_logging_policy', true ) ); ?>">
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="_tab_data_leaks">Data Leaks</label>
                    <input 
                            class="form-control" 
                            id="_tab_data_leaks" 
                            type="text" 
                            name="_tab_data_leaks"
                            placeholder="Data Leaks"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), '_tab_data_leaks', true ) ); ?>">
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="_tab_encryption">Encryption</label>
                    <input 
                            class="form-control" 
                            id="_tab_encryption" 
                            type="text"
                            name="_tab_encryption"
                            placeholder="_tab_Encryption"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), '_tab_encryption', true ) ); ?>">
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="jurisdiction">Jurisdiction</label>
                    <input 
                            class="form-control" 
                            id="_tab_jurisdiction" 
                            type="text" 
                            name="_tab_jurisdiction"
                            placeholder="Jurisdiction"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), '_tab_jurisdiction', true ) ); ?>">
                </div>
            </div>
        </div>
        <div class="bg-light bg-gradient p-3">
            <h5 class="text-underline">Security & Privacy</h5>
            <div class="row">
                <div class="col-md-3">
                    <label class="form-label" for="_tab_average_local_download_speed">Average Local Download Speed</label>
                    <input 
                            class="form-control" 
                            id="_tab_average_local_download_speed" 
                            type="text" 
                            name="_tab_average_local_download_speed"
                            placeholder="Average Local Download Speed"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), '_tab_average_local_download_speed', true ) ); ?>">
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="_tab_servers">Servers</label>
                    <input 
                            class="form-control" 
                            id="_tab_servers" 
                            type="number" 
                            name="_tab_servers"
                            placeholder="Servers"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), '_tab_servers', true ) ); ?>">
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="_tab_ip_addresses">IP Addresses</label>
                    <input 
                            class="form-control" 
                            id="_tab_ip_addresses" 
                            type="text" 
                            name="_tab_ip_addresses"
                            placeholder="IP Addresses"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), '_tab_ip_addresses', true ) ); ?>">
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="_tab_countries">Countries</label>
                    <input 
                            class="form-control" 
                            id="_tab_countries" 
                            type="number" 
                            name="_tab_countries"
                            placeholder="Countries"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), '_tab_countries', true ) ); ?>">
                </div>
            </div>
        </div>
        <div class="bg-light bg-gradient p-3">
            <h5 class="text-underline">Streaming & P2P</h5>
            <div class="row">
                <div class="col-md-2">
                    <label class="form-label" for="us_netflix">US Netflix</label>
                    <select class="form-control" 
                            id="_tab_us_netflix" 
                            type="text" 
                            name="_tab_us_netflix">
                            <option value="">--select--</option>
                            <option 
                                    value="yes" 
                                    <?php echo esc_attr( get_post_meta( get_the_ID(), '_tab_us_netflix', true ) ) === 'yes' ? 'selected' : ''; ?>>
                                    Yes
                            </option>
                            <option 
                                    value="no" 
                                    <?php echo esc_attr( get_post_meta( get_the_ID(), '_tab_us_netflix', true ) ) === 'no' ? 'selected' : ''; ?>>
                                    No
                            </option>
                    </select>
                </div>
                <div class="col-md-8">
                    <label class="form-label" for="_tab_streaming_services_nblocked">Streaming Services Unblocked</label>
                    <textarea 
                                class="form-control" 
                                cols="3" 
                                rows="1" 
                                id="_tab_streaming_services_nblocked" 
                                placeholder="Streaming Services Unblocked"
                                name="_tab_streaming_services_nblocked"><?php echo esc_attr( get_post_meta( get_the_ID(), '_tab_streaming_services_nblocked', true ) ); ?></textarea>
                </div>
                <div class="col-md-2">
                    <label class="form-label" for="torrenting">Torrenting</label>
                    <input 
                            class="form-control" 
                            id="_tab_torrenting" 
                            type="text" 
                            name="_tab_torrenting"
                            placeholder="Torrenting"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'torrenting', true ) ); ?>">
                </div>
            </div>
        </div>
        <div class="bg-light bg-gradient p-3">
            <h5 class="text-underline">Compatibility</h5>
            <div class="row">
                <div class="col-md-3">
                    <label class="form-label" for="_tab_simultaneous_connections">Simultaneous Connections</label>
                    <input 
                            class="form-control" 
                            id="_tab_simultaneous_connections" 
                            type="number" 
                            name="_tab_simultaneous_connections"
                            placeholder="Simultaneous Connections"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), '_tab_simultaneous_connections', true ) ); ?>">
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="native_app_support">Native App Support</label>
                    <textarea 
                                class="form-control" 
                                cols="3" 
                                rows="1" 
                                id="_tab_native_app_support" 
                                type="number" 
                                placeholder="Native App Support"
                                name="_tab_native_app_support"><?php echo esc_attr( get_post_meta( get_the_ID(), '_tab_native_app_support', true ) ); ?></textarea>
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="_tab_compatible_via_router">Compatible via Router</label>
                    <textarea 
                                class="form-control" 
                                cols="3" 
                                rows="1" 
                                id="_tab_compatible_via_router" 
                                placeholder="Compatible via Router"
                                name="_tab_compatible_via_router"><?php echo esc_attr( get_post_meta( get_the_ID(), '_tab_compatible_via_router', true ) ); ?></textarea>
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="smart_dns">Smart DNS</label>
                    <select class="form-control" 
                            id="_tab_smart_dns" 
                            type="text" 
                            name="_tab_smart_dns">
                            <option value="">--select--</option>
                            <option 
                                    value="yes" 
                                    <?php echo esc_attr( get_post_meta( get_the_ID(), '_tab_smart_dns', true ) ) === 'yes' ? 'selected' : ''; ?>>
                                    Yes
                            </option>
                            <option 
                                    value="no" 
                                    <?php echo esc_attr( get_post_meta( get_the_ID(), '_tab_smart_dns', true ) ) === 'no' ? 'selected' : ''; ?>>
                                    No
                            </option>
                    </select>
                </div>
            </div>
        </div>
        <div class="bg-light bg-gradient p-3">
            <h5 class="text-underline">Additional Info</h5>
            <div class="row">
                
                <div class="col-md-3">
                    <label class="form-label" for="_tab_kill_switch">Kill Switch</label>
                    <select class="form-control" 
                            id="_tab_kill_switch" 
                            type="text" 
                            name="_tab_kill_switch">
                            <option value="">--select--</option>
                            <option 
                                    value="yes" 
                                    <?php echo esc_attr( get_post_meta( get_the_ID(), '_tab_kill_switch', true ) ) === 'yes' ? 'selected' : ''; ?>>
                                    Yes
                            </option>
                            <option 
                                    value="no" 
                                    <?php echo esc_attr( get_post_meta( get_the_ID(), '_tab_kill_switch', true ) ) === 'no' ? 'selected' : ''; ?>>
                                    No
                            </option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="browser_extensions">Browser Extensions</label>
                    <input 
                            class="form-control" 
                            id="_tab_browser_extensions" 
                            type="text" 
                            name="_tab_browser_extensions"
                            placeholder="Browser Extensions"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), '_tab_browser_extensions', true ) ); ?>">
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="works_in_china">Works in China</label>
                    <select class="form-control" 
                            id="_tab_works_in_china" 
                            type="text" 
                            name="_tab_works_in_china">
                            <option value="">--select--</option>
                            <option 
                                    value="yes" 
                                    <?php echo esc_attr( get_post_meta( get_the_ID(), '_tab_works_in_china', true ) ) === 'yes' ? 'selected' : ''; ?>>
                                    Yes
                            </option>
                            <option 
                                    value="no" 
                                    <?php echo esc_attr( get_post_meta( get_the_ID(), '_tab_works_in_china', true ) ) === 'no' ? 'selected' : ''; ?>>
                                    No
                            </option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="Support">Support</label>
                    <input 
                            class="form-control" 
                            id="_tab_support" 
                            type="text" 
                            name="_tab_support"
                            placeholder="Support"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), '_tab_support', true ) ); ?>">
                </div>
            </div>
        </div>
    </div>