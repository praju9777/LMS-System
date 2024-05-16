@extends('admin.master');
@section('content');

<div class="content-wrapper">
    <h1 align="center"><label>Edit course</label></h1>
    
    <div class="container">
    <form action="/updatecourse" method="POST" enctype="multipart/form-data">
        @csrf
     
        <div class="mb-3">
            <input type="hidden" id="id" name="id" value={{$course['id']}} class="form-control" placeholder="Enter Title">
           </div>
        <div class="mb-3">
          <label  class="form-label">Course Name</label>
          <input type="text" id="couname" name="couname" value={{$course['couname']}}  class="form-control" placeholder="Enter Coursr Name">
        </div>
       <button type="submit" class="btn btn-primary">Update</button>
      
    </form>
    </div>
  </div>
    @endsection