(function($) {

$(document).ready(function() {
	
	var $slick = $('.hero-img-slider-container');
	

	$slick.slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 6000,
		infinite: true,
		speed: 3000,
		arrows: false,
		draggable: false,
		swipe: false,
		dots: true,
		fade: true
	})
})
	







}(jQuery));