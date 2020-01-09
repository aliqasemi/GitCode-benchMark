@extends('Layout.default')

@section('titile')
    Branch detail
@endsection

@section('data-input-output-label')
    <label for="first_name_input">Branch detail</label>
@endsection

@section('data-input-output')
    <div class="list-group">

        <a href="/users/user_detail/{{$branches->id}}" class="bg-warning list-group-item list-group-item-action">{{$branches->name}} &nbsp;&nbsp;&nbsp;    {{$branches->id}} &nbsp;&nbsp;&nbsp; {{$branches->type}} &nbsp;&nbsp;&nbsp;
            {{
            \App\Projects::where('id' , $branches->project_id)->value('name')
            }}
        </a>
        <a href="/branches/branch_update_form/{{$branches->id}}" class="bg-warning list-group-item list-group-item-action">Update</a>
        <a href="/branches/branch_delete/{{$branches->id}}" class="bg-warning list-group-item list-group-item-action">Delete</a>

    </div>
@endsection

