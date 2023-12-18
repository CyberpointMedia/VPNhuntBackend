<div class="container-fluid">
        <div class="bg-light bg-gradient p-3">
            <h5 class="text-underline">Rating & Review</h5>
            <div class="row">
                <div class="col-md-2">
                    <label class="form-label" for="overall_rating">Overall Rating</label>
                    <input 
                            class="form-control" 
                            id="overall_rating" 
                            type="number"
                            name="overall_rating" 
                            step=".01"
                            placeholder="Overall Rating"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'overall_rating', true ) ); ?>">
                </div>
                <div class="col-md-10">
                    <label class="form-label" for="expert_review_link">Expert Review Link</label>
                    <input 
                            class="form-control" 
                            id="expert_review_link" 
                            type="text" 
                            name="expert_review_link"
                            placeholder="Expert Review Link"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'expert_review_link', true ) ); ?>">
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
                            id="cheapest_price" 
                            type="text" 
                            name="cheapest_price"
                            placeholder="Cheapest Price"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'cheapest_price', true ) ); ?>">
                </div>
                <div class="col-md-2">
                    <label class="form-label" for="pay_monthly_price">Pay Monthly Price</label>
                    <input 
                            class="form-control" 
                            id="pay_monthly_price" 
                            name="pay_monthly_price"
                            type="text"
                            placeholder="Pay Monthly Price"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'pay_monthly_price', true ) ); ?>">
                </div>
                <div class="col-md-2">
                    <label class="form-label" for="free_trial">Free Trial</label>
                    <select class="form-control" 
                            id="free_trial" 
                            type="text" 
                            name="free_trial">
                            <option value="">--select--</option>
                            <option 
                                    value="yes" 
                                    <?php echo esc_attr( get_post_meta( get_the_ID(), 'free_trial', true ) ) === 'yes' ? 'selected' : ''; ?>>
                                    Yes
                            </option>
                            <option 
                                    value="no" 
                                    <?php echo esc_attr( get_post_meta( get_the_ID(), 'free_trial', true ) ) === 'no' ? 'selected' : ''; ?>>
                                    No
                            </option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="money_back_guarantee">Money-Back Guarantee</label>
                    <input 
                            class="form-control" 
                            id="money_back_guarantee" 
                            type="text" 
                            name="money_back_guarantee"
                            placeholder="Money-Back Guarantee"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'money_back_guarantee', true ) ); ?>">
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="data_cap">Data Cap</label>
                    <input 
                            class="form-control" 
                            id="data_cap" 
                            type="text" 
                            name="data_cap"
                            placeholder="Data Cap"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'data_cap', true ) ); ?>">
                </div>
            </div>
        </div>
        <div class="bg-light bg-gradient p-3">
            <h5 class="text-underline">Security & Privacy</h5>
            <div class="row">
                <div class="col-md-3">
                    <label class="form-label" for="logging_policy">Logging Policy</label>
                    <input 
                            class="form-control" 
                            id="logging_policy" 
                            name="logging_policy"
                            type="text"
                            placeholder="Logging Policy"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'logging_policy', true ) ); ?>">
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="data_leaks">Data Leaks</label>
                    <input 
                            class="form-control" 
                            id="data_leaks" 
                            type="text" 
                            name="data_leaks"
                            placeholder="Data Leaks"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'data_leaks', true ) ); ?>">
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="encryption">Encryption</label>
                    <input 
                            class="form-control" 
                            id="encryption" 
                            type="text"
                            name="encryption"
                            placeholder="Encryption"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'encryption', true ) ); ?>">
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="jurisdiction">Jurisdiction</label>
                    <input 
                            class="form-control" 
                            id="jurisdiction" 
                            type="text" 
                            name="jurisdiction"
                            placeholder="Jurisdiction"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'jurisdiction', true ) ); ?>">
                </div>
            </div>
        </div>
        <div class="bg-light bg-gradient p-3">
            <h5 class="text-underline">Security & Privacy</h5>
            <div class="row">
                <div class="col-md-3">
                    <label class="form-label" for="average_local_download_speed">Average Local Download Speed</label>
                    <input 
                            class="form-control" 
                            id="average_local_download_speed" 
                            type="text" 
                            name="average_local_download_speed"
                            placeholder="Average Local Download Speed"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'average_local_download_speed', true ) ); ?>">
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="servers">Servers</label>
                    <input 
                            class="form-control" 
                            id="servers" 
                            type="number" 
                            name="servers"
                            placeholder="Servers"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'servers', true ) ); ?>">
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="ip_addresses">IP Addresses</label>
                    <input 
                            class="form-control" 
                            id="ip_addresses" 
                            type="text" 
                            name="ip_addresses"
                            placeholder="IP Addresses"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'ip_addresses', true ) ); ?>">
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="countries">Countries</label>
                    <input 
                            class="form-control" 
                            id="countries" 
                            type="number" 
                            name="countries"
                            placeholder="Countries"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'countries', true ) ); ?>">
                </div>
            </div>
        </div>
        <div class="bg-light bg-gradient p-3">
            <h5 class="text-underline">Streaming & P2P</h5>
            <div class="row">
                <div class="col-md-2">
                    <label class="form-label" for="us_netflix">US Netflix</label>
                    <select class="form-control" 
                            id="us_netflix" 
                            type="text" 
                            name="us_netflix">
                            <option value="">--select--</option>
                            <option 
                                    value="yes" 
                                    <?php echo esc_attr( get_post_meta( get_the_ID(), 'us_netflix', true ) ) === 'yes' ? 'selected' : ''; ?>>
                                    Yes
                            </option>
                            <option 
                                    value="no" 
                                    <?php echo esc_attr( get_post_meta( get_the_ID(), 'us_netflix', true ) ) === 'no' ? 'selected' : ''; ?>>
                                    No
                            </option>
                    </select>
                </div>
                <div class="col-md-8">
                    <label class="form-label" for="streaming_services_nblocked">Streaming Services Unblocked</label>
                    <textarea 
                                class="form-control" 
                                cols="3" 
                                rows="1" 
                                id="streaming_services_nblocked" 
                                placeholder="Streaming Services Unblocked"
                                name="streaming_services_nblocked"><?php echo esc_attr( get_post_meta( get_the_ID(), 'streaming_services_nblocked', true ) ); ?></textarea>
                </div>
                <div class="col-md-2">
                    <label class="form-label" for="torrenting">Torrenting</label>
                    <input 
                            class="form-control" 
                            id="torrenting" 
                            type="text" 
                            name="torrenting"
                            placeholder="Torrenting"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'torrenting', true ) ); ?>">
                </div>
            </div>
        </div>
        <div class="bg-light bg-gradient p-3">
            <h5 class="text-underline">Compatibility</h5>
            <div class="row">
                <div class="col-md-3">
                    <label class="form-label" for="simultaneous_connections">Simultaneous Connections</label>
                    <input 
                            class="form-control" 
                            id="simultaneous_connections" 
                            type="number" 
                            name="simultaneous_connections"
                            placeholder="Simultaneous Connections"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'simultaneous_connections', true ) ); ?>">
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="native_app_support">Native App Support</label>
                    <textarea 
                                class="form-control" 
                                cols="3" 
                                rows="1" 
                                id="native_app_support" 
                                type="number" 
                                placeholder="Native App Support"
                                name="native_app_support"><?php echo esc_attr( get_post_meta( get_the_ID(), 'native_app_support', true ) ); ?></textarea>
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="compatible_via_router">Compatible via Router</label>
                    <textarea 
                                class="form-control" 
                                cols="3" 
                                rows="1" 
                                id="compatible_via_router" 
                                placeholder="Compatible via Router"
                                name="compatible_via_router"><?php echo esc_attr( get_post_meta( get_the_ID(), 'compatible_via_router', true ) ); ?></textarea>
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="smart_dns">Smart DNS</label>
                    <select class="form-control" 
                            id="smart_dns" 
                            type="text" 
                            name="smart_dns">
                            <option value="">--select--</option>
                            <option 
                                    value="yes" 
                                    <?php echo esc_attr( get_post_meta( get_the_ID(), 'smart_dns', true ) ) === 'yes' ? 'selected' : ''; ?>>
                                    Yes
                            </option>
                            <option 
                                    value="no" 
                                    <?php echo esc_attr( get_post_meta( get_the_ID(), 'smart_dns', true ) ) === 'no' ? 'selected' : ''; ?>>
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
                    <label class="form-label" for="kill_switch">Kill Switch</label>
                    <select class="form-control" 
                            id="kill_switch" 
                            type="text" 
                            name="kill_switch">
                            <option value="">--select--</option>
                            <option 
                                    value="yes" 
                                    <?php echo esc_attr( get_post_meta( get_the_ID(), 'kill_switch', true ) ) === 'yes' ? 'selected' : ''; ?>>
                                    Yes
                            </option>
                            <option 
                                    value="no" 
                                    <?php echo esc_attr( get_post_meta( get_the_ID(), 'kill_switch', true ) ) === 'no' ? 'selected' : ''; ?>>
                                    No
                            </option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="browser_extensions">Browser Extensions</label>
                    <input 
                            class="form-control" 
                            id="browser_extensions" 
                            type="text" 
                            name="browser_extensions"
                            placeholder="Browser Extensions"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'browser_extensions', true ) ); ?>">
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="works_in_china">Works in China</label>
                    <select class="form-control" 
                            id="works_in_china" 
                            type="text" 
                            name="works_in_china">
                            <option value="">--select--</option>
                            <option 
                                    value="yes" 
                                    <?php echo esc_attr( get_post_meta( get_the_ID(), 'works_in_china', true ) ) === 'yes' ? 'selected' : ''; ?>>
                                    Yes
                            </option>
                            <option 
                                    value="no" 
                                    <?php echo esc_attr( get_post_meta( get_the_ID(), 'works_in_china', true ) ) === 'no' ? 'selected' : ''; ?>>
                                    No
                            </option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="Support">Support</label>
                    <input 
                            class="form-control" 
                            id="support" 
                            type="text" 
                            name="support"
                            placeholder="Support"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'support', true ) ); ?>">
                </div>
            </div>
        </div>
    </div>