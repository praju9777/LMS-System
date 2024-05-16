@extends('admin.master');
@section('content');

<div class="content-wrapper">
    <h1 align="center"><label>Add Course</label></h1>
    
    <div class="container">
    <form acton=" " method="POST" enctype="multipart/form-data">
        @csrf
     
      
        <div class="mb-3">
          <label  class="form-label">Course Name</label>
          <input type="text" id="couname" name="couname" class="form-control" placeholder="Enter Course Name">
        </div>
         <button type="submit" class="btn btn-primary">Add</button>
      
    </form>
    </div>
</div>
    @endsection