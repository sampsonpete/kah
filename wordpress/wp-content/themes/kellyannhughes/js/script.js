/* 
Kelly-Ann Hughes website scripts 

*/

// add js enabled class
document.documentElement.className = 'js-enabled';

$(document).ready(function() {

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

var options = {
    mode: 'outside',
    force: 'true',
    halign: 'center',
    valign: 'top'
};

$(window).load(function() {
    $('div.homepage_slideshow').imagefit(options);
});

$(window).resize(function() {
    $('div.homepage_slideshow').imagefit(options);
});






















