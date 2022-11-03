@extends('layouts.master')

@section('content')
<div class="container">
<h1>Create Student</h1>
    <form action="/student/store" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" name="name" placeholder="Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"><br>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">NIK</label>
        <input type="text" name="nik" placeholder="NIK" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"><br>
    </div>
        <select class="form-select" name="gender">
            <option value="">Select Your Gender</option>
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select><br>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Address</label>
            <textarea class="form-control" name="address" rows="10"></textarea><br>
        </div>
        <input class="btn btn-info" type="submit" name="submit" value="Save">
    </form>
</div>
@endsection