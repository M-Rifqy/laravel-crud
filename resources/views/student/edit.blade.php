@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Edit Student</h1>
    <form action="/student/{{$student->id}}" method="POST">
    @method('put')
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" value="{{$student->name}}" name="name" placeholder="Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"><br>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">NIK</label>
        <input type="text" value="{{$student->nik}}" name="nik" placeholder="NIK" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"><br>
    </div>
        <select class="form-select" name="gender">
            <option value="">Select Your Gender</option>
            <option value="M" @if($student->gender == "M") selected @endif>Male</option>
            <option value="F" @if($student->gender == "F") selected @endif>Female</option>
        </select><br>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Address</label>
            <textarea class="form-control" name="address" rows="10">{{$student->address}}</textarea><br>
        </div>
        <input class="btn btn-info" type="submit" name="submit" value="Update">
    </form>
</div>
@endsection