<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class User1Controller extends Controller
{
    function getUser() {
        $response = Http::get('https://jsonplaceholder.typicode.com/users/1');
        $response = $response->body();
        return view('user1', ['data'=>json_decode($response)]);
    }

    function queries() {

        // (for all select data)
        $result = DB::table('users')->get();
        return view('user2', ['query'=>$result]);


        // (for where condition)
        // $result = DB::table('users')->where('city', 'Pune')->get();
        // return view('user2', ['query'=>$result]);


        // (for first data condition)
        // $result = DB::table('users')->first();
        // $result = [$result];
        // return view('user2', ['query'=>$result]);


        // (for insert data to database)
    //     $result = Db::table('users')->insert([
    //         'name'=> 'Vijay',
    //         'city' => 'Surat',
    //         'email' => 'vijay@gmail.com'
    //     ]);

    //     if($result){
    //         return "data inserted";
    //     }else {
    //         return "Data not inserted";
    //     }


        // (for update data to database)
        // $result = DB::table('users')->where('name', 'Vijay')->update(['city' => 'Valsad']);

        // if($result){
        //     return "Data Updated";
        // }else {
        //     return "Data not Updated";
        // }


        //(for delete data to database)
        // $result = DB::table('users')->where('city', 'Valsad')->delete();

        // if($result){
        //     return "Data Deleted";
        // }else{
        //     return "Data not Deleted";
        // }
    }
}
