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


Route::get('/users/addUser', function () {
    return view('User.add_user');
});


Route::get('/projects/addProject', 'ProjectsController@form_project');

Route::post('/projects/addProject/add', 'ProjectsController@add_project');

Route::get('/projects/project_list' , 'ProjectsController@project_list') ;

Route::get('/projects/project_detail/{projects}' , 'ProjectsController@project_detail') ;

Route::get('/projects/project_delete/{projects}' , 'ProjectsController@project_delete') ;

Route::get('/projects/project_update_form/{projects}' , 'ProjectsController@project_update_form') ;

Route::patch('/projects/project_update/{projects}' , 'ProjectsController@project_update') ;
