// REAL TIME WINDOW RESIZE
$(window).resize(function(){
    // ШИРИНА ЭКРАНА МЕНЬШЕ < 1201
    if ($( window ).width() < 1200){
        $("#log, #reg").removeClass("col-md-4")
        $("#log, #reg").addClass("col-md-5")
    }else{
        $("#log, #reg").removeClass("col-md-5")
        $("#log, #reg").addClass("col-md-4")
    }

    // ШИРИНА ЭКРАНА МЕНЬШЕ < 995
    if ($( window ).width() < 995){
        $("#main-content").removeClass("col-md-9")
        $("#main-content").addClass("col-md-12")

        $(".sidebar").removeClass("col-md-3")
        $(".sidebar").addClass("col-md-12 pb-3")

        $("#links").removeClass('col-md-4')
        $("#links").addClass("col-md-5")

        $("#log, #reg").removeClass("col-md-4")
        $("#log, #reg").addClass("col-md-7")

        $("#title").addClass("row")
        $("#title").addClass("ps-3")

    }else{
        $("#main-content").removeClass("col-md-12")
        $("#main-content").addClass("col-md-9")

        $(".sidebar").removeClass("col-md-12 pb-3")
        $(".sidebar").addClass("col-md-3")

        $("#links").removeClass('col-md-5')
        $("#links").addClass("col-md-4")

        $("#log, #reg").removeClass("col-md-7")
        $("#log, #reg").addClass("col-md-4")

        $("#title").removeClass("row")
        $("#title").removeClass("ps-3")
    }

    // ШИРИНА ЭКРАНА МЕНЬШЕ < 775
    if ($( window ).width() < 775){
        $(".header").addClass("mb-3")
        $(".menu_hover").removeClass("hover")
    }else{
        $(".header").removeClass("mb-3")
        $(".menu_hover").addClass("hover")
    }
})


// OFFLINE WINDOW SIZE
// ШИРИНА ЭКРАНА МЕНЬШЕ < 1201
if ($( window ).width() < 1200){
    $("#log, #reg").toggleClass("col-md-5")
}

// ШИРИНА ЭКРАНА МЕНЬШЕ < 995
if ($( window ).width() < 995){
    $("#main-content").toggleClass("col-md-9 col-md-12")
    $(".sidebar").toggleClass("col-md-3 col-md-12 pb-3")
    $("#links").toggleClass("col-md-4 col-md-5")
    $("#log, #reg").toggleClass("col-md-7")
    $("#title").toggleClass("row ps-3")
}

// ШИРИНА ЭКРАНА МЕНЬШЕ < 775
if ($( window ).width() < 775){
    $(".header").addClass("mb-3")
    $(".menu_hover").removeClass("hover")
    $("#main-content").toggleClass("col-md-12")
    $("#posts").removeClass("mt-4")
}


