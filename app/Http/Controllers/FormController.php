<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function userData(Request $request) {
        // return $request;
        echo "User Name is : $request->username";
        echo "<br>";
        echo "User Email Address is : $request->email";
        echo "<br>";
        echo "User City is : $request->city";
    }

    function userData2 (Request $request) {
        // return $request;
        print_r($request->skill);
        echo "<br>";
        echo "User Gender is : $request->gender";
        echo "<br>";
        echo "User Age is : $request->age";
        echo "<br>";
        echo "User City is : $request->city";
    }

    function userData3 (Request $request) {
        $request->validate([
            'username'=>'required | min:3 | max:15',
            'email' => 'required | email',
            'city' => 'required | uppercase | max:12',
            'skill' => 'required'
        ],[
            'username.required'=> 'username must be required',
            'username.min' => 'username not be less than 3',
            'username.max' => 'username not be more than 15',
            'email.required' => 'email must be required',
            'email.email' => 'email is not a valid format',
            'city.max' => 'city is not more than 12 char'

        ]);

        echo "User Name is : $request->username";
        echo "<br>";
        echo "User Email is : $request->email";
        echo "<br>";
        echo "User City is : $request->city";
        echo "<br>";
        echo "User Skill is : ";
        print_r($request->skill);
    }
}
