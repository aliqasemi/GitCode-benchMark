@extends('Layout.default')

@section('titile')
     project list
@endsection

@section('data-input-output-label')
    <label for="first_name_input">Project List</label>
@endsection

@section('data-input-output')
    <div class="list-group">
    @foreach($data as $d)
            <a href="/projects/project_detail/{{$d->id}}" class="bg-warning list-group-item list-group-item-action">{{$d->id}} &nbsp;&nbsp;&nbsp; {{$d->name}} &nbsp;&nbsp;&nbsp; {{$d->create_date}}</a>
    @endforeach
    </div>
@endsection
