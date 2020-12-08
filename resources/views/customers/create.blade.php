@extends('layouts.adminmaster')
@section('content')

	<div class="container-fluid">
		<h4>Add Customer</h4>
	  <div class="container">
      <div class="row justify-content-center">
	  	  <form action="/customers" method="POST">
           @include('layouts.errors')
	  		   @csrf
           <div class="form-group">
             <input type="text" name="first_name" class="form-control" placeholder="Enter First Name" autocomplete="off" required>
           </div>
           <div class="form-group">
             <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name" autocomplete="off" required>
           </div>
           <div class="form-group">
             <input type="text" name="contact_number" class="form-control" placeholder="Enter Contact Number" autocomplete="off" required>
           </div>
           <div class="form-group">
             <input type="text" name="address" class="form-control" placeholder="Enter Address" autocomplete="off" required>
           </div>
           <div class="form-group">
             <button type="submit" class="btn btn-primary" name="save">Save</button>
           </div>
         </form>
       </div>     
	  </div>
	</div>

@endsection