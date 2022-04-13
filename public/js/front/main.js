jQuery(function ($) {
    'use strict';

	// Home Slides
	$('.c-slide1').owlCarousel({
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
});
