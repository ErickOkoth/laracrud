<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public  function addstudent(){
    	return view('addstudent');
    }

    public  function poststudent(Request $request){
    	$student=Student::create($request->all());
    	return redirect()->back()->with('success','student registereed successfully');
    }

    public  function students(){
    	$students=Student::all();
    	return view('students',compact('students'));
    }

    public  function remove($id){
    	$student=Student::find($id);
    	$student->delete();
	    return redirect()->back()->with('success','student deleted successfully');
    }

    public  function edit($id){
    	$student=Student::find($id);
    	return view('edit',compact('student'));
    }

    public  function update(Request $request,$id){
    	$student=Student::find($id);
    	$student->update($request->all());
	    return redirect()->back()->with('success','student updated successfully');
    }
}
