window.onload = function() {
$(window).preloader({
        delay: 1500
    });};

$( document ).ready(function() {
 


$( ".mobile-menu-btn" ).click(function() {
  $( "#nav-menu" ).slideToggle();
});


$('#slider').owlCarousel({

      loop:true,
      animateOut: 'fadeOut' ,
      autoplay : true,
      autoplayTimeout : 1000,
      autoplayHoverPause : true ,
	    singleItem:true
		    
		})



//Scroll Based Animation	
var $animation_elements = $('.animation-element');
var $window = $(window);

function check_if_in_view() {


var window_height = $window.height();
var window_top_position = $window.scrollTop();
var window_bottom_position = (window_top_position + window_height);

$.each($animation_elements , function(){
	var $element = $(this);
	var element_height = $element.outerHeight();
	var element_top_position = $element.offset().top;
	var element_bottom_position = (element_top_position + element_height);

	//check
	if ((element_bottom_position + 200 >= window_top_position) && (element_top_position + 200 <= window_bottom_position) ) {

		$element.addClass('in-view');

	} else {

		//$element.removeClass('in-view');

	}
});
}
$window.on('scroll resize' , check_if_in_view);
$window.trigger('scroll');

//End Scroll Based Animation
$(window).on('scroll resize' , check_if_in_view);
$(window).trigger('scroll');

$(function(){
    var hasBeenTrigged = false;
    $(window).scroll(function() {
        if ($(this).scrollTop() >= 100) { // if scroll is greater/equal then 100 and hasBeenTrigged is set to false.
            $("#nav-main").addClass("nav-scroll");
            hasBeenTrigged = true;
        } else {
            $("#nav-main").removeClass("nav-scroll");

        }
    });
});


 // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top -92
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });





});

//Scroll Based Animation	
var $animation_elements = $('.animation-element');
var $window = $(window);

function check_if_in_view() {


var window_height = $window.height();
var window_top_position = $window.scrollTop();
var window_bottom_position = (window_top_position + window_height);

$.each($animation_elements , function(){
	var $element = $(this);
	var element_height = $element.outerHeight();
	var element_top_position = $element.offset().top;
	var element_bottom_position = (element_top_position + element_height);

	//check
	if ((element_bottom_position + 100 >= window_top_position) && (element_top_position + 100 <= window_bottom_position) ) {

		$element.addClass('in-view');

	} else {

		//$element.removeClass('in-view');

	}

});
}


//End Scroll Based Animation