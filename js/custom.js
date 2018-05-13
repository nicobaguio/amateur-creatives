var typed = new Typed(".typed", {
	strings: [
		"an art explorer. ",
		"a memory-keeper. ",
		"a digital designer. ",
		"an aspiring teacher. ",
		"an amateur creative. "
	],
	typeSpeed: 48,
});


$(window).ready(function() {
	viewport_height = $(window).width();
	if (viewport_height <= 425) {
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
