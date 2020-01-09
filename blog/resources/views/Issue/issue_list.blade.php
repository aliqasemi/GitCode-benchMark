@extends('Layout.default')

@section('titile')
     issue list
@endsection

@section('data-input-output-label')
    <label for="first_name_input">issue List</label>
@endsection

@section('data-input-output')
    <div class="list-group">
    @foreach($data as $d)
            <a href="/issues/issue_detail/{{$d->id}}" class="bg-warning list-group-item list-group-item-action">{{$d->id}} &nbsp;&nbsp;&nbsp; {{$d->subject}} &nbsp;&nbsp;&nbsp; {{$d->date}}</a>
    @endforeach
    </div>
@endsection
