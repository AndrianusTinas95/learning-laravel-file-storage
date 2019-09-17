<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function upload(Request $request){
    //    $path = $request->file('image')->store('public');
    //    $path = $request->file('image')->store('photo');
        // $path = Storage::putFile('public',$request->file('image'));
        // $path = $request->file('image')->storeAs('public','gambar');
        $file = $request->file('image');
        $name = time();
        $extension = $file->getClientOriginalExtension();
        $newName = $name . '.' . $extension;
        // $path = $request->file('image')->storeAs('public',$newName);
        $path = Storage::putFileAs('photo',$request->file('image'),$newName);
        dd($path);
    }
}
