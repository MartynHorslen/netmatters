$(document).ready(function(){
    $('#slider').slick({
    // normal options...
    infinite: false,
    dots: true,
    speed: 300,
    autoplay: true,
    autoplaySpeed: 4000,

    // the magic
    responsive: [{

        breakpoint: 1024,
        settings: {
            slidesToShow: 1,
            infinite: true,
            dots: true
        }

        }, {

        breakpoint: 600,
        settings: {
            slidesToShow: 1,
            dots: true
        }

        }, {

        breakpoint: 300,
        settings: "unslick" // destroys slick

        }]
        });
  });