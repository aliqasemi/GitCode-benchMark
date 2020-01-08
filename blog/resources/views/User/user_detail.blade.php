@extends('Layout.default')

@section('titile')
    User detail
@endsection

@section('data-input-output-label')
    <label for="first_name_input">User detail</label>
@endsection

@section('data-input-output')
    <div class="list-group">

        <a href="/users/user_detail/{{$users->id}}" class="bg-warning list-group-item list-group-item-action">{{$users->id}} &nbsp;&nbsp;&nbsp; {{$users->type}} &nbsp;&nbsp;&nbsp;
            {{
            \App\Projects::where('id' , $users->project_id)->value('name')
            }}
        </a>
        <a href="/users/user_update_form/{{$users->id}}" class="bg-warning list-group-item list-group-item-action">Update</a>
        <a href="/users/user_delete/{{$users->id}}" class="bg-warning list-group-item list-group-item-action">Delete</a>

    </div>
@endsection

