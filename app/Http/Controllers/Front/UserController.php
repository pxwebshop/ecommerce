<?php

namespace App\Http\Controllers\Front;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\ResgisterRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function login(Request $request)
    {
        if ( Auth::check() )   {
            return redirect()->route('home');
        }
        return view('front/user/login');
    }

    public function postLogin(LoginRequest $request)
    {
        $credentials = $request->only("email", "password");
        if (Auth::attempt($credentials)) {
            Toastr::success(trans('login.success'));
            return redirect()->route('home');
        }

        return back()->withErrors([
            Toastr::error(trans('login.error')),
        ])->withInput();
    }

    public function register(Request $request)
    {
        return view('front/user/register');
    }

    public function postRegister(ResgisterRequest $request)
    {
        try {
            $input = $request->only("name", "email", "phone", "password");
            $input['password'] = bcrypt($input['password']);
            User::create($input);
        } catch (\Exception $e) {
            Toastr::error(trans('user-register.error'));
            return redirect()->route('register');
        }
        Toastr::success(trans('user-register.success'));
    
        return redirect()->route('login');
    }

    public function changePassword(Request $request) {
        return view('front/user/change-password');
    }

    public function changePasswordPost(ChangePasswordRequest $request) {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            Toastr::error(trans('change-password.error-current'));
            return redirect()->back();
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            // Current password and new password same
            Toastr::error(trans('change-password.error-new-pass'));
            return redirect()->back();
        }

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();
        Toastr::success(trans('change-password.success'));
        Auth::logout();
        return redirect()->route('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
