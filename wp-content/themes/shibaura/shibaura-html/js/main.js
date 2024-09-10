$(document).ready(function() {

    if (window.location.hash) {
        var offset = -120;
        $('html, body').animate({
            scrollTop: ($(window.location.hash).offset().top + offset) + 'px'
        }, 1000, 'swing');
    }

    $('.back-to-top').click(function() {
        $('html, body').animate({ scrollTop: 0 }, 800, 'easeInOutExpo');
        return false;
    });


    // Header scroll class
    $(window).scroll(function() {
        // if ($(this).scrollTop() > 60) {
        //     $('#header').addClass('header-scrolled');
        //     $("#header .ion-android-menu").css({ "position": "fixed", "top": "inherit", "right": "16px" });
        // }
        if ($(this).scrollTop() > 60) {
            $('#header .navbar').addClass('box-shadow-c');
            $('#header-fix').addClass('box-shadow-c');
        } else {
            $('#header .navbar').removeClass('box-shadow-c');
            $('#header-fix').removeClass('box-shadow-c');
        }
    });

    // if ($(window).scrollTop() > 60) {
    //     $('#header .navbar').addClass('box-shadow-c');
    // }

    $('#toggle').click(function() {
        $(this).toggleClass('open');
        $('#overlay').toggleClass('open');
        $('#header-fix').toggleClass('open');
    });

    $('#overlay li a, #overlay .link-c').on('click', function () {
        $('#overlay').toggleClass('open');
        $('#header-fix').toggleClass('open');
        $('#toggle').toggleClass('open');
    })

    $('.owl-sharing').owlCarousel({
        loop:true,
        margin: 22,
        items: 3,
        dots: false,
        navText: [
            '<div class="nav-prev"></div>',
            '<div class="nav-next"></div>',
        ],
        responsive: {
            0: {
                items: 1.4,
                center: true,
                margin: 16,
            },
            500: {
                items: 2,
                nav: false,
                margin: 16,
            },
            1000: {
                items: 3,
                nav: true,
            },
        },
    })

    $(".dropdown-language .dropdown-menu li").on("click", function() {
        console.log('$(this) :>> ', $(this).children().text());
        $(".dropdown-language button").text($(this).children().text())
    })
});