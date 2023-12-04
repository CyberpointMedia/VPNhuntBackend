jQuery(function( $ ){
    $(document).ready(function(){
    $("#newsletter").validate({
        rules: {
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                email:{
                    required: "Please enter email address",
                    email: "Please enter a valid email address"
                }
            },
            submitHandler: function(form, event) { 
                event.preventDefault();
                if($(this).valid()) {
                    $("#newsletter").hide();
                    $('.success').show();
                }
                //submit via ajax
            }
    
        });

        let table = new DataTable('.table');

        

        $("#contact-form").validate({
            rules: {
              firstName: { required: true, minlength: 3, maxlength: 20  },
              lastName: { required: true, minlength: 3, maxlength: 20 },
              email: { required: true, email: true, maxlength: 30 },
              phoneNumber: { minlength: 10, maxlength:10 },
              message: { required: true, minlength: 10, maxlength: 300}  
            },
            messages: {
              firstName: {
                required: "Please enter your firstname",
                minlength: "Please enter atleast 3 characters",
                maxlength: "Please enter not more than 20 Characters"
              },
              lastName: {
                required: "Please enter your lastname",
                minlength: "Please enter atleast 3 characters",
                maxlength: "Please enter not more than 20 Characters"
              },
              email: {
                required: "Please enter email address",
                email: "Please enter a valid email address",
                maxlength: "Please enter not more than 20 Characters"
              },
              phoneNumber: { 
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
                  url : ajax.url,
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
        
        $('.dashicons-trash').click(function(){
            var id = $(this).attr("data-id");
            var $this = $(this);
           
            $.ajax({
                type : "POST",
                dataType : "json",
                url : ajax.url,
                data : { 
                    "action": "delete_contact_request",
                    "id": id
                },
                success: function(response) {
                   
                    if(response.returnType == "true"){
                        $($this).closest("tr").slideUp(1000);
                        $(".alert-success").css('display', 'block');
                        setTimeout(function(){
                            $(".alert-success").css('display', 'none');
                        }, 5000)
                        $(".alert-success").html(response.message);
                    
                    }else if(response.returnType == "false"){
                        $(".alert-success").html(response.message);
                    }
                }
            });
        });
    });
    
});