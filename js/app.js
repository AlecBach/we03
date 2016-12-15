$(document).foundation()
$('.burger-cont').on('click', function(){
	$('.burger-menu').slideToggle();
	$('.nav').slideToggle();
})

// Set max width of nav to ensure perfect overflow collapsing. Jesus that took longer than expected.
var headerWidth = 0;
var integerRemove = 50;
var loggedIn = false;
var totalWidth = 0;
$(document).ready(function(){
	$('.nav-item').each(function(i){
		var width = $(this).outerWidth(true);
		console.log(width);
		totalWidth += width;
		console.log(totalWidth);
	})
	if (totalWidth < 748){
		loggedIn = false;
	} else{
		loggedIn = true;
	}
	console.log(loggedIn);
	if (loggedIn){
		if ($(window).outerWidth() < 1137) {
			$('.burgerOuter').removeClass('hide');
			integerRemove = 100;

		}else{
			$('.burgerOuter').addClass('hide');
			integerRemove = 40;
			$('.burger-menu').slideUp();
			$('.nav').slideDown();
		}
	}else{
		if ($(window).outerWidth() < 959) {
			$('.burgerOuter').removeClass('hide');
			integerRemove = 100;

		}else{
			$('.burgerOuter').addClass('hide');
			integerRemove = 40;
			$('.burger-menu').slideUp();
			$('.nav').slideDown();
		}
	}
	
	var headerWidth = $('#header-text').outerWidth(true);
	var fullWidth = $('#nav-container').innerWidth();
	var navWidth = fullWidth - headerWidth - integerRemove;
	$('.nav').css({"max-width": navWidth});
	$(window).resize(function(){
		if (loggedIn){
			if ($(window).outerWidth() < 1137) {
				$('.burgerOuter').removeClass('hide');
				integerRemove = 100;

			}else{
				$('.burgerOuter').addClass('hide');
				integerRemove = 40;
				$('.burger-menu').slideUp();
				$('.nav').slideDown();
			}
		}else{
			if ($(window).outerWidth() < 959) {
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
	})
})
