<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function upload(Request $request){
       $path = $request->file('image')->store('');
        dd($path);
    }
}
