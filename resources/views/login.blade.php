<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link 
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"/>
        @vite('resources/css/app.css')
        <title>Login | Farmtrics</title>
    </head>
    <body class="bg-green-100">
    <div class="p-5"> 
        <a href="/"><i class="fa-arrow-left fa-solid fa-xl"></i></a>
    </div>
        <div class="mt-[100px]">
            <div class="flex justify-center mb-[200px] items-center">
                <div class="w-[470px] h-[518px] rounded-2xl border-2 border-forestgreen"></div>
                {{-- <div class="flex flex-col items-center border-2 border-forestgreen/40 h-[512px] w-fit mx-[120px] my-20"></div> --}}
                <div class="flex flex-col items-center ml-20">
                    <h1 class="text-forestgreen text-6xl font-medium mb-16">{{ __('login.Login') }}</h1>
                    <form action="#" method="POST" class="w-[470px] flex flex-col items-center">
                        
                        <input placeholder="{{ __('login.Email') }}" type="email" name="email" class="border-none placeholder:text-forestgreen mb-6 border-2 py-4 pl-4 rounded-2xl w-full focus:outline-none focus:border-forestgreen " required>
                        
                        <input placeholder="{{ __('login.Password') }}" type="password" name="password" class="border-none placeholder:text-forestgreen mb-6 border-2 py-4 pl-4 rounded-2xl w-full focus:outline-none focus:border-forestgreen" required>
                    
                        <a href="/signup" class="underline mb-6">{{__('login.Forgot Password?') }}</a>
                    
                        <button  type="submit" class="bg-forestgreen text-white py-4 px-10 text-lg rounded-[14px]">{{ __('login.Login') }}</button>

                        <a href="/signup" class="mt-5">
                            {{ __('login.Don\'t have an account?') }}
                            <span class="underline">{{ __('login.Create One') }}</span>
                        </a> 
                    </form>
                </div>
                
            
            </div> 
        </div>
        
</body>
</html>

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script> --}}

        <script>
            $(document).ready(function(){
            $("span").click(function(){
                $("cpp").toggle();
            });
            });
        </script>