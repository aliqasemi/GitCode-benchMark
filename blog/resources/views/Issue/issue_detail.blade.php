@extends('Layout.default')

@section('titile')
    Issue detail
@endsection

@section('data-input-output-label')
    <label for="first_name_input">Issue detail</label>
@endsection

@section('data-input-output')
    <div class="list-group">

        <a href="/projects/project_detail/{{$issues->id}}" class="bg-warning list-group-item list-group-item-action">{{$issues->id}} &nbsp;&nbsp;&nbsp; {{$issues->subject}} &nbsp;&nbsp;&nbsp; {{$issues->date}} &nbsp;&nbsp;&nbsp; {{$issues->description}}
            &nbsp;&nbsp;&nbsp;
            {{$project_id1 = \App\UsersCode::where('id' , $issues->creator_user_id)->value('project_id')}}
            {{\App\Projects::where('id' , $project_id1)->value('name')}}
            &nbsp;&nbsp;&nbsp;
            {{$project_id2 = \App\UsersCode::where('id' , $issues->handler_user_id)->value('project_id')}}
            {{\App\Projects::where('id' , $project_id2)->value('name')}}
            &nbsp;&nbsp;&nbsp;
            {{\App\Pushes::where('id' , $issues->push_id)->value('file')}}
        </a>
        <a href="/issues/issue_update_form/{{$issues->id}}" class="bg-warning list-group-item list-group-item-action">Update</a>
        <a href="/issues/issue_delete/{{$issues->id}}" class="bg-warning list-group-item list-group-item-action">Delete</a>

    </div>
@endsection

