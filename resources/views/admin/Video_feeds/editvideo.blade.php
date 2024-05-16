@extends('admin.master');
@section('content');

<div class="content-wrapper">
    <h1 align="center"><label>Edit Video</label></h1>
    
    <div class="container">
    <form action="/updatevideo" method="POST" enctype="multipart/form-data">
        @csrf
     
        <div class="mb-3">
            <input type="hidden" id="id" name='_id' value={{$video['_id']}} class="form-control" placeholder="Enter Title">
           </div>
           <div class="mb-3">
            <label  class="form-label">Video Name</label>
            <input type="text" id="videoname" name="videoname" class="form-control" placeholder="Enter video Name">
          </div>
        <div class="mb-3">
          <label  class="form-label">Video</label>
          <input type="file" id="videofile" name="videofile" value={{$video['videofile']}}  class="form-control" placeholder="Enter videofile Name">
        </div>
       <button type="submit" class="btn btn-primary">Update</button>
      
    </form>
    </div>
  </div>
    @endsection