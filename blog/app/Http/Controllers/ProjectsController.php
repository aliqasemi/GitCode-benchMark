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
        return redirect('/projects/project_list') ;
        }

        //


    public function project_list(){
        $data = Projects::get() ;
        return view('Project.project_list' , compact('data')) ;
    }

    public function project_detail(Projects $projects){
        return view('Project.project_detail' , compact('projects')) ;
    }

    public function project_delete(Projects $projects){
        $projects->delete() ;
        return redirect('/projects/project_list') ;
    }

    public function project_update_form(Projects $projects){
        return view('Project.project_update_form' , compact('projects')) ;
    }

    public function project_update(Projects $projects , Request $request){
        $projects->update($request->all()) ;
        return redirect('/projects/project_list') ;
    }

}
