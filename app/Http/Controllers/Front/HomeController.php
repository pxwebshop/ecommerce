<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slider;

class HomeController extends Controller
{
    protected $slider;

    public function __construct(Slider $slider)
    {  
        $this->slider = $slider;
    }

    public function index(Request $request)
    {
        return view('front/home', [
            'sliders' => $this->slider::where('active',1)->orderBy('sort')->get(),
        ]);
    }

    public function changeLanguage($language)
    {
        \Session::put('website_language', $language);
        return redirect()->back();
    }
}