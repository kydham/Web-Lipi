(function($) {
    "use strict";
     $(document).on('ready', function() {	
	
		
		/*====================================
			Header Sticky JS
		======================================*/ 
		jQuery(window).on('scroll', function() {
			if ($(this).scrollTop() > 200) {
				$('.header').addClass("sticky");
			} else {
				$('.header').removeClass("sticky");
			}
		});
		
		// Menu Click JS
		$('.menu-click,.close-menu button').on('click', function(){
			$('.menu-inner').toggleClass('active');
			
		});
		
		$(".ex-close-menu").focusout(function(){
			$(".ex-btn-toggle").focus();
			$(".ex-btn-toggle").addClass('active');

		});
		
		/*================================
			Hero Slider
		================.==================*/ 
		$('.hero-slider').owlCarousel({
			items:1,
			autoplay:false,
			loop:false,
			autoplayTimeout:4000,
			autoplayHoverPause:false,
			smartSpeed: 1000,
			merge:true,
			nav:false,
			dots:true,
		});	
		
		/*================================
			Blog Slider
		==================================*/ 
		$('.blog-slider').owlCarousel({
			items:3,
			autoplay:false,
			loop:false,
			margin:30,
			autoplayTimeout:4000,
			autoplayHoverPause:false,
			smartSpeed: 1000,
			merge:true,
			nav:true,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			dots:false,
			responsive:{
				300: {
					items:1,
				},
				480: {
					items:1,
				},
				768: {
					items:2,
				},
				1170: {
					items:3,
				},
			}
		});		
		
		/*================================
			Client Slider
		==================================*/ 
		$('.client-slider').owlCarousel({
			items:4,
			autoplay:false,
			loop:true,
			margin:30,
			autoplayTimeout:4000,
			autoplayHoverPause:false,
			smartSpeed: 1000,
			merge:true,
			nav:true,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			dots:false,
			responsive:{
				300: {
					items:2,
				},
				480: {
					items:2,
				},
				768: {
					items:3,
				},
				1170: {
					items:4,
				},
			}
		});		
		
		/*====================================
			Counter Js
		======================================*/ 
		$('.counter').counterUp({
			time: 1000
		});
		
		/*====================================
			Wow JS
		======================================*/		
		var window_width = $(window).width();   
			if(window_width > 767){
            new WOW().init();
		}
		
		/*================================
			ScrollUp JS
		==================================*/
		$.scrollUp({
			scrollName: 'scrollUp',      // Element ID
			scrollDistance: 500,         // Distance from top/bottom before showing element (px)
			scrollFrom: 'top',           // 'top' or 'bottom'
			scrollSpeed: 1000,            // Speed back to top (ms)
			animation: 'fade',           // Fade, slide, none
			animationSpeed: 50,         // Animation speed (ms)
			scrollTrigger: false,        // Set a custom triggering element. Can be an HTML string or jQuery object
			scrollTarget: false,         // Set a custom target element for scrolling to. Can be element or number
			easing: 'easeInOut',
			scrollText: ["<i class='fa fa-angle-up'></i><span>Top</span>"], // Text for element, can contain HTML
			scrollTitle: false,          // Set a custom <a> title if required.
			scrollImg: false,            // Set true to use image
			activeOverlay: false,        // Set CSS color to display scrollUp active point, e.g '#00FFFF'
			zIndex: 2147483647           // Z-Index for the overlay
		});		
		
		$('.p-anim-btn').on('click', function(event) {
			var $anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 80 
			}, 1000, 'easeInOutQuart');
			event.preventDefault();
		});
	});
	
	/*================================
			Preloader JS
	==================================*/
	 var prealoaderOption = $(window);
      prealoaderOption.on("load", function () {
          var preloader = jQuery('.sk-cube-grid');
          var preloaderArea = jQuery('.preloader-area');
          preloader.fadeOut();
          preloaderArea.delay(350).fadeOut('slow');
      });

})(jQuery);