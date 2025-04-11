/* Nav Slider */ 

$(window).on('load', function() {
	$('.nav_slide_button').click(function() {
		$('.pull').slideToggle();
	});
});

document.querySelector("#nav-toggle").addEventListener("click", function() {
	this.classList.toggle("active");
});

/* Animate icons */

$(function() {
	$('a[href*="#"]:not([href="#"])').click(function() {
		if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				$('html,body').animate({
					scrollTop: target.offset().top - 125
				}, 1000);
				return false;
			}
		}
	});
});

