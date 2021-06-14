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

$( document ).ready(function() {
	$('[data-toggle=search-form]').click(function() {
		$('.search-form-wrapper').toggleClass('open');
		$('.search-form-wrapper .search').focus();
		$('html').toggleClass('search-form-open');
	});
	$('[data-toggle=search-form-close]').click(function() {
		$('.search-form-wrapper').removeClass('open');
		$('html').removeClass('search-form-open');
	});
	$('.search-form-wrapper .search').keypress(function( event ) {
	if($(this).val() == "Search") $(this).val("");
	});

	$('.search-close').click(function(event) {
	$('.search-form-wrapper').removeClass('open');
	$('html').removeClass('search-form-open');
	});
});

$( document ).ready(function() {
	$('[data-toggle=interest-form]').click(function() {
		$('.interest-form-wrapper').toggleClass('open');
		$('.interest-form-wrapper .interest').focus();
		$('html').toggleClass('interest-form-open');
	  });
	  $('[data-toggle=interest-form-close]').click(function() {
		$('.interest-form-wrapper').removeClass('open');
		$('html').removeClass('interest-form-open');
	  });
	$('.interest-form-wrapper .interest').keypress(function( event ) {
	  if($(this).val() == "Interest") $(this).val("");
	});

	$('.interest-close').click(function(event) {
	  $('.interest-form-wrapper').removeClass('open');
	  $('html').removeClass('interest-form-open');
	});
});

$(document).ready(function() {
	$('.header-sec-link').click(function() {
			$('.HeaderTextarea').slideToggle("fast");
	});
});

$( "#btn-receitamob" ).click(function() {
  $("#receita-div").slideToggle(1500, function () {
  });
  $(this).find("i").toggleClass("fa-chevron-double-down fa-chevron-double-up");
});

$( "#btn-receitamob" ).click(function() {
  $(this).find("span").toggleClass("custom-scroll-link custom-scroll-link-up");
});

$(function(){
  $('body').conditionalFields('init');
});

$(document).ready(function() {
        $('#showall').click(function() {
                $('.allmenu').toggle("slide");
        });
    });