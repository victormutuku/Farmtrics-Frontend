<div id="slider" class="slider relative mb-14 md:mb-0 w-[270px] sm:w-[calc(100vw_-_320px)] md:mr-10 lg:w-[590px] h-[10px]">
    <div class="slider-track absolute top-0 left-0 h-full w-full bg-[#d0d5d7] rounded-full"></div>
    <div class="slider-filled-track absolute top-0 left-0 h-full bg-forestgreen rounded-full"></div>
    <div class="slider-thumb absolute top-0 left-[50%] transform -translate-x-1/2 w-5 h-5 rounded-full bg-forestgreen -mt-[5px] cursor-pointer"></div>
    <div class="slider-tooltip absolute -top-[70px] transform -translate-x-1/2 text-[0.8rem] text-black whitespace-nowrap text-justify">
        Number of<br/>mobile users<br/>
        <span id="num-users" class="flex justify-center text-[1rem] font-medium"></span>
    </div>
    <input type="range" min="0" max="100" value="50" class="slider-input absolute top-0 left-0 w-full h-full opacity-0 invisible" style="pointer-events: all">
    <div id="pricing-category"class="text-[1rem] font-medium slider-amount absolute -bottom-[30px] left-[50%] transform -translate-x-1/2 text-[0.7rem] text-black whitespace-nowrap"></div>
</div>
{{-- WORK ON THE SIDE OF THE SLIDER AT MD: --}}
<script>
    const slider = document.querySelector('.slider');
    const amount = document.querySelector('.slider-amount');
    const tooltip = document.querySelector('.slider-tooltip');
    const thumb = slider.querySelector('.slider-thumb');
    const filledTrack = slider.querySelector('.slider-filled-track');
    const input = slider.querySelector('.slider-input');
    const usersTotal = document.getElementById('num-users');
    const pricingCategory = document.getElementById('pricing-category');


    // Set the initial value of the input range element to 4%
    input.value = 50;

    // Update the filled track and thumb position based on the initial value
    const percent = input.value / 100;
    filledTrack.style.width = `${percent * 100}%`;
    thumb.style.left = `${percent * 100}%`;
    tooltip.style.left = percent === 1 ? `calc(100% - ${tooltip.offsetWidth}px)` : `${percent * 100}%`;
    usersTotal.innerHTML = `77`;
    pricingCategory.innerHTML = `{{ __('pricing.$20/month') }}`;

    input.addEventListener('input', () => {
    const value = input.value;
    const thumbPosition = `${value}%`;
    thumb.style.left = thumbPosition;
    filledTrack.style.width = thumbPosition;
    });

    thumb.addEventListener('mousedown', () => {
    document.addEventListener('mousemove', updateValue);
    });

    document.addEventListener('mouseup', () => {
    document.removeEventListener('mousemove', updateValue);
    });

    function updateValue(e) {
        const sliderRect = slider.getBoundingClientRect();
        const offsetX = e.clientX - sliderRect.left;
        let percent = offsetX / sliderRect.width;
        percent = Math.max(0, percent);
        percent = Math.min(1, percent);
        const value = Math.round(percent * 100);
        input.value = value;
        thumb.style.left = `${percent * 100}%`;
        filledTrack.style.width = `${percent * 100}%`;
        tooltip.style.left = `${percent * 100}%`;
        amount.style.left = `${percent * 100}%`;
        numOfUsers = Math.round(percent * 150); //Figure this out
        usersTotal .innerHTML = `${numOfUsers}`;

        if(numOfUsers < 15) {
            pricingCategory.innerHTML = `{{ __('pricing.$8/month') }}`;
        } else if(numOfUsers < 100) {
            pricingCategory.innerHTML = `{{ __('pricing.$20/month') }}`;
        }else{
            pricingCategory.innerHTML = `{{ __('pricing.Contact Sales') }}`;
        }

    }
</script>

