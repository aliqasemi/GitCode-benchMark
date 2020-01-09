@extends('Layout.default')

@section('titile')
    edit project
@endsection
@section('action')
    /issues/issue_update/{{$issues->id}}
@endsection
@section('{{csrf_field()}}')
    {{csrf_field()}}
    {{method_field('PATCH')}}
@endsection
@section('data-input-output-label')
    <label for="first_name_input">Edit Project</label>
@endsection

@section('data-input-output')
    <label for="subject">subject</label>
    <input type="text" class="form-control" name ="subject"  id="subject" style="text-align: left" value="{{$issues->subject}}">
    <br>
    <label for="description">description</label>
    <input type="text" class="form-control" name ="description"  id="description" style="text-align: left" value="{{$issues->description}}">
    <br>
    <label for="date">date</label>
    <input type="date" class="form-control" id="date" name="date" value="{{$issues->date}}" >
    <br>
    <label for="creator_user">Select Creator User</label>
    <select class="form-control" id="creator_user" name="creator_user_id">
        @foreach($user as $d)
            <option value="{{$d->id}}">{{$d->type}} &nbsp;&nbsp;&nbsp;
                {{\App\Projects::where('id' , $d->project_id)->value('name')}}
            </option>
        @endforeach
    </select>
    <br>
    <label for="handler_user">Select handler User</label>
    <select class="form-control" id="handler_user" name="handler_user_id">
        @foreach($user as $d)
            <option value="{{$d->id}}">{{$d->type}} &nbsp;&nbsp;&nbsp;
                {{\App\Projects::where('id' , $d->project_id)->value('name')}}
            </option>
        @endforeach
    </select>
    <br>
    <label for="push">Select Push</label>
    <select class="form-control" id="push" name="push_id">
        @foreach($push as $d)
            <option value="{{$d->id}}">{{$d->file}}</option>
        @endforeach
    </select>
    <br>
    <input style="border-radius: 20px" class="btn-block" type="submit" value="Edit">
    <br>
    <a style="border-radius: 20px" href="/issues/issue_list" class="btn-block bg-dark" type="submit">Issues list</a>
@endsection

