$(window).scrollTop();

$(window).ready(function() {
	vw_width = $(window).width();
	if (vw_width <= 767.99) {
		$(".card-deck").addClass('main-carousel').removeClass('card-deck')	
		$(".card").addClass('carousel-cell')
		$(".main-carousel").flickity({
			cellAlign: 'left',
			contain: true,
			prevNextButtons: false,
		})
	};
});

$(document).ready( function() {
	$('#primary-menu-button, #page-overlay').on('click', function () {
		$('#primary-menu-button').toggleClass('active');
		$('#primary-menu').toggleClass('reveal');
		$('#page-overlay').toggleClass('reveal');
	});
});

$(window).on('load', function() {
	console.log('Loaded');
	$('#loader').addClass('loaded');
	$('#loader-container').addClass('loading');
	$('.container-fluid').removeClass('loading');
	// $('#loader-container').addClass('loaded');
});