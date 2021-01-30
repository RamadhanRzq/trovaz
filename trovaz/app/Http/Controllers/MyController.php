<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index(){
        return view ('Home');
    }
    public function about(){
        return view ('About');
    }
}