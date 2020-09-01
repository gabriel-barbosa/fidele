(function( root, $, undefined ) {

	$(function () {
		/* HOME - HIDE LANDING ANIMATION */
		$(document).ready(function() {
	   var isshow = localStorage.getItem('isshow');
	   if (isshow== null) {
      localStorage.setItem('isshow', 1);

      // Show popup here
      $('.gradient-intro').show();
	    }
		});

		$('.gradient-intro').click(function() {
			$(this).hide(300);
		});

		/* A PROPOS PAGE - LETTERS COLOR ON HOVER */
		$(".a-propos .header-text .text").each(function (index) {
			var characters = $(this).text().split("");

			$this = $(this);
			$this.empty();
			var n = 0;
			$.each(characters, function (i, el) {
					i++;
					n++;
					$this.append("<span class='char" + i + " color" + n + "'>" + el + "</span");
					if(n >= 4) {
						n = 0;
					}
			});
		});

		/* SHOP PAGE - PRODUCTS LOOP */
		$('.dropbtn').click(function() {
		  document.getElementById("myDropdown").classList.toggle("show");
		});

		window.onclick = function(event) {
		  if (!event.target.matches('.dropbtn')) {
		    var dropdowns = document.getElementsByClassName("dropdown-content");
		    var i;
		    for (i = 0; i < dropdowns.length; i++) {
		      var openDropdown = dropdowns[i];
		      if (openDropdown.classList.contains('show')) {
		        openDropdown.classList.remove('show');
		      }
		    }
		  }
		}

		$(window).scroll(function(){
		  $('.product-item').each(function(){
		    if(isScrolledIntoView($(this))){
		      $(this).find('.product-info').addClass('stop');
		    }
		    else{
		      $(this).find('.product-info').removeClass('stop');
		    }
		  });

			var catMenuBottom = $('.nav').offset().top + $('.nav').outerHeight(true);
			var catMenu = $('.fixed-wrapper').offset().top;

			if (catMenuBottom >= catMenu) {
				if($(window).width() > 768) {
					$('.fixed-wrapper').height($('.product-cat-menu').height());
				}
				else {
					$('.fixed-wrapper').height($('.product-cat-menu.mobile').height());
				}

				$('body').addClass('cat-fixed');
			}
			else {
				$('body').removeClass('cat-fixed');
			}

			var guideMenuBottom = $('.nav').offset().top + $('.nav').outerHeight(true);
			var guideMenu = $('.guide-d-impression .fixed-wrapper').offset().top;

			if($(window).width() > 768) {
				if (guideMenuBottom >= guideMenu) {
					$('.fixed-wrapper').height($('.submenu').height());
				}

				else {
					$('body').removeClass('cat-fixed');
				}
			}
		});

		function isScrolledIntoView(elem){
		    var $elem = $(elem);
		    var $window = $(window);
				const windowH = window.innerHeight;

		    var docViewTop = $window.scrollTop();
		    var docViewBottom = docViewTop + windowH;

		    var elemTop = $elem.offset().top;
		    var elemBottom = elemTop + $elem.height();

		    return ((elemBottom <= docViewBottom));
		}


		/* SINGLE PRODUCT - GALLERY */
		$(".product-gallery").slick({
		autoplay: false,
		fade: true,
		dots: true,
		customPaging : function(slider, i) {
		i++;
		var thumb = $(slider.$slides[i]).data();
		return '<a class="dot">'+i+'</a>';
		},
		});

		$(".product-gallery .slick-prev").text("");
		$(".product-gallery .slick-next").text("");


		/* NAV - HIDE/SHOW FIDELE LOGO ON SCROLL AND ON NAV HOVER */
		$(document).scroll(function() {
			if ($(this).scrollTop() > 10) {
				$('.head-title').addClass('scroll');
			}

			else {
				$('.head-title').removeClass('scroll');
			}
		});

		$('nav').hover(function() {
			if ($(window).width() > 768) {
				$('.head-title').toggleClass('visible');
			}
		});

		/* NAV MOBILE - ONCLICK SHOW HIDDEN DIV */
		$('#menu-item-258 a, #menu-item-321 a').click(function(event) {
			event.preventDefault();
			$(this).text(function(i, text){
          return text === "Menu" ? "Close" : "Menu";
      })
			$('.nav-mobile').toggleClass('visible');
			$('.head-title').toggleClass('visible');
		});


		/* SIMULATEUR DE DEVIS - STEPS MENU SETUP */
		$(".simulateur-menu .step-1").click(function() {
			$(".steps-wrapper").steps("setStep", 0);
			$(".steps-item").removeClass("current");
			$(this).addClass("current");
		});

		$(".simulateur-menu .step-2").click(function() {
			$(".steps-wrapper").steps("setStep", 1);
			$(".steps-item").removeClass("current");
			$(this).addClass("current");
		});

		$(".simulateur-menu .step-3").click(function() {
			$(".steps-wrapper").steps("setStep", 2);
			$(".steps-item").removeClass("current");
			$(this).addClass("current");
		});

		/* SIMULATEUR DE DEVIS - JQUERY STEPS SETUP */
		$(".steps-wrapper").steps({
	    headerTag: ".step-title",
	    bodyTag: ".simulateur-steps",
	    transitionEffect: "fade",
			autoFocus: false,
			onStepChanged: function(event, currentIndex) {
				/* GETS THE STEP TITLE FROM CURRENT STEP AND PASSES IT TO H1 HEADER */
				var title = $('.step-title.current').html();
				console.log(title);
				$('.simulateur-header h1').html(title);
				if ($(window).width() < 768) {
					$('.steps li').removeClass('disabled');
				}

				/* REMOVES ARROW WHEN IT'S ON THE FINAL STEP */
				if(currentIndex == 2) {
					$('.arrow').addClass('hidden');
				}
				else {
					$('.arrow').removeClass('hidden');
				}

				/* PREVENT FROM SENDING WRONG INPUT VALUES FROM STEP 2 TO STEP 3 */
				if(currentIndex == 0) {
					$('.arrow').removeClass('affiches');
					$('.arrow').removeClass('dos-colles');
					$('.arrow').removeClass('brochures');
					$('.arrow').removeClass('fanzines');
					$('.arrow').removeClass('spirale');
				}
			},
	    titleTemplate: '<span class="number step-#index#" data-title="#title#">#index#</span>',
	    labels: {
	        current: "",
	    }
		});


		/* ADD ARROW TO STEP MENU (DON'T HAVE IT INITIALLY) */
		$('.append .arrow').appendTo( $( ".steps-wrapper .steps" ) );


		/* DOS COLLES - STEP 1 BUTTON */
		$('#dos-colles').click(function() {
			/* PROCEEDS TO NEXT STEP */
			$(".steps-wrapper").steps('next');

			/* ADD CURRENT TITLE TO THE HIDDEN STEP TITLE */
			var currenttitle = $(this).data("title");
			$('#steps-uid-0-h-1').html(currenttitle);

			/* ENABLE ARROW CLICK AND ADD CLASS FOR PASSING INPUTS VALUE TO FORM ON STEP 3 */
			$(".arrow").addClass('enable');
			$(".arrow").addClass('dos-colles');

			/* PREVENT FROM HAVING TWO CALCULATORS IN THE STEP 2 IF YOU GO BACK TO STEP 1 AND CLICK ON ANOTHER OPTION */
			$(".calculators").removeClass('visible');

			/* SHOW THE CURRENT OPTION CLICKED */
			$('#dos-colles-calculator').addClass('visible')
			$('.dos-colles-form').addClass('visible');

			/* ADD CLASS TO CURRENT MENU ITEM */
			$('.simulateur-menu .step-1').removeClass('current');
			$('.simulateur-menu .step-2').addClass('current');
		});


		/* BROCHURES - STEP 1 BUTTON */
		$('#brochures').click(function() {
			/* PROCEEDS TO NEXT STEP */
			$(".steps-wrapper").steps('next');

			/* ADD CURRENT TITLE TO THE HIDDEN STEP TITLE */
			var currenttitle = $(this).data("title");
			$('#steps-uid-0-h-1').html(currenttitle);

			/* ENABLE ARROW CLICK AND ADD CLASS FOR PASSING INPUTS VALUE TO FORM ON STEP 3 */
			$(".arrow").addClass('enable');
			$(".arrow").addClass('brochures');

			/* PREVENT FROM HAVING TWO CALCULATORS IN THE STEP 2 IF YOU GO BACK TO STEP 1 AND CLICK ON ANOTHER OPTION */
			$(".calculators").removeClass('visible');

			/* SHOW THE CURRENT OPTION CLICKED */
			$('#brochures-calculator').addClass('visible');
			$('.brochures-form').addClass('visible');

			/* ADD CLASS TO CURRENT MENU ITEM */
			$('.simulateur-menu .step-1').removeClass('current');
			$('.simulateur-menu .step-2').addClass('current');
		});


		/* AFFICHES - STEP 1 BUTTON */
		$('#affiches').click(function() {
			/* PROCEEDS TO NEXT STEP */
			$(".steps-wrapper").steps('next');

			/* ADD CURRENT TITLE TO THE HIDDEN STEP TITLE */
			var currenttitle = $(this).data("title");
			$('#steps-uid-0-h-1').html(currenttitle);

			/* ENABLE ARROW CLICK AND ADD CLASS FOR PASSING INPUTS VALUE TO FORM ON STEP 3 */
			$(".arrow").addClass('enable');
			$(".arrow").addClass('affiches');

			/* PREVENT FROM HAVING TWO CALCULATORS IN THE STEP 2 IF YOU GO BACK TO STEP 1 AND CLICK ON ANOTHER OPTION */
			$(".calculators").removeClass('visible');

			/* SHOW THE CURRENT OPTION CLICKED */
			$('#affiches-calculator').addClass('visible');
			$('.affiches-form').addClass('visible');

			/* ADD CLASS TO CURRENT MENU ITEM */
			$('.simulateur-menu .step-1').removeClass('current');
			$('.simulateur-menu .step-2').addClass('current');
		});

		/* FANZINES - STEP 1 BUTTON */
		$('#fanzines').click(function() {
			/* PROCEEDS TO NEXT STEP */
			$(".steps-wrapper").steps('next');

			/* ADD CURRENT TITLE TO THE HIDDEN STEP TITLE */
			var currenttitle = $(this).data("title");
			$('#steps-uid-0-h-1').html(currenttitle);

			/* ENABLE ARROW CLICK AND ADD CLASS FOR PASSING INPUTS VALUE TO FORM ON STEP 3 */
			$(".arrow").addClass('enable');
			$(".arrow").addClass('fanzines');

			/* PREVENT FROM HAVING TWO CALCULATORS IN THE STEP 2 IF YOU GO BACK TO STEP 1 AND CLICK ON ANOTHER OPTION */
			$(".calculators").removeClass('visible');

			/* SHOW THE CURRENT OPTION CLICKED */
			$('#fanzines-calculator').addClass('visible');
			$('.fanzines-form').addClass('visible');

			/* ADD CLASS TO CURRENT MENU ITEM */
			$('.simulateur-menu .step-1').removeClass('current');
			$('.simulateur-menu .step-2').addClass('current');
		});

		/* SPIRALES - STEP 1 BUTTON */
		$('#spirale').click(function() {
			/* PROCEEDS TO NEXT STEP */
			$(".steps-wrapper").steps('next');

			/* ADD CURRENT TITLE TO THE HIDDEN STEP TITLE */
			var currenttitle = $(this).data("title");
			$('#steps-uid-0-h-1').html(currenttitle);

			/* ENABLE ARROW CLICK AND ADD CLASS FOR PASSING INPUTS VALUE TO FORM ON STEP 3 */
			$(".arrow").addClass('enable');
			$(".arrow").addClass('spirale');

			/* PREVENT FROM HAVING TWO CALCULATORS IN THE STEP 2 IF YOU GO BACK TO STEP 1 AND CLICK ON ANOTHER OPTION */
			$(".calculators").removeClass('visible');

			/* SHOW THE CURRENT OPTION CLICKED */
			$('#spirale-calculator').addClass('visible');
			$('.spirale-form').addClass('visible');

			/* ADD CLASS TO CURRENT MENU ITEM */
			$('.simulateur-menu .step-1').removeClass('current');
			$('.simulateur-menu .step-2').addClass('current');
		});

		$(document).on("click", ".arrow.enable", function() {
  		$(".steps-wrapper").steps('next');
		});


		/* STEPS 3 - CONTACT FORM */
		$('#file-upload').change(function() {
			$("#file-name").text(this.files[0].name);
		});

		$('.submit-wrapper').each(function() {
			$(this).prepend($('.submit-hidden').html());

			var button = $(this).find('.submit-button');
			button.click(function() {
				$(this).parent().find('.wpcf7-submit').click();
			});
		});

		/* STEP 2 DROPDOWN BUTTON */
		$('.step-2 .dropdown .couleurs .dropdown-button').click(function() {
			$(this).parent().toggleClass('open');
			$('.step-2 .dropdown .papers').toggleClass('hide');
		});

		$('.step-2 .dropdown .papers .dropdown-button').click(function() {
			$(this).parent().toggleClass('open');
			$('.step-2 .dropdown .couleurs').toggleClass('hide');
		});

		/* AFFICHES FORM - STEP 2 TO STEP 3 */
		$(document).on("click", ".arrow.affiches", function() {
			/* NUMBER OF COPIES */
  		$('.affiches-form input.copies').val($('#affiches-calculator #ref-r2').find('.calconic--controled_input input').val());
			/*FORMAT*/
			$('.affiches-form input.affiches-format').val($('#affiches-calculator #ref-r24').find('.rc-select-selection-selected-value').html());
			/*PAPER TYPE*/
			$('.affiches-form input.affiches-paper-type').val($('#affiches-calculator #ref-r1').find('.rc-select-selection-selected-value').html());
			/*FRONT COLORS*/
			$('.affiches-form input.affiches-front-colors').val($('#affiches-calculator #ref-r3').find('.rc-slider-handle').attr('aria-valuenow'));
			/*VERSE COLORS*/
			$('.affiches-form input.affiches-verse-colors').val($('#affiches-calculator #ref-r4').find('.rc-slider-handle').attr('aria-valuenow'));
			/*TOTAL HT*/
			$('.affiches-form input.price-ht-total').val($('#affiches-calculator #ref-r17').find('.result span').html());
			/*TOTAL HT PER EX*/
			$('.affiches-form input.price-ht-per-ex').val($('#affiches-calculator #ref-r29').find('.result span').html());
			/*TOTAL TTC*/
			$('.affiches-form input.price-ttc-total').val($('#affiches-calculator #ref-r32').find('.result span').html());
			/*TOTAL TTC PER EX*/
			$('.affiches-form input.price-ttc-per-ex').val($('#affiches-calculator #ref-r33').find('.result span').html());
		});

		/* BROCHURES FORM - STEP 2 TO STEP 3 */
		$(document).on("click", ".arrow.brochures", function() {
			$('.brochures-form input.copies').val($('#brochures-calculator #ref-r2').find('.calconic--controled_input input').val());
			$('.brochures-form input.brochures-format').val($('#brochures-calculator #ref-r24').find('.rc-select-selection-selected-value').html());
			$('.brochures-form input.brochures-paper-type').val($('#brochures-calculator #ref-r1').find('.rc-select-selection-selected-value').html());
			$('.brochures-form input.brochures-front-colors').val($('#brochures-calculator #ref-r3').find('.rc-slider-handle').attr('aria-valuenow'));
			$('.brochures-form input.brochures-verse-colors').val($('#brochures-calculator #ref-r4').find('.rc-slider-handle').attr('aria-valuenow'));
			$('.brochures-form input.brochures-folding-type').val($('#brochures-calculator #ref-r32').find('.rc-select-selection-selected-value').html());
			$('.brochures-form input.price-ht-total').val($('#brochures-calculator #ref-r17').find('.result span').html());
			$('.brochures-form input.price-ht-per-ex').val($('#brochures-calculator #ref-r29').find('.result span').html());
			$('.brochures-form input.price-ttc-total').val($('#brochures-calculator #ref-r35').find('.result span').html());
			$('.brochures-form input.price-ttc-per-ex').val($('#brochures-calculator #ref-r36').find('.result span').html());
		});

		/* DOS COLLES FORM - STEP 2 TO STEP 3 */
		$(document).on("click", ".arrow.dos-colles", function() {
			$('.dos-colles-form input.copies').val($('#dos-colles-calculator #ref-r2').find('.calconic--controled_input input').val());
			$('.dos-colles-form input.pages').val($('#dos-colles-calculator #ref-r49').find('.calconic--controled_input input').val());
			$('.dos-colles-form input.format').val($('#dos-colles-calculator #ref-r24').find('.rc-select-selection-selected-value').html());
			$('.dos-colles-form input.couverture-paper-type').val($('#dos-colles-calculator #ref-r1').find('.rc-select-selection-selected-value').html());
			$('.dos-colles-form input.couverture-front-colors').val($('#dos-colles-calculator #ref-r3').find('.rc-slider-handle').attr('aria-valuenow'));
			$('.dos-colles-form input.couverture-verse-colors').val($('#dos-colles-calculator #ref-r4').find('.rc-slider-handle').attr('aria-valuenow'));
			$('.dos-colles-form input.interieures-paper-type').val($('#dos-colles-calculator #ref-r28').find('.rc-select-selection-selected-value').html());
			$('.dos-colles-form input.interieures-colors').val($('#dos-colles-calculator #ref-r25').find('.rc-slider-handle').attr('aria-valuenow'));
			$('.dos-colles-form input.price-ht-total').val($('#dos-colles-calculator #ref-r17').find('.result span').html());
			$('.dos-colles-form input.price-ht-per-ex').val($('#dos-colles-calculator #ref-r39').find('.result span').html());
			$('.dos-colles-form input.price-ttc-total').val($('#dos-colles-calculator #ref-r47').find('.result span').html());
			$('.dos-colles-form input.price-ttc-per-ex').val($('#dos-colles-calculator #ref-r48').find('.result span').html());
		});

		/* FANZINES FORM - STEP 2 TO STEP 3 */
		$(document).on("click", ".arrow.fanzines", function() {
			$('.fanzines-form input.copies').val($('#fanzines-calculator #ref-r2').find('.calconic--controled_input input').val());
			$('.fanzines-form input.pages').val($('#fanzines-calculator #ref-r46').find('.calconic--controled_input input').val());
			$('.fanzines-form input.format').val($('#fanzines-calculator #ref-r24').find('.rc-select-selection-selected-value').html());
			$('.fanzines-form input.couverture-paper-type').val($('#fanzines-calculator #ref-r1').find('.rc-select-selection-selected-value').html());
			$('.fanzines-form input.couverture-front-colors').val($('#fanzines-calculator #ref-r3').find('.rc-slider-handle').attr('aria-valuenow'));
			$('.fanzines-form input.couverture-verse-colors').val($('#fanzines-calculator #ref-r4').find('.rc-slider-handle').attr('aria-valuenow'));
			$('.fanzines-form input.interieures-paper-type').val($('#fanzines-calculator #ref-r28').find('.rc-select-selection-selected-value').html());
			$('.fanzines-form input.interieures-colors').val($('#fanzines-calculator #ref-r25').find('.rc-slider-handle').attr('aria-valuenow'));
			$('.fanzines-form input.price-ht-total').val($('#fanzines-calculator #ref-r17').find('.result span').html());
			$('.fanzines-form input.price-ht-per-ex').val($('#fanzines-calculator #ref-r39').find('.result span').html());
			$('.fanzines-form input.price-ttc-total').val($('#fanzines-calculator #ref-r47').find('.result span').html());
			$('.fanzines-form input.price-ttc-per-ex').val($('#fanzines-calculator #ref-r48').find('.result span').html());
		});

		/* FANZINES FORM - STEP 2 TO STEP 3 */
		$(document).on("click", ".arrow.spirale", function() {
			$('.spirale-form input.copies').val($('#spirale-calculator #ref-r2').find('.calconic--controled_input input').val());
			$('.spirale-form input.pages').val($('#spirale-calculator #ref-r49').find('.calconic--controled_input input').val());
			$('.spirale-form input.format').val($('#spirale-calculator #ref-r24').find('.rc-select-selection-selected-value').html());
			$('.spirale-form input.paper-type').val($('#spirale-calculator #ref-r28').find('.rc-select-selection-selected-value').html());
			$('.spirale-form input.colors').val($('#spirale-calculator #ref-r25').find('.rc-slider-handle').attr('aria-valuenow'));
			$('.spirale-form input.price-ht-total').val($('#spirale-calculator #ref-r17').find('.result span').html());
			$('.spirale-form input.price-ht-per-ex').val($('#spirale-calculator #ref-r39').find('.result span').html());
			$('.spirale-form input.price-ttc-total').val($('#spirale-calculator #ref-r47').find('.result span').html());
			$('.spirale-form input.price-ttc-per-ex').val($('#spirale-calculator #ref-r48').find('.result span').html());
		});


		/* CHECKOUT PAGE - WOOCOMMERCE */
		$('.woocommerce-checkout-review-order-table').wrapAll( "<div class='total-order-fixed' />");
		$('#order_review_heading').prependTo('.total-order-fixed');
		$('.button.hidden .gif-item').prependTo('.place-order');

		$(document).on("click", ".gif-item.submit-button", function() {
			$('.woocommerce-checkout').submit();
		});

		$(window).scroll(function(){
			if(isScrolledIntoView($('#payment'))) {
				if ($(window).width() > 768) {
					$('.total-order-fixed').addClass('hide');
				}
			}
			else {
				$('.total-order-fixed').removeClass('hide');
			}
		});

		$('.woocommerce-order-details, .woocommerce-customer-details').wrapAll("<div class='grid col-2' />")
	});


} ( this, jQuery ));
