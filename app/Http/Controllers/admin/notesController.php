<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\note;
use Illuminate\Http\Request;
class notesController extends Controller
{
    function addnotes(Request $req)
    {       
        $note=new note();
        $note->subject=$req->subject;
        $note->file=$req->file;
       
        if($req->file("file"))
        {
            $file = $req->file("file");
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . "." .$extension;
            $file->move("uploads/file",$fileName);
            $note->file = $fileName;
        }
       
         $note->save();
        return redirect('/listnotes');
    }
    function shownotes()
    {
        $note=note::all();
        return view('admin.Library_Notes.listnotes',['notes'=>$note]);
   } 
 
   
           function deletenotes($_id)
     {
        $note=note::find($_id);
        $note->delete();
       return redirect('listnotes');
    }  
    function showdata($_id)
    {
        $note=note::find($_id);
        return view('admin.Library_Notes.editnotes',compact('note'));
    }
    function updatenotes(Request $req)
    {
        $note=note::find($req->_id);
        $note->name=$req->name;
        $note->file=$req->file;
        if($req->file("file"))
        {
            $file = $req->file("file");
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . "." .$extension;
            $file->move("uploads/file",$fileName);
            $note->file = $fileName;
        }
        
        
         $note->save();
        return redirect('/listnotes');
    }
 
 
    function shows($_id)
    {
        $note=note::find($_id);
        $note=note::all();
       
        return view('admin.Library_Notes.shownotes',compact('note'));
 
    }
 
    function backass(Request $req)
    {
        return redirect('/listnotes');
    }
   function download(Request $req,$file)
   {
    $note=note::all();
   
    // if (Storage::exists('uploads/file/' . $note->$file)) {
       
    //     return response()->download(public_path('assets' . $note->$file));
    // } else {
       
    //     return redirect()->back()->with('error', 'File not found');
    // }
    return response()->download(public_path('assets/uploads/file'.$file));
   
    
   }
   public function view($_id){
   $note=note::find($_id);
   return view('admin.Library_Notes.viewnotes',compact('note'));
   }
 

}
