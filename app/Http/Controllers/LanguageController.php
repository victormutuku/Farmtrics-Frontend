<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
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

    public function change(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);

        return redirect() -> back();
    }
}
