$(document).ready(function () {
    var scroll_pos = 0;
    $(document).scroll(function () {
        scroll_pos = $(this).scrollTop();
        if (scroll_pos > 750) {
            $("header").css('background-color', '#000');
        } else {
            $("header").css('background-color', 'transparent');
        }
    });
});
$(function () {
    $(".navigation").on('mouseover', 'a', function () {  //using "on" for optimization
        this.style.color = '#601cfc';       //native JS application
    }).on('mouseout', 'a', function () {           //chain to avoid second selector call
        this.style.color = '#fff';     //native JS application
    })
});