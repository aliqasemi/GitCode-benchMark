@extends('Layout.default')

@section('titile')
    edit project
@endsection
@section('action')
    /projects/project_update/{{$projects->id}}
@endsection
@section('{{csrf_field()}}')
    {{csrf_field()}}
    {{method_field('PATCH')}}
@endsection
@section('data-input-output-label')
    <label for="first_name_input">Add Project</label>
@endsection

@section('data-input-output')
    <input type="text" class="form-control" name ="name"  style="text-align: left" value="{{$projects->name}}">
    <br>
    <input type="date" class="form-control" name="create_date" value="{{$projects->create_date}}"  >
    <br>
    <input style="border-radius: 20px" class="btn-block" type="submit" value="Edit">
@endsection

