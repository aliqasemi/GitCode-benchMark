@extends('Layout.default')

@section('titile')
   Push detail
@endsection

@section('data-input-output-label')
    <label for="first_name_input">Push detail</label>
@endsection

@section('data-input-output')
    <div class="list-group">

        <a href="/projects/project_detail/{{$pushes->id}}" class="bg-warning list-group-item list-group-item-action">{{$pushes->id}} &nbsp;&nbsp;&nbsp; {{$pushes->file}} &nbsp;&nbsp;&nbsp; {{$pushes->date_and_time}} &nbsp;&nbsp;&nbsp;
        {{\App\Branches::where('id' , $pushes->branch_id)->value('name')}} &nbsp;&nbsp;&nbsp;
        {{\App\UsersCode::where('id' , $pushes->user_id)->value('type')}}
        </a>
        <a href="/pushes/push_update_form/{{$pushes->id}}" class="bg-warning list-group-item list-group-item-action">Update</a>
        <a href="/pushes/push_delete/{{$pushes->id}}" class="bg-warning list-group-item list-group-item-action">Delete</a>

    </div>
@endsection

