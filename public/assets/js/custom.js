//============= owl slider =============

$(document).ready(function () {
	$('.owl-one').owlCarousel({
		loop: false,
		margin: 30,
		nav: true,
		dots: false,
		autoplay: true,
		slideSpeed: 6000,
		autoplayTimeout: 5000,
		autoplaySpeed: 6000,
		autoplayHoverPause: true,
		navText: [
			'<span aria-label="' + 'Previous' + '"><i class="far fa-arrow-left"></i></span>',
			'<span aria-label="' + 'Next' + '"><i class="far fa-arrow-right"></i></span>'
		],
		responsive: {
			0: {
				items: 1
			},
			480: {
				items: 2
			},
			690: {
				items: 3
			},
			768: {
				items: 3
			},
			960: {
				items: 4
			},
			1025: {
				items: 4
			}
		}
	});
	
	$('.owl-two').owlCarousel({
		loop: false,
		margin: 15,
		nav: true,
		dots: false,
		autoplay: true,
		slideSpeed: 6000,
		autoplayTimeout: 5000,
		autoplaySpeed: 6000,
		autoplayHoverPause: true,
		navText: [
			'<span aria-label="' + 'Previous' + '"><i class="far fa-arrow-left"></i></span>',
			'<span aria-label="' + 'Next' + '"><i class="far fa-arrow-right"></i></span>'
		],
		responsive: {
			0: {
				items: 1
			},
			480: {
				items: 2
			},
			690: {
				items: 3
			},
			768: {
				items: 3
			},
			960: {
				items: 4
			},
			1025: {
				items: 4
			}
		}
	});


});
//stellarnav
jQuery(document).ready(function ($) {
	jQuery('.stellarnav').stellarNav({
		theme: 'dark',
		breakpoint: 1023,
		position: 'right',
		phoneBtn: '',
		locationBtn: ''
	});
});

//============= slick slider =============

//Main Banner Start
$('.slider').slick({
	draggable: true,
	arrows: false,
	dots: true,
	fade: true,
	autoplay: true,
	autoplaySpeed: 5000,
	speed: 1000,
	infinite: true,
	cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
	touchThreshold: 100
});

$('.Testimonial').slick({
	draggable: true,
	arrows: false,
	dots: true,
	autoplay: true,
	autoplaySpeed: 5000,
	speed: 1000,
	infinite: true,
});

//sticky Header //
$(window).scroll(function () {
	var scroll = $(window).scrollTop();

	if (scroll >= 700) {
		$(".site-header").addClass("sticky");
	} else {
		$(".site-header").removeClass("sticky");
	}
});

$('.continue').click(function(){
  $('.nav-tabs > .active').next('li').find('a').trigger('click');
});
$('.back').click(function(){
  $('.nav-tabs > .active').prev('li').find('a').trigger('click');
});

