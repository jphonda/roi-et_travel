/* CUSTOM JQUERY
/*--------------------------------------------------------------------------------------------------------------------------------------*/
;
(function ($, window, document, undefined) {
	'use strict';
	var $winW = function () {
		return $(window).width();
	};
	var $winH = function () {
		return $(window).height();
	};
	var $screensize = function (element) {
		$(element).width($winW()).height($winH());
	};

	var screencheck = function (mediasize) {
		if (typeof window.matchMedia !== "undefined") {
			var screensize = window.matchMedia("(max-width:" + mediasize + "px)");
			if (screensize.matches) {
				return true;
			} else {
				return false;
			}
		} else {
			if ($winW() <= mediasize) {
				return true;
			} else {
				return false;
			}
		}
	};

	$(window).scroll(function () {
		var height = $(window).scrollTop();
		if (height > 300) {
			$('#back2Top').fadeIn();
		} else if (300 < height) {
			$('#back2Top').fadeOut();
		} else {
			$('#back2Top').fadeOut();
		}
	});

	function run_waitMe(el, ef) {
		$(el).waitMe({
			effect: ef,
			text: '',
			bg: 'rgba(255,255,255,0.7)',
			color: '#000',
			maxSize: '',
			source: '../assets/img/img.svg',
			onClose: function () {}
		});
	}

	$(document).ready(function () {
		/*========================================================== 
			NICE SELECT INITIAL
		========================================================== */
		if ($('.nice-sel').length) {
			$('.nice-sel').niceSelect();
		}

		/*========================================================== 
			BACK TO TOP
		========================================================== */
		$("#back2Top").click(function (event) {
			event.preventDefault();
			$("html, body").animate({
				scrollTop: 0
			}, "slow");
			return false;
		});

		/*========================================================== 
			PRELOADER
		========================================================== */
		var width = 100,
			perfData = window.performance.timing, // The PerformanceTiming interface represents timing-related performance information for the given page.
			EstimatedTime = -(perfData.loadEventEnd - perfData.navigationStart),
			time = parseInt((EstimatedTime / 1000) % 60) * 100;

		// Loadbar Animation
		$(".loadbar").animate({
			width: width + "%"
		}, time);

		// Percentage Increment Animation
		var start = 0,
			end = 100,
			durataion = time;
		animateValue(start, end, durataion);

		function animateValue(start, end, duration) {

			var range = end - start,
				current = start,
				increment = end > start ? 1 : -1,
				stepTime = Math.abs(Math.floor(duration / range));

			var timer = setInterval(function () {

				if (current <= 100) {
					$('.travel_loading_bar_overlay').css('width', current + '%').animate();
				} else {
					clearInterval(timer);
				}
				current++;
				if (current == 7) {
					$('.pointer').css('opacity', '1');
					$('.travel_loading_bar > span.from svg path').css('fill', '#ffffff');
					$('.travel_loading_bar > span.to').addClass('jump');
				}
				if (current == 99) {
					$('.pointer').css('opacity', '0');
					$('.travel_loading_bar > span.to svg path').css('fill', '#FFBB58');
					$('.travel_loading_bar > span.to').removeClass('jump');
				}
				if (current == 100) {
					$('.travel_page_loader').fadeOut();
				}

			}, stepTime);
		}

		// Fading Out Loadbar on Finised
		setTimeout(function () {
			$('.travel_page_loader').fadeOut(300);
		}, time);

		/*========================================================== 
			STICKY HEADER
		========================================================== */
		$(window).on('scroll', function () {
			if ($(document).scrollTop() > 5) {
				$('#header').addClass('fixed');
			} else {
				$('#header').removeClass('fixed');
			}
		});

		/*========================================================== 
			MENU
		========================================================== */
		$(document).on('click', '.menu-trigger-btn', function () {
			$('body').toggleClass('menuopen');
		});

		/*========================================================== 
			MAIN HOME SLIDER
		========================================================== */
		if ($('.home-slider').length) {
			var swiper = new Swiper('.home-slider', {
				slidesPerView: 1,
				effect: 'fade',
				autoplay: {
					delay: 5000
				},
				speed: 100,
				loop: true,
				navigation: {
			        nextEl: '.swiper-button-next',
			        prevEl: '.swiper-button-prev',
			    }
			});
		}

		/*========================================================== 
			SIDEBAR HOME MAIN SLIDER
		========================================================== */

		if ($('.city-slider').length) {
			var swiper = new Swiper('.city-slider', {
				slidesPerView: 1,
				effect: 'fade',
				autoplay: {
					delay: 5000
				},
				speed: 100,
				loop: true,
				navigation: {
			        nextEl: '.swiper-button-next',
			        prevEl: '.swiper-button-prev',
			    }
			});
		}

		/*========================================================== 
			TOUR SLIDER
		========================================================== */
		if ($('#tours-list-slider').length) {
			var swiper = new Swiper('#tours-list-slider', {
				slidesPerView: 5,
				spaceBetween: 10,
				mousewheel: true,
				autoplay: {
					delay: 3000
				},
				speed: 1000,
				loop: true,
				breakpoints: {
					414: {
						slidesPerView: 2,
						mousewheel: false
					},
					767: {
						slidesPerView: 2,
						mousewheel: false
					},
					768: {
						slidesPerView: 2
					},
					1024: {
						slidesPerView: 3
					},
					1380: {
						slidesPerView: 4
					}
				}
			});
		}

		/*========================================================== 
			SIDEBAR PORTFOLIO SLIDER 
		========================================================== */

		if ($('#tours-list-slider-1').length) {
			var swiper = new Swiper('#tours-list-slider-1', {
				slidesPerView: 4,
				spaceBetween: 10,
				mousewheel: true,
				autoplay: {
					delay: 3000
				},
				speed: 1000,
				loop: true,
				breakpoints: {
					414: {
						slidesPerView: 2,
						mousewheel: false
					},
					767: {
						slidesPerView: 2,
						mousewheel: false
					},
					768: {
						slidesPerView: 2
					},
					1024: {
						slidesPerView: 2
					},
					1380: {
						slidesPerView: 3
					}
				}
			});
		}

		/*========================================================== 
			PARTNERS SLIDER
		========================================================== */
		if ($('#partners-slider').length) {
			var swiper = new Swiper('#partners-slider', {
				slidesPerView: 6,
				spaceBetween: 10,
				mousewheel: true,
				autoplay: {
					delay: 2500
				},
				speed: 1000,
				loop: true,
				breakpoints: {
					414: {
						slidesPerView: 2,
						mousewheel: false
					},
					767: {
						slidesPerView: 3,
						mousewheel: false
					},
					1024: {
						slidesPerView: 4
					},
					1380: {
						slidesPerView: 5
					}
				}
			});
		}

		/*========================================================== 
			LOCAL EXPERT SLIDER
		========================================================== */

		if ($('.local-expert-slider').length) {
			var swiper = new Swiper('.local-expert-slider', {
				slidesPerView: 1,
				autoplay: {
					delay: 5000
				},
				speed: 1000,
				loop: true,
				pagination: {
					el: '.swiper-pagination',
					clickable: true,
				}
			});
		}

		/*========================================================== 
			PORTFOLIO SLIDER
		========================================================== */
		if ($('.portfolio-slider').length) {
			var swiper = new Swiper('.portfolio-slider', {
				slidesPerView: 4,
				mousewheel: true,
				autoplay: {
					delay: 3000
				},
				speed: 1000,
				loop: true,
				navigation: {
					nextEl: '.swiper-button-next',
					prevEl: '.swiper-button-prev',
				},
				breakpoints: {
					414: {
						slidesPerView: 1,
						mousewheel: false
					},
					767: {
						slidesPerView: 2,
						mousewheel: false
					},
					768: {
						slidesPerView: 2
					},
					1024: {
						slidesPerView: 3
					}
				}
			});
		}

		/*========================================================== 
			VERTICAL SLIDER
		========================================================== */

		if ($('.portfolio-vertical').length) {
			var swiper = new Swiper('.portfolio-vertical', {
				slidesPerView: 1,
				mousewheel: true,
				autoplay: {
					delay: 5000
				},
				direction: 'vertical',
				loop: true,
				speed: 1000,
				navigation: {
					nextEl: '.swiper-button-next',
					prevEl: '.swiper-button-prev',
				}
			});
		}

		/*========================================================== 
			VACATION SLIDER
		========================================================== */

		if ($('.vacation-slider').length) {
			var swiper = new Swiper('.vacation-slider', {
				direction: 'vertical',
				pagination: {
					el: '.swiper-pagination',
					clickable: true,
				},
				mousewheel: true,
				speed: 1000,
				on: {
					slideChange: function () {
						if ($('.datetimecls').length) {
							$('.datetimecls').data('daterangepicker').hide();
						}
						if ($(".nice-sel").hasClass("open")) {
							$('.nice-sel').removeClass('open');
						}
					},
				}

			});
		}

		/*========================================================== 
			DATERANGE PICKER
		========================================================== */
		if (jQuery(".datetimecls").length) {
			var today = new Date();
			var dd = today.getDate();
			var mm = today.getMonth() + 1; //January is 0! 
			var yyyy = today.getFullYear();
			if (dd < 10) {
				dd = '0' + dd
			}
			if (mm < 10) {
				mm = '0' + mm
			}
			var today = dd + '/' + mm + '/' + yyyy;
			$('.datetimecls').daterangepicker({
				autoApply: true,
				minDate: today,
				opens: 'center',
				startDate: moment().startOf('hour').add(7, 'days'),
				endDate: moment().startOf('hour').add(10, 'days'),
				locale: {
					format: 'DD/MM/YYYY'
				}
			}).on('apply.daterangepicker', function (ev, picker) {
				var strt = picker.startDate.format('DD/MM/YYYY');
				var endd = picker.endDate.format('DD/MM/YYYY');
				if (strt == endd) {
					var txtTo = picker.endDate.startOf('hour').add(1, 'days');
					var txtend = txtTo.format('DD/MM/YYYY');
					$('.datetimecls').data('daterangepicker').setEndDate(txtend);
				}
			});
		}

		/*========================================================== 
			GUEST COUNT PLUS MINUS
		========================================================== */
		if (jQuery(".guests-count").length) {
			$(".guests-count .plus").on("click", function () {
				var qtyInput = $(this).parents('.guests-count').find('input');
				var maxval = parseInt($(this).parents('.guests-count').find('input').attr('data-max'));
				var val = parseInt(qtyInput.val());
				if (maxval <= val) {
					var newVal = val;
				} else {
					var newVal = val + 1;
				}
				qtyInput.val(newVal);
			});

			$(".guests-count .minus").on("click", function () {
				var qtyInput = $(this).parents('.guests-count').find('input');
				var minval = parseInt($(this).parents('.guests-count').find('input').attr('data-min'));
				var val = parseInt(qtyInput.val());
				if (val <= minval) {
					var newVal = minval;
				} else {
					var newVal = val - 1;
				}
				qtyInput.val(newVal);
			});
		}

		/*========================================================== 
			SEARCH RESULT PAGE SCRIPT
		========================================================== */
		if ($('.price-slider').length) {
			$(".price-slider").ionRangeSlider({
				skin: "round",
				type: "double",
				min: 89,
				max: 1650,
				from: 0,
				to: 1650,
				prefix: "$"
			});
		}

		if ($('.duration-slider').length) {
			$(".duration-slider").ionRangeSlider({
				skin: "round",
				type: "double",
				min: 1,
				max: 12,
				from: 1,
				to: 12,
				prefix: "N "
			});
		}

		if ($('.toggle-category').length) {
			$(".toggle-check").click(function () {
				if ($(this).hasClass("checked")) {
					$(this).removeClass('checked');
					$(this).prop('checked', false);
				} else {
					$(".toggle-check").removeClass('checked');
					$(this).addClass('checked');
				}
			});
		}

		if ($('#sidebar').length) {
			if (screencheck(767)) {} else {
				$('#sidebar').stickySidebar({
					topSpacing: 100,
					bottomSpacing: 100
				});
			}

			$(window).on('resize', function () {
				if (screencheck(767)) {
					$('#sidebar').stickySidebar('destroy');
				} else {
					$('.filter-section .sidebar-item .search-form, .filter-section .sidebar-item .search-price-filter').show();
					$('#sidebar').stickySidebar({
						topSpacing: 100,
						bottomSpacing: 0
					});
				}
			}).resize();
		}

		if ($('.result-view-option').length) {
			$(".result-view-option > .result-sort-icon").click(function () {
				run_waitMe('.search-result', 'bookingslide');
				if (!$(this).hasClass("active")) {
					$(".result-view-option > .result-sort-icon").removeClass('active');
					$(this).addClass("active");
					var val = $(this).attr('data-value');
					if (!$(this).hasClass(val + "-view")) {
						$('.tour-list-item > .tour-list-item-img').hide();
						if (val == 'list') {
							$(".filter-result-main").removeClass('grid-view').addClass('list-view');
							$(".filter-result-item").removeClass('col-6 col-lg-4 col-md-6 col-sm-6 col-xs-6').addClass('col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12');
						} else {
							$(".filter-result-main").removeClass('list-view').addClass('grid-view');
							$(".filter-result-item").removeClass('col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12').addClass('col-6 col-lg-4 col-md-6 col-sm-6 col-xs-6');
						}
						setTimeout(function () {
							$('.tour-list-item > .tour-list-item-img').show();
						}, 250);
					}
				}
				setTimeout(function () {
					$('.search-result').waitMe('hide');
				}, 250);

			});
		}

		/*========================================================== 
			TOUR DETAILS PAGE SCRIPT
		========================================================== */
		if (jQuery(".dateonlycls").length) {
			var today = new Date();
			var dd = today.getDate();
			var mm = today.getMonth() + 1; //January is 0! 
			var yyyy = today.getFullYear();
			if (dd < 10) {
				dd = '0' + dd
			}
			if (mm < 10) {
				mm = '0' + mm
			}
			var today = dd + '/' + mm + '/' + yyyy;
			$('.dateonlycls').daterangepicker({
				autoApply: true,
				minDate: today,
				opens: 'center',
				singleDatePicker: true,
				showDropdowns: true,
				locale: {
					format: 'DD/MM/YYYY'
				}
			});
		}

		if ($('#tourbooking').length) {
			if (screencheck(767)) {} else {
				$('#tourbooking').stickySidebar({
					topSpacing: 30,
					bottomSpacing: 10
				});
			}

			$(window).on('resize', function () {
				if (screencheck(767)) {
					$('#tourbooking').stickySidebar('destroy');
				} else {
					$('.tour-booking .booking-form').show();
					$('#tourbooking').stickySidebar({
						topSpacing: 30,
						bottomSpacing: 10
					});
				}
			}).resize();
		}

		if ($('.btn-gallery-popup').length) {
			$('a.btn-gallery-popup').on('click', function (event) {
				event.preventDefault();
				var gallery = $(this).attr('href');
				$(gallery).magnificPopup({
					delegate: 'a',
					type: 'image',
					gallery: {
						enabled: true
					}
				}).magnificPopup('open');
			});
		}

		// Video Popup
		if ($('.popup-youtube, .popup-vimeo, .popup-gmaps').length) {
			$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
				type: 'iframe'
			});
		}

		if ($('.social-share').length) {
			$(".social-share").click(function (e) {
				$('.social-icons').not($(this).next(".social-icons")).each(function () {
					$(this).removeClass("active");
				});
				$(this).next(".social-icons").toggleClass("active");
			});
		}

		// Read More
		if ($('.read-more').length) {
			$('.read-more > .read-more__expand .read-more-btn').on('click', function () {
				$(this).parents('.read-more').toggleClass('collapsed');
				$(this).text($(this).text() == '+ Read More' ? '- Read Less' : '+ Read More');
			});
		}

		// Image Popup
		if ($('.popup-link').length) {
			$('.popup-link').magnificPopup({
				type: 'image'
			});
		}

		// Tour Page Map
		if ($('.tour-map').length) {
			var locations = [
				['<b>England Branch,</b><br> International city', -33.80010128657071, 151.28747820854187, 2, "http://www.wefixitsolutions.com/roamers/images/icons/pin.png"],
				['<b>Greec Branch,</b><br> International city', -33.950198, 151.259302, 1, "http://www.wefixitsolutions.com/roamers/images/icons/pin.png"]
			];
			var tourmap = new google.maps.Map(document.getElementById('tour-map'), {
				zoom: 10,
				center: new google.maps.LatLng(-33.92, 151.25),
				mapTypeId: google.maps.MapTypeId.ROADMAP
			});
			var infowindow = new google.maps.InfoWindow();
			var marker, i;
			for (i = 0; i < locations.length; i++) {
				marker = new google.maps.Marker({
					position: new google.maps.LatLng(locations[i][1], locations[i][2]),
					icon: locations[i][4],
					map: tourmap
				});
				google.maps.event.addListener(marker, 'click', (function (marker, i) {
					return function () {
						infowindow.setContent(locations[i][0]);
						infowindow.open(tourmap, marker);
					}
				})(marker, i));
			}
		}

		/*========================================================== 
			COMING SOON PAGE SCRIPT
		========================================================== */
		if ($('#DateCountdown').length) {
			$("#DateCountdown").TimeCircles({
				"animation": "smooth",
				"bg_width": 1,
				"fg_width": 0.02,
				"circle_bg_color": "rgba(0,0,0,0.05)",
				"time": {
					"Days": {
						"text": "Days",
						"color": "#1abc9c",
						"show": true
					},
					"Hours": {
						"text": "Hours",
						"color": "#5191FA",
						"show": true
					},
					"Minutes": {
						"text": "Minutes",
						"color": "#8e44ad",
						"show": true
					},
					"Seconds": {
						"text": "Seconds",
						"color": "#f39c12",
						"show": true
					}
				}
			});
		}

		/*========================================================== 
			CONTACT PAGE SCRIPT
		========================================================== */

		if ($('.contact-map').length) {
			var locations = [
				['<b>England Branch,</b><br> International city', -33.80010128657071, 151.28747820854187, 2, "http://www.wefixitsolutions.com/roamers/images/icons/pin.png"],
				['<b>Greec Branch,</b><br> International city', -33.950198, 151.259302, 1, "http://www.wefixitsolutions.com/roamers/images/icons/pin.png"]
			];
			var tourmap = new google.maps.Map(document.getElementById('contact-map'), {
				zoom: 10,
				center: new google.maps.LatLng(-33.92, 151.25),
				mapTypeId: google.maps.MapTypeId.ROADMAP
			});
			var infowindow = new google.maps.InfoWindow();
			var marker, i;
			for (i = 0; i < locations.length; i++) {
				marker = new google.maps.Marker({
					position: new google.maps.LatLng(locations[i][1], locations[i][2]),
					icon: locations[i][4],
					map: tourmap
				});
				google.maps.event.addListener(marker, 'click', (function (marker, i) {
					return function () {
						infowindow.setContent(locations[i][0]);
						infowindow.open(tourmap, marker);
					}
				})(marker, i));
			}
		}

	});
})(jQuery, window, document);