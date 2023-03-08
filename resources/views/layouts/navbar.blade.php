<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link 
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
			integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"/>
            @vite('resources/css/app.css')
    </head>
    <header class=" h-20 fixed w-full top-0 z-20 "> 

        <nav class="flex h-full md:justify-around justify-between items-center relative w-full bg-white">
            <!-- Mobile Nav Buttons -->
            <button 
                id="mobile-open-button" 
                class="text-4xl focus:outline-none md:hidden
                pl-4 cursor-pointer"> &#9776</button>
            <button 
                id="mobile-close-button" 
                class="hidden text-6xl focus:outline-none md:hidden
                pl-4 cursor-pointer">&times;</button>
            <!-- End of Mobile Nav Buttons -->

            <div class="relative ">
                <h1 class="text-3xl font-bold">
                    <a href="/pricing">Farmtrics </a>
                </h1>
            </div>

            <ul
                class="chev-parent  text-md [&>li>a]:py-5
                [&>li>a]:px-3 md:flex hidden lg:gap-4 lg:mr-10">

                <li class="group relative">
                    <a href="#">
                        Services
                        <i class="fa-solid fa-chevron-down fa-sm"></i>
                        <i class="fa-solid fa-chevron-up hidden"></i>
                    </a>
                    <ul
                        class="ul-hidden hidden absolute top-10 bg-white
                        rounded [&>li>a]:py-1 [&>li>a]:px-3 shadow-md w-56">
                        <li>
                            <a
                                href="#"
                                class="hover:bg-blue-600 flex gap-1 
                                items-center duration-500 transition-all">
                                <span>Retail Execution</span>
                            </a>
                        </li>
                        <li>
                            <a
                                href="#"
                                class="hover:bg-blue-600 flex gap-1 
                                items-center duration-500 transition-all">
                                <span>Mobile Inspection</span>
                            </a>
                        </li>
                        <li>
                            <a
                                href="#"
                                class="hover:bg-blue-600 flex gap-1 
                                items-center duration-500 transition-all">
                                <span>Sales Force Automation</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="group relative">
                    <a href="#">
                        Company 
                        <i class="fa-solid fa-chevron-down fa-sm"></i>
                        <i class="fa-solid fa-chevron-up fa-sm hidden "></i>
                    </a> 
                    <ul
                        class="ul-hidden hidden absolute top-10 bg-white
                        rounded [&>li>a]:py-1 [&>li>a]:px-3 shadow-md w-56">
                        <li>
                            <a
                                href="contact_page.html"
                                class="hover:bg-blue-600 flex gap-1 
                                items-center duration-500 transition-all">
                                <span>Contact Us</span>
                            </a>
                        </li>
                        <li>
                            <a
                                href="#"
                                class="hover:bg-blue-600 flex gap-1 
                                items-center duration-500 transition-all">
                                <span>Mobile Inspection</span>
                            </a>
                        </li>
                        <li>
                            <a 
                                href="#" 
                                class="hover:bg-blue-600 flex gap-1 
                                items-center duration-500 transition-all">
                                <span>Sales Force Automation</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="group relative">
                    <a href="#">
                        <span>Resources </span>
                        <i class="fa-solid fa-chevron-down fa-sm"></i>
                        <i class="fa-solid fa-chevron-up hidden fa-sm"></i>
                    </a>
                    <ul
                        class="ul-hidden hidden absolute top-10 bg-white
                        rounded [&>li>a]:py-1 [&>li>a]:px-3 shadow-md w-56">
                        <li>
                            <a
                                href="#"
                                class="hover:bg-blue-600 flex gap-1 
                                items-center duration-500 transition-all">
                                <span>Usecases</span>
                            </a>
                        </li>
                        <li>
                            <a
                                href="#"
                                class="hover:bg-blue-600 flex gap-1 
                                items-center duration-500 transition-all">
                                <span>Templates</span>
                            </a>
                        </li>
                        <li>
                            <a
                                href="#"
                                class="hover:bg-blue-600 flex gap-1 
                                items-center duration-500 transition-all">
                                <span>Blog</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="group relative ">
                    <a href="pricing.html">Pricing</a>
                </li>
                
                <li class="group relative">
                    <a href="#">
                        <span id="languages">English</span>
                        <i class="fa-solid fa-chevron-down fa-sm"></i>
                        <i class="fa-solid fa-chevron-up fa-sm hidden"></i>
                    </a>
                    <ul
                        class="ul-hidden hidden absolute top-10 bg-white
                        rounded [&>li>a]:py-[12px] [&>li>a]:px-8 shadow-md" id="languages-type">
                        <li>
                            <a
                                href="#"
                                class="flex justify-center gap-1
                                items-center duration-500 transition-all lang">
                                <span>English</span>
                            </a>
                        </li>
                        <li>
                            <a
                                href="#"
                                class="flex justify-center gap-1
                                items-center duration-500 transition-all lang">
                                <span>Français</span>
                            </a>
                        </li>
                        <li>
                            <a
                                href="#"
                                class="flex justify-center gap-1
                                items-center duration-500 transition-all lang">
                                <span>Español</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="bg-forestgreen rounded-[14px] drop-shadow-sm hidden md:block">
                <a href="Login.html" class="px-10 py-3 inline-block text-white">Login</a>
            </div>

        </nav>



        <!--Mobile nav menu-->
        <div 
            id="mobile-nav-container"
            class="md:hidden font-bold absolute bg-forestgreen bg-opacity-80  text-textLight
            w-screen transition duration-400 ease-in-out transform -translate-x-full"> 
            <ul
                class="chev-parent bg-forestgreen bg-opacity-80 
                rounded [&>li>a]:py-5 [&>li>a]:px-8 shadow-md ">
                <li>
                    <a 
                        class="hover:bg-blue-600 flex justify-center 
                        gap-1 items-center duration-500 transition-all" 
                        href="#">
                        UseCases
                        <i class="fa-solid fa-chevron-down"></i>
                        <i class="fa-solid fa-chevron-up hidden"></i>
                    </a>
                    <ul
                        class="ul-hidden hidden bg-secondary rounded 
                        bg-opacity-80 [&>li>a]:py-4 [&>li>a]:px-3 shadow-md w-full">
                        <li>
                            <a
                                href="#"
                                class="hover:bg-blue-600 flex gap-1
                                items-center duration-500 transition-all justify-center">
                                <span>Retail Execution</span>
                                </a>
                        </li>
                        <li>
                            <a
                                href="#"
                                class="hover:bg-blue-600 flex gap-1
                                items-center duration-500 transition-all justify-center">
                                <span>Mobile Inspection</span>
                                </a>
                        </li>
                        <li>
                            <a
                                href="#"
                                class="hover:bg-blue-600 flex gap-1
                                items-center duration-500 transition-all justify-center">
                                <span>Sales Automation</span>
                                </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a 
                        class="hover:bg-blue-600 flex justify-center 
                        gap-1 items-center duration-500 transition-all" 
                        href="#">
                        Templates
                        <i class="fa-solid fa-chevron-down"></i>
                        <i class="fa-solid fa-chevron-up hidden"></i>
                    </a>
                    <ul
                        class="ul-hidden hidden bg-secondary rounded 
                        bg-opacity-80 [&>li>a]:py-4 [&>li>a]:px-3 shadow-md w-full">
                        <li>
                            <a
                                href="#"
                                class="hover:bg-blue-600 flex gap-1
                                items-center duration-500 transition-all justify-center">
                                <span>Retail Execution</span>
                                </a>
                        </li>
                        <li>
                            <a
                                href="#"
                                class="hover:bg-blue-600 flex gap-1
                                items-center duration-500 transition-all justify-center">
                                <span>Mobile Inspection</span>
                                </a>
                        </li>
                        <li>
                            <a
                                href="#"
                                class="hover:bg-blue-600 flex gap-1
                                items-center duration-500 transition-all justify-center">
                                <span>Sales Automation</span>
                                </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a 
                        class="hover:bg-blue-600 flex justify-center 
                        gap-1 items-center duration-500 transition-all" 
                        href="#">
                        Company
                        <i class="fa-solid fa-chevron-down"></i>
                        <i class="fa-solid fa-chevron-up hidden"></i>
                    </a>
                    <ul
                        class="ul-hidden hidden bg-secondary rounded 
                        bg-opacity-80 [&>li>a]:py-4 [&>li>a]:px-3 shadow-md w-full">
                        <li>
                            <a
                                href="#"
                                class="hover:bg-blue-600 flex gap-1
                                items-center duration-500 transition-all justify-center">
                                <span>Retail Execution</span>
                                </a>
                        </li>
                        <li>
                            <a
                                href="#"
                                class="hover:bg-blue-600 flex gap-1
                                items-center duration-500 transition-all justify-center">
                                <span>Mobile Inspection</span>
                                </a>
                        </li>
                        <li>
                            <a
                                href="#"
                                class="hover:bg-blue-600 flex gap-1
                                items-center duration-500 transition-all justify-center">
                                <span>Sales Automation</span>
                                </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a 
                        class="hover:bg-blue-600 flex justify-center 
                        gap-1 items-center duration-500 transition-all" 
                        href="#">
                        Resources 
                        <i class="fa-solid fa-chevron-down"></i>
                        <i class="fa-solid fa-chevron-up hidden"></i>
                    </a>
                    <ul
                        class="ul-hidden hidden bg-secondary rounded 
                        bg-opacity-80 [&>li>a]:py-4 [&>li>a]:px-3 shadow-md w-full">
                        <li>
                            <a
                                href="#"
                                class="hover:bg-blue-600 flex gap-1
                                items-center duration-500 transition-all justify-center">
                                <span>Retail Execution</span>
                                </a>
                        </li>
                        <li>
                            <a
                                href="#"
                                class="hover:bg-blue-600 flex gap-1
                                items-center duration-500 transition-all justify-center">
                                <span>Mobile Inspection</span>
                                </a>
                        </li>
                        <li>
                            <a
                                href="#"
                                class="hover:bg-blue-600 flex gap-1
                                items-center duration-500 transition-all justify-center">
                                <span>Sales Automation</span>
                                </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="flex justify-center gap-1 items-center duration-500 transition-all">
                        Pricing
                    </a>
                </li>
                <li class="group relative">
                    <a href="#" class="hover:bg-blue-600 flex justify-center gap-1 items-center duration-500 transition-all">
                        <span id="languages">English</span>
                        <i class="fa-solid fa-chevron-down"></i>
                        <i class="fa-solid fa-chevron-up hidden"></i>
                    </a>
                    <ul
                        class="ul-hidden hidden bg-secondary 
                        bg-opacity-80 rounded [&>li>a]:py-5 [&>li>a]:px-8 shadow-md" 
                        id="languages-type">
                        <li>
                            <a
                                href="#"
                                class="hover:bg-blue-600 flex justify-center gap-1
                                items-center duration-500 transition-all lang">
                                <span>English</span>
                            </a>
                        </li>
                        <li>
                            <a
                                href="#"
                                class="hover:bg-blue-600 flex justify-center gap-1
                                items-center duration-500 transition-all lang">
                                <span>Français</span>
                            </a>
                        </li>
                        <li>
                            <a
                                href="#"
                                class="hover:bg-blue-600 flex justify-center gap-1
                                items-center duration-500 transition-all lang">
                                <span>Español</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </header> 
</html>

<script>
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

</script>