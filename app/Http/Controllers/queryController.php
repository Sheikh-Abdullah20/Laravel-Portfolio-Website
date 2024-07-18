<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class queryController extends Controller
{
    public function addUser(Request $req){
        $req->validate([
            'email' => 'required|email',
            'description' => 'required|min:3'
        ]);
        $users = DB::table('users')->insert([
            'user_email' => $req->email,
            'description' => $req->description,
        ]);

       return redirect()->route('contact')->with('status', 'Your Information Has Been Sent to us');
    }
}
