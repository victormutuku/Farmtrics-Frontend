<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Homepage | Farmtrics</title>
		<link 
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
			integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"/>
            @vite('resources/css/app.css')
		<link href="https://unpkg.com/swiper/swiper-bundle.min.css"rel="stylesheet"/>
		<script defer src="https://unpkg.com/swiper/swiper-bundle.min.js">
		</script>
	</head>
	<body class="min-h-full bg-gray-100">
		<!--Content Wrapper-->
		<div class="h-full"> 
		
			<!-- Navigation -->
			@extends('layouts.navbar')

			<!--Main content-->
			<main id="home" class="w-full lg:h-[750px] pt-[120px] ">
				
				<div class=" h-full grid content-center bg-cover bg-center
                 bg-[url('../../public/bg-2.jpg')] bg-black/40 bg-blend-overlay rounded-[54px] overflow-hidden mx-[90px]">
					
					<div class="leading-10 flex flex-col items-center">
						<h1 class="text-white font-bold  text-8xl text-start lg:text-center mb-6">Unearthing Insights</h1>
						<h3 class=" text-white text-center text-xl leading-8 mb-12">Bringing new knowledge to the world through<br><span class="font-semibold ">agricultural surveys and data</span></h3>
                        <div class="relative">
                            <div class="absolute bg-green-100 -inset-1 blur opacity-50 rounded-[14px]"></div>
                            <div class="relative bg-forestgreen rounded-[14px] drop-shadow-sm hidden md:block">
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
		  @extends('layouts.footer')
		  <!-- End of Footer Section -->
</div>


	</body>
</html>