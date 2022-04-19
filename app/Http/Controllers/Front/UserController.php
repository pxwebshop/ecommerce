<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            Toastr::success('Bạn đã đăng nhập thành công','Success');
			return redirect()->route('home');
        }

        return back()->withErrors([
            Toastr::error('Bạn nhập sai tên tài khoản hoặc mật khẩu','Đăng nhập thất bại'),
            //'error' => 'Bạn nhập sai tên tài khoản hoặc mật khẩu',
        ]);
    }

    public function register(Request $request)
    {
        return view('front/user/register');
    }
    
}