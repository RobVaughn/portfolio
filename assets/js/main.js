var DEBUG = false;
var ALERTS = false;

/* Hide vertical/mobile menu after click */

function toggleMenu() {
  if ($('#top').attr("class") === "show-menu") {
    $('#top').removeClass("show-menu");
  } else {
    $('#top').addClass("show-menu");
  }
};

/* Resize / Hide VCard */

$(function() {
		$('#enlarge').on('click', function () {
				var size = $(this).height();
				if (size < 200) {
						$(this).height(size * 3);
						$(this).width(size * 3);
						$(this).css({ 'left': '-0.5rem' });
						$('#hide-on-enlarge').hide();
				} else {
						$(this).height(size / 3);
						$(this).width(size / 3);
						$(this).css({ 'top': '0', 'left': '0.5rem' });
						$('#hide-on-enlarge').show();
				}
		});
});

$(window).on('load resize', function() {
		if ($(window).width() < 992) {
				$('.hide-on-phone').hide();
		} else {
				$('.hide-on-phone').show();
		}
		$('.wider-on-phone').each(function() {
				if ($(window).width() < 992) {
						$(this).addClass("col-6");
						$(this).removeClass("col-4");
				} else {
						$(this).removeClass("col-6");
						$(this).addClass("col-4");
				}
		});
});

/* Debug Horizontal Overflow */

if (DEBUG) {
		var count = 1;
		var docWidth = document.documentElement.offsetWidth;
		var msg = "docWidth=" + docWidth;
		console.log(msg);
		if (ALERTS) alert(msg);

		[].forEach.call(
				document.querySelectorAll('*'),
				function(el) {
						if (el.offsetWidth > docWidth) {
								msg = "Width: " + el.offsetWidth + " overflowed: " + el.outerHTML;
								console.log(msg);
								// First couple for mobile device debugging
								if (ALERTS && count < 3) {
										alert(msg);
										count++;
								}
						}

      var TOP_BOTTOM = false;
      var rect = el.getBoundingClientRect();
      if ((rect.x + rect.width) < 0) {
        msg = "Element offscreen left: " + el.outerHTML;
      } else if ((rect.y + rect.height) < 0 && TOP_BOTTOM) {
        msg = "Element offscreen top: " + el.outerHTML;
      } else if (rect.x > window.innerWidth) {
        msg = "Element offscreen right: " + el.outerHTML + " > " + el.previousSibling.innerHTML;
      } else if (rect.y > window.innerHeight && TOP_BOTTOM) {
        msg = "Element offscreen bottom: " + el.outerHTML;
      }
						console.log(msg);
				}
		);
}

/* Preloader Icon */

$(window).on('load', function(){
		$('#preloader').fadeOut('slow',function(){$(this).remove();});
});

/* Alternating Portfolio Sections */

// Triggered when window is loaded or resized, swap if screen size is 992px or larger
$(window).on('load resize', function() {
		$('.flex').each(function() {
				var div1 = $(this).children('.flex-a');
				var div2 = $(this).children('.flex-b');
				if ($(window).width() > 992) {
						$(this).prepend(div1).append(div2);
    } else {
						$(this).prepend(div2).append(div1);
    }
		});
});

/* Learn More Page Scroll */

$(function() {
  $('a.page-scroll').bind('click', function(event) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: $($anchor.attr('href')).offset().top
    }, 1500, 'easeInOutExpo');
    event.preventDefault();
  });
});
