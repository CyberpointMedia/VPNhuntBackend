<div class="container-fluid">
        <?php $posts = get_post_meta(get_the_id()); ?>
        <div class="bg-light bg-gradient p-3">
            <h5 class="text-underline">Meta Fields</h5>
            <div class="row">
                <div class="col-md-5">
                    <div class="mb-3">
                        <label class="form-label" for="_page_author_name">Page Author</label>
                        <input 
                            class="form-control" 
                            id="_page_author_name" 
                            type="text"
                            name="_page_author_name" 
                            placeholder="Enter name of the author"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), '_page_author_name', true ) ); ?>">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="mb-3">
                        <label class="form-label" for="_page_fact_checker">Fact Checker</label>
                        <input 
                            class="form-control" 
                            id="_page_fact_checker" 
                            type="text"
                            name="_page_fact_checker" 
                            placeholder="Enter name of the fact checker"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), '_page_fact_checker', true ) ); ?>">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="mb-3">
                        <label class="form-label" for="_page_editors_rating">Editor's Rating</label>
                        <input 
                            class="form-control" 
                            id="_page_editors_rating" 
                            type="number"
                            step="0.1"
                            name="_page_editors_rating" 
                            placeholder="Enter rating"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), '_page_editors_rating', true ) ); ?>">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label" for="_page_caption">Page Caption</label>
                        <input 
                            class="form-control" 
                            id="_page_caption" 
                            type="text"
                            name="_page_caption" 
                            placeholder="Enter page caption"
                            value="<?php echo esc_attr( get_post_meta( get_the_ID(), '_page_caption', true ) ); ?>">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Share Buttons</label><br>
                        <?php $meta = get_post_meta( get_the_ID(), '_page_social', true ); $meta = explode("|", $meta);  ?>
                        
                            <input type="checkbox" class="form-control form-check-input" id="exampleCheck1" name="_page_social[]" value="facebook-square" <?php echo in_array("facebook-square", $meta) ? "checked" : ""; ?>>
                            <label class="form-check-label" for="exampleCheck1">Facebook</label>
                        
                        
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="_page_social[]" value="linkedin" <?php echo in_array("linkedin", $meta) ? "checked" : ""; ?>>
                        <label class="form-check-label" for="exampleCheck1">Linkedin</label>
                        
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="_page_social[]" value="instagram-square" <?php echo in_array("instagram-square", $meta) ? "checked" : "" ; ?>>
                        <label class="form-check-label" for="exampleCheck1">Instagram</label>
                        
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="_page_social[]" value="twitter-square" <?php echo in_array("twitter-square", $meta) ? "checked" : ""; ?>> 
                        <label class="form-check-label" for="exampleCheck1">Twitter</label>
                    </div>
                </div>
            </div>
        </div>