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
var pageId = '';
var windowH = 0;
var formH = 0;

$(document).ready(function(){
	pageId = $("#pageId").text();
	console.log(pageId);
	$('.nav-item').each(function(i){
		var width = $(this).outerWidth(true);
		totalWidth += width;
	});
	if (totalWidth < 748){
		loggedIn = false;
	} else{
		loggedIn = true;
	};
	sizing();
	positioning();
	positionHeroText();
	setNavBar();
	removeWordsIfSmall();
	positionLatestText();
	slideErrorText()
	$(window).resize(function(){
		sizing();
		positioning();
		positionHeroText();
		setNavBar();
		removeWordsIfSmall();
		positionLatestText();
		slideErrorText()
	})
})
function sizing(){
	var header = $('.top-nav-bar').outerHeight();
	var footer = $('#footer').outerHeight();
	windowH = $(window).innerHeight();
	windowH = windowH - (header + footer);
	$('#content').css({"min-height":windowH+"px"});
}
function positioning() {
	switch (pageId){
		case 'login':
		case 'register':
		case 'forgot':
			var	form = $('#loginForm');
			formH = $(form).innerHeight();
			var minFormH = formH + 20;
			if (minFormH > windowH){
				$('#content').css({"min-height":minFormH+"px"});
				$(form).css({"margin-top": "40px","margin-bottom": "40px"});
			}
			var topMargin = windowH / 2 - formH / 2;
			if (topMargin < 0) {}else {
				$(form).css({"margin-top": topMargin+"px","margin-bottom": topMargin+"px"});
				$(form).css({"transition": "margin-top 0.4s ease-in-out"});
			}
			break;
	}
}
function positionOnSlide() {
	switch (pageId){
		case 'login':
			var	form = $('#loginForm');
			formH = $(form).innerHeight();
			console.log($('#emailHelpText').css("display"));
			var adjustment = 0;
			if ($('#emailHelpText').css("display") === "none"){
				adjustment += 28;
				console.log("2");
				console.log("email text is present= " + adjustment);
			}else{
				adjustment -= 28;
			};
			if ($('#passwordHelpText').css("display") === "none"){
				adjustment += 28;
				console.log("3");
				console.log("password text is present= " + adjustment);
			}else{
				adjustment -= 28;
			};
			formH += adjustment;
			var topMargin = windowH / 2 - formH / 2;
			console.log("4");
			if (topMargin < 0) {}else {
				console.log("5");
				$(form).css({"margin-top": topMargin+"px"});
				$(form).css({"transition": "margin-top 0.8s ease-in-out"});
			};
			break;
		case 'register':

	}
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

function slideErrorText(){
	if(pageId == "login" || pageId == "register"){
		$('form p').each(function(){
			//var thisId = $(this).attr('id').slice(0, -8);
			if (!$(this).html()==""){
				$(this).slideDown();
			}
		});
	}
	
}


$('#loginForm #submitButton').on('click', function(){
	$('#loginForm').submit();
	positionOnSlide();
	$('.help-text').slideToggle();
	
})