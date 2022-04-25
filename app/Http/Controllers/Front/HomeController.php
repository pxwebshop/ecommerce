<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;

class HomeController extends Controller
{
    private $slider;
    private $product;
    private $article;
    private $category;

    public function __construct()
    {  
      
    }

    public function index(Request $request)
    {
        var_dump(Slider::where('active',1)->orderBy('sort')->get());die;
        return view('front/home', [
            'sliders' => Slider::where('active',1)->orderBy('sort')->get(),
            'arrivals' => Product::where('active',1)->orderBy('id')->paginate(4),
            'special_offers' => Product::where('active',1)->orderBy('id')->paginate(3),
            'bestsellers' => Product::where('active',1)->orderBy('id')->paginate(8),
            'special_products' => Product::where('active',1)->where('special',1)->orderBy('id')->paginate(4),
            'articles' => Article::where('active',1)->orderBy('id')->paginate(3),
            'categories' => Category::select('id', 'name')->where('parent_id',0)->orderBy('id')->get(),
        ]);
    }

    public function changeLanguage($language)
    {
        \Session::put('website_language', $language);
        return redirect()->back();
    }
}