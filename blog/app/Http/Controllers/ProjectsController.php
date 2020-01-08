<?php

namespace App\Http\Controllers;

use App\Projects;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    //
    public function form_project(){
        return view('Project.add_project') ;
    }

    //

    public function add_project(Request $request){
        Projects::create([
            'name' => $request['name'] ,
            'create_date' => $request['create_date'] ,
        ]);
        return redirect('/projects/addProject') ;
        }


    public function project_list(){
        $data = Projects::get() ;
        return view('Project.project_list' , compact('data')) ;
    }

    public function project_detail(Projects $projects){
        return view('Project.project_detail' , compact('projects')) ;
    }
}
