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
	var pageId = $("#pageId").html();
	console.log()
	$('.nav-item').each(function(i){
		var width = $(this).outerWidth(true);
		totalWidth += width;
	})
	if (totalWidth < 748){
		loggedIn = false;
	} else{
		loggedIn = true;
	}
	positionHeroText();
	setNavBar();
	removeWordsIfSmall();
	positionLatestText();
	sizing();
	$(window).resize(function(){
		positionHeroText();
		setNavBar();
		removeWordsIfSmall();
		positionLatestText();
		sizing();
	})
})
function sizing(){
	var header = $('.top-nav-bar').outerHeight();
	var footer = $('#footer').outerHeight();
	var windowH = $(window).innerHeight();
	windowH = windowH - (header + footer);
	console.log(header +" and "+footer+" and "+windowH);
	$('#content').css({"min-height":windowH+"px"});
}
function positionLatestText(){
	if (pageId == "home") {
		var parentHeight = $('#latest-work').innerHeight();
		var	textHeight = parseInt($('#latest-work .padding-vert-med').css("padding-top").slice(0, -2)) * 2;
		textHeight = $('#latest-work .padding-vert-med').innerHeight() - textHeight;
		var	divHeight = textHeight + 20;
		var margin = parentHeight / 2 - textHeight / 2;
		margin = margin - 10;
		$('#darken-clarity').css({
								"height":divHeight+"px",
								"margin-top":margin+"px"
								 })
	}
}
function removeWordsIfSmall(){
	if ($('#footer .hide-for-small-only').innerWidth() < 272){
		$('#footer .hide-for-small-only span').html('WORLD CLASS');
	}
	else {
		$('#footer .hide-for-small-only span').html('WORLD CLASS, LOCALLY');
	}
}
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
	//console.log("(" + $(textBox).outerHeight() + " / 2 = " + textOffset + ") - (" + $('.home-hero-cont').outerHeight() + " / 2 = " + contMiddle + ") = " + margin);
	$(textBox).css({"margin-top": margin+"px"});
}