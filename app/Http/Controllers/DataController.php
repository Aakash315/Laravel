<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    function users() {
        $users = DB::select('SELECT * FROM users');
        return view('users', ['users'=>$users]); 
    }
}
