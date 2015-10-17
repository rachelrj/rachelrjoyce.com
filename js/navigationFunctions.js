$(document).ready(addScrollAnimationForAnchors);
$(document).ready(addScrollAnimationForLogos);
$(document).ready(addToggleEventForThreeBar);
$(document).ready(hideMobileNavigationOnWindowResize);
$(document).ready(hideMobileNavigationIfUserClicksOutside);
$(document).ready(addPrettyBorders);

function addScrollAnimationForAnchors(){
	$('.navigationLink').click(function(event){
	    $('html, body').animate({
	        scrollTop: $( $.attr(this, 'href') ).offset().top
	    }, 500);
	    return false;
	});
};

function addScrollAnimationForLogos(){
	$('#logo').click(function(event){
	    $('html, body').animate({
	        scrollTop: 0
	    }, 500);
	    return false;
	});
};

function addToggleEventForThreeBar(){
	$('#threebar').click(function(event){
		$('#threebar').toggleClass( "active" );
		$('.mobilenav').slideToggle("slow");   
	});	
};

function hideMobileNavigationOnWindowResize(){
	$( window ).resize(function() {
		$( ".mobilenav" ).hide();
	});	
};

function hideMobileNavigationIfUserClicksOutside() {
	$(document).bind('click', function(e) {
		if(e.target.id !== "threebar" && e.target.id !== "bars") {
			if( $(".mobilenav").css('display') !== "none"){
				$('.mobilenav').slideToggle("slow");
			}
		}
	});
};

function addPrettyBorders() {
	var navItems = $('.mobilenav').children('a').each(function(i) {
		var transparency = 0.8 - (0.2 * i);
		var borderCSS = "1px solid rgba(97, 51, 47, " + transparency.toString() + ")";
		$(this).css({"border-top": borderCSS});
	});
};