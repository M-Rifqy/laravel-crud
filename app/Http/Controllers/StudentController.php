<?php

namespace App\Http\Controllers;

use App\models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        $student = student::all();
        return view('student.index',compact(['student']));
    }

    public function create() {
        return view('student.create');
    }

    public function store(Request $request) {
        student::create($request->except(['_token','submit']));
        return redirect('student');
    }

    public function edit($id) {
        $student = student::find($id);
        return view('student.edit',compact(['student']));
    }

    public function update($id, Request $request) {
        $student = student::find($id);
        $student->update($request->except(['_token','submit']));
        return redirect('student');
    }

    public function destroy($id) {
        $student = student::find($id);
        $student->delete();
        return redirect('/student');

    }
}
