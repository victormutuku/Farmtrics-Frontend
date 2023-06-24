<main id="home" class="w-full h-[600px] pt-[120px] sm:pt-[220px] lg:pt-[120px]">
									
    <div class="leading-10 flex flex-col items-center px-10 sm:px-[calc(10vw_+_30px)] lg:px-[120px] justify-center mt-[150px]">
        <h1 class="text-black font-bold text-xl sm:text-2xl md:text-3xl lg:text-4xl justify-center mb-6 ">
            {{ __('index.Our cutting-edge solutions use advanced technology to automate processes, collect data, and provide insights that') }}
            {{-- Insights that<br/> --}}
            <span id="typed-text" class="text-nblue font-bold text-xl sm:text-2xl md:text-3xl lg:text-4xl justify-center mb-6"></span>
        </h1>
    </div>	
</main>

<script>
    var strings = [
        '{{ __('index.drive efficiency and growth for agribusiness.') }}',
        '{{ __('index.power policy decisions and actions for governments.') }}',
        '{{ __('index.supercharge the growth of FMCGs in Africa.') }}'
        ];
    var typed = new Typed('#typed-text', {
      strings: strings,
      typeSpeed: 50,
      loop: true,
      backSpeed: 10,
      showCursor: false,
    });
  </script>