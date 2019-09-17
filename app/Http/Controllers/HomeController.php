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

    public function list(){
        // show all file in directory
        // $files = Storage::files('');
        // $files = Storage::allFiles('');
        // $files = Storage::allFiles('public');

        // show  directories from storge
        // $directories = Storage::directories('');
     
        // create directory
        // $directory = Storage::makeDirectory('image');
        // $directory = Storage::makeDirectory('image/gif');

        // show  all directories from storge
        $directories = Storage::allDirectories('');

        // delete directory
        // $directory = Storage::deleteDirectory('photo');
        $directory = Storage::deleteDirectory('image/gif');

        dd($directory);
    }

    public function show(){
        $path = Storage::url('public/V61iK8jeQtPIkcIFRN8QeyThhLBRWedvQeBnDgOK.jpeg');
        // return '<img src="'.$path.'" alt="">';
        return '<img src="'.asset('storage/V61iK8jeQtPIkcIFRN8QeyThhLBRWedvQeBnDgOK.jpeg').'" alt="">';
    }
}
