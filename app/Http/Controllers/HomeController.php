<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //練習 1-8:改用 HomeController回傳
    public function index()
    {
        return view('home.index');
    }

}
