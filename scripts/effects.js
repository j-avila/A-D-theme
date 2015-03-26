// effectos de la pagina 

$(document).ready(function(){

	$('.user-log').click(function(){
		$('.login').fadeToffle('slow');
	});

	$('.close').click(function(){
		$('.login').fadeOut('slow');
	});

});