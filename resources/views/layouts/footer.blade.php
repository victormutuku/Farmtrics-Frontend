<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite('resources/css/app.css')
    </head>
    <footer class="relative w-full h-[850px] md:h-[450px] lg:h-[400px] bg-forestgreen pt-20">
        <div class="md:flex">
            <div class="text-white lg:flex-row lg:items-start  md:ml-[calc(20%_-_120px)] lg:ml-[120px]">
                <div>
                    <div class="flex flex-col items-center md:items-start">
                        <div class="flex">
                            <div class="w-[50px] lg:w-[40px] h-[40px] mt-6 lg:mr-2 bg-[url('../../public/frontend/images/logo/logo-mark.svg')] bg-no-repeat scale-[1.1]"></div>
                            <div>
                                <p class="font-bold text-5xl">
                                    Farmtrics
                                </p> 
                                <p class="text-xl ml-1"> 
                                    data driven decisions
                                </p>   
                            </div>
                        </div>
                        <p class="pl-4 md:pl-0  w-[300px] mt-6 lg:w-[400px]">{{ __('footer.Enabling a data-driven decision making framework in agriculture and FMCGs.') }}</p>
                        <div class="flex justify-center">
                            <a href="https://www.linkedin.com/company/farmtrics" target="_blank"><div class="mt-5 mr-4 w-[50px] h-[50px] bg-[url('../../public/frontend/images/socials/linkedin-white.svg')] bg-no-repeat scale-75"></div></a>
                            <a href="/https://twitter.com/farmtrics82380" target="_blank"><div class="mt-6 mr-3 w-[50px] h-[50px] bg-[url('../../public/frontend/images/socials/twitter-white.svg')] bg-no-repeat scale-75"></div></a>    
                            <a href="/https://instagram.com/farmtricshq" target="_blank"><div class="mt-5 w-[50px] h-[50px] bg-[url('../../public/frontend/images/socials/instagram-white.svg')] bg-no-repeat scale-75"></div></a>    
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-10 lg:mt-0 md:absolute md:right-[80px] lg:right-[100px] flex flex-col items-center sm:flex md:flex-row md:items-start text-white">
                <div class="sm:mr-0 md:mr-[40px] lg:mr-20 flex flex-col items-center md:items-start">
                    <p class="font-bold mb-2">{{ __('footer.Company') }}</p>
                    <p>
                        <a href="/about-us" class="mb-1">
                            {{ __('footer.About') }}
                        </a>
                    </p>
                    <p>
                        <a href="/" class="mb-1">
                            {{ __('footer.Services') }}
                        </a>
                    </p>
                    <p>
                        <a href="/pricing" class="mb-1">
                            {{ __('footer.Pricing') }}
                        </a>
                    </p>
                    <p>
                        <a href="/careers" class="mb-1">
                            {{ __('footer.Careers') }}
                        </a>
                    </p>
                    <p>
                        <a href="/partner-with-us" class="mb-1">
                            {{ __('footer.Become a partner') }}
                        </a>
                    </p>
                </div>
                <div class="mt-10 md:mt-0 flex flex-col items-center md:items-start">
                    <p class="font-bold mb-2">{{ __('footer.Contact') }}</p>
                    <a href="mailto:sales@farmtrics.com" class="mb-1 block">sales@farmtrics.com</a>
                    <a href="mailto:support@farmtrics.com">support@farmtrics.com</a>
                </div>
            </div>
        </div>
        <div class="flex flex-col items-center md:flex md:justify-center">
            <div class="absolute bottom-5 text-center md:text-start md:flex text-white">
                <p class="md:mr-5 mb-5 lg:mb-0">
                    <a>
                        2023 Farmtrics Technologies Ltd
                    </a>
                </p>
                <p class="md:mr-5 mb-5 lg:mb-0">
                    <a href="">
                        {{ __('footer.Terms and Conditions') }}
                    </a>
                </p>
                <p class="md:mr-5 mb-5 lg:mb-0">
                    <a href="/gdpr">
                        {{ __('footer.GDPR Compliance') }}
                    </a>
                </p>
                <p class="md:mr-5">
                    <a href="">
                        {{ __('footer.Privacy Policy') }}
                    </a>
                </p>
            </div> 
        </div>
    </footer>
</html>