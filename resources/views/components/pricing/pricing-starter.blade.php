<div class="mx-10 my-5 sm:mx-5 sm:my-0 hover:rounded-3xl hover:bg-green-100 h-[500px] py-5 max-w-[300px] flex flex-col items-center sm:px-5">
    <h1 class="font-bold text-xl">
        {{ __('pricing.Starter') }}
    </h1>
    <div class="flex items-center justify-center my-7">
        <p class="text-forestgreen font-bold text-2xl">
            {{ __('pricing.$8/month') }}
        </p>
    </div>
    <div class="px-10">
        <ul class="list-outside list-disc">
            <li>{{ __('pricing.4 users max') }}</li>
            <li class="text-gray-400 break-normal">{{ __('pricing.Availability of farmer\'s identities') }}</li>
        </ul>
    </div>
    <div class="relative flex flex-col items-center bottom-[-109px]">
        <a href="#" class="text-forestgreen font-bold mb-[40px]">{{ __('pricing.Learn More') }}</a>
        <div class="bg-forestgreen rounded-[14px] drop-shadow-sm md:block">
            <a href="/signup" class="py-4 px-10 inline-block text-lg text-white">{{ __('pricing.Sign up') }}</a>
        </div>
    </div>
</div>