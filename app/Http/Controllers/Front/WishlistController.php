<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('front/wishlist');
    }
}
