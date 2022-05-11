$(document).ready(()=>{
    if (!document.cookie){
        $(".cookie-overlay").removeClass("hidden");
    }
});

$(".right-btn").click((e)=>{
    e.preventDefault();
    $(".cookie-overlay").addClass("hidden");
    const d = new Date();
    d.setTime(d.getTime() + (1*24*60*60*1000));
    let expires = "expires="+ d.toUTCString();
    document.cookie = expires;
});

$(".left-btn").click((e)=>{
    e.preventDefault();
    $(".cookie-extended-overlay").removeClass("hidden");
});

$(".btns button").click((e)=>{
    e.preventDefault();
    $(e.target).siblings().removeClass("default").addClass("inactive");
    $(e.target).addClass("default").removeClass("inactive");
});

$(".table-btn").click((e)=>{
    if ($(".table").hasClass("hidden")){
        $(".table").removeClass("hidden");
    } else {
        $(".table").addClass("hidden");
    }
    $(e.target).addClass("hidden");
    $(e.target).siblings().removeClass("hidden");
});

$(".right-btn-ext").click((e)=>{
    e.preventDefault();
    $(".cookie-overlay").addClass("hidden");
    $(".cookie-extended-overlay").addClass("hidden");
    const d = new Date();
    d.setTime(d.getTime() + (1*24*60*60*1000));
    let expires = "expires="+ d.toUTCString();
    document.cookie = expires;
});

$(".left-btn-ext").click((e)=>{
    e.preventDefault();
    $(".cookie-extended-overlay").addClass("hidden");
});
$(".more").click((e)=>{
    if ($(e.target).parent().next().hasClass("hidden")){
        $(e.target).parent().next().removeClass("hidden");
        $(e.target).children().text("-");
    } else {
        $(e.target).parent().next().addClass("hidden");
        $(e.target).children().text("+");
    }
});