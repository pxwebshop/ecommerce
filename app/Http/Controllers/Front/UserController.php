<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct()
    {
        
    }

    public function login(Request $request)
    {
        return view('front/user/login');
    }
}