<div id="parent2" class="relative mx-10 my-5 sm:mx-5 sm:my-0 hover:rounded-3xl hover:bg-green-100 h-[700px] py-5 max-w-[400px] flex flex-col items-center sm:px-5">
    <h1 class="font-bold text-xl">
        @lang('pricing.Starter') 
    </h1>
    <div class="flex items-center justify-center my-7">
        <p class="text-forestgreen font-bold text-2xl px-5 text-center">
            @lang('pricing.$8/mobile user/month') 
        </p>
    </div>
    <div class="px-10">
        <ul id="list-items2" class="list-outside list-disc h-[385px] overflow-y-scroll scrollbar-hide p-5 text-ellipsis">
            <li>@lang('pricing.4 users minimum')</li>  
            <li>@lang('pricing.Mobile app with offline sync')</li>
            <li>@lang('pricing.Drag-and-Drop Workflow Builder')</li>
            <li>@lang('pricing.Geo-stamped data')</li>
            <li>@lang('pricing.Mobile and web reports')</li>
            <li>@lang('pricing.Geofencing')</li>
            <li>@lang('pricing.GPS tracking')</li>
            <li>@lang('pricing.Mobile user management')</li>   
            <li>@lang('pricing.Mobile notifications (Email, SMS)')</li>
            <li>@lang('pricing.Field activities monitoring')</li>
            <li>@lang('pricing.2 data collection forms')</li>
            <li>@lang('pricing.24/7 support')</li>            
        </ul>
        <div class="relative">
            <div id="fade2" class="absolute bottom-0 h-10 w-full bg-gradient-to-b from-transparent to-white"></div>
         </div>
    </div>
    <div class="absolute bottom-10">
        <div class="bg-forestgreen rounded-[14px]">
            <a href="/register" class="py-4 px-10 inline-block text-lg text-white">@lang('pricing.Get Started')</a>
        </div>
    </div>
</div>

<script>
    const parentDiv2 = document.getElementById("parent2");
    const fadeDiv2 = document.getElementById("fade2");
    const list2 = document.getElementById('list-items2');

    
    // fadeDiv.style.width = list.clientWidth;
    // fadeDiv.style.width = "300px"
    
    parentDiv2.addEventListener("mouseenter", function() {
        fadeDiv2.style.background= "linear-gradient(to bottom, transparent, #DCFCE7)";
    });
    
    parentDiv2.addEventListener("mouseleave", function() {
        fadeDiv2.style.background = "linear-gradient(to bottom, transparent, white)";
    });
    
</script>