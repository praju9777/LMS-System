<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\scholarship;
class scholarshipController extends Controller
{
    function addscholarship(Request $req)
   {       
       $scholarship=new scholarship;
       $scholarship->news=$req->news;
       
       $scholarship->save();
       return redirect('/listscholarship');
   }
   function showscholarship()
   {
       $scholarship=scholarship::all();
       return view('admin.scholarship.listscholarship',['scholarships'=>$scholarship]);
  } 

  
          function deletescholarship($_id)
    {
       $scholarship=scholarship::find($_id);
       $scholarship->delete();
      return redirect('listscholarship');
   }  
   function showdata($_id)
   {
       $scholarship=scholarship::find($_id);
       return view('admin.scholarship.editscholarship',compact('scholarship'));
   }
   function updatescholarship(Request $req)
   {
       $scholarship=scholarship::find($req->_id);
       $scholarship->news=$req->news;
       
       
        $scholarship->save();
       return redirect('/listscholarship');
   }


   function show($_id)
   {
       $scholarship=scholarship::find($_id);
       $scholarship=scholarship::all();
      
       return view('admin.scholarship.showscholarship',compact('scholarship'));

   }

   function backcou(Request $req)
   {
       return redirect('/listscholarship');
   }


}
