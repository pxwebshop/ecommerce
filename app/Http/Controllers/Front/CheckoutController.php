<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Customer;
use App\Models\Product;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('front/checkout');
    }

    public function add(Request $request) {
        // if(session('cart')){
        //     dd(session('cart'), $request->input());
        //     foreach (session('cart') as $id => $details) {
        //         echo(' ' . $id);
        //     }
        // }
        // else {
        //     Toastr::error("Không có sản phẩm trong giỏ hàng");
        //     return redirect()->route('checkout');
        // }
        try {
            DB::beginTransaction();

            $carts = \Session::get('cart');
            if (is_null($carts))
            {
                Toastr::error(trans('common.order_fail'));
                return redirect()->route('checkout');
            }

            $customer = Customer::create([
                'firstName' => $request->input('firstName'),
                'lastName' => $request->input('lastName'),
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
                'email' => $request->input('email'),
                'note' => $request->input('note')
            ]);

            $this->infoProductCart($carts, $customer->id);
            DB::commit();

            // #Queue
            // // SendMail::dispatch($request->input('email'))->delay(now()->addSeconds(2));
            $products = session('cart');

            \Mail::send('front.email.order', ['products' => $products], function ($message) use ($request) {
                $message->to($request->input('email'));
                $message->subject('Đặt Hàng Thành Công.');
            });

            \Session::forget('cart');
            Toastr::success(trans('common.order_success'));
            return redirect()->route('checkout');

        } catch (\Exception $err) {
            DB::rollBack();
            Toastr::error(trans('common.order_fail'. $err->getMessage()));
            return redirect()->route('checkout');
        }
    }

    protected function infoProductCart($carts, $customer_id)
    {
        $productId = array_keys($carts);
        $products = Product::select('id', 'name', 'price', 'sale_price', 'thumb')
            ->where('active', 1)
            ->whereIn('id', $productId)
            ->get();

        $data = [];

        foreach ($products as $product) {
            $data[] = [
                'customer_id' => $customer_id,
                'product_id' => $product->id,
                'pty'   => $carts[$product->id]['quantity'],
                'price' => $product->sale_price
            ];
        }

        return Cart::insert($data);
    }

    protected function infoProductMail($carts, $customer_id)
    {
        $productId = array_keys($carts);
        $products = Product::select('id', 'name', 'price', 'sale_price', 'thumb')
            ->where('active', 1)
            ->whereIn('id', $productId)
            ->get();

        $data = [];

        foreach ($products as $product) {
            $data[] = [
                'customer_id' => $customer_id,
                'product_id' => $product->id,
                'pty'   => $carts[$product->id]['quantity'],
                'price' => $product->sale_price,
                'name' => $product->name
            ];
        }

        return $data;
    }
}
