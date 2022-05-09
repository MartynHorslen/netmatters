let count = 0;
// On button click
$(".menu").click(()=>{
    count++;
    console.log(count);
    //if .spin-out, 
    if (count % 2 === 0){
        // add spin in.
            $(".menu-line").eq(2).addClass("extra-unspin");
            setTimeout(()=>{
                $(".menu-line").eq(2).removeClass("extra-unspin extra-spin");
                $(".menu-line").addClass('spin-in');
            }, 111);  
            setTimeout(()=>{
                $(".menu-text").removeClass("abs-line");
                $(".menu-line").removeClass("spin-out spin-in");
            }, 400);
            $(".wrapper").addClass("close");
            setTimeout(()=>{
                $(".wrapper").removeClass("left");
            }, 1000)
    } else {
        // else add spin out.
        $(".menu-text").addClass("abs-line");
        $(".menu-line").removeClass('spin-in').addClass('spin-out');
        setTimeout(()=>{
            $(".menu-line").eq(2).addClass("extra-spin");
        }, 400);      
        $(".wrapper").addClass("left").removeClass('close');
    }

    

    // Slide wrapper and sidebar left

    // Grey overlay on wrapper.

    // Slide back right on menu close

    // Animate menu icon rotation
});

