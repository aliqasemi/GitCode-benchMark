@extends('Layout.default')

@section('titile')
    Push File
@endsection
@section('action')
    /pushes/addPush/add
@endsection

@section('{{csrf_field()}}')
    {{csrf_field()}}
@endsection

@section('data-input-output-label')
    <label for="first_name_input">Push File</label>
@endsection

@section('enctype')

@endsection

@section('data-input-output')
    <label for="file">File</label>
    <label for="file">Brows file</label>
    <input type="file" class="form-control" name ="file"  id="comment" style="text-align: left">
    <br>
    <label for="comment">Comment</label>
    <input type="text" class="form-control" name ="comment"  id="comment" style="text-align: left">
    <br>
    <label for="date_and_time">date and time</label>
    <input type="date" class="form-control" id="date_and_time" name="date_and_time"  >
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
    <input style="border-radius: 20px" class="btn-block" type="submit" value="Insert">
    <br>
    <a style="border-radius: 20px" href="/pushes/push_list" class="btn-block bg-dark" type="submit">Pushes list</a>
@endsection
