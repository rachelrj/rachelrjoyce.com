$(document).ready(addScrollAnimationForAnchors);
$(document).ready(addScrollAnimationForLogos);
$(document).ready(addToggleEventForThreeBar);
$(document).ready(hideMobileNavigationOnWindowResize);
$(document).ready(hideMobileNavigationIfUserClicksOutside);

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
		$('.mobilenav').slideToggle("slow");   
	});	
};

function hideMobileNavigationOnWindowResize(){
	console.log("hideMobileNavigationOnWindowResize");
	$( window ).resize(function() {
		$( ".mobilenav" ).hide();
	});	
};

function hideMobileNavigationIfUserClicksOutside() {
	$(document).bind('click', function(e) {
		if(e.target.id !== "threebar" && e.target.className !== "bar") {
			if( $(".mobilenav").css('display') !== "none"){
				$('.mobilenav').slideToggle("slow");
			}
		}
	});
};