<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\test;
use Illuminate\Http\Request;

class testController extends Controller
{
    function addtest(Request $req)
    {       
        $test=new test();
        $test->subject=$req->subject;
        $test->no=$req->no;
        $test->que=$req->que;
        
        $test->save();
        return redirect('/listtest');
    }
    function showtest()
    {
        $test=test::all();
        return view('admin.testol.listtest',['tests'=>$test]);
   } 
 
   
           function deletetest($_id)
     {
        $test=test::find($_id);
        $test->delete();
       return redirect('listtest');
    }  
    function showdata($_id)
    {
        $test=test::find($_id);
        return view('admin.testol.edittest',compact('test'));
    }
    function updatecourse(Request $req)
    {
        $test=test::find($req->_id);
        $test->subject=$req->subject;
        $test->no=$req->no;
        $test->que=$req->que;
        
         $test->save();
        return redirect('/listtest');
    }
 
 
    function show($_id)
    {
        $test=test::find($_id);
        $test=test::all();
       
        return view('admin.testol.showtest',compact('test'));
 
    }
 
    function backcou(Request $req)
    {
        return redirect('/listtest');
    }
 

}
