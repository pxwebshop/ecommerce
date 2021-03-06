<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WishlistController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $wishlists = Wishlist::with('product')->where('user_id', $user_id)->get();
        return view('front.wishlist', [
            'wishlists' => $wishlists
        ]);
    }

    public function add(Request $request)
    {
        $user_id = Auth::user()->id;
        $product_id = $request->product_id;
        $wishlist = Wishlist::where([
            'product_id' => $request->product_id,
            'user_id'=> $user_id
        ])->first();

        if(!$wishlist) {
            Wishlist::create([
                'user_id' => $user_id,
                'product_id' => $product_id
            ]);
            Toastr::success(trans('common.wishlist_success'));
            return redirect()->route('wishlist');
        } 
        else {
            return redirect()->route('wishlist');
        }
    }

    public function delete(Request $request)
    {
        $user_id = Auth::user()->id;
        Wishlist::where([
            'product_id' => $request->id,
            'user_id' => $user_id
        ])->delete();
        Toastr::success(trans('common.deleted_success'));
        return redirect()->route('wishlist');
    }
}
