jQuery(
    (function ($) {
        "use strict";

        // Home Slides
        $(".c-slide1").owlCarousel({
            loop: true,
            nav: true,
            dots: false,
            autoplayHoverPause: true,
            items: 1,
            smartSpeed: 1000,
            autoplay: true,
            navText: [
                "<i class='fa-solid fa-angle-left'></i>",
                "<i class='fa-solid fa-angle-right'></i>",
            ],
        });
        $(".c-slide1").on("translate.owl.carousel", function () {
            $(".c-slide1__content b")
                .removeClass("animate__animated animate__fadeInUp")
                .css("opacity", "0");
            $(".c-slide1__content h1")
                .removeClass("animate__animated animate__fadeInUp")
                .css("opacity", "0");
            $(".c-slide1__content p")
                .removeClass("animate__animated animate__fadeInUp")
                .css("opacity", "0");
            $(".c-slide1__content a")
                .removeClass("animate__animated animate__fadeInUp")
                .css("opacity", "0");
        });
        $(".c-slide1").on("translated.owl.carousel", function () {
            $(".c-slide1__content b")
                .addClass("animate__animated animate__fadeInUp")
                .css("opacity", "1");
            $(".c-slide1__content h1")
                .addClass("animate__animated animate__fadeInUp")
                .css("opacity", "1");
            $(".c-slide1__content p")
                .addClass("animate__animated animate__fadeInUp")
                .css("opacity", "1");
            $(".c-slide1__content a")
                .addClass("animate__animated animate__fadeInUp")
                .css("opacity", "1");
        });

        $(".c-slide2__list").owlCarousel({
            loop: true,
            nav: false,
            dots: false,
            smartSpeed: 500,
            margin: 30,
            autoplayHoverPause: true,
            autoplay: true,
            responsive: {
                0: {
                    items: 2,
                },
                576: {
                    items: 2,
                },
                768: {
                    items: 3,
                },
                1024: {
                    items: 4,
                },
                1200: {
                    items: 5,
                },
            },
        });
    })(jQuery)
);

$(document).ready(function () {
    "use strict";

    $(".c-header__nav__btn").click(function () {
        $(".c-header__nav__menu").toggle();
    });
    $(".c-header__nav__btn .fa-solid").click(function () {
        $(".c-header__nav__btn .fa-solid").toggleClass("fa-bars fa-xmark");
    });
    $(".c-header__nav__item").on("click", function (e) {
        e.preventDefault();
        $(this).find("i").toggle();
        var submenu = $(this).children(".c-header__nav__subMenu");
        if ($(submenu).is(":hidden")) {
            $(submenu).slideDown(200);
        } else {
            $(submenu).slideUp(200);
        }
    });
    $(".c-header__language").on("click", function (e) {
        // e.preventDefault();
        var submenu = $(this).children(".c-header__languageList");
        if ($(submenu).is(":hidden")) {
            $(submenu).slideDown(200);
        } else {
            $(submenu).slideUp(200);
        }
    });
    $(".c-header__authen").on("click", function (e) {
        // e.preventDefault();
        var submenu = $(this).children(".c-header__accountList");
        if ($(submenu).is(":hidden")) {
            $(submenu).slideDown(200);
        } else {
            $(submenu).slideUp(200);
        }
    });

    $(".c-header__catSelected").on("click", function (e) {
        e.preventDefault();
        var submenu = $(this).children(".c-header__catList");
        if ($(submenu).is(":hidden")) {
            $(submenu).slideDown(200);
        } else {
            $(submenu).slideUp(200);
        }
    });

    $(".c-header__languageItem").click(function () {
        // console.log($(this).text());
        $(".c-header__currentLanguage").text($(this).text());
    });
    $(".c-header__catItem").click(function () {
        // console.log($(this).text());
        $(".c-header__currentCat").text($(this).text());
        $(".c-header__catSelected input").attr('value', $(this).text());
    });
    $(".c-list6__item").click(function () {
        // console.log($(this).text());
        $(".c-list6__item").removeClass("is-active");
        $(this).addClass("is-active");
    });

    var tabList = document.getElementsByClassName("c-list6__item");
    $(".p-home__bestsellerList").hide();
    $(".p-home__bestsellerList0").show();
    for (let i = 0; i < tabList.length; i++) {
        tabList[i].onclick = function () {
            $(".p-home__bestsellerList").hide();
            $(".p-home__bestsellerList" + i).show();
        };
    }

    $(".c-filter__sort").on("click", function (e) {
        var sortList = $(this).children(".c-filter__sortList");
        if ($(sortList).is(":hidden")) {
            $(sortList).slideDown(200);
        } else {
            $(sortList).slideUp(200);
        }
    });
    $(".c-filter__sortItem").click(function () {
        // console.log($(this).text());
        $(".c-filter__current").text($(this).text());
    });

	// slick
    $(".c-block1__slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: ".c-block1__imgList",
    });
    $(".c-block1__imgList").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: ".c-block1__slider",
        dots: false,
		arrows: false,
		focusOnSelect: true,
		verticalSwiping: true,
		vertical: true
    });
});

jQuery(function () {
	var tabList = document.getElementsByClassName("c-block2__tabItem");
    if (tabList.length > 0) {
        $(".c-block2__description").show();
        $(".c-block2__review").hide();
        $(".c-block2__infoShip").hide();
        tabList[0].onclick = function () {
            $(".c-block2__description").show();
            $(".c-block2__review").hide();
            $(".c-block2__infoShip").hide();
        };
        tabList[1].onclick = function () {
            $(".c-block2__description").hide();
            $(".c-block2__review").show();
            $(".c-block2__infoShip").hide();
        };
        tabList[2].onclick = function () {
            $(".c-block2__description").hide();
            $(".c-block2__review").hide();
            $(".c-block2__infoShip").show();
        };
        $(".c-block2__link").click(function () {
            $(".c-block2__link").removeClass("c-block2__active");
            $(this).addClass("c-block2__active");
        });
    }

    //show/hide pass
    $('#check').click(function(){
        if('password' == $('.c-input__password').attr('type')){
             $('.c-input__password').prop('type', 'text');
        }else{
             $('.c-input__password').prop('type', 'password');
        }
    });
});

