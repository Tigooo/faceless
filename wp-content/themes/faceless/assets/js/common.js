// Fancybox.bind('[data-fancybox]', {});


let slideone = document.querySelector('.home__carousel')
if (slideone) {
	var projects = new Swiper(".home__carousel", {
		slidesPerView: 4,
		spaceBetween: 20,
		navigation: {
			nextEl: ".home__next",
			prevEl: ".home__prev",
			disabledClass: 'home__disabled'
		},
		breakpoints: {
			300: {
				slidesPerView: 1,
			},
			576: {
				slidesPerView: 2.5,
			},
			1250: {
				slidesPerView: 3.5,
			}
		}
	});
}


jQuery(document).ready(function ($) {
	$(document).on('click', '.menu-item-has-children a', function () {
		$(this).next('.header__sub-menu').toggleClass('header__sub-menu--show')
	})

	// SUBMENU ITEM HOVER 
	$(document).on('mouseenter', '.header__submenu-btn', function () {

		$('.header__submenu-btn').removeClass('header__submenu-btn--active')

		// Удаляем все active-классы у кнопок
		$('.header__submenu-btn')
			.removeClass(function () {
				return $(this).data('active');
			});

		var contentName = $(this).data('content');
		var activeName = $(this).data('active');

		// Добавляем активный класс текущей кнопке
		$(this).addClass('header__submenu-btn--active');

		// Переключаем контент
		$('.header__submenu-content')
			.removeClass('header__submenu-content--active')
			.filter(function () {
				return $(this).data('content') === contentName;
			})
			.addClass('header__submenu-content--active');

		$('.header__sub-menucontent')
			.removeClass('header__sub-menucontent--active')
			.filter(function () {
				return $(this).data('content') === contentName;
			})
			.addClass('header__sub-menucontent--active');

	});

	// BURDER MENU CLICK
	$(document).on('click', '.header__burgerbtn', function(){
		$('.header__row').toggleClass('header__row--active')
		$('.header__burgerbtn-row').toggleClass('header__burgerbtn-box--show')
		$('.header__burgerbtn-close').toggleClass('header__burgerbtn-box--show')
	})

	// SET SUBMENU ICONS COLOR
	$('.header__submenu-icon').each(function() {
		const color = $(this).data('color');
		$(this).find('svg path').css('fill', color);
	});





})
