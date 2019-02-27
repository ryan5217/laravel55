<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class AppController extends Controller
{
    public function getApp()
    {
        Redis::set("name","ryan");
        dd(111);
//        return view('errors.503');
        return view('app');
    }

    public function getLogin()
    {
        return view('login');
    }
}
