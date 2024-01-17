<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    
    public function index(){
        $coolString = "Hello from ROUTES IV";
        return view("sub_views.hello", compact('coolString'));
    }
    
}
