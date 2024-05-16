<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\video;
class videoController extends Controller
{
    function addvideo(Request $req)
   {       
       $video=new video;
       $video->videoname=$req->videoname;
       $video->videofile=$req->videofile;
       if($req->file("videofile"))
         {
             $file = $req->file("videofile");
             $extension = $file->getClientOriginalExtension();
             $fileName = time() . "." .$extension;
             $file->move("uploads/videofile",$fileName);
             $video->videofile = $fileName;
         }
       $video->save();
       return redirect('/listvideo');
   }
   function showvideo()
   {
       $video=video::all();
       return view('admin.Video_feeds.listvideo',['videos'=>$video]);
  } 

  
     function deletevideo($_id)
    {
       $video=video::find($_id);
       $video->delete();
      return redirect('listvideo');
   }  
   function showdata($_id)
   {
       $video=video::find($_id);
       return view('admin.Video_feeds.editvideo',compact('video'));
   }
   function updatevideo(Request $req)
   {
       $video=video::find($req->_id);
       $video->videoname=$req->videoname;
       $video->videofile=$req->videofile;
       if($req->file("videofile"))
         {
             $file = $req->file("videofile");
             $extension = $file->getClientOriginalExtension();
             $fileName = time() . "." .$extension;
             $file->move("uploads/videofile",$fileName);
             $video->videofile = $fileName;
         }
       
        $video->save();
       return redirect('/listvideo');
   }


   function show($_id)
   {
       $video=video::find($_id);
       $video=video::all();
      
       return view('admin.Video_feeds.showvideo',compact('video'));

   }

  

}
