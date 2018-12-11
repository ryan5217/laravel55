<?php

namespace App\Http\Controllers\Socket;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function getApp()
    {
//        return view('errors.503');
        return view('app');
    }

    public function getLogin()
    {
        return view('login');
    }
}