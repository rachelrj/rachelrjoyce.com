var carouselInverval;
var speed = 5000;
var carouselWidth;
var carouselHeight;
var left_indent;
var numSlides;

function startCarousel() {
    carouselInverval = setInterval(rotateForward, speed);
}

function restartInterval() {
    clearInterval(carouselInverval);
    carouselInverval = setInterval(rotateForward, speed);
}

function rotateForward(event) {
    if(typeof(event) !== "undefined"){
        event.stopPropagation();
    }
    moveFirstImagetoEnd();
}

function rotateBackward(event) {
    if(typeof(event) !== "undefined") {
        event.stopPropagation();
    }
    moveLastImagetoFirst();
}

$(document).ready(function() {
    startCarousel();
    carouselWidth = $('#slides ul').width();
    carouselHeight = $('#slides ul').height();
    left_indent = carouselWidth * (-1);
    numSlides = $('#carouselList').children().length;
    $('#arrow-right').click(function(event){
        rotateForward(event);
    });
    $('#arrow-left').click(function(event){
        rotateBackward(event);
    });
    document.addEventListener('swipeleft', rotateForward);
    document.addEventListener('swiperight', rotateBackward);
    addHoverEvent();
});

var handleCarouselSwipe = function (e, $target, data) {
    console.log(data);
};
$('#carouselList').bind('touchy-swipe', handleCarouselSwipe);

function moveFirstImagetoEnd() {
    restartInterval();
        var carouselList = $('#carouselList > li');
        var secondListItem = $('#carouselList li:nth-child(2)');
        var secondListItemNewHeight = carouselHeight * (-1);
        secondListItem.css({'top' : secondListItemNewHeight, 'left' : carouselWidth});
        $(function () {
            carouselList.first().animate({'left' : left_indent}, { duration: 500, queue: false, 
                complete: function(){
                    carouselList.last().after(carouselList.first());
                    carouselList.first().css({'top' : 0, 'left' : 0});
                    secondListItem.css({'top' : 0, 'left' : 0});
                }
            });
            secondListItem.animate({'left' : 0}, { duration: 500, queue: false });
        });
};

function moveLastImagetoFirst() {
    restartInterval();
        var carouselList = $('#carouselList > li');
        var lastListItem = carouselList.last();
        var lastListItemNewHeight = carouselHeight * (-1) * (numSlides-1);
        lastListItem.css({'top' : lastListItemNewHeight, 'left' : left_indent});
        $(function () {
            carouselList.first().animate({'left' : carouselWidth}, { duration: 500, queue: false, 
                complete: function(){
                    carouselList.first().before(carouselList.last());
                    carouselList.first().css({'top' : 0, 'left' : 0});
                    carouselList.last().css({'top' : 0, 'left' : 0});
                }
            });
            lastListItem.animate({'left' : 0}, { duration: 500, queue: false });
        });
};                    

function addHoverEvent() {
    $('#carouselList').hover(
        
        function() {
            clearInterval(carouselInverval);
        }, 
        function() {
            carouselInverval = setInterval(rotateForward, speed);    
        }
    ); 
}