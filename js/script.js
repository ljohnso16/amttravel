
jQuery(function ($) {

// console.log('test');
$('#header-overlay-text').fitText(1.5);
$('#header-overlay-text2').fitText(1.5);
// $('#home-title').fitText(1);
$('.header-phone').fitText(2);
$('.header-phone-bars').fitText();
        $('.reg-widg').hover(
						function(){
				      $( this ).find( ".caption " ).fadeIn(300);
						},
						function(){
							$( this ).find( ".caption " ).fadeOut(300);
						}
					);

});
