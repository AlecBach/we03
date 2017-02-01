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
	console.log("We are on the "+pageId+" page.");
	$('.nav-item').each(function(i){
		var width = $(this).outerWidth(true);
		totalWidth += width;
	});
	if (totalWidth < 748){
		loggedIn = false;
	} else{
		loggedIn = true;
	};
	contentSizing();
	positioning();
	positionHeroText();
	setNavBar();
	removeWordsIfSmall();
	positionLatestText();
	slideErrorText()
	setTimeout(function () {
	    contentSizing();
	}, 500);
	$(window).resize(function(){
		contentSizing();
		positioning();
		positionHeroText();
		setNavBar();
		removeWordsIfSmall();
		positionLatestText();
		slideErrorText()
		setTimeout(function () {
	        contentSizing();
	    }, 500);
	})
})
function contentSizing(){
	// var header = $('.top-nav-bar').outerHeight();
	var header = 53;
	var footer = $('#footer').outerHeight();
	windowH = $(window).innerHeight();
	var oldH = windowH;
	windowH = windowH - (header + footer);
	$('#content').css({"min-height":windowH+"px"});
	// console.log(oldH+" - ( "+header+" + "+footer+" ) = "+windowH);

}
function positioning() {
	switch (pageId){
		case 'login':
		case 'register':
		case 'forceLogin':
		case 'deleteAccount':
		case 'editAccount':
		case 'editPass':
		case 'blogForm':
		case 'logout':
		case 'forgot':
			var	form = $('#loginForm');
			formH = $(form).innerHeight();
			var minFormH = formH + 20;
			console.log('in function');
			if (minFormH > windowH){
				$('#content').css({"min-height":minFormH+"px"});
				$(form).css({"margin-top": "40px","margin-bottom": "40px"});
			}
			var topMargin = windowH / 2 - formH / 2;
			console.log(topMargin);
			if (topMargin < 40) {
				$(form).css({"margin-top": "40px","margin-bottom": "40px"});
				$(form).css({"transition": "margin-top 0.4s ease-in-out"});
			}else {
				$(form).css({"margin-top": topMargin+"px","margin-bottom": topMargin+"px"});
				$(form).css({"transition": "margin-top 0.4s ease-in-out"});
			}
			console.log('end function');
			break;
		case 'account':
			// console.log("hello");
			$('.centerText').each(function(){
				verticleCenter({child:this,parent:1});
			});
			$('#content>.row>.columns').each(function(){
				verticleCenter({child:this,parent:2});
			})
			break;
		case 'blog':
			$('.admin-text .fa').each(function(){
				verticleCenter({child:this,parent:2});
			})
			$('.admin-text #close').one('click', function(){
				$('.admin-text').slideUp();
				$('.admin-text').parent().slideUp();
			})
			break;
	}
}
function verticleCenter(info){
	var childHeight = $(info.child).innerHeight();
	var parent = $(info.child);
	for (var i = 0; i < info.parent; i++){
		parent = $(parent).parent();
	}
	var parentHeight = $(parent).innerHeight();
	var margin = parentHeight / 2 - childHeight / 2;
	$(info.child).css({"margin-top": margin+"px", "margin-bottom": margin+"px"});
}
function positionOnSlide() {
	switch (pageId){
		case 'login':
			var	form = $('#loginForm');
			formH = $(form).innerHeight();
			// console.log($('#emailHelpText').css("display"));
			var adjustment = 0;
			if ($('#emailHelpText').css("display") === "none"){
				adjustment += 28;
				// console.log("2");
				// console.log("email text is present= " + adjustment);
			}else{
				adjustment -= 28;
			};
			if ($('#passwordHelpText').css("display") === "none"){
				adjustment += 28;
				// console.log("3");
				// console.log("password text is present= " + adjustment);
			}else{
				adjustment -= 28;
			};
			formH += adjustment;
			var topMargin = windowH / 2 - formH / 2;
			// console.log("4");
			if (topMargin < 0) {}else {
				// console.log("5");
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
		if (windowWidth < 1196) {
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
	// console.log("(" + $(textBox).outerHeight() + " / 2 = " + textOffset + ") - (" + $('.home-hero-cont').outerHeight() + " / 2 = " + contMiddle + ") = " + margin);
	$(textBox).css({"margin-top": margin+"px"});
}

function slideErrorText(){
	if(pageId == "login" || "register" || "editAccount" || "deleteAccount" || "editPass"){
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