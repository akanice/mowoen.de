$(window).scroll(function() {	
	// Sticky header
	var windowWidth = window.innerWidth || $(window).width();
	header_one = $("header.page-header");
	if (windowWidth >= 992) {
		if ($(".page-wrapper").outerHeight() > $(window).innerHeight() + 300 && $(window).scrollTop() > 200) {
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

});