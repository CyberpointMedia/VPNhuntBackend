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
    })
});