@extends('Layout.default')

@section('titile')
    add branch
@endsection
@section('action')
    /branches/addBranch/add
@endsection
@section('{{csrf_field()}}')
    {{csrf_field()}}
@endsection
@section('data-input-output-label')
    <label for="first_name_input">Add Branch</label>
@endsection
@section('data-input-output')
    <label for="name">Branch name</label>
    <input type="text" class="form-control" name = "name"  id="name" style="text-align: left">
    <br>
    <label for="typeUser">Select Type</label>
    <select class="form-control" id="typeUser" name="type">
        <option>Public</option>
        <option>Private</option>
    </select>
    </div>
    <br>
    <label for="Project">Select Project</label>
    <select class="form-control" id="Project" name="project_id">
        @foreach($data as $d)
            <option value="{{$d->id}}">{{$d->name}}</option>
        @endforeach
    </select>
    <br>
    <input style="border-radius: 20px" class="btn-block" type="submit" value="Insert">
    <br>
    <a style="border-radius: 20px" href="/branches/branch_list" class="btn-block bg-dark" type="submit">Branch list</a>
@endsection
