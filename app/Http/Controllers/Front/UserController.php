<?php

namespace App\Http\Controllers\Front;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\ForgotPasswordRequest;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\ResgisterRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function login(Request $request)
    {
        if (Auth::check()) {
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

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
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

    
    public function changePassword(Request $request)
    {
        return view('front/user/change-password');
    }

    public function changePasswordPost(ChangePasswordRequest $request)
    {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            Toastr::error(trans('change-password.error-current'));
            return redirect()->back();
        }

        if (strcmp($request->get('current-password'), $request->get('new-password')) == 0) {
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

    // start: forgot password
    public function forgotPassword()
    {
        return view('front.user.forgot-password');
    }

    public function postForgotPassword(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email|exists:users',
            ]);
    
            $token = Str::random(64);
    
            DB::table('password_resets')->insert([
                'email' => $request->email,
                'token' => $token,
                'created_at' => Carbon::now()
            ]);
    
            \Mail::send('front.user.email.forgetPassword', ['token' => $token], function ($message) use ($request) {
                $message->to($request->email);
                $message->subject('Reset Password');
            });
        } catch (\Exception $e) {
            Toastr::error(trans('forgot-password.error-send-link'));
            return back();
        }
        Toastr::success(trans('forgot-password.success-send-link'));
        return back();
    }

    public function resetPassword($token)
    {
        //dd($token);
        return view('front.user.reset-password', ['token' => $token]);
    }

    public function postResetPassword(ForgotPasswordRequest $request)
    {
        try {
            $updatePassword = DB::table('password_resets')
                ->where([
                    'email' => $request->email,
                    'token' => $request->token
                ])
                ->first();
    
            if (!$updatePassword) {
                return back()->withInput()->with('error', 'Invalid token!');
            }
    
            $user = User::where('email', $request->email)
                ->update(['password' => Hash::make($request->password)]);
    
            DB::table('password_resets')->where(['email' => $request->email])->delete();
        }
        catch(\Exception $e) {
            Toastr::error(trans('forgot-password.error-reset-pass'));
            return back();
        }
        Toastr::success(trans('forgot-password.success-reset-pass'));
        return redirect('/login')->with('message', 'Your password has been changed!');
    }
    //end: forgot password
}
