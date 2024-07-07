<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class routesController extends Controller
{
    public function showHome(){
        return view('welcome');
    }
    public function showContact(){
        return view('contact');
    }


}
