jQuery(document).ready(function($) {
	"use strict";

	/*** Init lightslider ***/
	if (typeof $.fn.slick != 'undefined') {
		$(".slick").slick({
			centerMode: true,
			autoplay: true,
			arrows: true,
			centerPadding: '80px',
			slidesToShow: 3,
			prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
			nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
			responsive: [
			{
			  breakpoint: 768,
			  settings: {
			    arrows: false,
			    centerMode: true,
			    centerPadding: '40px',
			    slidesToShow: 3
			  }
			},
			{
			  breakpoint: 480,
			  settings: {
			    arrows: false,
			    centerMode: true,
			    centerPadding: '40px',
			    slidesToShow: 1
			  }
			}
			]
		});
	}

	$(".widgetized-template-area").addClass("loaded-wait")

	/*** Superfish Navigation ***/

	if (typeof $.fn.superfish != 'undefined') {
		$('.sf-menu').superfish({
			delay: 500,						// delay on mouseout
			animation: {height: 'show'},	// animation for submenu open. Do not use 'toggle' #bug
			animationOut: {opacity:'hide'},	// animation for submenu hide
			speed: 200,						// faster animation speed
			speedOut: 'fast',				// faster animation speed
			disableHI: false,				// set to true to disable hoverIntent detection // default = false
		});
	}

	/*** Responsive Navigation ***/

	$( '.menu-toggle' ).click( function() {
		$( this ).parent().children( '.wrap, .menu-items' ).slideToggle();
		$( this ).toggleClass( 'active' );
	});

	/*** Responsive Videos : Target your .container, .wrapper, .post, etc. ***/

	if (jQuery.fn.fitVids)
		$("#content").fitVids();

});