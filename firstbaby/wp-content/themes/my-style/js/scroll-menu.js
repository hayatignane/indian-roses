if (window.matchMedia('(min-width: 800px)').matches) {
	jQuery(window).on("scroll",function() {
	  if (jQuery(this).scrollTop() > 0) {
		jQuery('#grid-top').slideUp(500);
		} else {
		jQuery('#grid-top').slideDown(500);
	  }
	});
}