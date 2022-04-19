<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
        
    }

    public function index(Request $request)
    {
        return view('front/home');
    }

    public function changeLanguage($language)
    {
        \Session::put('website_language', $language);
        // dd($language);
        return redirect()->back();
    }

}