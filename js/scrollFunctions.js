$(document).ready(addScrollAnimationForAnchors);
$(document).ready(addScrollAnimationForLogos);

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