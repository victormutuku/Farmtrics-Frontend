@extends('layouts.layout')

@section('title', 'Contact Us')

@section('content')

    <div class="flex flex-col items-center mt-[140px] mb-20">
        <h1 class="text-forestgreen font-bold text-7xl mb-[20px]">{{ __('contact.Contact us') }}</h1>
        <p class="text-xl leading-[30px] font-medium text-gray-800">{{ __('contact.Get in touch and let us know how we can assist') }}</p>
    </div>
    <div class="flex justify-center mb-[200px]">
        <div class="w-[470px] h-[518px] rounded-2xl bg-cover
         bg-center bg-green-200/70 bg-[url('../../public/call-person.png')]"></div>
        
        <form action="#" method="POST" class="w-[470px] ml-[80px] flex flex-col items-end">
            
            <input placeholder="{{ __('contact.Full Name') }}" type="text" name="fullName" class="border-none placeholder:text-forestgreen mb-6 border-2 py-4 pl-4 rounded-2xl w-full focus:outline-none focus:border-forestgreen " required>
            
            <input placeholder="{{ __('contact.Business Name') }}" type="text" name="businessName" class="border-none placeholder:text-forestgreen  mb-6 border-2 py-4 pl-4 rounded-2xl w-full focus:outline-none focus:border-forestgreen" required>
            
            <input placeholder="{{ __('contact.Email') }}" type="email" name="email" class="border-none placeholder:text-forestgreen  mb-6 border-2 py-4 pl-4 rounded-2xl w-full focus:outline-none focus:border-forestgreen" required>
            
            <textarea placeholder="{{ __('contact.Add a note') }}" type="text" name="note" class="border-none  placeholder:text-forestgreen mb-8 border-2 py-4 pl-4 rounded-2xl w-full focus:outline-none focus:border-forestgreen" required rows="6"></textarea>
            
            <button  type="submit" class="bg-forestgreen text-white py-4 px-10 text-lg rounded-[14px]">{{ __('contact.Send Message') }}</button>
         
        </form>
        
    </div>

@endsection