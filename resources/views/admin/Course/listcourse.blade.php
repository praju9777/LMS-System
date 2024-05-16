@extends('admin.master');
@section('content');

<div class="content-wrapper">
  <a href="">
    <button type="button" class="btn btn-warning d-inline-block m-2 float-right">  <i class="nav-icon fas fa-copy"></i>  WishList</button>
</a>
<a href="">
<button type="button" class="btn btn-danger d-inline-block m-2 float-right">Buy Cart</button>
</a> 
    <a href="{{route('addcourse')}}">
        <button type="button" class="btn btn-primary d-inline-block m-2 float-right">Add Course</button>
</a>
<table class="table table-striped">
    <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col"> Course Name</th>
           <th scope="col">Operation</th>
         
        </tr>
      </thead>
      @foreach($courses as $course)
      <tbody>
        <tr>
          <th scope="row">{{$course['id']}}</th>
          <td>{{$course['couname']}}</td>
     
          <td>
           <a href="/editcourse/{{ $course->id }}"  class="btn btn-sm btn-primary">Edit</a>
          <a href="/deletecourse/{{ $course->id }}" class="btn btn-sm btn-danger">Delete</a></td>
        </tr>
    </tbody>
    @endforeach
    
  </table>

</div>
@endsection