/* 
Kelly-Ann Hughes website scripts 

*/

// jQuery.noConflict();

// add js enabled class
	document.documentElement.className = 'js-enabled';

jQuery(document).ready(function($) {

	// about show/hide
	$('#about_toggle').click(function() {
	
		if ($('#about').css('opacity') == 0) {
	
			$('#info_wrapper').slideDown(function(){
				$('#clients, #contact').css('visibility','hidden').animate({opacity: 0}, 300);
				$('#about').css('visibility','visible').animate({opacity: 1}, 300);
			});
		
		} else {

			$('#about').animate({opacity: 0}, 300, function() {
				$(this).css('visibility', 'hidden');
				$('#info_wrapper').slideUp();
				$('#clients, #contact').css({'visibility': 'hidden', 'opacity': 0});
			});		
		}
				
	});

	// clients show/hide
	$('#clients_toggle').click(function() {
	
		if ($('#clients').css('opacity') == 0) {
	
			$('#info_wrapper').slideDown(function(){
				$('#about, #contact').css('visibility','hidden').animate({opacity: 0}, 300);
				$('#clients').css('visibility','visible').animate({opacity: 1}, 300);
			});
		
		} else {

			$('#clients').animate({opacity: 0}, 300, function() {
				$(this).css('visibility', 'hidden');
				$('#info_wrapper').slideUp();
				$('#about, #contact').css({'visibility': 'hidden', 'opacity': 0});
			});		
		}
				
	});
	
	// contact show/hide
	$('#contact_toggle').click(function() {
	
		if ($('#contact').css('opacity') == 0) {
	
			$('#info_wrapper').slideDown(function(){
				$('#about, #clients').css('visibility','hidden').animate({opacity: 0}, 300);
				$('#contact').css('visibility','visible').animate({opacity: 1}, 300);
			});
		
		} else {

			$('#contact').animate({opacity: 0}, 300, function() {
				$(this).css('visibility', 'hidden');
				$('#info_wrapper').slideUp();
				$('#about, #clients').css({'visibility': 'hidden', 'opacity': 0});
			});		
		}
				
	});

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






















