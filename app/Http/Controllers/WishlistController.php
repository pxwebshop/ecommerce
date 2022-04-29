<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
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
        dd($request->product_id);
        $data = $request->all();
        //dd($data);
        $wishlist = DB::table('wishlists')->where('product_id', $request->product_id)->count();
        if($wishlist == 0) {
            Wishlist::create($data);
            \Toastr::success('Add to wishlist success');
            return  redirect()->route('wishlist');
        } else {
            return  redirect()->route('wishlist');
        }
        
    }

    public function delete(Request $request)
    {
        dd($request->id);
        DB::table('wishlists')->where('id', $request->id)->delete();
        \Toastr::success('Remove to wishlist success');
        return  redirect()->route('wishlist');
    }
}
