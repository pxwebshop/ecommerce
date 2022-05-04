<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //sort product latest
    const SORT_LASTEST = 2;
    //sort by price low to high
    const SORT_PRICE_MIN = 3;
    //sort by price high to low
    const SORT_PRICE_MAX = 4;

    public function __construct()
    {
        
    }

    public function index(Request $request, $category_id = '')
    {  
        $parent_id = Category::select('parent_id')->whereId($category_id)->first()->parent_id;
        $category = Category::where('id', $category_id)->first();

        if($parent_id == 0) {
            $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->where('categories.parent_id', $category_id)->orWhere('categories.id', $category_id)->where('products.active', 1)
            ->select('products.*');
        }
        else {
            $products = Product::categoryId($category_id)->active();
        }

        if ($request->sort == 2) {
            $products = $products->orderBy('id', 'desc')->paginate(16);
        } elseif ($request->sort == 3) {
            $products = $products->orderBy('sale_price', 'asc')->paginate(16);
        } elseif ($request->sort == 4) {
            $products = $products->orderBy('sale_price', 'desc')->paginate(16);
        } else {
            $products = $products->paginate(16);
        }
        
        return view('front/product/index', [
            'products' => $products,
            'category' => $category,
        ]);
    }

    public function detail($id = '')
    {
        $product = Product::whereId($id)->active()->firstOrFail();
        $productDetail = ProductDetail::whereId($id)->firstOrFail();
        $relatedProducts = Product::where(['active' => 1, 'category_id' => $product->category_id])->paginate(4);
        return view('front/product/detail', [
            'product' => $product,
            'productDetail' => $productDetail,
            'relatedProducts' => $relatedProducts,
        ]);
    }


    public function sort(Request $request)
    {
        $id = $request->get('id');
        $data = 1;//query scope

        return response()->json([
            'data' => $data
        ], \Response::HTTP_OK);
    }
}