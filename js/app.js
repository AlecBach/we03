$(document).foundation()
$('.burger-cont').on('click', function(){
	$('.burger-menu').slideToggle();
	$('.nav').slideToggle();
})

// Set max width of nav to ensure perfect overflow collapsing, set hero text position(margin) if on homepage.
// var headerWidth = 0;
var integerRemove = 50;
var loggedIn = false;
var totalWidth = 0;
$(document).ready(function(){
	$('.nav-item').each(function(i){
		var width = $(this).outerWidth(true);
		totalWidth += width;
	})
	if (totalWidth < 748){
		loggedIn = false;
	} else{
		loggedIn = true;
	}
	
	//console.log('this is broken?:'+headerWidth);
	positionHeroText();
	setNavBar();
	// if (loggedIn){
	// 	if ($(window).outerWidth() < 1137) {
	// 		$('.burgerOuter').removeClass('hide');
	// 		integerRemove = 100;

	// 	}else{
	// 		$('.burgerOuter').addClass('hide');
	// 		integerRemove = 40;
	// 		$('.burger-menu').slideUp();
	// 		$('.nav').slideDown();
	// 	}
	// }else{
	// 	if ($(window).outerWidth() < 959) {
	// 		$('.burgerOuter').removeClass('hide');
	// 		integerRemove = 100;

	// 	}else{
	// 		$('.burgerOuter').addClass('hide');
	// 		integerRemove = 40;
	// 		$('.burger-menu').slideUp();
	// 		$('.nav').slideDown();
	// 	}
	// }
	// var fullWidth = $('#nav-container').innerWidth();
	// var navWidth = fullWidth - headerWidth - integerRemove;
	// $('.nav').css({"max-width": navWidth});
	$(window).resize(function(){
		positionHeroText();
		setNavBar();
		// if (loggedIn){
		// 	if ($(window).outerWidth() < 1137) {
		// 		$('.burgerOuter').removeClass('hide');
		// 		integerRemove = 100;

		// 	}else{
		// 		$('.burgerOuter').addClass('hide');
		// 		integerRemove = 40;
		// 		$('.burger-menu').slideUp();
		// 		$('.nav').slideDown();
		// 	}
		// }else{
		// 	if ($(window).outerWidth() < 959) {
		// 		$('.burgerOuter').removeClass('hide');
		// 		integerRemove = 100;

		// 	}else{
		// 		$('.burgerOuter').addClass('hide');
		// 		integerRemove = 40;
		// 		$('.burger-menu').slideUp();
		// 		$('.nav').slideDown();
		// 	}
		// }
		// var fullWidth = $('#nav-container').innerWidth();
		// var navWidth = fullWidth - headerWidth - integerRemove;
		// $('.nav').css({"max-width": navWidth});
		
	})
})
function setNavBar(){
	var	windowWidth = $(window).outerWidth();
	var headerWidth = $('#header-text').outerWidth(true);
	if (loggedIn){
		if (windowWidth < 1137) {
			$('.burgerOuter').removeClass('hide');
			integerRemove = 100;

		}else{
			$('.burgerOuter').addClass('hide');
			integerRemove = 40;
			$('.burger-menu').slideUp();
			$('.nav').slideDown();
		}
	}else{
		if (windowWidth < 966) {
			$('.burgerOuter').removeClass('hide');
			integerRemove = 100;

		}else{
			$('.burgerOuter').addClass('hide');
			integerRemove = 40;
			$('.burger-menu').slideUp();
			$('.nav').slideDown();
		}
	}
	var fullWidth = $('#nav-container').innerWidth();
	var navWidth = fullWidth - headerWidth - integerRemove;
	$('.nav').css({"max-width": navWidth});
}
function positionHeroText(){
	var textBox = $('.home-hero-text');
	var	textOffset = $(textBox).outerHeight() / 2;
	var	contMiddle = $('.home-hero-cont').outerHeight() / 2;
	var margin = contMiddle - textOffset;
	console.log("(" + $(textBox).outerHeight() + " / 2 = " + textOffset + ") - (" + $('.home-hero-cont').outerHeight() + " / 2 = " + contMiddle + ") = " + margin);
	$(textBox).css({"margin-top": margin+"px"});
}