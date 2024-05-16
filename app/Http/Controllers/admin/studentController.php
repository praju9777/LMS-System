<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\student;
class studentController extends Controller
{
    function addstudent(Request $req)
    {
        $student=new student;
        $student->stud_name=$req->stud_name;
        $student->class=$req->class;

        if($req->file("stud_img"))
        {
            $file = $req->file("stud_img");
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . "." .$extension;
            $file->move("uploads/student",$fileName);
            $student->stud_img = $fileName;
        }
        $student->mno=$req->mno;
        $student->email=$req->email;
        
        $student->save();
        
        return redirect('/liststud');
    }
    function showstud()
    {
        $student=student::all();
        return view('admin.Student.liststud',['students'=>$student]);
    }
   


     function deletestud($_id)
     {
         $student=student::find($_id);
         $student->delete();
        return redirect('liststud');
     }
     function showdatas($_id)
     {
         $student=student::find($_id);
         return view('admin.Student.editstud',['student'=>$student]);
     }
     function updatestud(Request $req)
     {
         $student=student::find($req->_id);
         $student->stud_name=$req->stud_name;
         $student->class=$req->class;
         $student->stud_img=$req->stud_img;
         if($req->file("stud_img"))
         {
             $file = $req->file("stud_img");
             $extension = $file->getClientOriginalExtension();
             $fileName = time() . "." .$extension;
             $file->move("uploads/student",$fileName);
             $student->stud_img = $fileName;
         }
         $student->mno=$req->mno;
         $student->email=$req->email;
         
          $student->save();
         return redirect('/liststud');
     }
     function shows($_id)
     {
         $student=student::find($_id);
         return view('admin.Student.showstud',['student'=>$student]);
     }
     function backbrand(Request $req)
     {
         return redirect('/liststud');
     }
     
}
