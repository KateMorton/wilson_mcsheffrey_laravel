$(document).ready(function() {
    var lazyloadImages = $("img.lazy");    
    var lazyloadThrottleTimeout;
    
    function lazyload () {
      if(lazyloadThrottleTimeout) {
        clearTimeout(lazyloadThrottleTimeout);
      }    
      
      lazyloadThrottleTimeout = setTimeout(function() {
          var scrollTop = $(window).scrollTop();
          lazyloadImages.each(function() {
              var el = $(this);
              if(el.offset().top < (window.innerHeight + scrollTop)) {
                var url = el.attr("data-src");
                el.attr("src", url);
                el.removeClass("lazy");
                lazyloadImages = $("img.lazy");
              }
          });
          if(lazyloadImages.length == 0) { 
            $(document).off("scroll");
            $(window).off("resize");
          }
      }, 5);
    }
    
    $(document).on("scroll", lazyload);
    $(window).on("resize", lazyload);
    $(window).on("orientationChange", lazyload);

    /*fade in on load */
    $('.content').fadeIn(1500); 
  })

 