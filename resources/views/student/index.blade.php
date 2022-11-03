    @extends('layouts.master')

    @section('content')
    <div class="container">
        <a href="/student/create" class="btn btn-primary">Add Student</a>
        <table class="table table-hover">
            <tr>
            <th>id</th>
            <th>Name</th>
            <th>Nik</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Action</th>
            </tr>
            @foreach($student as $s)
            <tr>
            <td>{{$s->id}}</td>
            <td>{{$s->name}}</td>
            <td>{{$s->nik}}</td>
            <td>{{$s->gender}}</td>
            <td>{{$s->address}}</td>
            <td>
              <div class="btn-group" role="group" aria-label="Basic example">
                <a href="/student/{{$s->id}}/edit" class="btn btn-warning">Edit</a>
                <form action="/student/{{$s->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <input class="btn btn-danger" type="submit" value="Delete">
                </form>
              </div>
            </td>
            </tr>
            @endforeach
        </table>
    </div>
    @endsection