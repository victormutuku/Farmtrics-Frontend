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
	<body class="min-h-full bg-green-100">
		<!--Content Wrapper-->
		<div class="h-full"> 
		
			<!-- Navigation -->
			@extends('layouts.navbar')

			<!--Main content-->
			<main id="home" class="w-full lg:h-[750px] pt-[120px] ">
				
				<div class=" h-full grid content-center bg-cover bg-center
                 bg-[url('../../public/bg-2.jpg')] bg-black/40 bg-blend-overlay rounded-[54px] overflow-hidden mx-[90px]">
					
					<div class="leading-10 flex flex-col items-center">
						<h1 class="text-white font-bold  text-8xl text-start lg:text-center mb-6">{{ __('index.Unearthing Insights') }}</h1>
						<h3 class=" text-white text-center text-xl leading-8 mb-12">{{ __('index.Bringing new knowledge to the world through agricultural surveys and data') }}</h3>
                        <div class="relative">
                            <div class="absolute bg-green-100 -inset-1 blur opacity-50 rounded-[14px]"></div>
                            <div class="relative bg-forestgreen rounded-[14px] drop-shadow-sm hidden md:block">
							    <a href="/login" class="py-4 px-10 inline-block text-lg text-white">{{ __('index.Get Started') }}</a>
						    </div>
                        </div>
					</div>	
			</main>
			<!-- End of Main -->

			{{-- <section>
				<div class="flex flex-col item-center justify-center text-3xl mx-[90px] px-[120px] h-[300px]">
					<p>Based in Rwanda, Farmtrics is a data company focused on collection of agricultural data through surveys.</p>
				</div>
			</section> --}}


			<!-- Service Section-->
			<section id="services" class="min-h-screen bg-green-100 w-full pb-[100px]">
				
				<div class="text-5xl text-secondary font-bold pt-8 px-8">
					<h1 class="mt-12 ml-14 before:block before:absolute before:bottom-[-1rem] before:w-52 before:h-1 before:bg-secondary relative inline-block">{{ __('index.Our Services') }}</h1>
				</div> 
				<div class="flex items-center mx-[90px] pt-16" id="field-auto">
					<div class="w-[500px] h-[400px] bg-[url('../../public/field-auto.svg')] bg-no-repeat bg-contain bg-center transform scale-150"></div>
					<div class="pl-20 lg:w-[950px]">
						<h3 class="text-5xl font-bold">{{ __('index.Field Automation') }}</h3>
						<p class="text-3xl mt-5">{{ __('index.Track the activities of your team in real-time with geo-tracking and top-notch analytics.') }}</p>
					</div>
				</div>
				<div class="flex items-center mx-[90px] pt-16" id="sales-auto">
					<div class="pr-20 lg:w-[950px]">
						<h3 class="text-5xl font-bold">{{ __('index.Sales Automation') }}</h3>
						<p class="text-3xl mt-5">{{ __('index.Increase your team\'s productivity and performance while streamlining the quality of your sales process.') }}</p>
					</div>
					<div class="w-[500px] h-[400px] bg-[url('../../public/sales-auto.svg')] bg-no-repeat bg-contain bg-center transform scale-90"></div>
				</div>
				<div class="flex items-center mx-[90px] pt-16" id="mobile-insp">
					<div class="w-[500px] h-[400px] bg-[url('../../public/phone-inspection.svg')] bg-no-repeat bg-contain bg-center transform scale-90"></div>
					<div class="pl-20 lg:w-[950px]">
						<h3 class="text-5xl font-bold">{{ __('index.Mobile Inspection') }}</h3>
						<p class="text-3xl mt-5">{{ __('index.Easily create questionnaires and checklists and capture relevant information in your business.') }}</p>
					</div>
				</div>
				<div class="flex items-center mx-[90px] pt-16" id="survey">
					<div class="pr-20 lg:w-[950px]">
						<h3 class="text-5xl font-bold">{{ __('index.Hybrid Survey Service') }}</h3>
						<p class="text-3xl mt-5">{{ __('index.Create surveys on the go, ask questions that really matter, and get relevant feedback.') }}</p>
					</div>
					<div class="w-[500px] h-[400px] bg-[url('../../public/hybrid-survey.svg')] bg-no-repeat bg-contain bg-center"></div>
				</div>
				<div class="flex items-center mx-[90px] pt-16" id="workflow">
					<div class="w-[500px] h-[400px] bg-[url('../../public/no-code.svg')] bg-no-repeat bg-contain bg-center transform scale-90"></div>
					<div class="pl-20 lg:w-[950px]">
						<h3 class="text-5xl font-bold">{{ __('index.No-Code Workflow Builder') }}</h3>
						<p class="text-3xl mt-5">{{ __('index.Bring your workflow to life with tap of a few buttons.') }}</p>
					</div>
				</div>
				
			</section>
			<!-- End of Service Section -->
			<!-- Footer Section -->
			@extends('layouts.footer')
			<!-- End of Footer Section -->
		</div>
	</body>
</html>