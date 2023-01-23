(function ($, w, d, h, b) {
	$(document).ready(function () {

		/**
		 * Construct.
		 */
		function __construct() {
			popup();
			burgerMenu();
			onScrollFixed();
			initNavigation();
			team();
			cta();
			communities();
			properties();
			testimonials();
			floating_scroll();
			AOS.init({ disable: 'mobile' });
		}

		function popup() {
			const $popupBody = $('.glob-popup ');
			const $popupClose = $('.glob-popup-close');
			const $popuContainer = $('.glob-popup-container');

			let mouse_is_inside = false;

			$popuContainer.hover(function () {
				mouse_is_inside = true;
			}, function () {
				mouse_is_inside = false;
			});





			$popupClose.on('click', function () {
				$popupBody.fadeOut();
			});

			$popupBody.on('click', function () {
				if (mouse_is_inside == false) {
					$popupBody.fadeOut();
				}
			});



			$popupBody.fadeIn();


		}
		function burgerMenu() {

			const $burgerButton = $('.burger-menu');
			const $burgerBody = $('.expanded-menu');
			const $menuContainer = $('.expanded-menu-container');
			const $burgerClose = $('.expanded-close');

			$(w).on("load", function () {
				$menuContainer.mCustomScrollbar();
			});

		
			$burgerButton.on('click', function () {
				$(b).addClass('expanded-opened');
				$burgerBody.addClass('open');
			});

			$burgerClose.on('click', function () {
				$(b).removeClass('expanded-opened');
				$burgerBody.removeClass('open');
			});

		}
		function onScrollFixed() {

			this.onScrollFixed = function () {
				const $header = $('.header');

				$(w).on('load scroll', function () {
					let currentScroll = w.pageYOffset || d.documentElement.scrollTop;
					let isDesktop = w.matchMedia('(min-width: 992px)').matches;

					if (isDesktop) {
						if (currentScroll > 0) {
							$header.addClass('fh-show');
						}
						else {
							$header.removeClass('fh-show');
						}
					}
					else {
						$header.removeClass('fh-show');
					}

				});
			}
			this.onScrollFixed();
		}

		function initNavigation() {
			const $nav = $('#nav');
			if ($nav.length > 0) $nav.navTabDoubleTap();
		}

		function team() {
			
			var teams = new Splide('.hp-teams', {
				perPage: 3,
				type: 'loop',
				padding: {
					right: '125px'
				},
				pagination: false,
				arrows: false,
				breakpoints: {
					640: {
						perPage: 2,
					},
					480: {
						perPage: 1,
					},
				},
			});
			$('.mtt-pagination button').on('click', function (e) {
				e.preventDefault();
				var $this = jQuery(this);
				var type = $this.attr('data-arrow');

				// for prev
				if (type == 'prev') {
					teams.go('<');
				}
				if (type == 'next') {
					teams.go('>');
				}
			});

			teams.mount();
		}

		function cta() {
			
			const ctaLinks = $('.cta-links a');
		
			ctaLinks.hover(function () {
				const ctaBg = $(this).data('slide');
				$('.cta-slide').removeClass('active');
				$('.cta-' + ctaBg + '').addClass('active'); 
			}, function () {
				
				$('.cta-slide').removeClass('active');
				$('.cta-slide:first').addClass('active');				
			});

		}

		function properties() {

			var property = new Splide('.fp-lists', {
				perPage: 1,
				type: 'loop',
				grid: {
					rows: 2,
					cols: 2,
				},
				pagination: false,
				arrows: false,
				breakpoints: {
					991: {
						grid: {
							rows: 2,
							cols: 1,
						},
					}
				},
				
			});


			$('.fp-pagination button').on('click', function (e) {
				e.preventDefault();
				var $this = jQuery(this);
				var type = $this.attr('data-arrow');

			
				// for prev
				if (type == 'prev') {
					property.go('<');
				}
				if (type == 'next') {
					property.go('>');
				}
			});

			property.mount(window.splide.Extensions);
		}

		function communities() {

			var community = new Splide('.fc-lists', {
				perPage: 1,
				type: 'loop',
				grid: {
					rows: 2,
					cols: 3,
				},
				pagination: false,
				arrows: false,
				breakpoints: {
					991: {
						grid: {
							rows: 3,
							cols: 1,
						},
					}
				},
			});


			$('.fc-pagination button').on('click', function (e) {
				e.preventDefault();
				var $this = jQuery(this);
				var type = $this.attr('data-arrow');


				// for prev
				if (type == 'prev') {
					community.go('<');
				}
				if (type == 'next') {
					community.go('>');
				}
			});

			community.mount(window.splide.Extensions);
		}
		
		function testimonials() {
			var testimonial = new Splide('.testi-lists', {
				perPage: 1,
				type: 'loop',
				pagination: false,
				arrows: false
			});
			$('.testi-pagination button').on('click', function (e) {
				e.preventDefault();
				var $this = jQuery(this);
				var type = $this.attr('data-arrow');

				// for prev
				if (type == 'prev') {
					testimonial.go('<');
				}
				if (type == 'next') {
					testimonial.go('>');
				}
			});

			testimonial.mount();
		}

		function floating_scroll() {

			const callback = (entries) => {
				entries.forEach(
					(entry) => {
						if (entry.isIntersecting) {

							$('.floating-smi').addClass('floating-dark');

						} else {

							$('.floating-smi').removeClass('floating-dark');

						}
					}
				);
			}

			const observerOptions = {
				root: null,
				rootMargin: '-50% -50%',
				threshold: [0, 0.5],
			};

			let observer = new IntersectionObserver(callback, observerOptions);

			const animationItems = document.querySelectorAll('.accent-bg');

			animationItems.forEach(item => {
				observer.observe(item)
			});

		}
		/**
		 * Instantiate
		 */
		__construct();

	});

	$(window).on('load', function () {
		$('body').addClass('site-loaded');
	});

})(jQuery, window, document, 'html', 'body');