
jQuery(function ($) {

// console.log('test');
$('#header-overlay-text').fitText(1.5);
$('#header-overlay-text2').fitText(1.5);
// $('#home-title').fitText(1);
$('.header-phone').fitText(2);
$('.header-phone-bars').fitText();

$('.location-item').hover(
		function(){$( this ).find( "ul " ).toggleClass('hidden');});

});
