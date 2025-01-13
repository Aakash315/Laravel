<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;

class User2Controller extends Controller
{
    function queries() {
        $response = User::all();
        return view('user3', ['query'=>$response]);
    } 

    
    function add (Request $request) {
        // return $request->input('name');
        $student = new Student();
        $student->name=$request->name;
        $student->city=$request->city;
        $student->email=$request->email;
        $student->save();
        // return redirect('list-student');
        
        
        if($student){
            echo "user added";
            return redirect('list');
        }
    }

    function list() {
        $studentdata = Student::paginate(10);
        return view('list-student', ['student'=>$studentdata]);
    }

    function delete($id) {
        $isdeleted =Student::destroy($id);
        if($isdeleted){
            return redirect('list'); 
        }
    }

    function edit($id) {
        $studentedit = Student::find($id);
        return view('edit', ['data'=> $studentedit]);
    }

    function editstudent(Request $request, $id){
        $studentedit = Student::find($id);
        $studentedit->name=$request->name;
        $studentedit->city=$request->city;
        $studentedit->email=$request->email;
        
        if($studentedit->save()){
            return redirect('list');
        }else{
            return "not updated";
        }
    }

    function search(Request $request) {
        $studentsearch = Student::where('name','like', "%$request->search%")->orWhere('city','like', "%$request->search%")->paginate(10);
        return view('list-student', ['student'=>$studentsearch, 'search'=>$request->search]);
    }

    function deleteMulti(Request $request){
        $result= Student::destroy($request->ids);
        if($result){
            return redirect('list');
        }else{
            return "student data not found";
        }
    }
}