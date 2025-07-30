<?php

namespace App\Http\Controllers\Panel;

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
