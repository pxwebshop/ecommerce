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
        return view('front/home', [
            'sliders' => Slider::active()->sort()->get(),
            'arrivals' => Product::active()->orderDescId()->paginate(4),
            'bestsellers' => Product::active()->orderDescId()->paginate(8),
            'special_products' => Product::active()->specialProduct()->orderDescId()->paginate(4),
            'special_offers' => Product::active()->specialOffer()->orderDescId()->paginate(3),
            'articles' => Article::active()->sort()->paginate(3),
        ]);
    }

    public function changeLanguage($language)
    {
        \Session::put('website_language', $language);
        return redirect()->back();
    }

    public function search(Request $request) {
        $res = $request->s;
        $products = Product::where('name', 'like', '%'.$res.'%')->paginate(8);
        return view('front/product/search', [
            'products' => $products,
        ]);
    }
}