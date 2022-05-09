let menuTime = Date.now();
// On button click
$(".menu").click((e)=>{
    if (Date.now() > time){
        $(".menu-text").addClass("abs-line");
        $(".menu-line").removeClass('spin-in').addClass('spin-out');
        setTimeout(()=>{
            $(".menu-line").eq(2).addClass("extra-spin");
        }, 400);      
        $(".wrapper").addClass("left").removeClass('close');
        $(".menu-overlay").show();
        $('#sticky').css("top", $(".wrapper").scrollTop()).css("left", "17px");
    }
    menuTime = Date.now() + 500;
});

$(".menu-overlay").click(()=>{
    if (Date.now() > time){
        $(".menu-overlay").hide();
        $(".menu-line").eq(2).addClass("extra-unspin");
        $(".wrapper").addClass("close");
        setTimeout(()=>{
            $(".menu-line").eq(2).removeClass("extra-unspin extra-spin");
            $(".menu-line").addClass('spin-in');
        }, 111);  
        setTimeout(()=>{
            $(".menu-text").removeClass("abs-line");
            $(".menu-line").removeClass("spin-out spin-in");
            $(".wrapper").removeClass("left close");
            $('#sticky').removeAttr("style");
        }, 400);
    }
    menuTime = Date.now() + 1000;
    
});

