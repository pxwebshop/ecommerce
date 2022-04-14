jQuery(function ($) {
    'use strict';

	// Home Slides
	$('').owlCarousel({
		loop: true,
		nav: true,
		dots: false,
		autoplayHoverPause: true,
		items: 1,
		smartSpeed: 100,
		autoplay: false,
		navText: [
			"<i class='flaticon-left-arrow'></i>",
			"<i class='flaticon-right-arrow'></i>"
		],
	});
    $('.c-slide2__list').owlCarousel({
        loop: true,
		nav: false,
		dots: false,
		smartSpeed: 500,
		margin: 30,
		autoplayHoverPause: true,
		autoplay: true,
		responsive: {
			0: {
				items: 2
			},
			576: {
				items: 2
			},
			768: {
				items: 3
			},
			1024: {
				items: 4
			},
			1200: {
				items: 5
			}
		}
    });
}(jQuery));

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
		$(this).find('i').toggle();
        var submenu = $(this).children(".c-header__nav__subMenu");
        if ($(submenu).is(":hidden")) {
            $(submenu).slideDown(200);
        } else {
            $(submenu).slideUp(200);
        }
    });
	$(".c-header__language").on("click", function (e) {
        e.preventDefault();
        var submenu = $(this).children(".c-header__languageList");
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

    $(".c-header__languageItem").click(function(){
        // console.log($(this).text());
        $(".c-header__currentLanguage").text($(this).text());
    })
    $(".c-header__catItem").click(function(){
        // console.log($(this).text());
        $(".c-header__currentCat").text($(this).text());
    })
    $(".c-list6__item").click(function(){
        // console.log($(this).text());
       $('.c-list6__item').removeClass('is-active');
       $(this).addClass('is-active');
    })
});
