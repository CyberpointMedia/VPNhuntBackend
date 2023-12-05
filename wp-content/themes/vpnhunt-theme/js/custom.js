(function($){
  "use strict";  
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

      
      
  });
  // slider for mobile end

})(this.jQuery);