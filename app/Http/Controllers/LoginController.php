<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function login (Request $request) {
        $request->session()->flash('message', 'User Added Successfully');
        return redirect('login');
    }
}
