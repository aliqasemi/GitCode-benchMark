@extends('Layout.default')

@section('titile')
    edit branch
@endsection
@section('action')
    /branches/branch_update/{{$branches->id}}
@endsection
@section('{{csrf_field()}}')
    {{csrf_field()}}
    {{method_field('PATCH')}}
@endsection
@section('data-input-output-label')
    <label for="first_name_input">Edit Branch</label>
@endsection

@section('data-input-output')
    <input type="text" class="form-control" name ="name"  style="text-align: left" value="{{$branches->name}}">
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
    <input style="border-radius: 20px" class="btn-block" type="submit" value="Edit">
    <br>
    <a style="border-radius: 20px" href="" class="btn-block bg-dark" type="submit">Branches list</a>
@endsection

