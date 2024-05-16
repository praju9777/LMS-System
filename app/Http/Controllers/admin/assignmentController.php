<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\assignment;
class assignmentController extends Controller
{
    function addass(Request $req)
    {       
        $assignment=new assignment;
        $assignment->name=$req->name;
        $assignment->sub_name=$req->sub_name;
        $assignment->que=$req->que;
         $assignment->save();
        return redirect('/listass');
        // return redirect('listunit')->with('message','data Deleted sucessfully');
    }
    function showass()
    {
        $assignment=assignment::all();
        return view('admin.Assignment.listass',['assignments'=>$assignment]);
   } 
 
   
           function deleteass($_id)
     {
        $assignment=assignment::find($_id);
        $assignment->delete();
       return redirect('listass');
    }  
    function showdata($_id)
    {
        $assignment=assignment::find($_id);
        return view('admin.Assignment.editass',compact('assignment'));
    }
    function updateass(Request $req)
    {
        $assignment=assignment::find($req->_id);
        $assignment->name=$req->name;
        $assignment->sub_name=$req->sub_name;
        $assignment->que=$req->que;
        
        
         $assignment->save();
        return redirect('/listass');
    }
 
 
    function shows($_id)
    {
        $assignment=assignment::find($_id);
        $assignment=assignment::all();
       
        return view('admin.Assignment.showass',compact('assignment'));
 
    }
 
    function backass(Request $req)
    {
        return redirect('/listass');
    }
 
 

}
