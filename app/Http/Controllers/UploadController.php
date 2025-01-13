<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    function upload(Request $request) {
        // $path = $request->file('file')->store('public');         //for store image 

        $path = $request->file('file')->storeAs('public', 'demo1.jpg');    //for name change of image
        $filenameArray = explode("/",$path);
        $filename = $filenameArray[1];
        return view('display', ['path'=>$filename]);
    }
}
