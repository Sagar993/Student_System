<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class student_Controller extends Controller
{
    public function index(){

        return view('add');
    }
    public function add(Request $request){

      $request->validate([

       'fnm' => 'required',
       'f' => 'required',
       'adr' => 'required',
       'phn' => 'required',
       'cls' => 'required',
 ]);

   $add=new Student;


      $add->name=$request->fnm;
      $add->fname=$request->f;
      $add->address =$request->adr;
      $add->phone=$request->phn;
      $add->classname=$request->cls;
       $add->save();

    
     // return $request->input();
     return redirect('ad');

    }
    public function show(){

       $data = Student::all();
      return view('student_list',['students'=>$data]);

    }
}
