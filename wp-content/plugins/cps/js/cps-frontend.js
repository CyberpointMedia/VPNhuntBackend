jQuery(function( $ ){
   
   jQuery(".entry-comments").remove();
   var page_id = 1;
   jQuery(document).ready(function(){
      fetch_comments(page_id);
   })
   $( '<button class="load-more-comments" >Load More Comments</button>' ).insertAfter( "#load_comnt" );
   
   $('.load-more-comments').click(function(){
      page_id = page_id + 1;
      fetch_comments(page_id);
   })
});

function fetch_comments(page_id){
   jQuery.ajax({
      url: global_consts.url,
      type: 'POST',
      data: {'action': 'ajaxify_comments', 'page_id': page_id},
      dataType: 'html',
      beforeSend: function(){
         jQuery("#load_comnt").append('<div class="spinner"><i class="fa fa-spinner fa-spin" style="font-size:24px"></i> Loading Comments</div>');
      },
      success: function(response) {
         jQuery("#load_comnt").append(response);
         jQuery(".spinner").remove();
         jQuery(".comment-reply-link").each(function() {
            var comment_id = jQuery(this).data("commentid");
            jQuery(this).attr("href", "#comment-" + comment_id);
          });
      },
      error: function(error) {
         //console.log(error);
      }
   });

   
      
   
}

jQuery(function( $ ){
   $(document).ready(function(){
   $("#contact-form").validate({
      rules: {
        first_name: { required: true, minlength: 3, maxlength: 20  },
        last_name: { required: true, minlength: 3, maxlength: 20 },
        email: { required: true, email: true, maxlength: 30 },
        phone_number: { minlength: 10, maxlength:10 },
        message: { required: true, minlength: 10, maxlength: 300}  
      },
      messages: {
        first_name: {
          required: "Please enter your firstname",
          minlength: "Please enter atleast 3 characters",
          maxlength: "Please enter not more than 20 Characters"
        },
        last_name: {
          required: "Please enter your lastname",
          minlength: "Please enter atleast 3 characters",
          maxlength: "Please enter not more than 20 Characters"
        },
        email: {
          required: "Please enter email address",
          email: "Please enter a valid email address",
          maxlength: "Please enter not more than 20 Characters"
        },
        phone_number: { 
                        minlength: "Must be a 10 digit number", 
                        maxlength: 'Must be a 10 digit number' 
        },
        message: { 
                    required: "Please enter your message", 
                    minlength: "Please type atleast 10 characters", 
                    maxlength: "Only characters are allowed in a message"
        }
      },
      submitHandler: function(e) {
         event.preventDefault();
         var formData = jQuery("#contact-form").serializeArray();
         $.ajax({
               type : "POST",
               dataType : "json",
               url : global_consts.url,
               data : { 
                  "action": "contact_form_submit",
                  "formData": formData
               },
               success: function(response) {
                  if(response.returnType == "true"){
                     $("#contact-form").hide();
                     $("#response").html(response.message);

                  }else if(response.returnType == "false"){
                     $("#response").html(response.message);
                  }
               }
          
            });
         }
      });
      $('.current_year').html(global_consts.year);
      $('.month_year').html(global_consts.year_month);
      
   });
   $("#country_code").change(function(){
      var country_code = $("#country_code").val();
      $("#telephone").html(country_code)
   })
});