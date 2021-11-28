<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

class StuController extends Controller
{
    public function index(){
        return view('stu.index');
    }

    public function create(){
        return view('stu.create');
    }

    public function store(Request $request){
        $stu = new Student;
        $stu->name = $request->input('name');

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/student',$filename);
            $stu->image = $filename;
        }
        $stu->save();
        return redirect()->back()->with('status','Student added Successfully.');


    }
}
