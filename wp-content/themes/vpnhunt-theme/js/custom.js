(function($){
  "use strict";  
  let counter = 1;
  const theme_dir = front_urls.theme_url;
  const image_folder = front_urls.theme_url + "/images";
  const defaultImage = front_urls.theme_url + "/images/default_image.png";
  // mobile humburger menu start 
  const mobileMenuButton = document.getElementById('mobile-menu-button');
  const mobileMenu = document.getElementById('navbar-sticky');
  const menuIconOpen = document.getElementById('menu-icon-open');
  const menuIconClose = document.getElementById('menu-icon-close');

  mobileMenuButton.addEventListener('click', function () {
    mobileMenu.classList.toggle('open-navbar');
    menuIconOpen.classList.toggle('hidden');
    menuIconClose.classList.toggle('hidden');
  });
  // mobile humburger menu end

  //top search start here 
  var toggleButton = document.getElementById("top-search");
  var mainSearch = document.getElementById("main-search");
  var searchCloseButton = document.getElementById("search-close");

  toggleButton.addEventListener("click", function() {
    mainSearch.classList.toggle("open-search-form");
  });

  searchCloseButton.addEventListener("click", function() {
    mainSearch.classList.remove("open-search-form");
  });
  // top search end here 

  // fixed header start here 
  document.addEventListener("DOMContentLoaded", function() {
    var header = document.querySelector("header");
    window.addEventListener("scroll", function() {
      if (window.scrollY > 0) {
        header.classList.add("fixed-header");
      } else {
        header.classList.remove("fixed-header");
      }
    });
  });
  // fixed header end here 

  // video canvas
  document.addEventListener("DOMContentLoaded", function () {
    // Get the canvas element and its context
    if(document.getElementById("videoCanvas")){
      var canvas = document.getElementById("videoCanvas");
      var ctx = canvas.getContext("2d");
    
      // Create a video element
      var video = document.createElement("video");
      video.src = front_urls.theme_url + "/videos/vpnHunt.mp4"; // Replace with your video URL or path
      video.loop = true;
      video.muted = true;

      // Autoplay the video
      video.autoplay = true;
  
      // Set canvas size to match video dimensions after metadata is loaded
      video.addEventListener("loadedmetadata", function () {
        canvas.width = video.videoWidth; // Set canvas width to video width
        canvas.height = video.videoHeight; // Set canvas height to video height
        drawVideo(); // Start drawing video frames
      });

      // Draw the video frames onto the canvas
      function drawVideo() {
        ctx.drawImage(video, 0, 0, canvas.width, canvas.height);
        requestAnimationFrame(drawVideo);
      }

      // Play the video
      video.addEventListener("canplaythrough", function () {
        video.play();
      });

      // Restart the video when it reaches the end
      video.addEventListener("ended", function () {
        video.currentTime = 0;
        video.play();
      });

      // Resize canvas when the window is resized
      window.addEventListener("resize", function () {
        canvas.width = video.videoWidth; // Adjust canvas width on window resize
        canvas.height = video.videoHeight; // Adjust canvas height on window resize
        drawVideo(); // Redraw video frames after resizing
      });
    
    
      // Append video to the DOM
      // document.body.appendChild(video);
    }
  });


  // slider for mobile start
  $(window).load(function(){
    $('body').slideDown(10);
  });
  $(document).ready(function(){
   
    $('.slider').slick({
        slidesToShow: 3,
        arrows: false,
        dots: false,
        speed: 300,
        infinite: true,
        autoplaySpeed: 3000,
        autoplay: true,
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 2,
                arrows: true,
                dots: true,
                autoplay: true,
              }
            },
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 1,
                arrows: true,
                dots: true,
                autoplay: true,
              }
            }
        ]
      });
      
      $('.accordion-toggle').click(function(){
        var self = $(this).parent();
        self.toggleClass("collapsed");
        self.next(".accordion-content").toggleClass("hidden");
      });

      // select vpn compare start // 
      if($('.compare_listing')){
        let langArray = [];
        
        let get_guides = ajax_call('json', false, 'get_guide', 'guides');
        $(get_guides.data).each(function(){
          var img = theme_dir + '/images/' + this.post_name + '-small-logo.svg';
          var text = this.post_title.trim().replace('Guide','');
          var value = this.ID;
          var item = '<li><img src="'+ img +'" alt="" value="'+value+'"/><span>'+ text +'</span></li>';
         
          //$('.showCompare-item').find('.btn-select').attr("value", value);
          langArray.push(item);
        });
        $('.showCompare-item').find('.btn-select').attr("value", get_guides.data[0].ID);
        $('.compare_listing').html(langArray);
        
        //Set the button value to the first el of the array
        $('.btn-select').html(langArray[0]);


        //change button stuff on click
        $('.compare_listing li').click(function(){
            var img = $(this).find('img').attr("src");
            var value = $(this).find('img').attr("value");
            var text = this.innerText;
            var item = '<li><img src="'+ img +'" alt="" /><span>'+ text +'</span></li>';
            $(this).parents('.showCompare-item').find('.btn-select').html(item);
            $(this).parents('.showCompare-item').find('.btn-select').attr("value", value);
            $(this).parents('.showCompare-item').find('.compare_listing').toggle();
        });

        $("#add-compare").click(function() {
          counter++;
          
          const originalDiv = $(".vpnCompare");
        
          // Clone the div with its content
          const cloneDiv = originalDiv.clone(true);
        
          // Add the clone after the original div
          $(".add-compare-row").append(cloneDiv);
          cloneDiv.removeClass("vpnCompare").addClass("vpnCompare" + counter);
          
          if(counter >= 3){

            $(this).slideUp("slow");
            $("#remove-compare").slideDown("slow");
          }
          
        });

        $("#remove-compare").click(function() {
          
          $(".vpnCompare" + counter).remove(); 
          
          // Clone the div with its content
          if(counter <= 3){
            $(this).slideUp();
            $("#add-compare").slideDown("slow");
          }

          counter--;
        });

        $("#compare-now").on("click", function(){
          let headings = [];
          let headers = [];
          let compare_array = [];
          headings.length = headers.length = compare_array.length = 0;
          $(".vpnCompare").addClass("vpnCompare1");
          
          for(var i =1; i <= counter; i++){
            compare_array.push($(".vpnCompare" + i + " .btn-select" ).attr("value")); 
          }
          
          let allUnique = compare_array => compare_array.length === new Set(compare_array).size;
          
          if(allUnique(compare_array)){
            $("span.error").html("");
              var get_table = ajax_call('json', false,  'get_comparison_table', {'post_type': 'guides', 'include_posts': compare_array});
              $("table thead tr").html("");
              $("table tbody").html("");
              $("table thead tr").append('<th class="py-2 px-3 text-base font-medium text-center border-0">&nbsp;</th>');
              $("table thead tr").append(get_table.data.header);
              $("table thead tr").append(headings);
              $("table tbody").append(get_table.data.body);
          }else{
            $("span.error").html("One of VPNs are selected more than once");
          }
          

        });

        $(".compareSelect-item").change( function(){
          alert($(this).val());
        })
      }

      $(".btn-select").click(function(){
        $(this).parents('.showCompare-item').find('.compare_listing').toggle();
      });
      // select vpn compare start //


  });
  // slider for mobile end
  var count = 1;
  let toc= [];
  let links = [];
  $( ".overview-content h3" ).each(function( truncate ) {
      var preHTML =  '<div class="absolute -left-8 top-1 w-6 h-6  invisible md:visible"><img src="'+ front_urls.theme_url +'/images/logo-icon.svg"></div>';
      $(this).prepend(preHTML);
      var str = $(this).text();
      $(this).attr('id', "heading-" + count);
      toc[count] = {"headingID": "heading-" + count, "heading": str}; 
      links[count] = '<li><a href="#' + toc[count].headingID + '" class="' + toc[count].headingID + '">' + toc[count].heading + '</a></li>'
      count++;
  });
  if(($("#table-of-contents ul").length === 1)){
    $("#table-of-contents ul").html(links);
    $('#table-of-contents li:nth-child(1)').addClass('active');
  }

  $("#table-of-contents ul li a").click(function(){
      $("#table-of-contents ul li.active").removeClass('active');
      $(this).closest('li').addClass('active');
  });

  $(window).on('load scroll resize', function (){   
    // Assign active class to nav links while scrolling
    var windowTop = $(window).scrollTop();
    $('h3').each(function (index, elem) {
        var offsetTop = $(elem).offset().top;
        var outerHeight = $(this).outerHeight(true);
        if( windowTop > (offsetTop - 200) && windowTop < ( offsetTop + outerHeight)) {
          var elemId = $(elem).attr('id');
          $("#table-of-contents ul li.active").removeClass('active');
          $("#table-of-contents ul li a." + elemId).closest('li').addClass('active');
          
        }
    }); 
  });
  
})(this.jQuery);


function ajax_call(return_type, async, action, data){
  
  jQuery.ajax({
    type : "POST",
    dataType : return_type,
    async: async,
    url : front_urls.ajaxUrl,
    data : { 
        "action": action,
        "data": data
    },
    before: function(){
      $(".ajaxWait").show();
    },
    success: function(result) {
        response = result;
    }
  });
  setTimeout(function(){
      jQuery(".ajaxWait").hide();
      jQuery("table").show();
  },3000)
  return response;

}

function capitalize_text(input){
  let newStr = input.replace(/_/g, " ");
  newStr.trim();
  newStr.toUpperCase();
  return newStr;
}