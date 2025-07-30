<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index(){
        $thispage       = [
            'title'   => 'مدیریت پروژه ها',
            'list'    => 'لیست پروژه ها',
            'add'     => 'افزودن پروژه ها',
            'create'  => 'ایجاد پروژه ها',
            'enter'   => 'ورود پروژه ها',
            'edit'    => 'ویرایش پروژه ها',
            'delete'  => 'حذف پروژه ها',
        ];

        return view('panel.calendar')->with('thispage');
    }
}
