<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student ;
use App\courses ;
use App\register;
class PagesController extends Controller
{
    //
  public function index()
  {
    return view('index');
  }

  public function studentlist()
  {
    $students= student::all();
    return view('studentlist')->with('students',$students);
  }
  public function create()
  {
    return view('addstudent');
  }
  public function exist()
  {
    return view('exist');
  }
  public function store(Request $request)
  {
    $post = new student;
    $post->Name = $request->Name;
    $post->S_ID = $request->S_ID;
    $post->Email = $request->Email;
    $post->Department = $request->Department;
    if (student::where("S_ID","=",$request->S_ID)->count() > 0)
    return view('/exist');
    else
    { $post->save();
      return redirect('/studentlist'); }
  }

  public function destroy($id)
  {
    $x = student::find($id);
    $x->delete();
    return redirect('/studentlist');
  }
  public function edit($id)
  {
    $students = student::find($id);
    return view('editstudent')->with('students',$students);
  }
  public function update(Request $request)
  {
    $post=student::find($request->sid);
    $post->Name = $request->Name;
    $post->S_ID = $request->S_ID;
    $post->Email = $request->Email;
    //$post->Department = $request->Department;
    $post->save();
    return redirect('/studentlist');
  }

  public function courselist()
  {
    $course= courses::all();
    return view('courselist')->with('course',$course);
  }

  public function create_course()
  {
    return view('addcourse');
  }

  public function postcourse(Request $request)
  {
    $post = new courses;
    $post->CourseName = $request->CourseName;
    $post->CourseCode = $request->CourseCode;
    $post->Credit = $request->Credit;

    if (courses::where("CourseCode","=",$request->CourseCode)->count() > 0)
    return view('/exist');
    else
    { $post->save();
      return redirect('/courselist'); }
    }


  public function deletecourse($id)
  {
    $x = courses::find($id);
    $x->delete();
    return redirect('/courselist');
  }

  public function editcourse($id)
  {
    $course = courses::find($id);
    return view('editcourse')->with('course',$course);
  }

  public function updatecourse(Request $request)
  {
    $post=courses::find($request->cid);
    $post->CourseName = $request->CourseName;
    $post->CourseCode = $request->CourseCode;
    $post->Credit = $request->Credit;
    $post->save();
    return redirect('/courselist');
  }

  public function registerlist()
  {
    $registers= register::all();
    return view('registerlist')->with('registers',$registers);
  }

  public function register()
  {
    return view('register_course');
  }

  public function postregister(Request $request)
  {

    $post = new register;
    $post->S_ID = $request->S_ID;
    $post->CourseCode = $request->CourseCode;

    if (register::where("CourseCode","=",$request->CourseCode)->count() > 0){
        if (register::where("S_ID","=",$request->S_ID)->count() > 0){
    return view('/registered'); }}
    else{
      $post->save();
      return view('/index');}
  }

  public function register_edit($id)
  {
     $students = student::find($id);
    return view('register')->with('students',$students);
  }
  public function deleteregister($id)
  {
    $x = register::find($id);
    $x->delete();
    return redirect('/registerlist');
  }

  public function search(Request $request)
  {
    $search=$request->search;
    $registers= register::orWhere('S_ID','like','%'.$search.'%')->get();
    if ($registers->count() > 0){
    return view('searchlist',compact('search','registers'));}
    else{
      return view('/notexist');
    }
  }
}
