<?php

namespace App\Http\Controllers\Front;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\ResgisterRequest;

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
            $input = $request->all();
            $input['password'] = bcrypt($input['password']);
            User::create($input);

            Toastr::success(trans('register.success'));
    
            return redirect()->route('login');
        } catch (\Exception $e) {
            Toastr::error(trans('register.error'));
            return redirect()->route('register');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
