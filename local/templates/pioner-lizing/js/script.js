function headerSwitcher(){
    if(pageYOffset>0)
        document.querySelector('.header').classList.remove('top');
    else
        document.querySelector('.header').classList.add('top')
}
window.addEventListener('scroll', function() {
    headerSwitcher();
});
function jsDate(idname) {
    var date = String(document.getElementById(idname).value);
    var date_parse = Number(Date.parse(date.replace(/(\d+)\.(\d+)\.(\d+)/, '$2/$1/$3')));
    return date_parse;
}
window.onload = function(){
    headerSwitcher();
    if($("input[type=range]").length>0){
        $("input[type=range]").rangeslider({
            polyfill: false,
            rangeClass: "rangeslider",
            disabledClass: "rangeslider--disabled",
            horizontalClass: "rangeslider--horizontal",
            verticalClass: "rangeslider--vertical",
            fillClass: "rangeslider__fill",
            handleClass: "rangeslider__handle"
        });
    }
    $('.adv-carousele').owlCarousel({
        items: 1,
        loop: false,
        dots: false,
        stagePadding: 35,
        margin: 20,
    });
    $('.big-news-carousel').owlCarousel({
        loop: false,
        dots: true,
        margin: 30,
        nav: true,
        navText: ["<div class='owl-absolute-nav-left'></div>","<div class='owl-absolute-nav-right'></div>"],
        responsive: {
            0:{
                stagePadding: 45,
                margin: 20,
                items: 1
            },
            576:{
                stagePadding: 45,
                margin: 20,
                items: 2
            },
            768:{
                stagePadding: 0,
                margin: 30,
                items: 2
            },
            1200:{
                stagePadding: 0,
                margin: 30,
                items: 3
            },
            1750:{
                stagePadding: 0,
                margin: 30,
                items: 4
            }
        }
    });
    $('.partners-carousel').owlCarousel({
        loop: false,
        dots: true,
        nav: true,
        navText: ["<div class='owl-absolute-nav-left'></div>","<div class='owl-absolute-nav-right'></div>"],
        responsive: {
            0:{
                margin: 50,
                items: 2
            },
            576:{
                margin: 70,
                items: 4
            },
            1200:{
                margin: 110,
                items: 6
            },
            1750:{
                margin: 110,
                items: 8
            }
        }
    });
};
$(document).ready(function () {
    $('a[href^="#"]').click(function () {
        var t = $(this).attr("href");
        return $("html, body").animate({
            scrollTop: $(t).offset().top - 40
        }, 800), !1
    });
    // $(".navbar-dropdown_title").on("click", function () {
    //     $('.navbar-dropdown__menu').toggleClass('navbar-dropdown_active');
    //     $('.navbar-dropdown_title svg').toggleClass('svg_active');
    //     console.log('ghbdtn');
    // });
    // $(document).mouseup(function (e) {
    //     var container = $(".navbar-dropdown__menu");
    //     if (!container.is(e.target) &&
    //         container.has(e.target).length === 0 &&
    //         !$(e.target).hasClass("navbar-dropdown_title")) {
    //         container.removeClass("navbar-dropdown_active");
    //         $('.navbar-dropdown_title svg').removeClass('svg_active');
    //     }
    // });
    $('.side_menu_dropdown').click(function () {
        $('.navbar-dropdown__menu_mobile').toggleClass('navbar-dropdown__menu_mobile_active');
        $('.side_menu_dropdown svg').toggleClass('svg_active');
    });
    $('.news-carousel').owlCarousel({
        items: 1,
        loop: false,
        dots: true,
    });
    $('.main-carousel').owlCarousel({
        loop: false,
        dots: false,
        responsive: {
            0: {
                stagePadding: 30,
                margin: 20,
                items: 1
            },
            576: {
                stagePadding: 30,
                margin: 20,
                items: 2
            },
            768: {
                stagePadding: 0,
                margin: 20,
                items: 2
            },
            992: {
                stagePadding: 0,
                margin: 30,
                items: 3
            },
            1455: {
                stagePadding: 0,
                margin: 30,
                items: 4
            }
        }
    });
});