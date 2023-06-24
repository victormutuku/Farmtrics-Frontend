<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function navbar()
    {
        return view('navbar');
    }

    public function index()
    {
        return view('index');
    }

    public function footer()
    {
        return view('footer');
    }

    public function aboutUs()
    {
        return view('about-us');
    }

    public function pricing()
    {
        return view('pricing');
    }

    public function contact()
    {
        return view('contact');
    }

    public function login()
    {
        return view('login');
    }

    public function signup()
    {
        return view('signup');
    }

    public function usecases()
    {
        return view('usecases');
    }

    public function templates()
    {
        return view('templates');
    }

    public function pagebroken()
    {
        return view('pagebroken');
    }

    public function careers()
    {
        return view('careers');
    }

    public function dataScout()
    {
        return view('data-scout');
    }

    public function partners()
    {
        return view('partners');
    }
}
