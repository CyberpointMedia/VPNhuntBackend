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
        $(".data_record").click(function() {
            var id = $(this).data('id');
            console.log(id);
            $.ajax({
            type : "POST",
            dataType : "json",
            url : ajax.url,
            data : { 
                "action": "get_contact_data",
                "id": id
            },
            success: function(response) {
                if(response.returnType == "true"){
                    console.log(response);
                    $("#contact-form").hide();
                    $("#response").html(response.message);

                }else if(response.returnType == "false"){
                    console.log(response);
                    $("#response").html(response.message);
                
                }
            }
        
            });
        })

        $('#export-table').click(function () {
           // var $row = table.row( this ).data();
            var table_name = $('table caption').html();
          
            let table = document.getElementsByTagName("table");
            TableToExcel.convert(table[0], {
                name: table_name + '.xlsx',
                sheet: {
                    name: table_name
                }
            });
        });
    });

   
    $("#dialogue .modal-body").html('Hello');
    $('#dialogue').modal('show');
    
});