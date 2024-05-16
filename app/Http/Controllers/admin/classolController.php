<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\classol;
class classolController extends Controller
{
    function addclassol(Request $req)
   {       
       $classol=new classol;
       $classol->olclass=$req->olclass;
       
       $classol->save();
       return redirect('/listclassol');
   }
   function showclassol()
   {
       $classol=classol::all();
       return view('admin.Classol.listclassol',['classols'=>$classol]);
  } 

  
          function deleteclassol($_id)
    {
       $classol=classol::find($_id);
       $classol->delete();
      return redirect('listclassol');
   }  
   function showdata($_id)
   {
       $classol=classol::find($_id);
       return view('admin.Classol.editclassol',compact('classol'));
   }
   function updateclassol(Request $req)
   {
       $classol=classol::find($req->_id);
       $classol->olclass=$req->olclass;
       
       
        $classol->save();
       return redirect('/listclassol');
   }


   function show($_id)
   {
       $classol=classol::find($_id);
       $classol=classol::all();
      
       return view('admin.Classol.showclassol',compact('classol'));

   }

   function backcou(Request $req)
   {
       return redirect('/listclassol');
   }


}
