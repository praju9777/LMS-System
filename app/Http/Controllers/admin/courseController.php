<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\courses;
class courseController extends Controller
{
    function addcourse(Request $req)
   {       
       $course=new courses;
       $course->couname=$req->couname;
       
       $course->save();
       return redirect('/listcourse');
   }
   function showcourse()
   {
       $course=courses::all();
       return view('admin.Course.listcourse',['courses'=>$course]);
  } 

  
          function deletecourse($id)
    {
       $course=courses::find($id);
       $course->delete();
      return redirect('listcourse');
   }  
   function showdata($id)
   {
       $course=courses::find($id);
       return view('admin.Course.editcourse',compact('course'));
   }
   function updatecourse(Request $req)
   {
       $course=courses::find($req->id);
       $course->couname=$req->couname;
       
       
        $course->save();
       return redirect('/listcourse');
   }


   function show($id)
   {
       $course=courses::find($id);
       $course=courses::all();
      
       return view('admin.Course.showcourse',compact('course'));

   }

   function backcou(Request $req)
   {
       return redirect('/listcourse');
   }

}
