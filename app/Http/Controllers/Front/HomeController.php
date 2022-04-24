<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Slider;

class HomeController extends Controller
{
    protected $slider;
    protected $product;

    public function __construct(Slider $slider, Product $product)
    {  
        $this->slider = $slider;
        $this->product = $product;
    }

    public function index(Request $request)
    {
        return view('front/home', [
            'sliders' => $this->slider::where('active',1)->orderBy('sort')->get(),
            'arrivals' => $this->product::where('active',1)->orderBy('id')->paginate(4),
            'special_offers' => $this->product::where('active',1)->orderBy('id')->paginate(3),
            'bestsellers' => $this->product::where('active',1)->orderBy('id')->paginate(8),
            'special_products' => $this->product::where('active',1)->where('special',1)->orderBy('id')->paginate(4),
        ]);
    }

    public function changeLanguage($language)
    {
        \Session::put('website_language', $language);
        return redirect()->back();
    }
}