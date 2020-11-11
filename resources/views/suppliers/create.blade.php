@extends('layouts.adminmaster')
@section('content')

	<div class="container-fluid">
		<h4>Add Supplier</h4>
	  <div class="container">
      <div class="row justify-content-center">
	  	  <form action="/suppliers" method="POST">
	  		   @csrf
           <div class="form-group">
             <input type="text" name="name" class="form-control" placeholder="Enter Name">
           </div>
           <div class="form-group">
             <input type="text" name="contact" class="form-control" placeholder="Enter Contact">
           </div>
           <div class="form-group">
             <button type="submit" class="btn btn-primary" name="save">Save</button>
           </div>
         </form>
       </div>     
	  </div>
	</div>

@endsection