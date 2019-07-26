/**
 *	Custom jQuery Scripts
 *
 */			
			
$(window).load(function() {

	// front page slider 
	$('.flexslider').flexslider({
		animation: "slide",
		// direction: "vertical",
		// itemHeight: 384,
		slideshowSpeed: 7000
	}); // end register flexslider

	// front page slider 
	$('.flexslider2').flexslider({
		animation: "fade",
		slideshowSpeed: 7000,
    itemHeight: 294,
    itemMargin: 5
	}); // end register flexslider

//Sink Control Navs
    $('#slider-next').click(function(){
        $('.flexslider .flex-next').trigger('click');
        $('.flexslider2 .flex-next').trigger('click');
    });

    $('#slider-prev').click(function(){
        $('.flexslider .flex-prev').trigger('click');
        $('.flexslider2 .flex-prev').trigger('click');
    })




/*
		FAQ dropdowns
__________________________________________
*/


$('.question').click(function() {
 
    $(this).next('.answer').slideToggle(500);
    $(this).toggleClass('close');
 
});

$('.toggle').click(function() {
 
    $(this).next('ul.mobile-listings').slideToggle(500);
    $(this).toggleClass('close');
 
});
	// Equal heights divs
	$('.blocks').matchHeight();
	/*var byRow = $('body').hasClass('test-rows');
		$('.blocks-container').each(function() {
		 $(this).children('.blocks').matchHeight({
			   byRow: byRow
		//property: 'min-height'
		});
	});*/

});// END #####################################    END