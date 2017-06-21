<?php

namespace App\Http\Controllers\administrator;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
Use App\User as user_model;

class A_UserController extends Controller
{
    //

    public function index(){
        $users = user_model::all();
        return view("administrator.user.index", compact('users'));
    }

    public function create(){


        //generate account_code

        return view("administrator.user.detail");
    }

    public function edit($id){

    }

    public function update($id, Request $request){

    }

    public function show($id){

    }

    public function delete($id){
        user_model::destroy($id);
        return redirect()->back();
    }


}
