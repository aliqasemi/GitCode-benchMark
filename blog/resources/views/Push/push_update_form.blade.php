@extends('Layout.default')

@section('title')
    edit push
@endsection
@section('action')
    /pushes/push_update/{{$pushes->id}}
@endsection
@section('{{csrf_field()}}')
    {{csrf_field()}}
    {{method_field('PATCH')}}
@endsection
@section('data-input-output-label')
    <label for="first_name_input">Edit Push</label>
@endsection

@section('data-input-output')
    <label for="file">File</label>
    <input type="text" class="form-control" name ="file"  id="file" style="text-align: left" value="{{$pushes->file}}">
    <br>
    <label for="comment">Comment</label>
    <input type="text" class="form-control" name ="comment"  id="comment" style="text-align: left" value="{{$pushes->comment}}">
    <br>
    <label for="date_and_time">date and time</label>
    <input type="date" class="form-control" id="date_and_time" name="date_and_time"  value="{{$pushes->date_and_time}}">
    <br>
    <label for="user">Select User</label>
    <select class="form-control" id="user" name="user_id">
        @foreach($user as $d)
            <option value="{{$d->id}}">{{$d->type}} &nbsp;&nbsp;&nbsp;
                {{\App\Projects::where('id' , $d->project_id)->value('name')}}
            </option>
        @endforeach
    </select>
    <br>
    <label for="branch">Select Branch</label>
    <select class="form-control" id="branch" name="branch_id">
        @foreach($branch as $d)
            <option value="{{$d->id}}">{{$d->name}}</option>
        @endforeach
    </select>
    <br>
    <input style="border-radius: 20px" class="btn-block" type="submit" value="Edit">
    <br>
    <a style="border-radius: 20px" href="/pushes/push_list" class="btn-block bg-dark" type="submit">Pushes list</a>
@endsection

