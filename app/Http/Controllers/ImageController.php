<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    function upload(Request $request){
        $path  = $request->file('file')->store('public');
        $fileName = explode("/",$path);
        $filepath = $fileName[1];
        $img = new Image();
        $img->path=$filepath;
        if($img->save()){
            return redirect('lists');
        }else{
            return "data not found";
        }
    }

    function display(){
        $images = Image::all();
        return view('imgDisplay', ['img'=>$images]);
    }
}
