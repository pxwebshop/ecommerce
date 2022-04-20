<?php

namespace App\Http\Controllers\Front;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Requests\LoginRequest;

class UserController extends Controller
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;    
    }

    public function login(Request $request)
    {
        return view('front/user/login');
    }

    public function postLogin(LoginRequest $request)
    {
        $credentials = $request->only("email", "password");
        if (Auth::attempt($credentials)) {
            Toastr::success(trans('login.success'),'Success');
			return redirect()->route('home');
        }

        return back()->withErrors([
            Toastr::error(trans('login.error'),'Error'),
        ])->withInput();
    }

    public function register(Request $request)
    {
        return view('front/user/register');
    }

    public function postRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
 
        $user = User::create([
            'name' => trim($request->input('name')),
            'email' => strtolower($request->input('email')),
            'password' => bcrypt($request->input('password')),
        ]);
        Toastr::success('Bạn đã đăng ký tài khoản thành công','Success');
       
        return redirect()->route('login');

        // $input = $request->all();
        // $input['password'] = bcrypt($input['password']);
        // $user = User::create($input);
        // Toastr::success('Bạn đã đăng ký tài khoản thành công','Success');
       
        // return redirect()->route('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}