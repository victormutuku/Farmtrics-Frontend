<div id="parent" class="relative mx-10 my-5 sm:mx-5 sm:my-0 hover:rounded-3xl hover:bg-green-100 h-[750px] lg:h-[700px] py-5 max-w-[400px] flex flex-col items-center md:px-5">
    <h1 class="font-bold text-xl">
         {{ __('pricing.Pro') }}
     </h1>
     <div class="flex items-center justify-center my-7">
         <p class="text-forestgreen font-bold text-2xl px-5 text-center">
             {{ __('pricing.$20/mobile user/month') }}
         </p>
     </div>
     <div class=" relative px-10">
         <ul id="list-items" class="list-outside list-disc h-[385px] overflow-y-scroll scrollbar-hide p-5 text-ellipsis">
            <li>{{ __('pricing.15 users minimum') }}</li>  
            <li>{{ __('pricing.Mobile app with offline sync') }}</li>
            <li>{{ __('pricing.Drag-and-Drop Workflow Builder') }}</li>
            <li>{{ __('pricing.Geo-stamped data') }}</li>
            <li>{{ __('pricing.Mobile and web reports') }}</li>
            <li>{{ __('pricing.Geofencing') }}</li>
            <li>{{ __('pricing.GPS tracking') }}</li>
            <li>{{ __('pricing.Mobile user management') }}</li>   
            <li>{{ __('pricing.Mobile notifications (Email, SMS)') }}</li>
            <li>{{ __('pricing.Field activities monitoring') }}</li>
            <li>{{ __('pricing.2 data collection forms') }}</li>
            <li>{{ __('pricing.Collect respondent identity') }}</li>
            <li>{{ __('pricing.Customized development') }}</li>  
            <li>{{ __('pricing.Dedicated account manager') }}</li>          
            <li>{{ __('pricing.24/7 support') }}</li>
         </ul>
         <div class="relative">
            <div id="fade" class="absolute bottom-0 h-10 w-full"></div>
         </div>
        </div>
     <div class="absolute bottom-10">
         <div class="bg-forestgreen rounded-[14px]">
             <a href="/signup" class="py-4 px-10 inline-block text-lg text-white">{{ __('pricing.Sign up') }}</a>
         </div>
     </div> 
 </div>

<script>
    const parentDiv = document.getElementById("parent");
    const fadeDiv = document.getElementById("fade");
    const list = document.getElementById('list-items');

    
    // fadeDiv.style.width = list.clientWidth;
    // fadeDiv.style.width = "300px"
    
    parentDiv.addEventListener("mouseenter", function() {
        fadeDiv.style.background= "linear-gradient(to bottom, transparent, #DCFCE7)";
    });
    
    parentDiv.addEventListener("mouseleave", function() {
        fadeDiv.style.background = "linear-gradient(to bottom, transparent, white)";
    });
    
</script>