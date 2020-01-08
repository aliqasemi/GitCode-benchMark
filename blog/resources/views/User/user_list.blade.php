@extends('Layout.default')

@section('titile')
    user list
@endsection

@section('data-input-output-label')
    <label for="first_name_input">User List</label>
@endsection

@section('data-input-output')
    <div class="list-group">
        @foreach($data as $d)
            <a href="/users/user_detail/{{$d->id}}" class="bg-warning list-group-item list-group-item-action">{{$d->id}} &nbsp;&nbsp;&nbsp; {{$d->type}} &nbsp;&nbsp;&nbsp;
                {{
                \App\Projects::where('id' , $d->project_id)->value('name')
                }}</a>
        @endforeach
    </div>
@endsection
