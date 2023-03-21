<div id="mobile-nav-container" class="lg:hidden font-bold absolute bg-green-50 text-textLight w-screen transition duration-400 ease-in-out transform -translate-x-full"> 
    <ul class="chev-parent rounded [&>li>a]:py-5 [&>li>a]:px-8 shadow-md ">
        <li>
            <a class="hover:bg-green-100 flex justify-center gap-1 items-center duration-500 transition-all" 
                href="#">
                {{__('navbar.Services')}}
                <i class="fa-solid fa-chevron-down"></i>
                <i class="fa-solid fa-chevron-up hidden"></i>
            </a>
            <ul class="ul-hidden hidden bg-secondary rounded bg-opacity-80 [&>li>a]:py-4 [&>li>a]:px-3 shadow-md w-full">
                <li>
                    <a href="#" class="hover:bg-green-100 flex gap-1 items-center duration-500 transition-all justify-center">
                        <span>
                            {{ __('navbar.Field Automation') }}
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#" class="hover:bg-green-100 flex gap-1 items-center duration-500 transition-all justify-center">
                        <span>
                            {{ __('navbar.Sales Automation') }}
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#" class="hover:bg-green-100 flex gap-1 items-center duration-500 transition-all justify-center">
                        <span>
                            {{ __('navbar.Mobile Inspection') }}
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#" class="hover:bg-green-100 flex gap-1 items-center duration-500 transition-all justify-center">
                        <span>
                            {{ __('navbar.Hybrid Survey Service') }}
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#" class="hover:bg-green-100 flex gap-1 items-center duration-500 transition-all justify-center">
                        <span>
                            {{ __('navbar.No-Code Workflow Builder') }}
                        </span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a class="hover:bg-green-100 flex justify-center gap-1 items-center duration-500 transition-all" href="#">
                {{ __('navbar.Company') }}
                <i class="fa-solid fa-chevron-down"></i>
                <i class="fa-solid fa-chevron-up hidden"></i>
            </a>
            <ul class="ul-hidden hidden bg-secondary rounded bg-opacity-80 [&>li>a]:py-4 [&>li>a]:px-3 shadow-md w-full">
                <li>
                    <a href="#" class="hover:bg-green-100 flex gap-1 items-center duration-500 transition-all justify-center">
                        <span>
                            {{ __('navbar.About Us') }}
                        </span>
                    </a>
                </li>
                <li>
                    <a href="/contact" class="hover:bg-green-100 flex gap-1 items-center duration-500 transition-all justify-center">
                        <span>
                            {{ __('navbar.Contact Us') }}
                        </span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="/pricing" class="hover:bg-green-100 flex justify-center gap-1 items-center duration-500 transition-all">
                {{ __('navbar.Pricing') }}
            </a>
        </li>
        <li>
            <a href="#" class="hover:bg-green-100 flex justify-center gap-1 items-center duration-500 transition-all">
                {{ __('navbar.Resources') }}
                <i class="fa-solid fa-chevron-down"></i>
                <i class="fa-solid fa-chevron-up hidden"></i>
            </a>
            <ul class="ul-hidden hidden bg-secondary rounded bg-opacity-80 [&>li>a]:py-4 [&>li>a]:px-3 shadow-md w-full">
                <li>
                    <a href="/usecases" class="hover:bg-green-100 flex gap-1 items-center duration-500 transition-all justify-center">
                        <span>
                            {{ __('navbar.Use Cases') }}
                        </span>
                    </a>
                </li>
                <li>
                    <a href="/templates" class="hover:bg-green-100 flex gap-1 items-center duration-500 transition-all justify-center">
                        <span>
                            {{ __('navbar.Templates') }}
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#" class="hover:bg-green-100 flex gap-1 items-center duration-500 transition-all justify-center">
                        <span class="flex">
                            {{ __('navbar.Blog') }} 
                            <x-coming-soon-chip/>
                        </span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>