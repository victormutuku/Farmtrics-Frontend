<div class="relative mx-10 my-5 sm:mx-5 sm:my-0 hover:rounded-3xl hover:bg-green-100 h-[700px] py-5 max-w-[400px] flex flex-col items-center md:px-5">
    <h1 class="font-bold text-xl">
        {{ __('pricing.Enterprise') }}
    </h1>
    <div class="mt-[220px]">
        <p class="font-medium text-2xl  mb-5 sm:mb-2 px-20 text-center">{!! __('pricing.More than 100 users?') !!}</p>

        <p class="font-semibold text-2xl text-center">
            {!! __('pricing.Contact Sales') !!}
        </p>
    </div>
    <div class="absolute bottom-10">
        <div class="bg-forestgreen rounded-[14px] drop-shadow-sm md:block">
            <a href="/contact" class="py-4 px-10 inline-block text-lg text-white overflow-hidden whitespace-nowrap">{{ __('pricing.Contact us') }}</a>
        </div>
    </div>
</div>