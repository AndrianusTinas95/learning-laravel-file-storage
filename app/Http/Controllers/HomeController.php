<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function upload(Request $request){
    //    $path = $request->file('image')->store('public');
    //    $path = $request->file('image')->store('photo');
        $path = Storage::putFile('public',$request->file('image'));
        dd($path);
    }
}
