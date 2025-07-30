<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PassController extends Controller
{
    public function index(){

        $thispage       = [
            'list'    => 'داشبورد مدیریتی',
        ];

        return view('auth.changepassword')->with(compact('thispage'));
    }
}
