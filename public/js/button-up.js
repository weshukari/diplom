$(function() {
    $('.scrollup').click(function() {
        $("html, body").animate({
        scrollTop:0
        },100);
    })
    })
    $(window).scroll(function() {

    if ($(this).scrollTop()>50) {
        $('.scrollup').fadeIn();
    }
    else {
        $('.scrollup').fadeOut();
    }
    });