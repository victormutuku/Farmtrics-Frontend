<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		@vite('resources/css/app.css')
    </head>
    <header class=" h-20 fixed w-full top-0 z-20"> 

        <nav class="flex h-full md:justify-around justify-between items-center relative w-full bg-white">
            <!-- Mobile Nav as -->
            <a 
                id="mobile-open-a" 
                class="w-[50px] text-4xl focus:outline-none lg:hidden sm:pl-4 cursor-pointer"> &#9776</a>
            <a 
                id="mobile-close-a" 
                class="w-[50px] hidden text-6xl focus:outline-none lg:hidden sm:pl-4 cursor-pointer">&times;</a>
            <!-- End of Mobile Nav as -->

            <div class="relative">
					<a href="/"class="flex" >
						<div class="w-[25px] h-[25px] mt-[8px] mr-1 bg-[url('../../public/fm-logo-3.svg')] bg-contain bg-no-repeat"></div>
						<div>
                            <p class="text-3xl font-bold">Farmtrics</p>
                            <p class="-mt-2 text-[0.6rem] font-semibold text-right">data driven decisions</p>
                        </div>
                        
					</a>
            </div>

            <!--Web Navbar-->
            <x-navbar.web-navbar/>
            <!--End of Web Navbar-->

            <div class="flex items-center gap-6">
                <div class="bg-forestgreen rounded-[14px] hidden md:block">
                    <a href="/login" class="px-10 py-3 inline-block text-white">{{ __('navbar.Login') }}</a>
                </div>
                <x-navbar.lang-select/>
            </div>

        </nav>

        <!--Mobile nav menu-->
        <x-navbar.mobile-navbar/>
        <!--End of Mobile nav menu-->
    </header> 
</html>

<script type="text/javascript">

    var url = "{{ route('changeLang') }}";

   $(".changeLang").change(function () {
        window.location.href = url + "?lang=" + $(this).val();
    }) 

</script>