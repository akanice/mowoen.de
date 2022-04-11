$(window).scroll(function() {	
	// Sticky header
	var windowWidth = window.innerWidth || $(window).width();
	header_one = $("header .menu-header");
	if (windowWidth >= 992) {
		if ($("body").outerHeight() > $(window).innerHeight() + 300 && $(window).scrollTop() > 200) {
			$(header_one).addClass("boutique-header_sticky");
		} else if ($(window).scrollTop() <= 200) {
			$(header_one).removeClass("boutique-header_sticky");
		}
	}
});

	
$(document).ready(function () {	
	//smooth scroll to anchor
	$(".scroll").click(function(event){
		event.preventDefault();
		//calculate destination place
		var dest=0;
		if($(this.hash).offset().top > $(document).height()-$(window).height()){
			dest=$(document).height()-$(window).height()-100;
		}else{
			dest=$(this.hash).offset().top-100;
		}
	//go to destination
	$('html,body').animate({scrollTop:dest}, 1000,'swing');
	});

	// Slick
	$('.slide-6').slick({
        dots: false,
		autoplay: true,
		autoplaySpeed: 3000,
		arrows: true,
		infinite: false,
		speed: 300,
		slidesToShow: 5,
		slidesToScroll: 1,
		responsive: [
			{
			breakpoint: 1024,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 1,
					infinite: true,
					dots: true
				}
			},
			{
			breakpoint: 600,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1
				}
			},
			{
			breakpoint: 480,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
					arrows: false,
				}
			}
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
		]
    });
});

$(function(){
	// bind change event to select
	$('#dynamic_select').on('change', function () {
		var url = $(this).val(); // get selected value
		if (url) { // require a URL
			window.location = url; // redirect
		}
		return false;
	});
});