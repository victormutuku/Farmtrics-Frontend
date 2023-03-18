@extends('layouts.layout')

@section('title', 'Pricing')

@section('content')

<div class="flex justify-center mt-[200px]">
    <h1 class="text-forestgreen font-semibold text-5xl mb-[80px]">{{ __('pricing.Pricing for Every Business, at Any Stage') }}</h1>
</div>
<div class="relative">
    <div class="absolute bg-black -inset-0.5 blur opacity-5  mb-[200px] mx-[200px] rounded-[54px]"></div>
    <div class="relative bg-white border-2 mb-[200px] mx-[200px] rounded-[34px]">
        <div class="flex flex-column items-center gap-[100px]">
            <div class="px-10 py-8">
                <h2 class=" font-semibold text-2xl">{{ __('pricing.Estimate your spend') }}</h2>
                <p class="w-[250px]">{{ __('pricing.Pricing is based on your monthly recurring revenue') }}</p>
            </div>
            <div class="relative">
                <div class="absolute w-[590px] h-[10px] border-solid border-2 rounded-[54px] bg-gray-200 "></div>
                <div class="relative w-[200px] h-[10px] bg-forestgreen rounded-[54px]"></div>
                <div class="absolute top-[-47px] right-[-40px]">
                    <div class="flex flex-col items-center">
                        <span class="text-[0.7rem]">{{ __('pricing.Your MRR:') }}</span>
                        <span class="text-[0.9rem]">{{ __('pricing.$41K MRR') }}</span>
                        <div class="w-[24px] h-[24px] bg-forestgreen rounded-[54px] cursor-pointer"></div>
                        <span class="text-[1.15rem] font-medium">{{ __('pricing.$700/month') }}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center mb-10">
            
            <div class="hover:rounded-3xl hover:bg-green-100 h-[500px] py-5 w-[300px] flex flex-col items-center px-5">
                <h1 class="font-bold text-xl">{{ __('pricing.Starter') }}</h1>
                <div class="flex items-center justify-center my-7">
                    <p class="text-forestgreen font-bold text-2xl">{{ __('pricing.$8/month') }}</p>
                </div>
                    <div class="pl-10">
                        <ul class="list-outside list-disc">
                            <li>{{ __('pricing.4 users max') }}</li>
                            <li class="text-gray-400">{{ __('pricing.Availability of farmer\'s identities') }}</li>
                        </ul>
                    </div>
                    <div class="relative flex flex-col items-center bottom-[-109px]">
                        <a href="#" class="text-forestgreen font-bold mb-[40px]">{{ __('pricing.Learn More') }}</a>
                        <div class="bg-forestgreen rounded-[14px] drop-shadow-sm hidden md:block">
                            <a href="/signup" class="py-4 px-10 inline-block text-lg text-white">{{ __('pricing.Sign up') }}</a>
                        </div>
                    </div>
            </div>

            <div class="hover:rounded-3xl hover:bg-green-100 h-[500px] py-5 w-[300px] flex flex-col items-center px-5">
               <h1 class="font-bold text-xl">{{ __('pricing.Pro') }}</h1>
                <div class="flex items-center justify-center my-7">
                    <p class="text-forestgreen font-bold text-2xl">{{ __('pricing.$20/month') }}</p>
                </div>
                <div class="pl-10">
                    <ul class="list-outside list-disc">
                        <li>{{ __('pricing.15 users max') }}</li>
                        <li>{{ __('pricing.Availability of farmer\'s identities') }}</li>
                    </ul>
                </div>
                <div class="relative flex flex-col items-center bottom-[-109px]">
                    <a href="#" class="text-forestgreen font-bold mb-[40px]">{{ __('pricing.Learn More') }}</a>
                    <div class="bg-forestgreen rounded-[14px] drop-shadow-sm hidden md:block">
                        <a href="/signup" class="py-4 px-10 inline-block text-lg text-white">{{ __('pricing.Sign up') }}</a>
                    </div>
                </div> 
            </div>
            
            <div class="hover:rounded-3xl hover:bg-green-100 h-[500px] py-5 w-[300px] flex flex-col items-center px-5">
                <h1 class="font-bold text-xl">{{ __('pricing.Enterprise') }}</h1>
                <div class="mt-[86px]"><p class="font-semibold text-2xl text-center ">{{ __('pricing.Contact Sales') }}</p></div>
                <div class="relative flex flex-col items-center bottom-[-124px]">
                    <a href="#" class="text-forestgreen font-bold mb-[40px]">{{ __('pricing.Learn More') }}</a>
                    <div class="bg-forestgreen rounded-[14px] drop-shadow-sm hidden md:block">
                        <a href="/contact" class="py-4 px-10 inline-block text-lg text-white">{{ __('pricing.Contact us') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>

@endsection