@extends('admin.master');
@section('content');

<div class="content-wrapper">
    <h1 align="center"><label>Add Video</label></h1>
    
    <div class="container">
    <form acton=" " method="POST" enctype="multipart/form-data">
        @csrf
     
      
        <div class="mb-3">
          <label  class="form-label">Video Name</label>
          <input type="text" id="videoname" name="videoname" class="form-control" placeholder="Enter Course Name">
        </div>
        <div class="mb-3">
          <label  class="form-label">Video File</label>
          <input type="file" id="videofile" name="videofile" class="form-control" placeholder="Enter Course Name">
        </div>
         <button type="submit" class="btn btn-primary">Add</button>
      
    </form>
    </div>
</div>
    @endsection