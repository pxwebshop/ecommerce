<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index() {
        return view('admin.home');
    }

    public function user() {
        $users = User::get();
        return view('admin.user.list', [
            'users' => $users,
        ]);
    }

    public function userAdd() {
        
        return view('admin.user.add', [
            
        ]);
    }

    public function userEdit($id) {
        $user = User::find($id);
        // dd($user);
        return view('admin.user.edit', [
            'user' => $user,
        ]);
    }
}
