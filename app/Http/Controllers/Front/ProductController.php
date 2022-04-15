<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function __construct()
    {
        
    }

    public function index(Request $request)
    {
        return view('front/product/list');
    }

    public function detail(Request $request)
    {
        return view('front/product/detail');
    }
}