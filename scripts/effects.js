$(window).load(function(){


	$('.user-log').click(function(){
		
		$('.login').fadeToggle('slow');
	});

	$('.close').click(function(){
		$('.login').fadeOut('slow');
	});

});