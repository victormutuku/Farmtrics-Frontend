@extends('layouts.layout')

@section('title', 'Templates')

@section('content')

    <div class="flex flex-col mt-[140px] ml-[116px] mb-20">
        <h1 class="text-forestgreen font-bold text-5xl mb-[20px]">
            {{ __('templates.Templates') }}
        </h1>
    </div>

    <x-page-broken/>

@endsection