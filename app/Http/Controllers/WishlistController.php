<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WishlistController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $wishlists =  DB::table('wishlists')
        ->join('products', 'wishlists.product_id', '=', 'products.id')
        ->where(['user_id' => $user_id])
        ->get();
        return view('front.wishlist', [
            'wishlists' => $wishlists,
        ]);
    }

    public function add(Request $request)
    {
        
    }

    public function delete($id)
    {

    }
}
