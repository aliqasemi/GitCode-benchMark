<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//Project Schema:

Route::get('/projects/addProject', 'ProjectsController@form_project');

Route::post('/projects/addProject/add', 'ProjectsController@add_project');

Route::get('/projects/project_list' , 'ProjectsController@project_list') ;

Route::get('/projects/project_detail/{projects}' , 'ProjectsController@project_detail') ;

Route::get('/projects/project_delete/{projects}' , 'ProjectsController@project_delete') ;

Route::get('/projects/project_update_form/{projects}' , 'ProjectsController@project_update_form') ;

Route::patch('/projects/project_update/{projects}' , 'ProjectsController@project_update') ;

//End Project Schema

//User Schema:

Route::get('/users/addUser', 'UsersCodeController@form_user');

Route::post('/users/addUser/add', 'UsersCodeController@add_user');

Route::get('/users/user_list' , 'UsersCodeController@user_list') ;

Route::get('/users/user_detail/{users}' , 'UsersCodeController@user_detail') ;

Route::get('/users/user_delete/{users}' , 'UsersCodeController@user_delete') ;

Route::get('/users/user_update_form/{users}' , 'UsersCodeController@user_update_form') ;

Route::patch('/users/user_update/{users}' , 'UsersCodeController@user_update') ;

//End User Schema

//Branches Schema

Route::get('/branches/addBranch', 'BranchesController@form_branch');

Route::post('/branches/addBranch/add', 'BranchesController@add_branch');

Route::get('/branches/branch_list' , 'BranchesController@branch_list') ;

Route::get('/branches/branch_detail/{branches}' , 'BranchesController@branch_detail') ;

Route::get('/branches/branch_delete/{branches}' , 'BranchesController@branch_delete') ;

Route::get('/branches/branch_update_form/{branches}' , 'BranchesController@branch_update_form') ;

Route::patch('/branches/branch_update/{branches}' , 'BranchesController@branch_update') ;

//End Branch Schema

//Pushes Schema

Route::get('/pushes/addPush', 'PushesController@form_push');

Route::post('/pushes/addPush/add', 'PushesController@add_push');

Route::get('/pushes/push_list' , 'PushesController@push_list') ;

Route::get('/pushes/push_detail/{pushes}' , 'PushesController@push_detail') ;

Route::get('/pushes/push_delete/{pushes}' , 'PushesController@push_delete') ;

Route::get('/pushes/push_update_form/{pushes}' , 'PushesController@push_update_form') ;

Route::patch('/pushes/push_update/{pushes}' , 'PushesController@push_update') ;

//End Pushes Schema

//Issues Schema

Route::get('/issues/addIssue', 'IssuesController@form_issue');

Route::post('/issues/addIssue/add', 'IssuesController@add_issue');

Route::get('/issues/issue_list' , 'IssuesController@issue_list') ;

Route::get('/issues/issue_detail/{issues}' , 'IssuesController@issue_detail') ;

Route::get('/issues/issue_delete/{issues}' , 'IssuesController@issue_delete') ;

Route::get('/issues/issue_update_form/{issues}' , 'IssuesController@issue_update_form') ;

Route::patch('/issues/issue_update/{issues}' , 'IssuesController@issue_update') ;

//End Issues Schema
