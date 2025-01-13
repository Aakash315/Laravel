<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    function userName(){
        $name = 'sunil';
        $user = ['anil','sunil','ram'];
        return view('home',['name'=>$name, 'users'=>$user]);
    }
    function userWelcome(){
        return view('welcome');
    }
    function userAbout(){
        return view('about');
    }
    function userName1(){
        return view('home1');
    }
    function userAbout1(){
        return view('about1');
    }
}
