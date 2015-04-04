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


//toogle menu

$(window).load(function(){
	$("[data-toggle]").click(function() {
	  var toggle_el = $(this).data("toggle");
	  $(toggle_el).toggleClass("open-sidebar");
	  $('.burger').toggleClass('burger-on');
	  $('body').toggleClass('lock-body');
	  $('.swipe-area').toggleClass('swipe-on');
	});
	 $("nav .swipe-area").swipe({
	      swipeStatus:function(event, phase, direction, distance, duration, fingers)
	          {
	              if (phase=="move" && direction =="right") {
	                   $(".menu").addClass("open-sidebar");
	                   $("burger").addClass("burger-on");
	                   $("body").addClass("lock-body");
	                   $(".swipe-area").addClass("swipe-on");
	                   return false;
	              }
	              if (phase=="move" && direction =="left") {
	                   $(".menu").removeClass("open-sidebar");
	                   $(".burger").removeClass("burger-on");
	                   $(".burger").removeClass("burger-on");
	                   $("body").removeClass("lock-body");
	                   $("swipe-area").removeClass("swipe-on");
	                   return false;
	              }
	          }
	  }); 
});