$(window).load(function(){


	$('.user-log').click(function(){
		
		$('.login').fadeToggle('slow');
	});

	$('.close').click(function(){
		$('.login').fadeOut('slow');
	});


	///mi cuenta contenido
	var usuario = $('body').hasClass('user-logged');

	if(usuario){
		$('.logged').show();
		$('.not-user').hide();
	}
	else{
		$('.logged').hide();
		$('.not-user').show();
		
	}

});