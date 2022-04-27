<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Support\Facades\DB;


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
        $cat = $request->cat;
        $cat_id = DB::table('categories')->where('name', $cat)->first()->id;
        if($cat_id == null) {
            dd(1234);
            $products = Product::where('name', 'like', '%'.$res.'%')->paginate(8);
        }
        else {
            
            dd(12345);
            $cat_id = DB::table('categories')->where('name', $cat)->select('id');
            // $parent_id = Category::select('parent_id')->whereId($cat_id)->first()->parent_id;
            // dd($parent_id);
            $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->where('categories.parent_id', $cat_id)
            ->orWhere('categories.id', $cat_id)
            ->where('products.active', 1)
            ->where('products.name', 'like', '%'.$res.'%')
            ->select('products.*')
            ->paginate(8);

            //$products = Product::where('name', 'like', '%'.$res.'%')->where('category_id', $cat_id)->paginate(8);
        }

        return view('front/product/search', [
            'products' => $products,
        ]);
    }
}