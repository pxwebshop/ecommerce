<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('front/product-detail');
    }
}
