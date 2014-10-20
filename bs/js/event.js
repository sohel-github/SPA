$(document).ready(function(){
	
	$('.carousel').carousel({
	    interval: 4000
	})

	$('.link').click(function(){
		var desc = $(this).attr('href');
		$('html, body').animate({
        	scrollTop: $(desc).offset().top
    	}, 1000);
		return false;
	});
	
});