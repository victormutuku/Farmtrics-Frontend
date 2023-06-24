@extends('layouts.layout')

@section('title', 'Get Started')

@section('content')
        <div class="mt-[200px]">
            <div class="flex justify-center mb-[200px] items-center">
                <div class="w-0 h-0 lg:w-[470px] lg:h-[518px] bg-[url('../../public/login-image.png')] bg-contain bg-no-repeat"></div>
                <div class="lg:ml-20">
                    <h1 class="text-forestgreen text-5xl font-medium mb-8">{{ __('auth/login.Login') }}</h1>
                    <div class="flex flex-col items-center">
                        {{-- <x-jet-validation-errors class="mb-4"  style="color:red;"/> --}}
                        @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                        @endif
                        {{-- <form method="POST" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}" class="w-[300px] sm:w-[400px] md:w-[470px] "> --}}
                        <form method="POST" action="" class="w-[300px] sm:w-[400px] md:w-[470px] ">
                                @csrf
                            <div class="flex flex-col items-end">
                                <input placeholder="{{ __('auth/login.Email') }}" type="email" name="email" id="email" class="placeholder:text-forestgreen mb-6 border-2 py-4 pl-4 rounded-2xl w-full focus:outline-none focus:border-forestgreen " required>
                                
                                <input placeholder="{{ __('auth/login.Password') }}" type="password" name="password"id="password" class="placeholder:text-forestgreen mb-6 border-2 py-4 pl-4 rounded-2xl w-full focus:outline-none focus:border-forestgreen" required>
                                
                                <a href="#" class="underline mb-6">{{__('auth/login.Forgot Password?') }}</a>
                            </div>
                            
                            <div class="flex flex-col ">
                                <button  type="submit" class="bg-forestgreen text-white py-4 px-10 text-lg rounded-[14px]">{{ __('auth/login.Login') }}</button>
                            </div>
                            <div class="flex flex-col items-center">
                                {{-- <a href="{{route('register')}}" class="mt-5"> --}}
                                <a href="" class="mt-5">
                                    {{ __('auth/login.Don\'t have an account?') }}
                                    <span class="underline">{{ __('auth/login.Create One') }}</span>
                                </a> 
                            </div>
                        
                        </form>
                    </div>
                </div>
            </div> 
        </div>
@endsection


{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script> --}}

<script>
    $(document).ready(function(){
    $("span").click(function(){
        $("cpp").toggle();
    });
    });
</script>