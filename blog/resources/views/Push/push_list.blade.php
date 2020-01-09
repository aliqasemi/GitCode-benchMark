@extends('Layout.default')

@section('titile')
     Push list
@endsection

@section('data-input-output-label')
    <label for="first_name_input">Push List</label>
@endsection

@section('data-input-output')
    <div class="list-group">
    @foreach($data as $d)
            <a href="/pushes/push_detail/{{$d->id}}" class="bg-warning list-group-item list-group-item-action">{{$d->id}} &nbsp;&nbsp;&nbsp; {{$d->file}} &nbsp;&nbsp;&nbsp; {{$d->date_and_time}}</a>
    @endforeach
    </div>
@endsection
