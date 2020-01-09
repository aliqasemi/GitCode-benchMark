<?php

namespace App\Http\Controllers;

use App\Branches;
use App\Pushes;
use App\UsersCode;
use Illuminate\Http\Request;

class PushesController extends Controller
{
    //

    public function form_push(){
        $user = UsersCode::get() ;
        $branch = Branches::get() ;
        return view('Push.add_push' , compact('user') , compact('branch')) ;
    }

    public function add_push(Request $request){
        Pushes::create([
            'file' => $request['file'] ,
            'date_and_time' => $request['date_and_time'] ,
            'comment' => $request['comment'] ,
            'user_id' => $request['user_id'] ,
            'branch_id' => $request['branch_id']
        ]);
        return redirect('/pushes/push_list') ;
    }

    public function push_list(){
        $data = Pushes::get() ;
        return view('Push.push_list' , compact('data')) ;
    }

    public function push_detail(Pushes $pushes){
        return view('Push.push_detail' , compact('pushes')) ;
    }

    public function push_delete(Pushes $pushes){
        $pushes->delete() ;
        return redirect('/pushes/push_list') ;
    }

    public function push_update_form(Pushes $pushes){
        $user = UsersCode::get() ;
        $branch = Branches::get() ;
        return view('Push.push_update_form' , compact('pushes' , 'branch' , 'user')) ;
    }

    public function push_update(Pushes $pushes , Request $request){
        $pushes->update($request->all()) ;
        return redirect('/pushes/push_list') ;
    }
}
