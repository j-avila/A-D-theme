$(window).load(function(){


	$('.user-log').click(function(){
		
		$('.login').fadeToggle('slow');
	});

	$('.close').click(function(){
		$('.login').fadeOut('slow');
	});


	///mi cuenta contenido
	var usuario = $('body').hasClass('user-logged');
	if(usuario == false){
		$('.logged').show();
	}
	else{
		$('.not-user').hide();
	}

});