// JavaScript Document
$(document).ready(function(){

////*top stories*/
	$('.bxslider').bxSlider({
auto: true,
  autoControls: false,
		pause: 4000,
		autoStart: true,
		autoDirection: 'next',
		autoHover: false,
		autoDelay: 0,
		  autoHover: true,
		  controls: false
});
	
///*Deals*///	
	$('.bxslider_1').bxSlider({
		auto: true,
		pause: 3000,
		autoStart: true,
  minSlides: 3,
  maxSlides: 4,
  slideWidth: 170,
  slideMargin: 10,
  autoDelay: 0,
   autoHover: true,
    controls: false
  });	
	
/// health & wealth slider///
$('.health_slider').bxSlider({
auto: true,

		pause: 4000,
		autoStart: true,
		autoDirection: 'next',
		autoHover: false,
		autoDelay: 0,
		pager:false
		 
});	
	
	
	
	});