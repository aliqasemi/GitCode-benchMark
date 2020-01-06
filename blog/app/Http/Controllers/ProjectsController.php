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
        }
}
