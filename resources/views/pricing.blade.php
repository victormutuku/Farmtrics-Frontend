@extends('layouts.layout')

@section('title', 'Pricing')

@section('content')

<div class="flex justify-center mt-[200px] mx-10">
    <h1 class="text-forestgreen font-bold text-center text-3xl sm:text-3xl md:text-4xl lg:text-5xl mb-[80px]">{{ __('pricing.Pricing for Every Business, at Any Stage') }}</h1>
</div>
<div class="relative h-fit">
    <div class="absolute bg-black -inset-0.5 blur opacity-5  mb-5 mx-[200px] h-fit rounded-[54px]"></div>
    <div class="relative bg-white border-2 mb-10 mx-[calc(22px_+_1.05vw)] rounded-[34px] lg:px-20">

        <div class=" grid grid-cols-1 place-items-center md:flex md:flex-column md:items-center lg:flex lg:flex-column lg:items-center lg:gap-[100px]">
            <div class="mx-10 py-20 mb-12 sm:mb-0 flex flex-col items-center">
                <div class="items-start">
                    <h2 class=" font-semibold text-2xl">{{ __('pricing.Estimate your monthly cost') }}</h2>
                    <p class="w-[250px] ">{{ __('pricing.Pricing is based on the number of mobile users and data collection forms') }}</p>
                </div>
            </div>
            <x-pricing.pricing-slider/>
        </div>
        <div class="sm:flex sm:flex-col sm:items-center md:grid md:grid-cols-2 md:place-items-center lg:grid lg:grid-cols-3 lg:place-items-center mb-10">

            <x-pricing.pricing-starter/>

            <x-pricing.pricing-pro/>
            
            <x-pricing.pricing-enterprise/>
        </div>
    </div> 
    <div class="mx-[60px] sm:mx-[100px] mb-20">
        <ul class="list-outside list-disc">
            <li class="text-lg mb-2">
                <p>{{ __('pricing.The client can increase the number of') }} <span class="text-nblue">{{ __('pricing.data collection forms') }}</span> {{ __('pricing.at $2 per workflow per month.') }}</p>
            </li>
            <li class="text-lg mb-2">
                {{ __('pricing.Respondent Identities Collection is subjected to GDPR regulations.') }} <span><a href="/gdpr" class="text-nblue underline cursor-pointer">{{ __('pricing.Learn More') }}</a></span>
            </li>
            <li class="text-lg mb-2">
                {{ __('pricing.For agribusinesses, we offer free tips on agribusiness management every Monday and customized advice every Saturday through our') }} <span class="text-nblue">{{ __('pricing.Telegram group') }}</span>.
            </li>
            <li class="text-lg mb-2">
                {{ __('pricing.For survey projects where the customer does not have field agents, we assist in getting field agents in the target areas. The payment is to be incurred by the customer.') }}
            </li>
            <li class="text-lg mb-2">
                {{ __('pricing.Free') }} <span class="text-nblue">{{ __('pricing.templates') }}</span> {{ __('pricing.available for all plans.') }}
            </li>
        </ul>
    </div>
</div>

@endsection