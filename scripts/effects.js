$(window).load(function(){


	$('.user-log').click(function(){
		
		$('.login').fadeToggle('slow');
		$('body').addClass('lock-body'); 
	});

	$('.close').click(function(){
		$('.login').fadeOut('slow');
		$('body').removeClass('lock-body');

	});


	///goTo checkout
		$('.single_add_to_cart_button').click(function(){
			
		});

	

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
	 $(".swipe-area").swipe({
	      swipeStatus:function(event, phase, direction, distance, duration, fingers)
	          {
	              if (phase=="move" && direction =="right") {
	                   $(".nav-holder").addClass("open-sidebar");
	                   $("burger").addClass("burger-on");
	                   $("body").addClass("lock-body");
	                   $(".swipe-area").addClass("swipe-on");
	                   return false;
	              }
	              if (phase=="move" && direction =="left") {
	                   $(".nav-holder").removeClass("open-sidebar");
	                   $(".burger").removeClass("burger-on");
	                   $(".burger").removeClass("burger-on");
	                   $("body").removeClass("lock-body");
	                   $("swipe-area").removeClass("swipe-on");
	                   return false;
	              }
	          }
	  }); 
});