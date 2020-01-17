<?php

namespace App\Http\Controllers;

use App\Branches;
use App\Issues;
use App\Pushes;
use App\UsersCode;
use Illuminate\Http\Request;

class IssuesController extends Controller
{
    //

    public function form_issue(){
        $user = UsersCode::get() ;
        $push = Pushes::get() ;
        return view('Issue.add_issue' , compact('user') , compact('push')) ;
    }

    public function add_issue(Request $request){
        Issues::create([
            'subject' => $request['subject'] ,
            'date' => $request['date'] ,
            'description' => $request['description'] ,
            'creator_user_id' => $request['creator_user_id'] ,
            'handler_user_id' => $request['handler_user_id'] ,
            'push_id' => $request['push_id']
        ]);
        return redirect('/issues/issue_list') ;
    }

    public function issue_list(){
        $data = Issues::get() ;
        return view('Issue.issue_list' , compact('data')) ;
    }

    public function issue_detail(Issues $issues){
        return view('Issue.issue_detail' , compact('issues')) ;
    }

    public function issue_delete(Issues $issues){
        $issues->delete() ;
        return redirect('/issues/issue_list') ;
    }

    public function issue_update_form(Issues $issues){
        $user = sersCode::get() ;
        $push = Pushes::get() ;
        return view('Issue.issue_update_form' , compact('push' , 'issues' , 'user')) ;
    }

    public function issue_update(Issues $issues , Request $request){
        $issues->update($request->all()) ;
        return redirect('/issues/issue_list') ;
    }
}
