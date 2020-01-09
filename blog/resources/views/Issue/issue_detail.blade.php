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
            {{$project_id1 = \App\Issues::where('id' , $pushes->creator_user_id)->value('project_id')}}
            {{\App\Projects::where('id' , $project_id1)->value('name')}}
            &nbsp;&nbsp;&nbsp;
            {{$project_id2 = \App\Issues::where('id' , $pushes->handler_user_id)->value('project_id')}}
            {{\App\Projects::where('id' , $project_id2)->value('name')}}
            &nbsp;&nbsp;&nbsp;
            {{\App\Pushes::where('id' , $isses->push_id)->value('name')}}
        </a>
        <a href="/projects/project_update_form/{{$projects->id}}" class="bg-warning list-group-item list-group-item-action">Update</a>
        <a href="/projects/project_delete/{{$projects->id}}" class="bg-warning list-group-item list-group-item-action">Delete</a>

    </div>
@endsection

