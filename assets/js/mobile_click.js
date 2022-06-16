$('.btn_menu > a').on('click', function(e){
    e.preventDefault;
    $(this).toggleClass('btn_menu-active');
    $('.menu').toggleClass('menu_active');
    $('#mobile_profile').removeClass('mobile_profile-active');
    $('.under_menu').removeClass('menu_active');
});

$('#mobile_profile').on('click', function(e){
    $(this).toggleClass('mobile_profile-active');
    $('.under_menu').toggleClass('menu_active');
});

$('.btn_sidebar_menu').on('click', function(e){
    $(this).toggleClass("btn_menu-active");
    $('.topics').toggleClass("topics-active");
    $('#sidebar_back').toggleClass("sidebar-active")
});

