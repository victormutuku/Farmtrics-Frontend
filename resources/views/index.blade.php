<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>{{ __('index.Homepage | Farmtrics') }}</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <script src="https://unpkg.com/typed.js@2.0.14/dist/typed.umd.js"></script>
		@vite('resources/css/app.css')
	</head>
	<body class="min-h-full bg-white]">
		<!--Content Wrapper-->
		<div class="h-full"> 
		
			<!-- Navigation -->
			@extends('layouts.navbar')

			<!--Main content-->
			<x-index.main/>
			<!-- End of Main -->
			
			<section class="h-screen pt-[200px] text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold sm:px-10 lg:px-[120px] lg:mb-20">
				<div class="flex flex-col items-center lg:flex lg:flex-row lg:items-center">
					<h1 class="text-center lg:text-start sm:mr-[120px]">
						{{ __('index.Not just data, we drive') }}<br/>
						<span class="text-nblue">{{ __('index.Impact') }}</span>, 
						<span class="text-nblue">{{ __('index.Efficiency') }}</span> {{ __('index.and') }} 
						<span class="text-nblue">{{ __('index.Growth.') }}</span>
					</h1>
					<div class=" mt-10 lg:mt-0 lg:pl-5 bg-[url('../../public/index/workflow.svg')] bg-contain min-w-[250px] min-h-[250px] sm:min-w-[300px] sm:min-h-[300px] md:min-w-[350px] md:min-h-[350px] lg:min-w-[450px] lg:min-h-[450px]">
					</div>
				</div>
			</section>

			<section class="h-screen pt-[200px] px-10 lg:px-[120px] mb-[150px] md:mb-[150px] xl:mb-20">
				<div class="flex flex-col items-center lg:flex lg:flex-row lg:items-center">
					<div class="lg:mr-[120px]"> 
						<h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold lg:text-start mb-5">{{ __('index.Say Goodbye to papers, mistakes, inaccuracies.') }}</h1>
						<p class="text-xl lg:text-2xl">
							{{ __('index.Farmtrics provides data analytics services to ambitious stakeholders. With Farmtrics, you can create workflows for any type of operations and for agribusinesses. We not only provide a recording and efficiency framework, but also provide expertly crafted') }} 
							<span class="text-nblue">{{ __('index.templates') }}</span> {{__('index.french text 1')}}.
						</p>
					</div>
					<div class=" mt-10 lg:mt-0 lg:pl-5 bg-[url('../../public/index/laptop-2.svg')] bg-contain min-w-[250px] min-h-[250px] sm:min-w-[300px] sm:min-h-[300px] md:min-w-[350px] md:min-h-[350px] lg:min-w-[400px] lg:min-h-[400px]">
					</div>
				</div>
			</section>

			<!-- Industries Section -->
			<x-index.industries/>
			<!-- End of Industries Section -->

			
			<x-index.services/>
			<!-- End of Service Section -->

			<section class="flex justify-center">
				<div class="min-w-[300px] w-[calc(100%_-_300px)] max-w-[1200px] h-[calc(100%_+_150px)] min-mx-10 mx-[100%_-_40px] max-mx-[150px] border-2 border-forestgreen rounded-xl mb-20 py-10 px-20 sm:px-20 md:px-10 lg:px-20">
					<div class="sm:flex sm:flex-col sm:items-center md:flex-row md:justify-between">
						<h2 class="text-forestgreen text-4xl pb-7 mt-3 text-center md:min-w-[300px] md:w-[calc(100%_-_120px)] md:max-w-[700px] md:text-start font-bold">
							{{ __('index.Ready to start making good choices?') }}
						</h2>
						<a href="/register" class="flex flex-col items-center">
							<div class="px-5 md:px-2 lg:px-5 xl:px-10 py-4 xl:py-6 text-white text-center bg-forestgreen rounded-lg">
								{{ __('index.Get Started') }}
							</div>
						</a>
					</div>
				</div>
			</section>
			
			<!-- Footer Section -->
			@extends('layouts.footer')
			<!-- End of Footer Section -->
		</div>
	</body>
</html>