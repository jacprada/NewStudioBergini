$( window ).load(function() {

	var slider = $('#desktop-slider').bxSlider({
	 	//mode: 'fade',
	 	hideControlOnEnd: false,
	 	adaptiveHeight: false,
	 	infiniteLoop: true,
	 	onSliderLoad: function(){
       		$(".single-slide").css("visibility", "visible");
      	}

 	});
 	
	$('.bxslider').bxSlider({
	 	//mode: 'fade',
	 	hideControlOnEnd: false,
	 	adaptiveHeight: false,
	 	infiniteLoop: true,
	 	onSliderLoad: function(){
       		$(".single-slide").css("visibility", "visible");
      	}

	 });

	var offset = 115;
	var mobile = false;

	

	
	/*******TEST**********/
	

	/******************Hover States*************************/

	var hovers = ".will-hover";
	$('body').on('mouseenter',hovers, function(){
		console.log('hover');
		$(this).addClass('hover');
	}).on('click mouseleave',hovers, function(){
		$(this).removeClass('hover');
	});
	$('body').on('touchstart',function(){
	    $(this).off('mouseenter', hovers);
	    $(this).off('mouseleave', hovers);
	});


	/******************Mobile/desktop detext***************/

	var rTimeout;
	$(window).resize(function() {

		clearTimeout(rTimeout);
		rTimeout = setTimeout(function(){
			console.log('resize finished');
			console.log($('#desktop-slider').length);
			console.log(slider);
			if($('.mobile-menu').is(":visible")) {
				if(typeof slider.reloadSlider == 'function')
				{
					slider.destroySlider();
				}
			}
			else {
				if(typeof slider.reloadSlider == 'function')
				{
					slider.reloadSlider();
				}
			}
		},300);



		if($('.mobile-menu').is(":visible")) {
			mobile = true;
			offset = 70;
		}
		else {
			offset = 115;


		}

	}).resize();


	 /******************Close intro Nav******************/



	if($('body').hasClass("page-template-home-page")) {

		$(window).bind('mousewheel DOMMouseScroll touchstart touchmove', function(event){
	    	if(!$('body').hasClass("home-nav")) {
				$('body').addClass("home-nav");
				console.log('anim1')
				$('.home-arrow').velocity("fadeOut");
				$('.header-inner').addClass("go");
				setTimeout(function()
				{
					openNav();
					console.log('anim2')
					$('.home-close').velocity("fadeIn");
				}, 500);
			}
		})


		$( document ).click(function(){

			if(!$('body').hasClass("home-nav")) {
				$('body').addClass("home-nav");
				console.log('anim3')
				$('.home-arrow').velocity("fadeOut");
				$('.header-inner').addClass("go");
				setTimeout(function()
				{
					openNav();
					console.log('anim4')
					$('.home-close').velocity("fadeIn");
				}, 500);
			}
		})

		$('.home-close').click(function(e){
			e.preventDefault();
			console.log('anim5')
			$('.home-close').velocity("fadeOut");
			closeNav()
			setTimeout(function()
			{
				$('.header-inner').removeClass("go");
				console.log('anim6')
				$('.home-arrow').velocity("fadeIn");
				$('body').removeClass("home-nav");
			}, 200);
		})
	}	 

	 /******************* Nav open/close ******************/
	 $('.menu, .mobile-menu-icon').click(function(e){
	 	e.preventDefault();
	 	if(!$('.site-header').hasClass("nav-open")) {
	 		openNav();
	 	}
	 	else {
	 		closeNav();
	 	}
	 })

	 /******************** Nav/Collapsed Nav *****************/


	
	var lastScrollTop = 0;

	 $(window).scroll(function(){

	 	var direction
	 	
	 	var st = $(this).scrollTop();
	 	console.log(st, lastScrollTop);

		if (st > lastScrollTop){
	   		direction = "down"
		} else {
	   		direction = "up"
		}
		lastScrollTop = st;

		console.log(direction);

	 	if($(window).scrollTop() >= 50) {
	 		$('.site-header').addClass('collapsed');
			$('section').addClass('collapsed');
	 	}
	 	else {
	 		if(direction == "up") {
	 			$('.site-header').removeClass('collapsed');
				$('section').removeClass('collapsed');
				$('.firstarrow').addClass('firsttime');
			}
	 	}

	 }).scroll();

	 /*******************Scroll between sections ************/

	$('.down').click(function(e){
		e.preventDefault();	

		if($(this).hasClass('firsttime')) {
			$(this).removeClass('firsttime');
			$('.site-header').addClass('collapsed');
			$('section').addClass('collapsed');
		}
		else{
			console.log('anim7')
		 	$(this).parent().next('section').velocity("scroll", {easing: "easeInOut", offset: -offset});
		}
	 })
	 /********************Scroll to top ********************/

	 $('.arrow').click(function(e){
	 	e.preventDefault();
	 	console.log('anim8')
	 	$('html').velocity("scroll");
	 })
	 
});

function openNav() {
	console.log('opennav')
	$('body').addClass("noflow");
	$('.menu, .mobile-menu-icon').addClass("nav-open");
	$('.site-header').addClass("nav-open");
	console.log('anim9')
	$('.main-nav').velocity("fadeIn", {duration: 300, display: "flex"});
}

function closeNav() {
	console.log('closenav')
	$('body').removeClass("noflow");
	$('.menu, .mobile-menu-icon').removeClass("nav-open");
	console.log('anim10')

	$('.main-nav').velocity("fadeOut", {duration: 300, 
		complete: function(){
			$('.site-header').removeClass("nav-open");
		}
	
	});
}
