<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function index(Request $request)
    {

// dd($value);
        return view('front/cart');
    }

    public function addToCart($id, Request $request)
    {
        //dd($request);
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "product_id" => $product->id,
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->sale_price,
                "thumb" => $product->thumb
            ];
        }

        session()->put('cart', $cart);
        Toastr::success(trans('common.added_success'));
        return redirect()->route('cart');
    }

    public function updateCart(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            Toastr::success(trans('common.updated_success'));
        }
    }

    public function removeCart(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            Toastr::success(trans('common.deleted_success'));
        }
    }
}
