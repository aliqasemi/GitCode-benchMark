@extends('Layout.default')

@section('action')

@endsection
@section('data-input-output-label')
<label for="first_name_input">Add User</label>
@endsection

@section('data-input-output')
    <input type="text" class="form-control" name = "type" placeholder="Enter type" style="text-align: left">
    <br>
    <input type="text" class="form-control" name= "project" placeholder="Enter project" style="text-align: left">
    <br>
    <input style="border-radius: 20px" class="btn-block" name="submit" type="submit" value="Insert">
@endsection
