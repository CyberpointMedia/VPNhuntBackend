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

   
    

    $("#shortcode-inserter").on("click", function(){
        let title = $(this).data('title');
        let closeButtonTitle = $(this).data('close');
        $("#staticBackdrop .modal-title").html(title);
        $('#staticBackdrop').modal('show');
    });
    
    $("#guideName").on("keyup", function(){
        newTitle = $(this).val();
        setTimeout(function(){
            $("#guidesResponseHTML").html(newTitle);
        //     $.ajax({
        //         type : "POST",
        //         dataType : "json",
        //         url : ajax.url,
        //         data : { 
        //             "action": "get_contact_data",
        //             "id": id
        //         },
        //         success: function(response) {
        //             if(response.returnType == "true"){
        //                 console.log(response);
        //                 $("#contact-form").hide();
        //                 $("#response").html(response.message);
    
        //             }else if(response.returnType == "false"){
        //                 console.log(response);
        //                 $("#response").html(response.message);
                    
        //             }
        //         }
            
        //     });
         }, 3000);
        
        
    })

});

wp.blocks.registerBlockType('brad/border-box', {
    
    title: 'Simple Box',
    icon: 'smiley',
    category: 'common',
    attributes: {
      content: {type: 'string'},
      color: {type: 'string'}
    },
    
  /* This configures how the content and color fields will work, and sets up the necessary elements */
    
    edit: function(props) {
      function updateContent(event) {
        props.setAttributes({content: event.target.value})
      }
      function updateColor(value) {
        props.setAttributes({color: value.hex})
      }

      return React.createElement(
        "div",
        null,
        React.createElement(
          "h3",
          null,
          "Simple Boxs"
        ),
        React.createElement("input", { type: "text", value: props.attributes.content, onChange: updateContent }),
        React.createElement(wp.components.ColorPicker, { color: props.attributes.color, onChangeComplete: updateColor })
      );
    },
    save: function(props) {
      return wp.element.createElement(
        
        "h3",
        { style: { border: "3px solid " + props.attributes.color } },
        props.attributes.content
      );
    }
  });

