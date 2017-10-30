/**
 * Custom JS.
 *
 * Custom JS scripts.
 *
 * @since 1.0.0
 */
// $(window).load(function() {
//     $('#loading').hide();
// });
$(document).ready(function(){ 

	// Create a controller - vertically scrolling window
	var controller = new ScrollMagic.Controller();

	new ScrollMagic.Scene({triggerElement: "#hero", duration: '100%', offset: 200, triggerHook: 1, reverse: false})
				.setClassToggle("#hero h1", "fadeInRight") // add class toggle
				.addTo(controller);

	new ScrollMagic.Scene({triggerElement: "#hero", duration: 0, triggerHook: 1, reverse: false})
				.setClassToggle("#hero h2", "fadeInLeft") // add class toggle
				.addTo(controller);		

	new ScrollMagic.Scene({triggerElement: "#promotions .logo", duration: '100%', triggerHook: 1, reverse: false})
				.setClassToggle("#promotions .logo", "zoomIn") // add class toggle
				.addTo(controller);				

	new ScrollMagic.Scene({triggerElement: "#promotions .logo", duration: '100%', triggerHook: 1, reverse: false})
				.setClassToggle("#promotions .headline", "slideInUp") // add class toggle
				.addTo(controller);						

	new ScrollMagic.Scene({triggerElement: "#promotions .logo", duration: '100%', triggerHook: 1, reverse: false})
				.setClassToggle("#promotions .alignleft", "slideInUp") // add class toggle 
				.addTo(controller);

	new ScrollMagic.Scene({triggerElement: "#promotions .media-logo", duration: '100%', triggerHook: 1, reverse: false})
				.setClassToggle("#promotions .media-logo", "slideInUp") // add class toggle
				.addTo(controller);			


	new ScrollMagic.Scene({triggerElement: "#featured-blogs h3", duration: '100%', triggerHook: 1, reverse: false})
				.setClassToggle("#featured-blogs h3", "fadeInUp") // add class toggle 
				.addTo(controller);


	new ScrollMagic.Scene({triggerElement: "#featured-blogs .blog-1", duration: '100%', triggerHook: 1, reverse: false})
				.setClassToggle("#featured-blogs .blog-1", "slideInUp") // add class toggle
				.addTo(controller);		

	new ScrollMagic.Scene({triggerElement: "#featured-blogs .blog-2", duration: '100%', triggerHook: 1, reverse: false})
				.setClassToggle("#featured-blogs .blog-2", "slideInUp") // add class toggle
				.addTo(controller);		

	new ScrollMagic.Scene({triggerElement: "#featured-blogs .blog-3", duration: '100%', triggerHook: 1, reverse: false})
				.setClassToggle("#featured-blogs .blog-3", "slideInUp") // add class toggle
				.addTo(controller);		

	new ScrollMagic.Scene({triggerElement: "#featured-blogs .blog-4", duration: '100%', triggerHook: 1, reverse: false})
				.setClassToggle("#featured-blogs .blog-4", "slideInUp") // add class toggle
				.addTo(controller);							

   new ScrollMagic.Scene({triggerElement: ".footer-form ", duration: '100%', triggerHook: 1, reverse: false})
				.setClassToggle(".footer-form h2", "bounceIn") // add class toggle
				.addTo(controller);	

  	var blogList = ( $('.custom-blog-page #content').height() / 2 ) - $('.custom-blog-page .sidebar').height();
    new ScrollMagic.Scene({triggerElement: ".custom-blog-page #content", duration: blogList, triggerHook: 0.05 })
						.setPin(".custom-blog-page .sidebar")
						//.addIndicators({name: "2 (duration: 0)"}) // add indicators (requires plugin)
						.addTo(controller);

				// 		var contain =  $('.events').height();
    // new ScrollMagic.Scene({triggerElement: ".events", duration: contain, triggerHook: 0 })
				// 		.setPin(".top-image")
				// 		//.addIndicators({name: "2 (duration: 0)"}) // add indicators (requires plugin)
				// 		.addTo(controller);					
   function program_view() {

		   var wh = window.innerHeight,
		        $visual = $('.visual'),
		        $innerS1 = $('.innerS1'),
		        $innerS2 = $('.innerS2'),
		        $innerS3 = $('.innerS3'),
		        $innerS4 = $('.innerS4'),
		        $innerS5 = $('.innerS5'),
		        $screenHat = $('.screenHat'),
		        $screenA = $('.screenA'),
		        $screenB = $('.screenB'),
		        $screenC = $('.screenC');

			// init
			// Create scene
			// $(".conference").each(function() {
			   
			//     new ScrollMagic.Scene({
			//         triggerElement: this,
			//         duration: '50%'
			//     })
			//     .setPin(this)
			//     .addTo(ctrl);
			// });

			var controller = new ScrollMagic.Controller();

			new ScrollMagic.Scene({triggerElement: ".top-image", duration: 0, offset: -500, triggerHook: 0, reverse: false})
				.setPin(".top-image")
				.addTo(controller);	


   }
   program_view();


	function submit_captcha() {

		$('#multisteps-form input[type="submit"]').on('click', function() {
		
			if (grecaptcha.getResponse() == ""){

				 
			   $('.g-recaptcha').append('<span class="text text-danger pull-left">Captcha Verification Failed</span>');
			   return false;

			} 
		});

	}					
	submit_captcha();

	function contact_captcha() {

		$('#submitForm').on('click', function() {

			if (grecaptcha.getResponse() == ""){

				 
			   $('#contactForm .captcha-status').html('<span class="text text-danger pull-left">Captcha Verification Failed</span>');
			   return false;

			} 

		});

	}					
	contact_captcha();

    function multistep_form() {

			//jQuery time
			var current_fs, next_fs, previous_fs; //fieldsets
			var left, opacity, scale; //fieldset properties which we will animate
			var animating, input, stop; //flag to prevent quick multi-click glitches


			$(".next").click( function(){
				if(animating) return false;
				animating = true; 

					    stop = false;

				        input = $(this).closest('fieldset').find('.moonray-form-input');
						
						input.each( function( index ) {

				
							  if( $(this).val().length < 1 ) {

							  	 $(this).addClass('moonray-form-state-error');

							  	 stop = true;

			
							  }	
							  else {

							  	 $(this).removeClass('moonray-form-state-error');

							  }
						  
						});

			
					   if( stop != true ) {
					
							current_fs = $(this).closest('fieldset');
							next_fs    = $(this).closest('fieldset').next();


												//activate next step on progressbar using the index of next_fs
								$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
								
								//show the next fieldset
								next_fs.show(); 
								//hide the current fieldset with style
								current_fs.animate({opacity: 0}, {
									step: function(now, mx) {
										//as the opacity of current_fs reduces to 0 - stored in "now"
										//1. scale current_fs down to 80%
										scale = 1 - (1 - now) * 0.2;
										//2. bring next_fs from the right(50%)
										left = (now * 50)+"%";
										//3. increase opacity of next_fs to 1 as it moves in
										opacity = 1 - now;
										current_fs.css({
							        'transform': 'scale('+scale+')',
							        'position': 'absolute'
							      });
										next_fs.css({'left': left, 'opacity': opacity});
									}, 
									duration: 800, 
									complete: function(){
										current_fs.hide();
										animating = false;
									}, 
									//this comes from the custom easing plugin
									easing: 'easeInOutBack'
								});

					    }
					    else {
					    	animating = false;
					    	console.log(animating);

					    }
				
					

				
			});

			$(".previous").click(function(){
				if(animating) return false;
				animating = true;
				
				current_fs = $(this).closest('fieldset');
				previous_fs = $(this).closest('fieldset').prev();
				


				//de-activate current step on progressbar
				$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
				
				//show the previous fieldset
				previous_fs.show(); 
				//hide the current fieldset with style
				current_fs.animate({opacity: 0}, {
					step: function(now, mx) {
						//as the opacity of current_fs reduces to 0 - stored in "now"
						//1. scale previous_fs from 80% to 100%
						scale = 0.8 + (1 - now) * 0.2;
						//2. take current_fs to the right(50%) - from 0%
						left = ((1-now) * 50)+"%";
						//3. increase opacity of previous_fs to 1 as it moves in
						opacity = 1 - now;
						current_fs.css({'left': left});
						previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
					}, 
					duration: 800, 
					complete: function(){
						current_fs.hide();
						previous_fs.css({'position' : 'relative'});
						animating = false;
					}, 
					//this comes from the custom easing plugin
					easing: 'easeInOutBack'
				});
			});

    }
    multistep_form();


  function slide_tab() {
  		$('.slide-link li:first-child').hide();

		$('.slide-link .slide-btn').on('click', function(){

			var id      = $(this).attr('slideid'),
			    content = $(this).closest('.module--content'),
			    totalSlides = content.find('.slide-content').size(),
			    prev    = $(this).hasClass('prev'),
			    next    = $(this).hasClass('next');



			content.find('.slide-content').removeClass('show');
			content.find('.slide-content' + id).addClass('show');

			  if ( id < totalSlides && next ) {

			  	  idx = parseInt(id) + 1;
			  	  content.find('.slide-link li:last-child > span').attr('slideid', idx );

				  idz = idx - 1;
			  	  content.find('.slide-link li:first-child > span').attr('slideid', idz );
			  }
 			 else if ( prev ) {

 			 	  if(id > 1 ) {
                 	 idz = parseInt(id) - 1;
              	  }
              	  else {
              	  	idz = parseInt(id);
              	  }
			  	  content.find('.slide-link li:first-child > span').attr('slideid', idz );

			  	  idx = idz + 1;
			  	  content.find('.slide-link li:last-child > span').attr('slideid', idx );
			  }
		
			 // Hide / Show First link
			 if( content.find('.slide-content1').hasClass('show') == false ) {
	   	       content.find('.slide-link li:first-child').show();
	   		 }
	   		 else {
	   		 	content.find('.slide-link li:first-child').hide();
	   		 }

	   		 // Hide / Show First link
			 if( content.find('.slide-content' + totalSlides).hasClass('show') == false ) {
	   	       content.find('.slide-link li:last-child').show();
	   		 }
	   		 else {
	   		 	content.find('.slide-link li:last-child').hide();
	   		 }

		});

   }
   slide_tab();	

   function benefit_tab() {

	   var tab = $('.module-benefit .box');

       tab.on('click', function(){
       		  
       		//Remove active class first
       		tab.removeClass('active');
            
 			//Then Add active on click tab
       		$(this).addClass('active');


       });
   }
   benefit_tab();

   function slick_it() {

	    //TAB SLIDES 
		$('#info-tabs').slick({  

			slidesToShow: 10,  
			slidesToScroll: 1,   
			arrows: false,  
			dots: false,  
			centerMode: false,  
			nextArrow: '<i class="fa fa-chevron-right icon-next"></i>',   
			prevArrow: '<i class="fa fa-chevron-left icon-prev"></i>', 

			responsive: [  
			{      
				breakpoint: 993,      
				settings: "unslick"   
			},  
			{      
				breakpoint: 992,      
				settings: {        
					arrows: true,        
					centerMode: false,        
					slidesToShow: 5      
				}    
			},    
			{      
				breakpoint: 768,      
				settings: {        
					arrows: true,        
					centerPadding: '40px',        
					slidesToShow: 3      
				}    
			},    
			{      
				breakpoint: 420,      
				settings: {        
					arrows: true,        
					slidesToShow: 1      
				}    
			} ],  
			focusOnSelect: true
		}); 


	    $('.slick-this').slick({
			  dots: false,
			  infinite: true,
			  speed: 1000,
			  autoplay: true,
			  fade: true,
			  arrows: false,
			  slidesToShow: 1,
		});

		 $('.lists').slick({  
		 	dots: true,  
		 	infinite: true,  
		 	speed: 500,  
		 	cssEase: 'linear', 
		 	nextArrow: '<i class="fa fa-arrow-right"></i>', 
		 	prevArrow: '<i class="fa fa-arrow-left"></i>' 
		 });

		$('.slicking').slick({
			  dots: true,
			  infinite: true,
			  speed: 1000,
			  autoplay: true,
			  fade: true,
			  arrows: true,
			  slidesToShow: 2,
			  nextArrow: '<i class="arrow-next"></i>', 
		 	  prevArrow: '<i class="arrow-prev"></i>'
		});

		$('.rolling').slick({
			  dots: true,
			  infinite: true,
			  speed: 1000,
			  autoplay: false,
			  arrows: true,
			  slidesToShow: 1,
			  nextArrow: '<i class="arrow-next"></i>', 
		 	  prevArrow: '<i class="arrow-prev"></i>'
		});

	}
	slick_it();


    function search_grid() {
		var grid = $('.gridbox');

		grid.masonry({
			columnWidth: '.grid-sizer',
			gutter: '.gutter-sizer',
			itemSelector: 'article',
			percentPosition: true
		});
    }
    search_grid();


});



  

