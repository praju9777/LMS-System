<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\teacher;
class teacherController extends Controller
{
    function addtech(Request $req)
    {
        $teacher=new teacher;
        $teacher->tech_name=$req->tech_name;
        $teacher->subject=$req->subject;

        if($req->file("tech_img"))
        {
            $file = $req->file("tech_img");
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . "." .$extension;
            $file->move("uploads/teacher",$fileName);
            $teacher->tech_img = $fileName;
        }
        $teacher->mno=$req->mno;
        $teacher->email=$req->email;
        
        $teacher->save();
        return redirect('/listtech');
    }
    function showtech()
    {
        $teacher=teacher::all();
        return view('admin.Teacher.listtech',['teachers'=>$teacher]);
    }
   


     function deletetech($_id)
     {
         $teacher=teacher::find($_id);
         $teacher->delete();
        return redirect('listtech');
     }
     function showdatas($_id)
     {
         $teacher=teacher::find($_id);
         return view('admin.Teacher.edittech',['teacher'=>$teacher]);
     }
     function updatetech(Request $req)
     {
         $teacher=teacher::find($req->_id);
        //  $teacher->tech_name=$req->tech_name;
         $teacher->tech_name=$req->tech_name;
         $teacher->subject=$req->subject;
         $teacher->tech_img=$req->tech_img;
         if($req->file("tech_img"))
         {
             $file = $req->file("tech_img");
             $extension = $file->getClientOriginalExtension();
             $fileName = time() . "." .$extension;
             $file->move("uploads/teacher",$fileName);
             $teacher->tech_img = $fileName;
         }
         $teacher->mno=$req->mno;
         $teacher->email=$req->email;
         
          $teacher->save();
         return redirect('/listtech');
     }
     function shows($_id)
     {
         $teacher=teacher::find($_id);
         return view('admin.Teacher.showtech',['teacher'=>$teacher]);
     }
     function backtech(Request $req)
     {
         return redirect('/listtech');
     }
}
