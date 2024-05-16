<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\meeting;
class meetingController extends Controller
{
    function addm(Request $req)
    {
       
         
        $meeting=new meeting();
        $meeting->m_name=$req->m_name;
        $meeting->lname=$req->lname;
        $meeting->save();
        return redirect('/listm');
    }
    function showmeeting()
    {
        $meeting=meeting::all();
        return view('admin.Meeting.listm',['meetings'=>$meeting]);
    }
    
    function deletem($_id)
    {
        $meeting=meeting::find($_id);
        $meeting->delete();
       return redirect('listm')->with('message','data Deleted sucessfully');
    }
    function showdata($_id)
    {
        $meeting=meeting::find($_id);
        return view('admin.Meeting.editm',['meeting'=>$meeting]);
    }
    function update(Request $req)
    {
        $meeting=meeting::find($req->_id);
        // $meeting->m_name=$req->m_name;
        $meeting->m_name=$req->m_name;
        $meeting->lname=$req->lname;
         $meeting->save();
        return redirect('/listm');
    }
    function show($_id)
    {
        $meeting=meeting::find($_id);
        return view('admin.Meeting.showm',['meeting'=>$meeting]);
    }
    function backm(Request $req)
    {
        return redirect('/listm');
    }



}
