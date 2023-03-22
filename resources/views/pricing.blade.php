@extends('layouts.layout')

@section('title', 'Pricing')

@section('content')

<div class="flex justify-center mt-[200px]">
    <h1 class="text-forestgreen font-semibold text-5xl mb-[80px]">{{ __('pricing.Pricing for Every Business, at Any Stage') }}</h1>
</div>
<div class="relative">
    <div class="absolute bg-black -inset-0.5 blur opacity-5  mb-[200px] mx-[200px] rounded-[54px]"></div>
    <div class="relative bg-white border-2 mb-[200px] mx-[calc(20px_+_6.5625vw)] rounded-[34px] ">

        {{-- <div class="md:flex md:flex-column md:items-center lg:flex lg:flex-column lg:items-center gap-[100px]">
            <div class="mx-10 py-8 mb-10 sm:mb-0 flex flex-col items-center">
                <h2 class=" font-semibold text-2xl">{{ __('pricing.Estimate your spend') }}</h2>
                <p class="w-[250px] ">{{ __('pricing.Pricing is based on your monthly recurring revenue') }}</p>
            </div>
            <div class="ml-[150px]">
                <div class="relative mb-2 flex-grow flex-shrink-0 flex-initial">
                    <div class="absolute w-[300px] lg:w-[590px] h-[10px] border-solid border-2 rounded-[54px] bg-gray-200 "></div>
                    <div class="relative w-[100px] lg:w-[200px] h-[10px] bg-forestgreen rounded-[54px]"></div>
                    <div class="absolute top-[-47px] left-[40px] lg:right-[-40px]">
                        <div class="flex flex-col items-center">
                            <span class="text-[0.7rem]">{{ __('pricing.Your MRR:') }}</span>
                            <span class="text-[0.9rem]">{{ __('pricing.$41K MRR') }}</span>
                            <div class="w-[24px] h-[24px] bg-forestgreen rounded-[54px] cursor-pointer"></div>
                            <span class="text-[1.15rem] font-medium">{{ __('pricing.$700/month') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="grid grid-cols-1 place-items-center sm:grid sm:grid-cols-2 lg:grid lg:grid-cols-3 my-10">

            <x-pricing.pricing-starter/>

            <x-pricing.pricing-pro/>
            
            <x-pricing.pricing-enterprise/>
        </div>
    </div> 
</div>

@endsection