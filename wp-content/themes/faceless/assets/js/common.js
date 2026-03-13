// Fancybox.bind('[data-fancybox]', {});

document.addEventListener("DOMContentLoaded", () => {
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

	//SINGLE VIDEO PLAYER
	let players = new Map();
	let activePlayer = null;
	let pauseTimers = new Map();

	function onYouTubeIframeAPIReady() {

		document.querySelectorAll('.video-wrapper').forEach((wrapper) => {

			const videoId = wrapper.dataset.video;
			const thumbnail = wrapper.querySelector('.video-thumbnail');
			const playerContainer = wrapper.querySelector('.video-player');

			wrapper.addEventListener('click', function (e) {

				const trigger = e.target.closest('.video-thumbnail, .myPlayBtn');
				if (!trigger) return;

				if (!playerContainer.classList.contains('hidden')) return;

				if (activePlayer && activePlayer !== players.get(wrapper)) {
					activePlayer.stopVideo();
				}

				thumbnail.style.display = 'none';
				playerContainer.classList.remove('hidden');

				if (!players.has(wrapper)) {

					const player = new YT.Player(playerContainer, {
						videoId: videoId,
						playerVars: {
							autoplay: 1,
							rel: 0,
							modestbranding: 1
						},
						events: {
							onStateChange: function (event) {

								if (pauseTimers.has(wrapper)) {
									clearTimeout(pauseTimers.get(wrapper));
									pauseTimers.delete(wrapper);
								}

								if (event.data === YT.PlayerState.ENDED) {
									player.stopVideo();
									playerContainer.classList.add('hidden');
									thumbnail.style.display = 'block';
								}

								if (event.data === YT.PlayerState.PAUSED) {
									const timer = setTimeout(() => {
										if (player.getPlayerState() === YT.PlayerState.PAUSED) {
											playerContainer.classList.add('hidden');
											thumbnail.style.display = 'block';
										}
										pauseTimers.delete(wrapper);
									}, 800);

									pauseTimers.set(wrapper, timer);
								}

								if (event.data === YT.PlayerState.PLAYING) {
									activePlayer = player;
								}
							}
						}
					});

					players.set(wrapper, player);
					activePlayer = player;

				} else {
					const player = players.get(wrapper);
					player.playVideo();
					activePlayer = player;
				}

			});

		});
	}

	onYouTubeIframeAPIReady()

	//COPY TEXT IN INNER TEXT EDITOR
	document.querySelectorAll('.copyInerText').forEach((btn) => {
		btn.addEventListener('click', function () {
			const wrapper = btn.closest('.my-8');
			const textEl = wrapper.querySelector('.copiedInnerText');
			if (!textEl) return;

			const text = textEl.innerText;

			const copyIcon = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-copy w-4 h-4 text-white"><rect width="14" height="14" x="8" y="8" rx="2" ry="2"></rect><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path></svg>`;
			const checkIcon = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check w-4 h-4 text-white"><path d="M20 6 9 17l-5-5"></path></svg>`;

			const copySuccess = () => {
				const span = btn.querySelector('span');
				const svgEl = btn.querySelector('svg');

				svgEl.outerHTML = checkIcon;
				span.textContent = 'Copied!';

				setTimeout(() => {
					btn.querySelector('svg').outerHTML = copyIcon;
					span.textContent = 'Copy';
				}, 3000);
			};

			if (navigator.clipboard && navigator.clipboard.writeText) {
				navigator.clipboard.writeText(text).then(copySuccess);
			} else {
				const textarea = document.createElement('textarea');
				textarea.value = text;
				textarea.style.cssText = 'position:fixed;top:-9999px;left:-9999px;opacity:0;';
				document.body.appendChild(textarea);
				textarea.focus();
				textarea.select();
				try {
					document.execCommand('copy');
					copySuccess();
				} catch (e) {
					console.warn('Copy failed:', e);
				}
				document.body.removeChild(textarea);
			}
		});
	});

	//COPY POST URL IN SINGLE POST
	document.querySelectorAll('.copyShareLink').forEach((btn) => {
		btn.addEventListener('click', function () {
			const url = btn.dataset.url;

			const copyIcon = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-copy w-5 h-5"><rect width="14" height="14" x="8" y="8" rx="2" ry="2"></rect><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path></svg>`;
			const checkIcon = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check w-5 h-5"><path d="M20 6 9 17l-5-5"></path></svg>`;

			const showCheck = () => {
				btn.innerHTML = checkIcon;
				setTimeout(() => { btn.innerHTML = copyIcon; }, 2000);
			};

			if (navigator.clipboard && navigator.clipboard.writeText) {
				navigator.clipboard.writeText(url).then(showCheck);
			} else {
				const textarea = document.createElement('textarea');
				textarea.value = url;
				textarea.style.cssText = 'position:fixed;top:-9999px;left:-9999px;opacity:0;';
				document.body.appendChild(textarea);
				textarea.focus();
				textarea.select();
				try { document.execCommand('copy'); showCheck(); } catch (e) {}
				document.body.removeChild(textarea);
			}
		});
	});

	//COPY TOOL URL IN SINGLE TOOL PAGE
	document.querySelectorAll('.copyToolLink').forEach((btn) => {
		btn.addEventListener('click', function () {
			const url = btn.dataset.url;

			const copyIcon = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-copy w-4 h-4 text-muted-foreground hover:text-foreground"> <rect width="14" height="14" x="8" y="8" rx="2" ry="2"></rect> <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"> </path> </svg>`;
			const checkIcon = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check w-4 h-4"><path d="M20 6 9 17l-5-5"></path></svg>`;

			const showCheck = () => {
				btn.innerHTML = checkIcon;
				setTimeout(() => { btn.innerHTML = copyIcon; }, 2000);
			};

			if (navigator.clipboard && navigator.clipboard.writeText) {
				navigator.clipboard.writeText(url).then(showCheck);
			} else {
				const textarea = document.createElement('textarea');
				textarea.value = url;
				textarea.style.cssText = 'position:fixed;top:-9999px;left:-9999px;opacity:0;';
				document.body.appendChild(textarea);
				textarea.focus();
				textarea.select();
				try { document.execCommand('copy'); showCheck(); } catch (e) {}
				document.body.removeChild(textarea);
			}
		});
	});

	// SINGLE POST TABLE OF CONTENT
	const content = document.querySelector('.single__content');
	const tocList = document.querySelectorAll('.tableOfContent');
	let headings = [];

	if (content && tocList.length) {

		headings = content.querySelectorAll('h2, h3, h4');

		if (headings.length) {
			headings.forEach((heading, index) => {
				if (!heading.id) {
					heading.id = heading.textContent
						.trim()
						.toLowerCase()
						.replace(/[^\w\s-]/g, '')
						.replace(/\s+/g, '-')
						.replace(/-+/g, '-') || 'heading-' + index;
				}
			});
		}

	}

    // Заполняем каждый TOC блок
    tocList.forEach(toc => {
        toc.innerHTML = '';

        headings.forEach((heading) => {
            const isH3 = heading.tagName === 'H3';
            const isH4 = heading.tagName === 'H4';

            const a = document.createElement('a');
            a.href = '#' + heading.id;
            a.className = 'block py-2 px-3 rounded-lg text-sm transition-all text-muted-foreground hover:text-foreground hover:bg-muted/50';

            const indent = isH4 ? 'pl-6' : isH3 ? 'pl-3' : '';
            if (indent) {
                a.classList.add(indent);
                a.dataset.indent = indent;
            }

            a.innerHTML = `<span class="flex items-center gap-2">${heading.textContent.trim()}</span>`;
            toc.appendChild(a);
        });
    });

    const setActive = (id) => {
        tocList.forEach(toc => {
            toc.querySelectorAll('a').forEach(link => {
                const isActive = link.getAttribute('href') === '#' + id;

                if (isActive) {
                    link.className = 'block py-2 px-3 rounded-lg text-sm transition-all bg-primary/10 text-primary font-medium';
                    if (link.dataset.indent) link.classList.add(link.dataset.indent);
                    link.querySelector('span').innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-3 h-3"><path d="m9 18 6-6-6-6"></path></svg>${link.querySelector('span').textContent}`;
                } else {
                    link.className = 'block py-2 px-3 rounded-lg text-sm transition-all text-muted-foreground hover:text-foreground hover:bg-muted/50';
                    if (link.dataset.indent) link.classList.add(link.dataset.indent);
                    link.querySelector('span').innerHTML = link.querySelector('span').textContent;
                }
            });
        });
    };

    // Активируем первый пункт по умолчанию
    if (headings[0]) setActive(headings[0].id);

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) setActive(entry.target.id);
        });
    }, {
        rootMargin: '0px 0px -70% 0px',
        threshold: 0
    });

    headings.forEach(h => observer.observe(h));

	//SINGLE POST SCROLL PROGRESS
	const progressBars = document.querySelectorAll('.singleScrollProgress');
	if (progressBars.length && content) {
		window.addEventListener('scroll', function () {
			const rect = content.getBoundingClientRect();
			const contentHeight = content.offsetHeight;
			const windowHeight = window.innerHeight;
			const scrolled = -rect.top;
			const total = contentHeight - windowHeight;
			const percent = Math.min(Math.max((scrolled / total) * 100, 0), 100);

			progressBars.forEach(bar => {
				bar.style.width = percent.toFixed(2) + '%';
			});
		});
	}

	
});


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



	//ACCORDION 
	$(document).on('click', '.single__faqs-btn', function(){
		$('.single__faqs-content').removeClass('single__faqs-content-show')
		$('.single__faqs-arrow').css('transform', 'rotate(180deg)')
		$('.single__faqs-arrow').removeClass('text-primary')
		$('.single__faqs-arrow').addClass('text-muted-foreground')
		$('.single__faqs-btn .single__faqs-num').removeClass('bg-gradient-to-br from-primary to-accent text-white shadow-lg shadow-primary/25')
		$('.single__faqs-btn .single__faqs-num').addClass('bg-muted/50 text-muted-foreground')
		$('.single__faqs-name').removeClass('text-foreground')
		$('.single__faqs-name').addClass('text-muted-foreground')

		$(this).find('.single__faqs-num').addClass('bg-gradient-to-br from-primary to-accent text-white shadow-lg shadow-primary/25')
		$(this).find('.single__faqs-num').removeClass('bg-muted/50 text-muted-foreground')
		$(this).next('.single__faqs-content').addClass('single__faqs-content-show')
		$(this).find('.single__faqs-arrow').css('transform', 'none')
		$(this).find('.single__faqs-arrow').addClass('text-primary')
		$(this).find('.single__faqs-name').addClass('text-foreground')
		$(this).find('.single__faqs-name').removeClass('text-muted-foreground')
	
	})

	//SINGLE TOOL FAQ ITEM CLICK
	$(document).on('click', '.tool__faq-btn', function () {

		const item = $(this).closest('.border');
		const content = item.find('.tool__faq-text');

		if (!item.hasClass('open')) {
			$('.tool__faq-text').slideUp(50);
			$('.border').removeClass('open');
		}

		content.stop().slideToggle(50);
		item.toggleClass('open');

	});

	// AUTHOR PAGE LOAD MORE POSTS
	$(document).on("click", "#more button", function () {

		const btn = $(this);
		const moreButton = btn.data('href');

		// Валидация URL — только относительные или с того же домена
		if (!moreButton || (!moreButton.startsWith('/') && !moreButton.startsWith(window.location.origin))) {
			console.warn('Invalid URL');
			return;
		}

		btn.prop('disabled', true); // Защита от двойного клика
		$('#postsLoader').html("<div class='main-loader main-loader--author'></div>");

		const container = $("#authorPosts");
		const more = $("#more");

		$.ajax({
			type: 'GET',
			url: moreButton,
			dataType: 'html',
			timeout: 10000, // 10 сек таймаут
			success: function (result) {
				const $result = $(result);
				const items = $result.find("#authorPosts").html();
				const newMore = $result.find("#more").html();

				if (items) container.append(items);
				if (newMore) more.html(newMore);
			},
			error: function (xhr, status) {
				console.error('Load more failed:', status);
				more.html('<p>Something went wrong. Please try again.</p>');
			},
			complete: function () {
				$('#postsLoader').html('');
				btn.prop('disabled', false);
			}
		});
	});

	// TOOLS PAGE LOAD MORE POSTS
	$(document).on("click", "#toolsMore button", function () {

		const btn = $(this);
		const moreButton = btn.data('href');

		// Валидация URL — только относительные или с того же домена
		if (!moreButton || (!moreButton.startsWith('/') && !moreButton.startsWith(window.location.origin))) {
			console.warn('Invalid URL');
			return;
		}

		btn.prop('disabled', true); // Защита от двойного клика
		$('#postsLoader').html("<div class='main-loader main-loader--author'></div>");

		const container = $("#tools");
		const more = $("#toolsMore");

		$.ajax({
			type: 'GET',
			url: moreButton,
			dataType: 'html',
			timeout: 10000, // 10 сек таймаут
			success: function (result) {
				const $result = $(result);
				const items = $result.find("#tools").html();
				const newMore = $result.find("#toolsMore").html();

				if (items) container.append(items);
				if (newMore) more.html(newMore);
			},
			error: function (xhr, status) {
				console.error('Load more failed:', status);
				more.html('<p>Something went wrong. Please try again.</p>');
			},
			complete: function () {
				$('#postsLoader').html('');
				btn.prop('disabled', false);
			}
		});
	});

	//CONTACT FORM RADIO CLICK
	function setInquiryValue() {
		const activeText = $('.cform__radio.border-primary h3').text().trim();
		$('.WhatBringsYouHere').val(activeText);
	}

	// При загрузке
	setInquiryValue();
	$('.cform__radio:not(.border-primary) .cform__check').hide();

	$(document).on('click', '.cform__radio', function () {

		// Сброс всех
		$('.cform__radio')
			.removeClass('bg-gradient-subtle border-primary shadow-gradient')
			.addClass('bg-muted/30 border-transparent hover:border-border hover:bg-muted/50');

		$('.cform__radio .inline-flex')
			.removeClass('bg-gradient-main')
			.addClass('bg-gradient-subtle group-hover:scale-110');

		$('.cform__radio .inline-flex svg')
			.removeClass('text-primary-foreground')
			.addClass('text-primary');

		$('.cform__radio .cform__check').hide();

		// Активный
		$(this)
			.removeClass('bg-muted/30 border-transparent hover:border-border hover:bg-muted/50')
			.addClass('bg-gradient-subtle border-primary shadow-gradient');

		$(this).find('.inline-flex')
			.removeClass('bg-gradient-subtle group-hover:scale-110')
			.addClass('bg-gradient-main');

		$(this).find('.inline-flex svg')
			.removeClass('text-primary')
			.addClass('text-primary-foreground');

		$(this).find('.cform__check').show();

		const selectedText = $(this).find('h3').text().trim();
    	$('.WhatBringsYouHere').val(selectedText);

	});
})


