<?php

namespace App\Http\Controllers;

use App\Branches;
use App\Projects;
use Illuminate\Http\Request;

class BranchesController extends Controller
{
    //

    public function form_branch(){
        $data = Projects::get() ;
        return view('Branch.add_branch' , compact('data')) ;
    }

    public function add_branch(Request $request){
        Branches::create([
            'name' => $request['name'] ,
            'type' => $request['type'] ,
            'project_id' => $request['project_id'] ,
        ]);
        return redirect('/branches/branch_list') ;
    }

    public function branch_list(){
        $data = Branches::get() ;
        return view('Branch.branch_list' , compact('data')) ;
    }

    public function branch_detail(Branches $branches){
        return view('Branch.branch_detail' , compact('branches')) ;
    }

    public function branch_delete(Branches $branches){
        $branches->delete() ;
        return redirect('/branches/branch_list') ;
    }

    public function branch_update_form(Branches $branches){
        $data = Projects::get() ;
        return view('Branch.branch_update_form' , compact('branches') , compact('data')) ;
    }

    public function branch_update(Branches $branches , Request $request){
        $branches->update($request->all()) ;
        return redirect('/branches/branch_list') ;
    }
}
