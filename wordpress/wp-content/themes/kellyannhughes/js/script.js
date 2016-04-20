/* 
Kelly-Ann Hughes website scripts 

*/

// jQuery.noConflict();

// add js enabled class
	document.documentElement.className = 'js-enabled';

jQuery(document).ready(function($) {

	// image slideshow
	$('div.project_images').each(function() {
	
		var nav = $(this).parent().find('div.project_nav');

		$(this)
		.cycle({
			timeout: 0,
			speed: 300,
			pager: nav,
			next: this
		});
	
	});
	
	// hide default title tooltips from images
	$('img').attr('title', '');
	
});






















