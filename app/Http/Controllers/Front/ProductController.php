<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductDetail;

class ProductController extends Controller
{
    public function __construct()
    {
        
    }

    public function index(Request $request, $category_id = '')
    {
        $category = Category::where('id', $category_id)->first();
        $products = Product::where('category_id', $category_id)->where('active', 1)->orderBy('id', 'desc')->paginate(16);
        return view('front/product/index', [
            'products' => $products,
            'category' => $category,
        ]);
    }

    public function detail($id = '')
    {
        $product = Product::where('id', $id)->where('active',1)->firstOrFail();
        $productDetail = ProductDetail::where('id', $id)->firstOrFail();
        $productRelateds = Product::where('active',1)->where('category_id',$product->category_id)->paginate(4);
        return view('front/product/detail', [
            'product' => $product,
            'productDetail' => $productDetail,
            'productRelateds' => $productRelateds,
        ]);
    }
}