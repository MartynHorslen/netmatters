$(document).ready(function(){
    $('#slider').slick({
        // normal options...
        infinite: true,
        dots: true,
        speed: 300,
        autoplay: true,
        autoplaySpeed: 4000,
        arrows: false
    });
    $('.jumbo').removeClass("hidden");
  });
