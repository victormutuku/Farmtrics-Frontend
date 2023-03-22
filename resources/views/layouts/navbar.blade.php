<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        @vite('resources/css/app.css')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <header class=" h-20 fixed w-full top-0 z-20"> 

        <nav class="flex h-full md:justify-around justify-between items-center relative w-full lg:bg-green-100">
            <!-- Mobile Nav as -->
            <a 
                id="mobile-open-a" 
                class="text-4xl focus:outline-none lg:hidden
                sm:pl-4 cursor-pointer"> &#9776</a>
            <a 
                id="mobile-close-a" 
                class="hidden text-6xl focus:outline-none lg:hidden
                sm:pl-4 cursor-pointer">&times;</a>
            <!-- End of Mobile Nav as -->

            <div class="relative ">
                <h1 class="text-3xl font-bold">
                    <a href="/">Farmtrics </a>
                </h1>
            </div>

            <!--Web Navbar-->
            <x-navbar.web-navbar/>
            <!--End of Web Navbar-->

            <div class="flex items-center gap-6">
                <div class="bg-forestgreen rounded-[14px] hidden md:block">
                    <a href="/login" class="px-10 py-3 inline-block text-white">{{ __('navbar.Login') }}</a>
                </div>
                <select aria-label="Select Language" class="form-control changeLang cursor-pointer bg-transparent lg:bg-green-100 md:bg-transparent sm:bg-transparent px-2 py-2 shadow-none" name="language-selection">
                    <option class="hover:bg-green-100" value="en"{{ session()->get('locale') =='en' ? 'selected' : '' }}>{{ __('navbar.English') }}</option>
                    <option class="hover:bg-green-100" value="fr"{{ session()->get('locale') =='fr' ? 'selected' : '' }}>{{ __('navbar.French') }}</option>
                </select>
            </div>

        </nav>

        <!--Mobile nav menu-->
        <x-navbar.mobile-navbar/>
        <!--End of Mobile nav menu-->
    </header> 
</html>

<script>
	//Selecting Elements from the DOM
	const navOpenBtn = document.querySelector('#mobile-open-a');
	const navCloseBtn = document.querySelector('#mobile-close-a');
	const mobNavContainer = document.querySelector('#mobile-nav-container');
	const chevronDown = document.querySelectorAll('.fa-chevron-down');
	const chevronUp = document.querySelectorAll('.fa-chevron-up');
	const chevronParent = document.querySelectorAll('.chev-parent');


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
</script>

<script type="text/javascript">

    var url = "{{ route('changeLang') }}";

   $(".changeLang").change(function () {
        window.location.href = url + "?lang=" + $(this).val();
    }) 

</script>