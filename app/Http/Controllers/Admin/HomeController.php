<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Slider;
use App\Models\User;

class HomeController extends Controller
{
    //
    public function index() {
        return view('admin.home');
    }

    // start: user
    public function user() {
        $users = User::get();
        return view('admin.user.list', [
            'users' => $users,
        ]);
    }

    public function userEdit($id) {
        $user = User::find($id);
        // dd($user);
        return view('admin.user.edit', [
            'user' => $user,
        ]);
    }
    public function postUserEdit(Request $request, $id) {
        try {
            $user = User::findOrFail($id);
            $input = $request->all();
            $user->fill($input)->save();
            Toastr::success(trans('common.updated_success'));
            return redirect()->route('user');
        } 
        catch(\Exception $e) {
            // dịch nó
            Toastr::error(trans('common.updated_error'));
            return redirect()->back();
        }
    }

    public function userDelete($id) {
        try {
            User::where('id' ,$id)->delete();
            Toastr::success(trans('common.deleted_success'));
            return redirect()->back();
        } 
        catch (\Exception $e) {
            Toastr::error(trans('common.deleted_error'));
            return redirect()->back();
        }
    }
    // end: user

    public function slider() {
        $sliders = Slider::get();
        return view('admin.slider.list', [
            'sliders' => $sliders,
        ]);
    }

    public function sliderEdit($id) {
        $slider = Slider::find($id);
        return view('admin.slider.edit', [
            'slider' => $slider,
        ]);
    }
    public function postSliderEdit(Request $request, $id) {
        $slider = Slider::find($id);
        if($request->hasFile('image')){
            $request->validate([
              'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            // $file = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs(
                'public/images/sliders', $request->file('image')->getClientOriginalName()
            );
            $slider->image = $path;
        }
        // $input = $request->all();
        
        try {
            $slider->fill($request->input())->save();
            Toastr::success(trans('common.updated_success'));
            return redirect()->route('slider');
        } catch (\Exception $ex) {
            Toastr::error(trans('common.updated_error'));
            return redirect()->back();
        }
    }

    public function sliderAdd() {
        return view('admin.slider.add');
    }

    public function postSliderAdd(Request $request) {
        $slider = new Slider;

        if($request->hasFile('image')){
            $request->validate([
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            // $file = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs(
                'public/images/sliders', $request->file('image')->getClientOriginalName()
            );
            $slider->image = $path;
        }

        try {
            $slider->fill($request->input())->save();
            Toastr::success(trans('common.added_success'));
            return redirect()->route('slider');
        } 
        catch (\Exception $ex) {
            Toastr::error(trans('common.added_error'));
            return redirect()->back();
        }
    }

    public function sliderDelete($id) {
        try {
            $slider = Slider::find($id);
            $slider->delete();
            Toastr::success(trans('common.deleted_success'));
            return redirect()->route('slider');
        } catch (\Exception $ex) {
            Toastr::error(trans('common.deleted_error'));
            return redirect()->route('slider');
        }
    }

    public function cart() {
        return view('admin.cart.customer', [
            'customers' => Customer::orderByDesc('id')->paginate(10),
        ]);
    }

    public function cartDetail(Customer $customer)
    {
        $carts = $customer->cart()
            ->with(['product' => function ($query) {
                $query->select('id', 'name', 'thumb');
            }])->get();

        return view('admin.cart.detail', [
            'customer' => $customer,
            'carts' => $carts
        ]);
    }

    public function cartStatus(Customer $customer, Request $request) {
        try {
            $customer->status = $request->input('status');
            $customer->update();
            Toastr::success(trans('common.updated_success'));
            return redirect()->route('cart.customer');
        } catch (\Exception $ex) {
            Toastr::error(trans('common.updated_error'));
            return redirect()->route('cart.customer');
        }
    }
}
