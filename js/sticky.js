let lastScrollTop = 0;
let time = Date.now();
let height;
let windowWidth = $(window).width();
if (windowWidth < 768 ){
    height = 168;
} else if (windowWidth < 992 ) {
    height = 110;
} else {
    height = 208;
}
$(window).scroll(() => {
    let st = $(window).scrollTop();
    if (Date.now() > time){
        
        if (st > lastScrollTop && st > height){
            $('#sticky').removeClass('slide-down').addClass('slide-up');
            setTimeout(() => {
                $('#sticky').removeClass('sticky')
            }, 450);
            
            
        } else if (st < lastScrollTop && st > height) {
            // upscroll code
            $('#sticky').addClass('sticky slide-down').removeClass('slide-up');
        }        
        time = Date.now() + 500;
    }
    if (st === 0){
        $('#sticky').removeClass('sticky');
    }
    lastScrollTop = st;
});