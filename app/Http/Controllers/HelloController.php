<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //練習 3-4:從 Controller 將參數傳遞至 view
    public function index($name='Everybody')
    {
        $data=['name'=>$name];
        return view('hello.index',$data);
    }
}
