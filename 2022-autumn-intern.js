jQuery(document).ready(function($) {
    
    $('.slider').slick({
        arrows:true,
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        appendDots: $('.slick-nav')
      });
      
      $( document ).ready(function() {
          console.log( "ready!" );
      
      $('.slider').on('afterChange', function(event, slick, currentSlide){
        if(currentSlide==0){
          document.getElementById("slick-slide-control01").parentNode.classList.remove("oa-active");
          document.getElementById("slick-slide-control00").parentNode.classList.add("oa-active");
          document.getElementById("slick-slide-control02").parentNode.classList.remove("oa-active");
        }
        else if(currentSlide==1){
          document.getElementById("slick-slide-control01").parentNode.classList.add("oa-active");
          document.getElementById("slick-slide-control00").parentNode.classList.add("oa-active");
          document.getElementById("slick-slide-control02").parentNode.classList.remove("oa-active");
        }
      
        else if(currentSlide==2){
          document.getElementById("slick-slide-control01").parentNode.classList.add("oa-active");
          document.getElementById("slick-slide-control00").parentNode.classList.add("oa-active");
          document.getElementById("slick-slide-control02").parentNode.classList.add("oa-active");
      }
      
      });
      
      });

    });