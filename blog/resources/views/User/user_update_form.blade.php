@extends('Layout.default')

@section('titile')
    edit user
@endsection
@section('action')
    /users/user_update/{{$users->id}}
@endsection
@section('{{csrf_field()}}')
    {{csrf_field()}}
    {{method_field('PATCH')}}
@endsection
@section('data-input-output-label')
    <label for="first_name_input">Edit Project</label>
@endsection

@section('data-input-output')
    <label for="typeUser">Select Type</label>
    <select class="form-control" id="typeUser" name="type">
        <option>Normal</option>
        <option>Admin</option>
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
    <a style="border-radius: 20px" href="" class="btn-block bg-dark" type="submit">User list</a>
@endsection

