//------------------------------------------
  //Slider
//------------------------------------------
$(document).ready(function() {
 
  $("#ta-slider").owlCarousel({
   
      navigation : true, // Show next and prev buttons
      slideSpeed : 100,
      pagination : true,
      paginationSpeed : 400,
      singleItem:true,
      video:true,
      autoPlay : true,
      transitionStyle : "backSlide",
      navigationText: [
      "<i class='fa fa-angle-left'></i>",
      "<i class='fa fa-angle-right'></i>"
      ]
    });
  
});
    
//------------------------------------------
    //scroll-top
//------------------------------------------
  $(".ti_scroll").hide();   
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 500) {
                $('.ti_scroll').fadeIn();
            } else {
                $('.ti_scroll').fadeOut();
            }
        });     
        $('a.ti_scroll').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });   