<div>
    <ul class="chev-parent text-md [&>li>a]:py-5[&>li>a]:px-3 hidden lg:flex md:hidden sm:hidden lg:gap-6 lg:mr-10">

        <li class="relative group">
            <div class="flex items-center">
                <a class="pr-1 cursor-default">{{ __('navbar.Services') }}</a>
                <i class="fa-solid fa-chevron-down fa-sm"></i>
            </div>
            <div class="absolute top-5 -left-3 transition opacity-0 invisible group-hover:opacity-100 group-hover:visible duration-[1000] ease-in-out group-hover:transform z-50 w-max transform min-w-[calc(100vw_-_22px)] md:max-w-[771px]">
                <div class="top-6 px-3 pt-3 pb-5 rounded-md w-fit relative  bg-green-50 md:px-4">
                    <ul class="cursor-pointer w-[250px]">
                        <div class="px-2 py-2 rounded-lg hover:font-bold">
                            <a href="/#field-auto">{{ __('navbar.Field Automation') }}</a>
                        </div>
                        <div class="px-2 py-2 rounded-lg hover:font-bold">
                            <a href="/#sales-auto">{{ __('navbar.Sales Automation') }}</a>
                        </div>
                        <div class="px-2 py-2 rounded-lg hover:font-bold">
                            <a href="/#mobile-insp">{{ __('navbar.Mobile Inspection') }}</a>
                        </div>
                        <div class="px-2 py-2 rounded-lg hover:font-bold">
                            <a href="/#survey">{{ __('navbar.Hybrid Survey Service') }}</a>
                        </div>
                    </ul>
                </div>   
            </div>
        </li>

        <li class="relative group">
            <div class="flex items-center">
                <a class="pr-1 cursor-default">{{ __('navbar.Company') }}</a>
                <i class="fa-solid fa-chevron-down fa-sm"></i>
            </div>
            <div class="absolute top-5 -left-3 transition opacity-0 invisible group-hover:opacity-100 group-hover:visible duration-[1000] ease-in-out group-hover:transform z-50 w-max transform min-w-[calc(100vw_-_22px)] md:max-w-[771px]">
                <div class="top-6 px-3 py-3 rounded-md w-fit relative shadow-xl bg-green-50 md:px-4">
                    <ul class="cursor-pointer w-[150px]">
                        <div class="px-2 py-2 rounded-lg hover:font-bold">
                            <a href="/about-us">{{ __('navbar.About Us') }}</a>
                        </div>
                        <div class="px-2 py-2 rounded-lg hover:font-bold">
                            <a href="/contact">{{ __('navbar.Contact Us') }}</a>
                        </div>
                    </ul>
                </div>
            </div>
        </li>

        <li class="group relative">
            <a href="/pricing" class="cursor-pointer">{{ __('navbar.Pricing') }}</a>
        </li>
        
        <li class="relative group">
            <div class="flex items-center">
                <a class="pr-1 cursor-default">{{ __('navbar.Resources') }}</a>
                <i class="fa-solid fa-chevron-down fa-sm"></i>
            </div>
            <div class="absolute top-5 -left-3 transition opacity-0 invisible group-hover:opacity-100 group-hover:visible duration-[1000] ease-in-out group-hover:transform z-50 w-max transform min-w-[calc(100vw_-_22px)] md:max-w-[771px]">
                <div class="top-6 px-3 pt-3 pb-4 rounded-md w-fit relative shadow-xl bg-green-50 md:px-4">
                    <ul class="cursor-pointer">
                        <div class="px-2 py-2 rounded-lg hover:font-bold">
                            <a href="/usecases">{{ __('navbar.Use Cases') }}</a>
                        </div>
                        <div class="px-2 py-2 rounded-lg hover:font-bold">
                            <a href="/templates">{{ __('navbar.Templates') }}</a>
                        </div>
                        <div class="px-2 py-2 rounded-lg">
                            <a href="#" class="flex">
                                {{ __('navbar.Blog') }}
                                <x-coming-soon-chip/>
                            </a>
                        </div>
                    </ul>
                </div>
            </div>
        </li>
    </ul>  
</div>