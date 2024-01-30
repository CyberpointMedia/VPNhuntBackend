
jQuery(function( $ ){
    $(document).ready(function(){
    
    const ajax_url = ajax.url;
    let dataType = "";
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
                  
                    $("#contact-form").hide();
                    $("#response").html(response.message);

                }else if(response.returnType == "false"){
                   
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
        let bodyHTML  = '<div class="mb-3">';
            bodyHTML  +=  '<label for="inputPassword5" class="form-label">Search Guides</label>';
            bodyHTML  +=  '<input type="text" class="form-control form-control-sm" id="guideName" placeholder="Search guide">';
            bodyHTML  +=  '<button type="button" class="btn btn-sm btn-outline-dark pull-right mt-2">Search</button>';
            bodyHTML  += '</div>';
            bodyHTML  += '<div id="guidesResponseHTML"></div>';
            bodyHTML  += '<hr>';
            bodyHTML  += '<div id="guidesIDResponseHTML"></div>';
        let title = $(this).data('title');
        dataType = $(this).data('type');
        let closeButtonTitle = $(this).data('close');
        $("#staticBackdrop .modal-body").html(bodyHTML);
        $("#staticBackdrop .modal-title").html(title);
        $('#staticBackdrop').modal('show');
    });

    $("#list-shortcodes").on("click", function(){
      let bodyHTML  = '<div class="mb-3">';
            bodyHTML  +=  '<label for="inputPassword5" class="form-label">Search Guides</label>';
            bodyHTML  +=  '<input type="text" class="form-control form-control-sm" id="guideName" placeholder="Search guide">';
            bodyHTML  +=  '<button type="button" class="btn btn-sm btn-outline-dark pull-right mt-2">Search</button>';
            bodyHTML  += '</div>';
            bodyHTML  += '<div id="guidesResponseHTML"></div>';
            bodyHTML  += '<hr>';
            bodyHTML  += '<div id="guidesIDResponseHTML"></div>';
        let title = $(this).data('title');
        dataType = $(this).data('type');
        let closeButtonTitle = $(this).data('close');
        $("#staticBackdrop .modal-body").html(bodyHTML);
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
      $('.list-group-item').removeClass('bg-secondary text-white selected' );
      $(this).addClass('bg-secondary text-white selected', 1000);
      wordpress_function = 'get_guide_meta';
      var ajax_data = [];
      ajax_url = ajax.url;
      ajax_data = {'id': $(this).data('id'), 'data_type': dataType};        
      response = ajaxRequest(3000, wordpress_function, ajax_data, 'guidesIDResponseHTML');
    });


    function ajaxRequest(timeout, wordpress_function, ajax_data, container){
      
      url = ajax.url; 
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
        console.log(response);
        if(dataType === "meta"){
          list +='<li data-id="' + response.data[i].list_id + '" class="list-group-item copy">'+ count +'. ' + response.data[i].list_text + '</li>';
        }else if(dataType === "shortcodes"){
          list +='<li data-id="' + response.data[i].list_id + '" data-post-id="' + response.data[i].post_id + '" class="list-group-item copy">'+ count +'. ' + response.data[i].list_text + '</li>';
        }
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
      let guide_id, guide_meta_key, shortcode;
      if(dataType === "meta"){
        guide_id = $("#guidesResponseHTML li.list-group-item.selected").data('id');
        guide_meta_key = $(this).data('id');
        shortcode = "[display-guide-attributes guide-id='" + guide_id + "' guide-meta-key='" + guide_meta_key + "']";
      }else if(dataType === "shortcodes"){
        guide_id = $(this).data('id');
        post_id = $(this).data('post-id');
        if(guide_id === "vpnhunt_why_trust"){
          shortcode = "["+ guide_id + "]";
        }else{
          shortcode = "["+ guide_id + " post_id='"+ post_id +"']";
        }
      }
      if ( window.wpActiveEditor ) {
        content = tinymce.activeEditor.getContent();
        tinymce.activeEditor.setContent(content + shortcode);
      }else {
       alert("editor not active")
      }
      

    });
    $("#addPros").on('click', function(){

      var clone = $(".pros").find('input:first').clone(); 
      clone.val("");
      $(".pros").append(clone);
    })

    $("#addCons").on('click', function(){

      var clone = $(".cons").find('input:first').clone(); 
      clone.val("");
      $(".cons").append(clone);
    })
   
    //document.body.innerHTML = document.body.innerHTML.replace(/year/g, "New")
   // document.body.innerHTML.replace('[year]', year);
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