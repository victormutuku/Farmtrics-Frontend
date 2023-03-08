//Selecting Elements from the DOM
const navOpenBtn = document.querySelector('#mobile-open-button');
const navCloseBtn = document.querySelector('#mobile-close-button');
const mobNavContainer = document.querySelector('#mobile-nav-container');
const chevronDown = document.querySelectorAll('.fa-chevron-down');
const chevronUp = document.querySelectorAll('.fa-chevron-up');
const chevronParent = document.querySelectorAll('.chev-parent');
const languages = document.querySelectorAll('#languages');
const typeOfLanguages = document.querySelectorAll('#languages-type');

//Hamburger Menu functionality

const hamburgerMenu = function () {
	navOpenBtn.addEventListener('click', function (e) {
		mobNavContainer.classList.remove('-translate-x-full');
		navCloseBtn.classList.remove('hidden');
		navOpenBtn.classList.add('hidden');
	});

	navCloseBtn.addEventListener('click', function (e) {
		mobNavContainer.classList.add('-translate-x-full');
		navCloseBtn.classList.add('hidden');
		navOpenBtn.classList.remove('hidden');
	});
};

hamburgerMenu();

//Slider Functionality

const slider = function () {
	document.addEventListener('DOMContentLoaded', function () {
		new Swiper('.swiper-container', {
			loop: true,
			slidesPerView: 1,
			spaceBetween: 32,
			autoplay: {
				delay: 8000,
			},
			breakpoints: {
				640: {
					centeredSlides: true,
					slidesPerView: 1.25,
				},
				1024: {
					centeredSlides: false,
					slidesPerView: 1.5,
				},
			},
			navigation: {
				nextEl: '.next-button',
				prevEl: '.prev-button',
			},
		});
	});
};
slider();

//Dropdown Menu functionality
const dropdownMenu = function () {
	chevronParent.forEach(function (el) {
		el.addEventListener('click', function (e) {
			document.querySelectorAll('.ul-hidden').forEach(function (el) {
				el.classList.add('hidden');
				document
					.querySelectorAll('.fa-chevron-down')
					.forEach(function (el) {
						el.classList.remove('hidden');
					});

				document
					.querySelectorAll('.fa-chevron-up')
					.forEach(function (el) {
						el.classList.add('hidden');
					});
			});

			if (e.target.classList.contains('fa-chevron-down')) {
				e.target.nextElementSibling.classList.remove('hidden');
				e.target.classList.add('hidden');
				e.target
					.closest('a')
					.nextElementSibling.classList.remove('hidden');
			}

			if (e.target.classList.contains('fa-chevron-up')) {
				e.target.previousElementSibling.classList.remove('hidden');
				e.target.classList.add('hidden');
				e.target
					.closest('a')
					.nextElementSibling.classList.add('hidden');
			}
		});
	});
};

dropdownMenu();

//Choosing a language functionality
const choosingLanguage = function () {
	typeOfLanguages.forEach(function (el) {
		el.addEventListener('click', function (e) {
			e.preventDefault();
			if (e.target.closest('.lang').classList.contains('lang')) {
				const lang = e.target
					.closest('.lang')
					.querySelector('span').innerHTML;
				languages.forEach(function (el) {
					el.innerHTML = lang;
				});
			}
		});
	});
};

choosingLanguage();
