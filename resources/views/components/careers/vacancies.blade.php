<div>
    <h1 class="font-bold font-serif md:font-bold text-4xl lg:text-5xl text-nblue mb-8 mt-[200px]">{{ __('careers.Open Positions') }}</h1>
    <div class="flex">
        <select name="location" id="location" class="mr-5 lg:mr-10 w-[200px] rounded-lg">
            <option value="">{{ __('careers.All Locations') }}</option>
            <option value="cote">Cote d'Ivoire</option>
            <option value="ethiopia">Ethiopia</option>
            <option value="kenya">Kenya</option>
        </select>
        <select name="team" id="team" class="w-[200px] rounded-lg">
            <option value="">{{ __('careers.All Teams') }}</option>
            <option value="sales">{{ __('careers.Sales') }}</option>
            <option value="tech">{{ __('careers.Tech') }}</option>
        </select>
    </div>
    <div class="flex flex-col lg:flex-row mt-10 mb-20">  
        <div class="parentDiv mb-10 lg:mb-0 lg:mr-10 border-2 border-forestgreen rounded-3xl lg:w-[400px] h-[300px] pt-8 px-7">
            <div class="circleDiv w-[50px] h-[50px] border-2 border-forestgreen rounded-full"></div>
            <div class="textDiv mt-[100px] text-black">
                <p class="text-xl">{{ __('careers.Sales Specialist - FMCGs') }}</p>
                <p>Cote d'Ivoire, <span>{{ __('careers.Remote') }}</span></p>
                <a href="#" class="font-semibold">{{ __('careers.Read more') }}</a>
            </div>
        </div>
        <div class="parentDiv mb-10 lg:mb-0 lg:mx-10 border-2 border-forestgreen rounded-3xl lg:w-[400px] h-[300px] pt-8 px-7">
            <div class="circleDiv w-[50px] h-[50px] border-2 border-forestgreen rounded-full"></div>
            <div class="textDiv mt-[100px] text-black">
                <p class="text-xl">{{ __('careers.Software Engineer') }}</p>
                <p>Addis Ababa</p>
                <a href="#" class="font-semibold">{{ __('careers.Read more') }}</a>
            </div>
        </div>
        <div class="parentDiv mb-10 lg:mb-0 lg:ml-10 border-2 border-forestgreen rounded-3xl lg:w-[400px] h-[300px] pt-8 px-7">
            <div class="circleDiv w-[50px] h-[50px] border-2 border-forestgreen rounded-full"></div>
            <div class="textDiv mt-[100px] text-black">
                <p class="text-xl">{{ __('careers.Project Manager') }}</p>
                <p>Nairobi</p>
                <a href="#" class="font-semibold">{{ __('careers.Read more') }}</a>
            </div>
        </div>
    </div>
</div>

<script>
    const parentDiv = document.querySelectorAll(".parentDiv");
    const circleDiv = document.querySelectorAll(".circleDiv");
    const text = document.querySelectorAll('.textDiv');
    
    for(let i = 0; i < circleDiv.length; i++) {

        parentDiv[i].addEventListener("mouseenter", function() {
            parentDiv[i].style.background = "#0c3026";
            circleDiv[i].style.background = "#DCFCE7";
            text[i].style.color = "white";
        });

        parentDiv[i].addEventListener("mouseleave", function() {
            parentDiv[i].style.background = "white";
            circleDiv[i].style.background = "white";
            text[i].style.color = "black";
        });
    }
</script>