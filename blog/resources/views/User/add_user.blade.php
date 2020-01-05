@extends('Layout.default')

@section('action')
    a.php
@endsection
@section('data-input-output-lable')
<label for="first_name_input">Add User</label>
@endsection

@section('data-input-output')
    <input type="text" class="form-control" name = "type" placeholder="Enter type">
    <br>
    <input type="text" class="form-control" name= "project" placeholder="Enter project">
    <br>
    <input style="border-radius: 20px" class="btn-block" name="submit" type="submit" value="Insert">
@endsection
