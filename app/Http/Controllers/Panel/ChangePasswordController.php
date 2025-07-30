<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class ChangePasswordController extends Controller
{
    public function index(){

        $thispage       = [
            'list'    => 'داشبورد مدیریتی',
        ];

        return view('auth.changepassword')->with(compact('thispage'));
    }

    public function change(Request $request){

        $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        Auth::user()->update(['password' => Hash::make($request->password), 'change_password' => 1]);

        return Redirect::route('dashboard');

    }
}
