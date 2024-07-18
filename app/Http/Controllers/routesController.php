<?php

namespace App\Http\Controllers;


class routesController extends Controller
{
    public function showHome(){
        return view('welcome');
    }
    public function showContact(){
        return view('contact');
    }



}
