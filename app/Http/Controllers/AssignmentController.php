<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    //Method for Question 1
    function AddUser(Request $request){
        return $request->input('name');
    }

    //Method for Question 2
    function UserAgent(Request $request){
        return $request->header('User-Agent');
    }

    //Method for Question 3
    function PageQuery(Request $request){
        return $page = $request->query('page', null);
    }

    //Method for Question 4
    function JsonResponse(){
        $data = array(
            "message"=> "Success",
            "data"   => array(
                "name"  => "John Doe",
                "age"   => 25
            )

        );
        return response()->json($data);
    }

    //Method for Question 5
    function FileUpload(Request $request){
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
        }
    }

    //Method for Question 6
    function VerifyToken(Request $request){
        return $rememberToken = $request->cookie('remember_token', null);
    }
}
