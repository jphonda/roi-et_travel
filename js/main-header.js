"use strict";
//Wrapping all JavaScript code into a IIFE function for prevent global variables creation
(function($){
var $body = $('body');
var $window = $(window);
function menuHideExtraElements() {
		
		//cleaneng changed elements
		$('.sf-more-li, .sf-logo-li').remove();
		var windowWidth = $('body').innerWidth();
		
		$('.sf-menu').each(function(){
			var $thisMenu = $(this);
			var $menuWraper = $thisMenu.closest('.top-nav');
			$menuWraper.attr('style', '');
			if (windowWidth > 1199) {
				//grab all main menu first level items 
				var $menuLis = $menuWraper.find('.sf-menu > li');
				$menuLis.removeClass('sf-xl-hidden');

				var $headerLogoCenter = $thisMenu.closest('.header_logo_center');
				var logoWidth = 0;
				var summaryLiWidth = 0;
				
				if ( $headerLogoCenter.length ) {
					var $logo = $headerLogoCenter.find('.logo');
					// 30/2 - left and right margins
					logoWidth = $logo.outerWidth(true) + 70;
				}

				// var wrapperWidth = $('.sf-menu').width();
				var wrapperWidth = $menuWraper.outerWidth(true);
				$menuLis.each(function(index) {
					//4 - 4px additional width for inline-block LI element
					var elementWidth = $(this).outerWidth() +4;
					summaryLiWidth += elementWidth;
					if(summaryLiWidth >= (wrapperWidth-logoWidth)) {
						var $newLi = $('<li class="sf-more-li"><a>...</a><ul></ul></li>');
						$($menuLis[index - 1 ]).before($newLi);
						var newLiWidth = $($newLi).outerWidth(true);
						var $extraLiElements = $menuLis.filter(':gt('+ ( index - 2 ) +')');
						$extraLiElements.clone().appendTo($newLi.find('ul'));
						$extraLiElements.addClass('sf-xl-hidden');
						return false;
					}
				});

				//processing center logo
				if ( $headerLogoCenter.length ) {
					var $menuLisVisible = $headerLogoCenter.find('.sf-menu > li:not(.sf-xl-hidden)');
					var menuLength = $menuLisVisible.length;
					var summaryLiVisibleWidth = 0;
					$menuLisVisible.each(function(){
						summaryLiVisibleWidth += $(this).outerWidth();
					});

					var centerLi = Math.floor( menuLength / 2 );
					if ( (menuLength % 2 === 0) ) {
						centerLi--;
					}
					var $liLeftFromLogo = $menuLisVisible.eq(centerLi);
					$liLeftFromLogo.after('<li class="sf-logo-li"><a href="#">&nbsp;</a></li>');
					$headerLogoCenter.find('.sf-logo-li').width(logoWidth);
					var liLeftRightDotX = $liLeftFromLogo.offset().left + $liLeftFromLogo.outerWidth();
					var logoLeftDotX = windowWidth/2 - logoWidth/2;
					var menuLeftOffset = liLeftRightDotX - logoLeftDotX;
					$menuWraper.css({'left': -menuLeftOffset})
				}
				
			}// > 991
		}); //sf-menu each
	} //menuHideExtraElements

	function initMegaMenu(timeOut) {
		var $megaMenu = $('.top-nav .mega-menu');
		if($megaMenu.length) {
			setTimeout(function () {

				var windowWidth = $('body').innerWidth();
				if (windowWidth > 991) {
					$megaMenu.each(function(){
						var $thisMegaMenu = $(this);
						//temporary showing mega menu to proper size calc
						$thisMegaMenu.css({'display': 'block', 'left': 'auto'});

						//checking for sticked side header
						var stickedSideHeaderWidth = 0;
						var $stickedSideHeader = $('.header_side_sticked');
						if($stickedSideHeader.length && $stickedSideHeader.hasClass('active-slide-side-header')) {
							stickedSideHeaderWidth = $stickedSideHeader.outerWidth(true);
							if($stickedSideHeader.hasClass('header_side_right')) {
								stickedSideHeaderWidth = -stickedSideHeaderWidth;
							}
							windowWidth = windowWidth - stickedSideHeaderWidth;
						}
						var thisWidth = $thisMegaMenu.outerWidth();
						var thisOffset = $thisMegaMenu.offset().left - stickedSideHeaderWidth;
						var thisLeft = (thisOffset + (thisWidth/2)) - windowWidth/2;
						$thisMegaMenu.css({'left' : -thisLeft, 'display': 'none'});
						if(!$thisMegaMenu.closest('ul').hasClass('nav')) {
							$thisMegaMenu.css('left', '');
						}
					});
				}
			}, timeOut);

		}
	}
	//function that initiating template plugins on window.load event
	function documentReadyInit() {
		////////////
		//mainmenu//
		////////////
		if ($().scrollbar) {
			$('[class*="scrollbar-"]').scrollbar();
			//fix for firefox on mac
			if ( /mac/i.test(navigator.platform) && /firefox/i.test(navigator.userAgent) ) {
				jQuery('[class*="scrollbar-"]').addClass('scroll-content').wrap('<div class="scroll-wrapper firefox-on-macos"></div>');
			}
		}
		if ($().superfish) {
			$('ul.sf-menu').superfish({
				popUpSelector: 'ul:not(.mega-menu ul), .mega-menu ',
				delay:       700,
				animation:   {opacity:'show', marginTop: 0},
				animationOut: {opacity: 'hide',  marginTop: 5},
				speed:       200,
				speedOut:    200,
				disableHI:   false,
				cssArrows:   true,
				autoArrows:  true,
				onInit: function () {
					var $thisMenu = $(this);
					$thisMenu.find('.sf-with-ul').after('<span class="sf-menu-item-mobile-toggler"/>');
					$thisMenu.find('.sf-menu-item-mobile-toggler').on('click', function (e) {
						var $parentLi = $(this).parent();
						if($parentLi.hasClass('sfHover')) {
							$parentLi.superfish('hide');
						} else {
							$parentLi.superfish('show');
						}
					});
				}

			});
			$('ul.sf-menu-side').superfish({
				popUpSelector: 'ul:not(.mega-menu ul), .mega-menu ',
				delay:       500,
				animation:   {opacity:'show', height: 100 +'%'},
				animationOut: {opacity: 'hide',  height: 0},
				speed:       400,
				speedOut:    300,
				disableHI:   false,
				cssArrows:   true,
				autoArrows:  true
			});
		}


		//toggle mobile menu
		$('.page_header .toggle_menu, .page_toplogo .toggle_menu').on('click', function(){
			$(this)
				.toggleClass('mobile-active')
				.closest('.page_header')
				.toggleClass('mobile-active')
				.end()
				.closest('.page_toplogo')
				.next()
				.find('.page_header')
				.toggleClass('mobile-active');
		});

		$('.sf-menu a').on('click', function(){
			var $this = $(this);
			//If this is a local link or item with sumbenu - not toggling menu
			if (($this.hasClass('sf-with-ul')) || !($this.attr('href').charAt(0) === '#')) {
				return;
			}
			$this
				.closest('.page_header')
				.toggleClass('mobile-active')
				.find('.toggle_menu')
				.toggleClass('mobile-active');
		});

		//side header processing
		var $sideHeader = $('.page_header_side');
		// toggle sub-menus visibility on menu-click
		$('ul.menu-click').find('li').each(function(){
			var $thisLi = $(this);
			//toggle submenu only for menu items with submenu
			if ($thisLi.find('ul').length)  {
				$thisLi
					.append('<span class="toggle_submenu color-darkgrey"></span>')
					//adding anchor
					.find('.toggle_submenu, > a')
					.on('click', function(e) {
						var $thisSpanOrA = $(this);
						//if this is a link and it is already opened - going to link
						if (($thisSpanOrA.attr('href') === '#') || !($thisSpanOrA.parent().hasClass('active-submenu'))) {
							e.preventDefault();
						}
						if ($thisSpanOrA.parent().hasClass('active-submenu')) {
							$thisSpanOrA.parent().removeClass('active-submenu');
							return;
						}
						$thisLi.addClass('active-submenu').siblings().removeClass('active-submenu');
					});
			} //eof sumbenu check
		});
		if ($sideHeader.length) {
			$('.toggle_menu_side').on('click', function(){
				var $thisToggler = $(this);
				$thisToggler.toggleClass('active');
				if ($thisToggler.hasClass('header-slide')) {
					$sideHeader.toggleClass('active-slide-side-header');
				} else {
					if($thisToggler.parent().hasClass('header_side_right')) {
						$body.toggleClass('active-side-header slide-right');
					} else {
						$body.toggleClass('active-side-header');
					}
					$body.parent().toggleClass('html-active-push-header');
				}
				//fixing mega menu and aside affix on toggling side sticked header
				if($thisToggler.closest('.header_side_sticked').length) {
					initMegaMenu(600);
					var $affixAside = $('.affix-aside');
					if($affixAside.length) {
						$affixAside.removeClass("affix affix-bottom").addClass("affix-top").css({"width": "", "left": ""}).trigger('affix-top.bs.affix');
						setTimeout(function () {
							$affixAside.removeClass("affix affix-bottom").addClass("affix-top").css({"width": "", "left": ""}).trigger('affix-top.bs.affix');
						}, 10);
					}
				}
			});
			//hidding side header on click outside header
			$body.on('mousedown touchstart', function( e ) {
				if ( !($(e.target).closest('.page_header_side').length) && !($sideHeader.hasClass('header_side_sticked')) ) {
					$sideHeader.removeClass('active-slide-side-header');
					$body.removeClass('active-side-header slide-right');
	                $body.parent().removeClass('html-active-push-header');
					var $toggler = $('.toggle_menu_side');
					if(($toggler).hasClass('active')) {
						$toggler.removeClass('active');
					}
				}
			});
		} //sideHeader check

		//1 and 2/3/4th level offscreen fix
		var MainWindowWidth = $window.width();
		$window.on('resize', function(){
			MainWindowWidth = $(window).width();
		});
		//2/3/4 levels
		$('.top-nav .sf-menu').on('mouseover', 'ul li', function(){
			// $('.mainmenu').on('mouseover', 'ul li', function(){
			if(MainWindowWidth > 991) {
				var $this = $(this);
				// checks if third level menu exist
				var subMenuExist = $this.find('ul').length;
				if( subMenuExist > 0){
					var subMenuWidth = $this.find('ul, div').first().width();
					var subMenuOffset = $this.find('ul, div').first().parent().offset().left + subMenuWidth;
					// if sub menu is off screen, give new position
					if((subMenuOffset + subMenuWidth) > MainWindowWidth){
						var newSubMenuPosition = subMenuWidth + 0;
						$this.find('ul, div').first().css({
							left: -newSubMenuPosition,
						});
					} else {
						$this.find('ul, div').first().css({
							left: '100%',
						});
					}
				}
			}
			//1st level
		}).on('mouseover', '> li', function(){
			if(MainWindowWidth > 991) {
				var $this = $(this);
				var subMenuExist = $this.find('ul').length;
				if( subMenuExist > 0){
					var subMenuWidth = $this.find('ul').width();
					var subMenuOffset = $this.find('ul').parent().offset().left;
					// if sub menu is off screen, give new position
					if((subMenuOffset + subMenuWidth) > MainWindowWidth){
						var newSubMenuPosition = MainWindowWidth - (subMenuOffset + subMenuWidth);
						$this.find('ul').first().css({
							left: newSubMenuPosition,
						});
					}
				}
			}
		});

		/////////////////////////////////////////
		//single page localscroll and scrollspy//
		/////////////////////////////////////////
		var navHeight = $('.page_header').outerHeight(true);
		//if sidebar nav exists - binding to it. Else - to main horizontal nav
		if ($('.mainmenu_side_wrapper').length) {
			$body.scrollspy({
				target: '.mainmenu_side_wrapper',
				offset: navHeight
			});
		} else if ($('.top-nav').length) {
			$body.scrollspy({
				target: '.top-nav',
				offset: navHeight
			})
		}
		if ($().localScroll) {
			$('.top-nav > ul, .mainmenu_side_wrapper > ul, #land,  .comments-link').localScroll({
				duration:900,
				easing:'easeInOutQuart',
				offset: -navHeight+40
			});
		}
		//search modal
		$(".search_modal_button").on('click', function(e){
			e.preventDefault();
			$('#search_modal').modal('show').find('input').first().focus();
		});

	}

	//function that initiating template plugins on window.load event
	function windowLoadInit() {


		////////////////////
		//header processing/
		////////////////////
		//stick header to top
		//wrap header with div for smooth sticking
		var $header = $('.page_header').first();
		var boxed = $header.closest('.boxed').length;
		var headerSticked = $('.header_side_sticked').length;
		if ($header.length) {
			//hiding main menu 1st levele elements that do not fit width
			menuHideExtraElements();
			//mega menu
			initMegaMenu(1);
			//wrap header for smooth stick and unstick
			var headerHeight = $header.outerHeight();
			$header.wrap('<div class="page_header_wrapper"></div>');
			var $headerWrapper = $('.page_header_wrapper');
			if (!boxed) {
				$headerWrapper.css({height: headerHeight});
			}

			

			//get offset
			var headerOffset = 0;
			//check for sticked template headers
			if (!boxed && !($headerWrapper.css('position') === 'fixed')) {
				headerOffset = $header.offset().top;
			}

			//for boxed layout - show or hide main menu elements if width has been changed on affix
			$header.on('affixed-top.bs.affix affixed.bs.affix affixed-bottom.bs.affix', function ( e ) {
				if( $header.hasClass('affix-top') ) {
					$headerWrapper.removeClass('affix-wrapper affix-bottom-wrapper').addClass('affix-top-wrapper');
					//cs to ls when affixed
					// if($header.hasClass('cs')) {
					// 	$header.removeClass('ls');
					// }
				} else if ( $header.hasClass('affix') ) {
					$headerWrapper.removeClass('affix-top-wrapper affix-bottom-wrapper').addClass('affix-wrapper');
					//cs to ls when affixed
					// if($header.hasClass('cs')) {
					// 	$header.addClass('ls');
					// }
				} else if ( $header.hasClass('affix-bottom') ) {
					$headerWrapper.removeClass('affix-wrapper affix-top-wrapper').addClass('affix-bottom-wrapper');
				} else {
					$headerWrapper.removeClass('affix-wrapper affix-top-wrapper affix-bottom-wrapper');
				}

				//calling this functions disable menu items animation when going from affix to affix-top with centered logo inside
				//in boxed layouts header is always fixed
				if (boxed && !($header.css('position') === 'fixed')) {
					menuHideExtraElements();
					initMegaMenu(1);
				}
				if(headerSticked) {
					initMegaMenu(1);
				}

			});

			//if header has different height on afixed and affixed-top positions - correcting wrapper height
			$header.on('affixed-top.bs.affix', function () {
				// $headerWrapper.css({height: $header.outerHeight()});
			});

			//fixing auto affix bug - toggle affix on click when page is at the top
			$header.on('affix.bs.affix', function(){
				if( !$window.scrollTop() ) return false;
			});

			$header.affix({
				offset: {
					top: headerOffset,
					bottom: -10
				}
			});
		}


		$body.scrollspy('refresh');
	}
	$(document).ready(function() {
		documentReadyInit();
	});

	$window.on('load', function(){
		windowLoadInit();
	}); //end of "window load" event




//end of IIFE function
})(jQuery);