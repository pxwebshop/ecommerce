<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;

class UserController extends Controller
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;    
    }

    public function login(Request $request)
    {
        // $password = \Hash::make('yourpassword');
        // var_dump($password);die;
        return view('front/user/login');
    }

    //muốn thay trường username login thi them cai nay vo
    // public function username()
    // {
    //     return 'username';
    // }
    //gan cho anh cais toast thông báo nha
    public function postLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if (Auth::attempt($credentials)) {
            Toastr::success('Bạn đã đăng nhập thành công','Success');
			return redirect()->route('home');
        }

        return back()->withErrors([
            Toastr::error('Bạn đã đăng nhập thất bại','Error'),
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