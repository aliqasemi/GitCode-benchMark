@extends('Layout.default')

@section('action')
    /projects/addProject/add
@endsection
@section('{{csrf_field()}}')
    {{csrf_field()}}

@endsection
@section('data-input-output-label')
    <label for="first_name_input">Add Project</label>
@endsection

@section('data-input-output')
    <input type="text" class="form-control" name ="name"  style="text-align: left">
    <br>
    <input type="date" class="form-control" name="create_date"  >
    <br>
    <input style="border-radius: 20px" class="btn-block" type="submit" value="Insert">
@endsection
