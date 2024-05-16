@extends('admin.master');
@section('content');

<div class="content-wrapper">
    <h1 align="center"><label>Add Teacher</label></h1>
    
    <div class="container">
    <form acton="" method="POST" enctype="multipart/form-data">
        @csrf
      
        <div class="mb-3">
          <label  class="form-label">Teacher Name</label>
          <input type="text" id="tech_name" name="tech_name" class="form-control" placeholder="Enter Teacher Name">
          <label  class="form-label">Subject</label>
          <input type="text" id="subject" name="subject" class="form-control" placeholder="Enter subject Name">
          
          <label  class="form-label">Teacher Image</label>
          <input type="file" id="img" name="tech_img" class="form-control" placeholder=" ">
          <label  class="form-label">Mobile No</label>
          <input type="text" id="mno" name="mno" class="form-control" placeholder="Enter Mobile No">
          <label  class="form-label">E-Mail Id</label>
          <input type="text" id="email" name="email" class="form-control" placeholder="Enter E-Mail Id">
          
        </div>
       
        
       
        <button type="submit" class="btn btn-primary">Add</button>
      
    </form>
    </div>
</div>
    @endsection