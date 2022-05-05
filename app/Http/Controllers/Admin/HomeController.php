<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
            Toastr::success('Update successful');
            return redirect()->route('user');
        } 
        catch(\Exception $e) {
            // dịch nó
            Toastr::error('Update failed');
            return redirect()->back();
        }
    }

    public function userDelete($id) {
        try {
            User::where('id' ,$id)->delete();
            Toastr::success('Delete successful');
            return redirect()->back();
        } 
        catch (\Exception $e) {
            Toastr::error('Delete failed');
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
        // dd($request->hasFile('image'));
        if($request->hasFile('image')){
            $request->validate([
              'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $path = $request->file('image')->store('public/images');
            //dd($path);
            $slider->image = $path;
        }
        $input = $request->all();
        $slider->fill($input)->save();
    
        return redirect()->route('slider');
    }
}
