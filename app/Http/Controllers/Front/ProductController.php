<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductDetail;

class ProductController extends Controller
{
    public function __construct()
    {
        
    }

    public function index(Request $request)
    {
        return view('front/product/index'   );
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