(function($) {

$(document).ready(function() {
	
	var $slick = $('.hero-img-slider-container');
	console.log($slick);

	$slick.slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: false,
		autoplaySpeed: 6000,
		infinite: true,
		speed: 3000,
		arrows: false,
		draggable: false,
		swipe: false,
		dots: true,
	})
})
	







}(jQuery));