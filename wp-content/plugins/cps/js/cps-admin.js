
jQuery(function( $ ){
    $(document).ready(function(){
    const ajax_url = ajax.url;
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
    
    $(document).on("keyup", "#guideName", function(){
        wordpress_function = 'get_guides';
        var ajax_data = [];
        ajax_url = ajax.url;
        ajax_data = $(this).val();   
             
        response = ajaxRequest(3000, wordpress_function, ajax_data, 'guidesResponseHTML');
    });
    
    $(document).on('click', "#guidesResponseHTML .list-group-item", function(){
      $('.list-group-item').removeClass('bg-secondary text-white' );
      $(this).addClass('bg-secondary text-white', 1000);
      wordpress_function = 'get_guide_meta';
      var ajax_data = [];
      ajax_url = ajax.url;
      ajax_data = $(this).data('id');        
      response = ajaxRequest(3000, wordpress_function, ajax_data, 'guidesIDResponseHTML');
    });


    function ajaxRequest(timeout, wordpress_function, ajax_data, container){
      
        url = ajax_url; 
        let ajax_response = null;
          $.ajax({
            type : "POST",
            dataType : "json",
            url : url,
            'async':false,
            data : { 
              "action": wordpress_function,
              "data": ajax_data
            },
            success: function(response) {
              ajax_response = response;
            },
            error: function(XMLHttpRequest, textStatus, errorThrown){
              ajax_response = "There was an error while fetching data";
            } 
    
          });
       
        
        responseListing(ajax_response, container);
    }

    function responseListing(response, div_id){
      $("#"+div_id).html('');
      var list = "", responseDiv = "";
      if(response.data && response.returnType == 'true'){
        count = 1; 
        for(var i = 0; i < response.data.length; i++ ){
          list +='<li data-id="' + response.data[i].list_id + '" class="list-group-item copy">'+ count +'. ' + response.data[i].list_text + '</li>';
          count++;
        }
        
        responseDiv   += '<div class="response">';
        responseDiv   +=   '<div class="success">' + response.message + '</div>';
        responseDiv   +=    '<ul class="list-group list-group-flush">'+ list +'</ul>';
        responseDiv   +=   '</div>';
        
      }else if(response.returnType == 'false'){
        responseDiv   += '<div class="response">';
        responseDiv   +=   '<div class="text-danger"><i>' + response.message + '</i></div>';
        responseDiv   +=   '</div>';
      
      }
      $("#"+div_id).html(responseDiv);
    }

    $(document).on('click', '#guidesIDResponseHTML .copy', function(){
      var guide_id = $("#guidesResponseHTML li.list-group-item").data('id');
      var guide_meta_key = $(this).data('id');
      console.log(guide_id);
      var shortcode = "[display-guide-attributes guide-id='" + guide_id + "' guide-meta-key='" + guide_meta_key + "']";
      $(this).find('.shortcode').html(shortcode);

    });
    

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