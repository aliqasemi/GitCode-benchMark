<?php

namespace App\Http\Controllers;

use App\Projects;
use App\UsersCode;
use Illuminate\Http\Request;

class UsersCodeController extends Controller
{
    //

    public function form_user(){
        $data = Projects::get() ;
        return view('User.add_user' , compact('data')) ;
    }

    public function add_user(Request $request){
        UsersCode::create([
            'type' => $request['type'] ,
            'project_id' => $request['project_id'] ,
        ]);
        return redirect('/users/user_list') ;
    }

    public function user_list(){
        $data = UsersCode::get() ;
        return view('User.user_list' , compact('data')) ;
    }

    public function user_detail(UsersCode $users){
        return view('User.user_detail' , compact('users')) ;
    }

    public function user_delete(UsersCode $users){
        $users->delete() ;
        return redirect('/users/user_list') ;
    }

    public function user_update_form(UsersCode $users){
        $data = Projects::get() ;
        return view('User.user_update_form' , compact('users') , compact('data')) ;
    }

    public function user_update(UsersCode $users , Request $request){
        $users->update($request->all()) ;
        return redirect('/users/user_list') ;
    }


}
