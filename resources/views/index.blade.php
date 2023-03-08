{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Farmtrics</title>
</head>
<body>
    <h1 class="">Sup!</h1>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<title>Farmtrics</title>
		<link 
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
			integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"/>
            @vite('resources/css/app.css')
		{{-- <link rel="stylesheet" href="./css/output.css"/> --}}
		<link href="https://unpkg.com/swiper/swiper-bundle.min.css"rel="stylesheet"/>

		<script defer src="{{asset('js/script.js')}}"></script>
		<script defer src="https://unpkg.com/swiper/swiper-bundle.min.js">
		</script>
		<!-- <script src="func.js"></script> -->
		<!-- <script>
			function includeHTML() {
			  var z, i, elmnt, file, xhttp;
			  /* Loop through a collection of all HTML elements: */
			  z = document.getElementsByTagName("*");
			  for (i = 0; i < z.length; i++) {
				elmnt = z[i];
				/*search for elements with a certain atrribute:*/
				file = elmnt.getAttribute("include");
				if (file) {
				  /* Make an HTTP request using the attribute value as the file name: */
				  xhttp = new XMLHttpRequest();
				  xhttp.onreadystatechange = function() {
					if (this.readyState == 4) {
					  if (this.status == 200) {elmnt.innerHTML = this.responseText;}
					  if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
					  /* Remove the attribute, and call this function once more: */
					  elmnt.removeAttribute("include");
					  includeHTML();
					}
				  }
				  xhttp.open("GET", file, true);
				  xhttp.send();
				  /* Exit the function: */
				  return;
				}
			  }
			}
			</script> -->
	</head>
	<body class="min-h-full">
		<!--Content Wrapper-->
		<div class="h-full"> 
		
			<!-- Navigation -->
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
							<a href="index.html">Farmtrics </a>
						</h1>
					</div>


					<ul
						class="chev-parent  text-md [&>li>a]:py-5
						[&>li>a]:px-3 md:flex hidden lg:gap-4 lg:mr-10">

						<li class="group relative">
							<a href="#">
								Usecases 
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
								Templates 
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
								<i class="fa-solid fa-chevron-up hidden"></i>
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
										<span>Blog</span>
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
			<!-- End of Nav -->
				
			


			<!--Main content-->
			<main id="home" class="w-full lg:h-[750px] pt-[120px] ">
				
				<div class=" h-full grid content-center bg-cover bg-center
                 bg-[url('../../public/bg-2.jpg')] bg-black/40 bg-blend-overlay rounded-[54px] overflow-hidden mx-[90px]">
					
					<div class="leading-10 flex flex-col items-center">
						<h1 class="text-white font-bold  text-8xl text-start lg:text-center mb-6">Unearthing Insights</h1>
						<h3 class=" text-white text-center text-xl leading-8 mb-12">Bringing new knowledge to the world through<br><span class="font-semibold ">agricultural surveys and data</span></h3>
                        <div class="relative">
                            <div class="absolute bg-white -inset-1 blur opacity-50 rounded-[14px]"></div>
                            <div class="relative bg-forestgreen rounded-[14px]  drop-shadow-sm hidden md:block">
							    <a href="demo.html" class="py-4 px-10 inline-block text-lg text-white">Get Started</a>
						    </div>
                        </div>
                        
                        
						{{-- <img src="./bg-1.jpg" alt="" class="ml-6"> --}}
					</div>
					<div class="ml-6">
					</div>
				<div class="sm:max-w-full sm:h-full">
					<!-- <img
						class=" object-cover sm:h-full sm:w-full rounded-l-full"
						src="/build/images/photo10.jpg"
						alt="People in a meeting"
					/> -->
				</div>
			</div>
			</main>
			<!-- End of Main -->


			<!-- Service Section-->
			<section id="services" class="min-h-screen bg-gray-200 w-full">
				
				<div class="text-5xl text-secondary font-bold pt-8 px-8">
					<h1 class="mt-12 ml-14 before:block before:absolute before:bottom-[-1rem] before:w-52 before:h-1 before:bg-secondary relative inline-block">Our Services</h1>
				</div> 

				<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3  gap-5 p-20 group">
					
					<div class="p-10 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 transform hover:-translate-y-3 hover:shadow-none transition-transform duration-300 cursor-pointer shadow-xl shadow-slate-800shadow-xl shadow-slate-800">
					<svg class="w-10 h-10 mb-2 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path><path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path></svg>
					<a href="#">
					<h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Field force Tracking</h5>
					</a>
					<p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
					</div>

					<div class="p-10 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 transform hover:-translate-y-3 hover:shadow-none transition-transform duration-300 cursor-pointer shadow-xl shadow-slate-800">
						<svg class="w-10 h-10 mb-2 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path><path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path></svg>
						<a href="#">
							<h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Mobile CRM</h5>
						</a>
							<p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
						</div>

						<div class="p-10 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 transform hover:-translate-y-3 hover:shadow-none transition-transform duration-300 cursor-pointer shadow-xl shadow-slate-800">
							<svg class="w-10 h-10 mb-2 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path><path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path></svg>
							<a href="#">
								<h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Sales Automation</h5>
							</a>
								<p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
							</div>

							<div class="p-10 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 transform hover:-translate-y-3 hover:shadow-none transition-transform duration-300 cursor-pointer shadow-xl shadow-slate-800">
								<svg class="w-10 h-10 mb-2 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path><path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path></svg>
								<a href="#">
									<h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Sales Automation</h5>
								</a>
									<p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
								</div>

							<div class="p-10 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 transform hover:-translate-y-3 hover:shadow-none transition-transform duration-300 cursor-pointer shadow-xl shadow-slate-800">
								<svg class="w-10 h-10 mb-2 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path><path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path></svg>
								<a href="#">
									<h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Mobile CRM</h5>
								</a>
									<p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
								</div>

								<div class="p-10 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 transform hover:-translate-y-3 hover:shadow-none transition-transform duration-300 cursor-pointer shadow-xl shadow-slate-800">
									<svg class="w-10 h-10 mb-2 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path><path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path></svg>
									<a href="#">
										<h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Mobile CRM</h5>
									</a>
										<p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
									</div>

				</div>
				
			</section>
			<!-- End of Service Section -->

			<!-- Trusted Client Section-->
			<section id="blog" class="min-h-screen justify-items-center items-center py-10 px-16">
				<div>
					<h3 class="text-secondary font-bold text-3xl">Our Clients</h3>
					<h1 class="font-bold text-5xl">Many companies trust us</h1>
					<h3 class="text-2xl font-bold mt-6">Over 10,000 users leverage FieldPro to manage digitally their field operations</h3>

					<div class="absolute bg-forestgreen rounded-[14px] drop-shadow-sm hidden md:block mt-6">
						<a href="demo.html" class="py-4 px-10 inline-block text-lg i text-white">Read More</a>
					</div>
				</div>
			
					
				</div>
			</section>
			<!-- End of Trust Client Section -->

			<!-- Industries Section -->
				<section class="min-h-screen bg-gray-200 w-full grid lg:grid-cols-3 justify-items-center items-center py-10 ">
				<div class="pl-16">
					<h1 class="text-secondary font-bold text-5xl before:block before:absolute before:bottom-[-1rem] before:w-36 before:h-1 before:bg-secondary relative inline-block">Industries</h1>
					<h3 class="text-2xl font-bold text-primary mt-6">Over 10,000 users leverage FieldPro to manage digitally their field operations</h3>
				</div>
				<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 sm:grid-cols-2  gap-5 p-20 col-span-2 lg:col-span-2 max-w-full">
					<div class="p-10 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 transform hover:-translate-y-3 hover:shadow-none transition-transform duration-300 cursor-pointer shadow-xl shadow-slate-800">
						<svg class="w-10 h-10 mb-2 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path><path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path></svg>
						<a href="#">
						<h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Field force Tracking</h5>
						</a>
					</div>
				
					<div class="p-10 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 transform hover:-translate-y-3 hover:shadow-none transition-transform duration-300 cursor-pointer shadow-xl shadow-slate-800">
						<svg class="w-10 h-10 mb-2 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path><path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path></svg>
						<a href="#">
						<h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Field force Tracking</h5>
						</a>
					</div>
					<div class="p-10 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 transform hover:-translate-y-3 hover:shadow-none transition-transform duration-300 cursor-pointer shadow-xl shadow-slate-800">
						<svg class="w-10 h-10 mb-2 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path><path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path></svg>
						<a href="#">
						<h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Field force Tracking</h5>
						</a>
					</div>
					<div class="p-10 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 transform hover:-translate-y-3 hover:shadow-none transition-transform duration-300 cursor-pointer shadow-xl shadow-slate-800">
						<svg class="w-10 h-10 mb-2 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path><path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path></svg>
						<a href="#">
						<h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Field force Tracking</h5>
						</a>
					</div>
					<div class="p-10 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 transform hover:-translate-y-3 hover:shadow-none transition-transform duration-300 cursor-pointer shadow-xl shadow-slate-800">
						<svg class="w-10 h-10 mb-2 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path><path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path></svg>
						<a href="#">
						<h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Field force Tracking</h5>
						</a>
					</div>
					<div class="p-10 bg-white border border-gray-200 rounded-lg  dark:bg-gray-800 dark:border-gray-700 transform hover:-translate-y-3 hover:shadow-none transition-transform duration-300 cursor-pointer shadow-xl shadow-slate-800">
						<svg class="w-10 h-10 mb-2 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path><path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path></svg>
						<a href="#">
						<h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Field force Tracking</h5>
						</a>
					</div>
					<div class="p-10 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 transform hover:-translate-y-3 hover:shadow-none transition-transform duration-300 cursor-pointer shadow-xl shadow-slate-800">
						<svg class="w-10 h-10 mb-2 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path><path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path></svg>
						<a href="#">
						<h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Field force Tracking</h5>
						</a>
					</div>
					<div class="p-10 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 transform hover:-translate-y-3 hover:shadow-none transition-transform duration-300 cursor-pointer shadow-xl shadow-slate-800">
						<svg class="w-10 h-10 mb-2 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path><path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path></svg>
						<a href="#">
						<h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Field force Tracking</h5>
						</a>
					</div>
				</div>
			</section>
			<!-- End of Industries Section-->
			
			<!-- Workflow Templates Section-->
			<section class="min-h-screen bg-grey-200 w-full">
				
				<div class="text-3xl text-secondary font-bold pt-8 px-8 ml-10">
					<h3 class="mt-12">Customizable Workflow Templates</h3>
					<h1 class="text-5xl text-primary font-bold">Get started rapidly by leveraging out easy to customize workflow templates</h1>
					<a href="#" class="p-4 inline-block rounded-md text-secondary mt-6 font-bold text-lg hover:border-b-secondary hover:border-l-secondary hover:border-t-primary hover:border-r-primary hover:text-primary transition-colors duration-300 border-t-secondary border-r-secondary border-l-primary border-b-primary border-4">Explore Templates</a>
				</div> 

				<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3  gap-5 p-20 group">
					
					<div class="p-10 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 transform hover:-translate-y-3 hover:shadow-none transition-transform duration-300 cursor-pointer shadow-xl shadow-slate-800">
					<svg class="w-10 h-10 mb-2 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path><path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path></svg>
					<a href="#">
					<h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Field force Tracking</h5>
					</a>
					<p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
					</div>

					<div class="p-10 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 transform hover:-translate-y-3 hover:shadow-none transition-transform duration-300 cursor-pointer shadow-xl shadow-slate-800">
						<svg class="w-10 h-10 mb-2 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path><path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path></svg>
						<a href="#">
							<h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Mobile CRM</h5>
						</a>
							<p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
						</div>

						<div class="p-10 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 transform hover:-translate-y-3 hover:shadow-none transition-transform duration-300 cursor-pointer shadow-xl shadow-slate-800">
							<svg class="w-10 h-10 mb-2 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path><path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path></svg>
							<a href="#">
								<h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Sales Automation</h5>
							</a>
								<p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
							</div>

							<div class="p-10 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 transform hover:-translate-y-3 hover:shadow-none transition-transform duration-300 cursor-pointer shadow-xl shadow-slate-800">
								<svg class="w-10 h-10 mb-2 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path><path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path></svg>
								<a href="#">
									<h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Sales Automation</h5>
								</a>
									<p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
								</div>

							<div class="p-10 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 transform hover:-translate-y-3 hover:shadow-none transition-transform duration-300 cursor-pointer shadow-xl shadow-slate-800">
								<svg class="w-10 h-10 mb-2 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path><path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path></svg>
								<a href="#">
									<h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Mobile CRM</h5>
								</a>
									<p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
								</div>

								<div class="p-10 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 transform hover:-translate-y-3 hover:shadow-none transition-transform duration-300 cursor-pointer shadow-xl shadow-slate-800">
									<svg class="w-10 h-10 mb-2 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path><path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path></svg>
									<a href="#">
										<h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Mobile CRM</h5>
									</a>
										<p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
									</div>

				</div>
				
			</section>
			<!-- End of Workflow Template Section-->

			<!-- Pricing Farmtrics Section -->
			<section class="min-h-screen bg-gradient-to-r from-primary to-secondary w-full">
				<div class="flex flex-col gap-4 p-16">
					<h2 class="text-2xl text-secondary">Pricing Farmtrics</h2>
					<h1 class="text-4xl font-bold mb-12 text-textLight">The ideal solution for an effortless adoption</h1>
				</div>
				<div class="flex flex-col text-textLight p-8 gap-8 md:flex-row md:justify-center md:items-stretch md:gap-12 flex-wrap">
					<div class="flex flex-col gap-4 p-4 md:p-12 border-secondary bg-gradient-to-br from-primary to-blue-600 border-2 justify-center items-center shadow-xl shadow-slate-800  hover:scale-105 transform duration-100">
						<img src="./images/course1.jpg" alt="" class="h-28 w-28 object-cover">
						<h2 class="font-bold text-2xl">Mobile-first SaaS</h2>
						<ul>
							<li class="flex gap-2">
								<svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-8 w-8">
									<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
								  </svg>
								  <p>Cloud based software</p>

							</li>
							<li class="flex gap-2">
								<svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-8 w-8">
									<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
								  </svg>
								  <p>Work 100% offline</p>

							</li>
							<li class="flex gap-2">
								<svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-8 w-8">
									<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
								  </svg>
								  <p>User friendly design</p>

							</li>
							<li class="flex gap-2">
								<svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-8 w-8">
									<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
								  </svg>
								  <p>Low data consumption</p>

							</li>
							
						</ul>
					</div>
					<div class="flex flex-col gap-4 p-4 md:p-12 border-secondary bg-gradient-to-br from-primary to-blue-600 border-2 justify-center items-center shadow-xl shadow-slate-800 hover:scale-105 transform duration-100">
						<img src="./images/course1.jpg" alt="" class="h-28 w-28 object-cover">
						<h2 class="font-bold text-2xl">Easy Deployment</h2>
						<ul>
							<li class="flex gap-2">
								<svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-8 w-8">
									<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
								  </svg>
								  <p>Dedicated user setup</p>

							</li>
							<li class="flex gap-2">
								<svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-8 w-8">
									<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
								  </svg>
								  <p>Download app in PlayStore</p>

							</li>
							<li class="flex gap-2">
								<svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-8 w-8">
									<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
								  </svg>
								  <p>Flexible configuration</p>

							</li>
							<li class="flex gap-2">
								<svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-8 w-8">
									<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
								  </svg>
								  <p>System integrations</p>

							</li>
							
						</ul>
					</div>
					<div class="flex flex-col gap-4 p-4 md:p-12 border-secondary bg-gradient-to-br from-primary to-blue-600 border-2 justify-center items-center shadow-xl shadow-slate-800 hover:scale-105 transform duration-100">
						<img src="./images/course1.jpg" alt="" class="h-28 w-28 object-cover">
						<h2 class="font-bold text-2xl">Client First Support</h2>
						<ul>
							<li class="flex gap-2">
								<svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-8 w-8">
									<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
								  </svg>
								  <p>Ticketing system</p>

							</li>
							<li class="flex gap-2">
								<svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-8 w-8">
									<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
								  </svg>
								  <p>Knowledge Base Platform</p>

							</li>
							<li class="flex gap-2">
								<svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-8 w-8">
									<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
								  </svg>
								  <p>Account Managers</p>

							</li>
							
						</ul>
					</div>
				</div>
			</section>
			<!-- End of Pricing Farmtrics Section -->

			<!-- Benefits Section-->
			<section class="min-h-screen bg-gray-200 w-full" >
				<div class="flex flex-col gap-4 p-16 pb-0">
					<h3 class="text-2xl text-secondary">Benefits</h3>
					<h1 class="text-4xl font-bold mb-12 text-primary">This is how we make a difference</h1>
				</div>
				<div class="flex text-primary py-8 px-16 gap-8 flex-row md:justify-center md:items-center flex-wrap justify-center items-center">
					<div class="p-8 h-60 relative w-72">
						<img src="./images/course12.jpg" alt="" class="h-24 w-24 rounded-md object-cover">
						<div class="absolute top-16 left-20">
							<span class="font-bold text-6xl sm:text-8xl">40%</span>
							<p class="text-xl font-bold text-gray-800">Increase on the ground effective <br> presence</p>
						</div>
					</div>
					<div class="p-8 h-60 relative w-72">
						<img src="./images/course12.jpg" alt="" class="h-24 w-24 rounded-md object-cover">
						<div class="absolute top-16 left-20">
							<span class="font-bold text-6xl sm:text-8xl">4.6</span>
							<p class="text-xl font-bold text-gray-800">Increase on the ground effective <br> presence</p>
						</div>
						
				</div>
				<div class="p-8 h-60 relative w-72">
					<img src="./images/course12.jpg" alt="" class="h-24 w-24 rounded-md object-cover">
					<div class="absolute top-16 left-20">
						<span class="font-bold text-6xl sm:text-8xl">100%</span>
						<p class="text-xl font-bold text-gray-800">Increase on the ground effective <br> presence</p>
					</div>
				</div>

			</section>
			<!-- End of Benefits Section -->

			<!-- Testimonials Section -->
			<section class="min-h-screen bg-gradient-to-r from-primary to-secondary w-full">
				<div
    			class="mx-auto max-w-[1340px] px-4 py-16 sm:px-6 sm:py-24 lg:mr-0 lg:pl-8 lg:pr-0"
  				>
   		 <div
     	 class="grid grid-cols-1 gap-y-8 lg:grid-cols-3 lg:items-center lg:gap-x-16"
    	>
      	<div class="max-w-xl text-center text-gray-100 sm:text-left">
		<p class="text-xl text-secondary font-bold">Testimonials</p>
        <h2 class="text-3xl font-bold tracking-tight sm:text-4xl mt-4">
          What our clients say Pricing us
        </h2>

        <p class="mt-4 text-xl text-gray-100">
         Discover how Farmtrics is helping business gain full control over their field operations
        </p>

        <div class="lg:mt-8 lg:flex lg:gap-4">
          <button
            class="prev-button rounded-full border border-secondary p-3 text-secondary hover:bg-secondary hover:text-white"
          >
            <span class="sr-only">Previous Slide</span>
            <svg
              class="h-5 w-5 -rotate-180 transform"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M9 5l7 7-7 7"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
              />
            </svg>
          </button>

          <button
            class="next-button rounded-full border border-secondary p-3 text-secondary hover:bg-secondary hover:text-white"
          >
            <span class="sr-only">Next Slide</span>
            <svg
              class="h-5 w-5"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M9 5l7 7-7 7"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
              />
            </svg>
          </button>
        </div>
      </div>

      <div class="lg:col-span-2 lg:mx-0">
        <div class="swiper-container !overflow-hidden">
          <div class="swiper-wrapper">
            <div class="swiper-slide w-screen">
              <blockquote
                class="flex h-full flex-col justify-between bg-white border-4 border-primary p-12"
              >
                <div>
                  <div class="flex gap-0.5 text-green-500">
                    <svg
                      class="h-5 w-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>

                    <svg
                      class="h-5 w-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>

                    <svg
                      class="h-5 w-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>

                    <svg
                      class="h-5 w-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>

                    <svg
                      class="h-5 w-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>
                  </div>

                  <div class="mt-4">
                    <p class="text-2xl font-bold text-primary sm:text-3xl">
                      Stayin' Alive
                    </p>

                    <p class="mt-4 leading-relaxed text-secondary">
                      No, Rose, they are not breathing. And they have no arms or
                      legs … Where are they? You know what? If we come across
                      somebody with no arms or legs, do we bother resuscitating
                      them? I mean, what quality of life do we have there?
                    </p>
                  </div>
                </div>

				<footer class="mt-8 text-sm text-gray-500 flex gap-2 items-center">
					<img class="h-16 w-16 rounded-full" src="./images/avatar2.jpg" alt="">
                  <p>&mdash; Peter Johnson</p>
                </footer>
              </blockquote>
            </div>

            <div class="swiper-slide">
              <blockquote
                class="flex h-full flex-col justify-between bg-white border-4 border-primary p-12"
              >
                <div>
                  <div class="flex gap-0.5 text-green-500">
                    <svg
                      class="h-5 w-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>

                    <svg
                      class="h-5 w-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>

                    <svg
                      class="h-5 w-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>

                    <svg
                      class="h-5 w-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>

                    <svg
                      class="h-5 w-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>
                  </div>

                  <div class="mt-4">
                    <p class="text-2xl font-bold text-primary sm:text-3xl">
                      Stayin' Alive
                    </p>

                    <p class="mt-4 leading-relaxed text-secondary">
                      No, Rose, they are not breathing. And they have no arms or
                      legs … Where are they? You know what? If we come across
                      somebody with no arms or legs, do we bother resuscitating
                      them? I mean, what quality of life do we have there?
                    </p>
                  </div>
                </div>

				<footer class="mt-8 text-sm text-gray-500 flex gap-2 items-center">
					<img class="h-16 w-16 rounded-full" src="./images/avatar3.jpg" alt="">
                  <p>&mdash; John Doe</p>
                </footer>
              </blockquote>
            </div>

            <div class="swiper-slide">
              <blockquote
                class="flex h-full flex-col justify-between bg-white border-4 border-primary p-12"
              >
                <div>
                  <div class="flex gap-0.5 text-green-500">
                    <svg
                      class="h-5 w-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>

                    <svg
                      class="h-5 w-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>

                    <svg
                      class="h-5 w-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>

                    <svg
                      class="h-5 w-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>

                    <svg
                      class="h-5 w-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>
                  </div>

                  <div class="mt-4">
                    <p class="text-2xl font-bold text-primary sm:text-3xl">
                      Stayin' Alive
                    </p>

                    <p class="mt-4 leading-relaxed text-secondary">
                      No, Rose, they are not breathing. And they have no arms or
                      legs … Where are they? You know what? If we come across
                      somebody with no arms or legs, do we bother resuscitating
                      them? I mean, what quality of life do we have there?
                    </p>
                  </div>
                </div>

                <footer class="mt-8 text-sm text-gray-500 flex gap-2 items-center">
					<img class="h-16 w-16 rounded-full" src="./images/avatar1.jpg" alt="">
                  <p>&mdash; Mary Scott</p>
                </footer>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </div>

  		</div>
	</section>
			<!-- End of Testimonials Section -->

			<!-- Manage Operations Section-->
		<section class="min-h-screen bg-gray-200 w-full p-16 flex items-center">
			<div class="ml-8">
			<h1 class="md:text-7xl text-5xl  font-bold text-primary">Manage your field <br> operations digitally</h1>
			<a href="demo.html" class="p-4 text-center inline-block rounded-md text-secondary mt-6 font-bold text-2xl hover:border-b-secondary hover:border-l-secondary hover:border-t-primary hover:border-r-primary hover:text-primary transition-colors duration-300 border-t-secondary border-r-secondary border-l-primary border-b-primary border-4">Book a Demo <span class="text-3xl">&rsaquo;</span></a>
			</div>
			
		</section>
		<!-- End of Manage Operations Section-->

		<!-- Newsletter Section-->
		<section class="bg-gradient-to-br from-primary to-secondary text-gray-800 bg-">
		
			<div class="px-6 py-12 md:px-12 text-center lg:text-left">
			  <div class="container mx-auto xl:px-32">
				<div class="lg:grid-cols-2 gap-12 flex items-center">
				  <div class="mt-12 lg:mt-0">
					<h1
					  class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-12"
					  style="color: hsl(218, 81%, 95%)"
					>
					  Do not miss <br /><span style="color: hsl(218, 81%, 75%)">any updates</span>
					</h1>
					<p class="mb-4 opacity-70 lead" style="color: hsl(218, 81%, 85%)">
					  We will write rarely and only high-quality content.
					</p>
				  </div>
				  <div class="mb-12 lg:mb-0">
					<div class="block rounded-lg shadow-lg bg-white px-6 py-12 md:px-12">
					  <h2 class="text-3xl font-bold mb-12">Subscribe to the newsletter</h2>
					  <form>
						<div class="form-group mb-6">
						  <input
							type="text"
							class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
							id="exampleInput90"
							placeholder="Name"
						  />
						</div>
						<div class="form-group mb-6">
						  <input
							type="email"
							class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
							id="exampleInput91"
							placeholder="Email address"
						  />
						</div>
						<div class="form-group form-check text-center mb-6">
						  <input
							type="checkbox"
							class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer"
							id="exampleCheck96"
							checked
						  />
						  <label
							class="form-check-label inline-block text-gray-800"
							for="exampleCheck96"
							>I have read and agree to the terms</label
						  >
						</div>
						<button
						  type="submit"
						  class="w-full px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
						  data-mdb-ripple="true"
						  data-mdb-ripple-color="light"
						>
						  Subscribe
						</button>
					  </form>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </section>
		  <!--End of Newsletter Section -->

		  <!-- Footer Section -->
		  <footer class="text-center lg:text-left bg-forestgreen text-gray-100">
			<div class="flex justify-center items-center lg:justify-between p-6 border-b border-gray-300">
			  <div class="mr-12 hidden lg:block">
				<span>Get connected with us on social networks:</span>
			  </div>
			  <div class="flex justify-center">
				<a href="#!" class="mr-6 text-gray-100">
				  <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f"
					class="w-2.5" role="img" xmlns="http://www.w3.org/2000/svg"
					viewBox="0 0 320 512">
					<path fill="currentColor"
					  d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
					</path>
				  </svg>
				</a>
				<a href="#!" class="mr-6 text-gray-100">
				  <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter"
					class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
					<path fill="currentColor"
					  d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
					</path>
				  </svg>
				</a>
				<a href="#!" class="mr-6 text-gray-100">
				  <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google"
					class="w-3.5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512">
					<path fill="currentColor"
					  d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z">
					</path>
				  </svg>
				</a>
				<a href="#!" class="mr-6 text-gray-100">
				  <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram"
					class="w-3.5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
					<path fill="currentColor"
					  d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
					</path>
				  </svg>
				</a>
				<a href="#!" class="mr-6 text-gray-100">
				  <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in"
					class="w-3.5" role="img" xmlns="http://www.w3.org/2000/svg"
					viewBox="0 0 448 512">
					<path fill="currentColor"
					  d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
					</path>
				  </svg>
				</a>
				<a href="#!" class="text-gray-100">
				  <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="github"
					class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
					<path fill="currentColor"
					  d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z">
					</path>
				  </svg>
				</a>
			  </div>
			</div>
			<div class="mx-6 py-10 text-center md:text-left">
			  <div class="grid grid-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
				<div class="">
				  <h6 class="
					  uppercase
					  font-semibold
					  mb-4
					  flex
					  items-center
					  justify-center
					  md:justify-start
					  text-xl
					">
					
					Farmtrics
				  </h6>
				  <p>
					Here you can use rows and columns to organize your footer content. Lorem ipsum dolor
					sit amet, consectetur adipisicing elit.
				  </p>
				</div>
				<div class="">
				  <h6 class="uppercase font-semibold mb-4 flex justify-center md:justify-start">
					Products
				  </h6>
				  <p class="mb-4">
					<a href="#!" class="text-gray-100">Home</a>
				  </p>
				  <p class="mb-4">
					<a href="#!" class="text-gray-100">Pricing</a>
				  </p>
				  <p class="mb-4">
					<a href="#!" class="text-gray-100">Course</a>
				  </p>
				  <p>
					<a href="#!" class="text-gray-100">Contact</a>
				  </p>
				</div>
				<div class="">
				  <h6 class="uppercase font-semibold mb-4 flex justify-center md:justify-start">
					Useful links
				  </h6>
				  <p class="mb-4">
					<a href="#!" class="text-gray-100">Pricing</a>
				  </p>
				  <p class="mb-4">
					<a href="#!" class="text-gray-100">Settings</a>
				  </p>
				  <p class="mb-4">
					<a href="#!" class="text-gray-100">Orders</a>
				  </p>
				  <p>
					<a href="#!" class="text-gray-100">Help</a>
				  </p>
				</div>
				<div class="">
				  <h6 class="uppercase font-semibold mb-4 flex justify-center md:justify-start">
					Contact
				  </h6>
				  <p class="flex items-center justify-center md:justify-start mb-4">
					<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="home"
					  class="w-4 mr-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
					  <path fill="currentColor"
						d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z">
					  </path>
					</svg>
					Rwanda, KGL, RW
				  </p>
				  <p class="flex items-center justify-center md:justify-start mb-4">
					<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope"
					  class="w-4 mr-4" role="img" xmlns="http://www.w3.org/2000/svg"
					  viewBox="0 0 512 512">
					  <path fill="currentColor"
						d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
					  </path>
					</svg>
					farmtrics@gmail.com
				  </p>
				  <p class="flex items-center justify-center md:justify-start mb-4">
					<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone"
					  class="w-4 mr-4" role="img" xmlns="http://www.w3.org/2000/svg"
					  viewBox="0 0 512 512">
					  <path fill="currentColor"
						d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z">
					  </path>
					</svg>
					+250 78 124 321 231
				  </p>
				  <p class="flex items-center justify-center md:justify-start">
					<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="print"
					  class="w-4 mr-4" role="img" xmlns="http://www.w3.org/2000/svg"
					  viewBox="0 0 512 512">
					  <path fill="currentColor"
						d="M448 192V77.25c0-8.49-3.37-16.62-9.37-22.63L393.37 9.37c-6-6-14.14-9.37-22.63-9.37H96C78.33 0 64 14.33 64 32v160c-35.35 0-64 28.65-64 64v112c0 8.84 7.16 16 16 16h48v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h48c8.84 0 16-7.16 16-16V256c0-35.35-28.65-64-64-64zm-64 256H128v-96h256v96zm0-224H128V64h192v48c0 8.84 7.16 16 16 16h48v96zm48 72c-13.25 0-24-10.75-24-24 0-13.26 10.75-24 24-24s24 10.74 24 24c0 13.25-10.75 24-24 24z">
					  </path>
					</svg>
					+250 78 124 321 231
				  </p>
				</div>
			  </div>
			</div>
			<div class="text-center p-6 bg-gradient-to-tr from-primary to-secondary">
			  <span>© 2023 Copyright:</span>
			  <a class="text-gray-100 font-semibold" href="https://tailwind-elements.com/">Farmtrics</a>
			</div>
		  </footer>
		  <!-- End of Footer Section -->
</div>


	</body>
</html>

<script>
	includeHTML();
</script>
